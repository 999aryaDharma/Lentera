<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarouselController extends Controller
{
     // Carousels Controller Admin

     public function index()
     {
         $carousels = Carousel::get();
         return view('admin.carousel', compact('carousels'));
     }
 
     public function create()
     {
         return view('admin.carousel_create');
     }
 
     public function store(Request $request)
     {
         // Validasi data
         $validated = $request->validate([
             'title' => 'required|string|max:255',
             'image' => 'required|image|mimes:jpg,jpeg,png',
         ]);
 
         // Proses penyimpanan file gambar
         $image = $request->file('image');
         $destinationPath = public_path('images/carousel'); // Lokasi penyimpanan di folder public/image/carousel
         $imageName = time() . '-' . $image->getClientOriginalName(); // Membuat nama file unik
         $image->move($destinationPath, $imageName); // Memindahkan file ke folder tujuan
 
         // Path relatif untuk disimpan di database
         $imagePath = 'images/carousel/' . $imageName;
 
         // Simpan data ke database
         $carousel = new Carousel();
         $carousel->title = $validated['title'];
         $carousel->image = $imagePath; // Menyimpan path relatif gambar
         $carousel->save();
 
         return redirect()->route('adminpage.carousel.index')->with('success', 'Carousel created successfully!');
     }
 
     public function edit(Request $request, $id)
     {
         $carousels = Carousel::find($id);
 
         return view('admin.carousel_edit', compact('carousels'));
     }
 
     public function update(Request $request, string $id)
     {
         $validator = Validator::make($request->all(), [
             'title' => 'required',
             'image' => 'nullable|image|mimes:jpeg,png,jpg', // Gambar tidak wajib
         ]);
 
         if ($validator->fails()) {
             return redirect()->back()->withInput()->withErrors($validator);
         }
 
         // Ambil data produk lama
         $carousels = Carousel::findOrFail($id);
 
         // Update data produk
         $carousels->title = $request->title;
 
         // Periksa apakah ada gambar baru yang diupload
         if ($request->hasFile('image')) {
             // Hapus gambar lama
             if (file_exists(public_path($carousels->image)) && is_file(public_path($carousels->image))) {
                 unlink(public_path($carousels->image));
             }
     
             // Simpan gambar baru
             $newImage = $request->file('image');
             $newImageName = time() . '_' . $newImage->getClientOriginalName();
             $newImage->move(public_path('images/carousel'), $newImageName);
     
             $carousels->image = 'images/carousel/' . $newImageName;
         }
 
         // Simpan data produk
         $carousels->save();
 
         return redirect()->route('adminpage.carousel.index')->with('success', 'Product updated successfully.');
     }
 
     public function destroy(string $id)
     {
         $carousels = carousel::find($id);
 
         if ($carousels) {
             $carousels->delete();
         }
 
         return redirect()->route('adminpage.carousel.index');
     }
 
 
}
