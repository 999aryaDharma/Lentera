<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::all();
        return view('admin.product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = category::all();
        return view('admin.product_create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'size' => 'required|string',
            'warna' => 'required|string',
            'deskripsi' => 'required|string',
            'harga' => 'required|string',
            'stok' => 'required|string',
            'image' => 'required|image',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }



        $data = product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'size' => $request->size,
            'warna' => $request->warna,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'image' => $request->image,
        ]);

        // $image = time() . '.' . $request->image->extension();
        // $request->image->move(public_path('images'), $image);



        if ($request->hasFile('image')) {
            $request->file('image')->move(public_path('image'), $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('adminpage.product.index')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function showIndex() //(string $id)
    {
        $products = product::all();
        return view('index', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = product::with('category')->find($id);

        return view('admin.product_edit', compact('products'), [
            'sizes' => ['S', 'M', 'L', 'XL'],
            'products' => $products
        ]);;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'category_id' => 'required',
            'size' => 'required',
            'warna' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg', // Gambar tidak wajib
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        // Ambil data produk lama
        $product = product::findOrFail($id);

        // Update data produk
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->size = $request->size;
        $product->warna = $request->warna;
        $product->deskripsi = $request->deskripsi;
        $product->harga = $request->harga;
        $product->stok = $request->stok;

        // Periksa apakah ada gambar baru yang diupload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($product->image && file_exists(public_path('image/' . $product->image))) {
                unlink(public_path('image/' . $product->image));
            }

            // Simpan gambar baru
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image'), $fileName);
            $product->image = $fileName;
        }

        // Simpan data produk
        $product->save();

        return redirect()->route('adminpage.product.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = product::find($id);

        if ($products) {
            $products->delete();
        }

        return redirect()->route('adminpage.product.index');
    }

}
