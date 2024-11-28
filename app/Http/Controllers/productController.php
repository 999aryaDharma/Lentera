<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Cart;
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
        $products = Product::orderBy('category_id', 'asc')->get();
    
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
            $data->image = 'image/' . $request->file('image')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('adminpage.product.index')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $carts = Cart::all();
        $category = Category::all();
        $carousels = Carousel::all();
        $products = product::orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        $bestseller = product::whereHas('orderDetails')->withSum('orderDetails as total_sale', 'qty')->orderByDesc('total_sale')
            ->take (5)
            ->get();
        $allProducts = product::orderBy('category_id', 'asc')->get();
        return view('index', compact('products', 'category', 'carousels', 'carts', 'allProducts', 'bestseller'));
    }

    public function detailProduct(string $id)
    {
        $carts = Cart::all();
        $products = product::with('category')->find($id);
        $allProducts = product::orderBy('category_id', 'asc')->get();
        return view('detail', compact('products', 'carts', 'allProducts'));
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
            // Hapus gambar lama
            if (file_exists(public_path($product->image)) && is_file(public_path($product->image))) {
                unlink(public_path($product->image));
            }
    
            // Simpan gambar baru
            $newImage = $request->file('image');
            $newImageName = time() . '_' . $newImage->getClientOriginalName();
            $newImage->move(public_path('image/'), $newImageName);
    
            $product->image = 'image/' . $newImageName;
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
