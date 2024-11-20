<?php

namespace App\Http\Controllers;

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
        $dataproduct = product::all();
        return view('index', compact('dataproduct'));
    }

    public function index()
    {
        //
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
        return view('admin.createProduct', compact('categories'));
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
        // $data = product::with('category')->find('id');
    
        
        return view('detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
        // $product = product::with('category')->find('id');
        // dd($product);
        $categories = category::all();
        $data = $product;

        return view('admin.editProduct', compact('data', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $product)
    {
        // category::where('id', $category->id)->update([
        //     'category' => $request->category,
        //     'jumlah' => $request->jumlah,
        // ]);
        // return redirect()->route('adminpage.category.index');

        // $validator = Validator::make($request->all(), [
        //     'product' => 'required',
        //     'category_id' => 'required',
        //     'size' => 'required',
        //     'warna' => 'required',
        //     'deskripsi' => 'required',
        //     'harga' => 'required',
        //     'stok' => 'required',
        //     'image' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        $validator = Validator::make($request->all(), [
            'product' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);


        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $products['product'] = $request->product;
        $products['image'] = $imageName;

        product::where('id', $product)->update($products);
        // product::where('id', $product->id)->update([
        //     'product' => $request->product,
        //     'category_id' => $request->category_id,
        //     'size' => $request->size,
        //     'warna' => $request->warna,
        //     'deskripsi' => $request->deskripsi,
        //     'harga' => $request->harga,
        //     'stok' => $request->stok,
        //     'image' => $request->image,
        // ]);  

        return redirect()->route('adminpage.product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
