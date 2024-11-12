<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $categories = category::all();
        $categories = category::all();
        return view('admin.category', compact('categories'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.createcategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return dd($request);
        //
        category::create([
            'category' => $request->category,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('adminpage.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        //
        $data = $category;
        return view('admin.editcategory', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        //
        category::where('id', $category->id)->update ([
            'category' => $request->category,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('adminpage.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        //
        category::where('id', $category->id)->delete(); 

        return redirect()->route('adminpage.category.index');
    }
}
