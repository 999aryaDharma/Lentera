<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Cart;
use App\Models\category;
use App\Models\product;
use Faker\Guesser\Name;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function web(){
        $carousels = Carousel::get();

        $dataproduct = product::latest()->take(5)->get();
        

        $best = product::whereHas('orderDetails')->withSum('orderDetails as total_sale', 'qty')->orderByDesc('total_sale')->take(5)->get();
        // $best = product::withSum('orderDetail as total_sale', 'qty')->orderByDesc('total_sale')->take(5)->get();

        $all = product::all();

        return view('index', compact('dataproduct', 'best', 'all', 'carousels'));
    }

    // public function recomend(){
    //     $dataproduct = product::all();
    //     return view('detail', compact('dataproduct'));
    // }

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
            'product' => 'required|string',
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

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        product::create([
            'product' => $request->product,
            'category_id' => $request->category_id,
            'size' => $request->size,
            'warna' => $request->warna,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'image' => $imageName,
        ]);
        // $image = time() . '.' . $request->image->extension();
        // $request->image->move(public_path('images'), $image);



        // if ($request->hasFile('image')) {
        //     $request->file('image')->move(public_path('image'), $request->file('image')->getClientOriginalName());
        //     $data->image = $request->file('image')->getClientOriginalName();
        //     $data->save();
        // }

        return redirect()->route('adminpage.product.index')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */

    public function show(product $product)
    {
        // dd($product);
        // //
        // $categories = category::all();
        $data = $product;

        $allData = product::all();

        // $data = product::with('category')->find('id');
        return view('detail', compact('data', 'allData'));
 
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        //
        // $product = product::with('category')->find('id');
        // dd($product);
        // $categories = category::all();
        // $products = $product;

        // return view('admin.product_edit', compact('products', 'categories'));
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
        // return redirect()->route('adminpage.product.index');
        // $validator = Validator::make($request->all(), [
        //     'product' => 'required',
        //     'category_id' => 'required',
        //     'size' => 'required',
        //     'warna' => 'required',
        //     'deskripsi' => 'required',
        //     'harga' => 'required',
        //     'stok' => 'required',

        //     'image' => 'nullable|image', 
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withInput()->withErrors($validator);
        // }

        // // Ambil data produk lama
        // $product = product::all();

        // // Periksa apakah ada gambar baru yang diupload
        // if ($request->hasFile('image')) {
        //     // Hapus gambar lama jika ada
        //     if ($product->image && file_exists(public_path('images/' . $product->image))) {
        //         unlink(public_path('images/' . $product->image));
        //     }

        //     // Simpan gambar baru
        //     $imageName = time() . '.' . $request->image->extension();
        //     $request->image->move(public_path('images'), $imageName);
        //     // $product->image = $fileName;
        // }
        // // Simpan data produk
        // // $product->save();
        // // // product::where('id', $product)->update($product);

        // return redirect()->route('adminpage.product.index')->with('success', 'Product updated successfully.');
        $validator = Validator::make($request->all(), [
            'product' => 'required',
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
        $product->product = $request->product;
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
            $newImage->move(public_path('images/'), $newImageName);

            $product->image = 'images/' . $newImageName;
        }
        // Simpan data produk
        $product->save();

        return redirect()->route('adminpage.product.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
        // $orders = Order::with('user')->find($id);

        // if ($orders) {
        //     $orders->delete();
        // }

        // return redirect()->route('adminpage.order.index');

        // $category::where('id', $category->id)->delete();

        // return redirect()->route('adminpage.category.index');

        $product::where('id', $product->id)->delete();

        return redirect()->route('adminpage.product.index');
    }

}
