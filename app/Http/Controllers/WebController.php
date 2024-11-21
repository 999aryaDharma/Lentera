<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Cart;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class WebController extends Controller
{
    public function showCategory($id)
    {
        $carts = Cart::all();
        $category = Category::with('products')->find($id);

        if (!$category) {
            return redirect()->back()->with('error', 'Category not found');
        }

        return view('categoryDetail', compact('category', 'carts'));
    }


    public function show()
    {
        $carts = Cart::all();
        $category = Category::all();
        $carousels = Carousel::all();
        $products = Product::orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        return view('index', compact('products', 'category', 'carousels', 'carts'));
    }


    public function detailProduct(string $id)
    {
        $carts = Cart::all();
        $products = product::with('category')->find($id);
        return view('detail', compact('products', 'carts'));
    }



    // Carousels Controller Admin
    public function carousel()
    {
        $carousels = Carousel::get();
        return view('admin.carousel', compact('carousels'));
    }

    public function carouselCreate()
    {
        return view('admin.carousel_create');
    }

    public function carouselStore(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        // Proses penyimpanan file gambar
        $image = $request->file('image');
        $destinationPath = public_path('image/carousel'); // Lokasi penyimpanan di folder public/image/carousel
        $imageName = time() . '-' . $image->getClientOriginalName(); // Membuat nama file unik
        $image->move($destinationPath, $imageName); // Memindahkan file ke folder tujuan

        // Path relatif untuk disimpan di database
        $imagePath = 'image/carousel/' . $imageName;

        // Simpan data ke database
        $carousel = new Carousel();
        $carousel->title = $validated['title'];
        $carousel->image = $imagePath; // Menyimpan path relatif gambar
        $carousel->save();

        return redirect()->route('adminpage.carousel.index')->with('success', 'Carousel created successfully!');
    }

    public function carouselEdit(Request $request, $id)
    {
        $carousels = Carousel::find($id);

        return view('admin.carousel_edit', compact('carousels'));
    }

    public function carouselUpdate(Request $request, string $id)
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
            $newImage->move(public_path('image/carousel'), $newImageName);
    
            $carousels->image = 'image/carousel/' . $newImageName;
        }

        // Simpan data produk
        $carousels->save();

        return redirect()->route('adminpage.carousel.index')->with('success', 'Product updated successfully.');
    }

    public function carouselDestroy(string $id)
    {
        $carousels = carousel::find($id);

        if ($carousels) {
            $carousels->delete();
        }

        return redirect()->route('adminpage.carousel.index');
    }


}
