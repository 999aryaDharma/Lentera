@extends('layout.sidebar')

@section('title')
<h3 class="ml-4 mb-3 text-2xl font-bold">Create Product</h3>
@endsection

@section('admin')
@vite('resources/css/app.css')
<div class="container mx-auto p-3">
    <div class="flex items-center justify-between mb-6">
        <h1 class="font-bold text-3xl"></h1>
        <a href="{{ route('adminpage.product.index') }}">
            <button type="button" class="btn bg-red-600 text-white py-1 px-4 rounded-lg hover:bg-red-700">
                &lt; Back
            </button>
        </a>
    </div>

    <div class="mr-4 rounded-xl bg-gray-50">
        <div class="shadow-lg rounded-xl overflow-hidden">
            <div class="p-6">
                <h2 class="text-xl font-medium text-center text-gray-900 mb-6">Create a New Product</h2>
                <form action="{{ route('adminpage.product.store') }}" method="POST" data-redirect-route="/admin/product" class="space-y-4" enctype="multipart/form-data">
                    @csrf


                    <div class="space-y-1">
                        <label for="product">Nama Produk</label>
                        <input type="text" name="product" class="w-full p-2 border border-gray-300 rounded-lg" required>

                        @error('product')

                        <small class="text-red-500">{{ $message }}</small>
                        @enderror

                    </div>

                    <div class="space-y-1">
                        <label for="category_id">Select Category</label>
                        <select name="category_id" class="w-full p-2 border border-gray-300 rounded-lg">
                            <option value="">-- Choose Category --</option>
                            @foreach ($categories as $category)

                            <option value="{{$category->id}}">{{$category->category}}</option>

                            @endforeach
                        </select>

                        @error('category_id')

                        <small class="text-red-500">{{$message}}</small>

                        @enderror
                    </div>

                    <div class="space-y-1">
                        <label for="size">Size</label>
                        <select type="text" name="size" class="w-full p-2 border border-gray-300 rounded-lg" required>
                            <option value="">-- Choose Size --</option>
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>

                        @error('size')

                        <small class="text-red-500">{{$message}}</small>

                        @enderror

                    </div>

                    <div class="space-y-1">
                        <label for="warna">Warna</label>
                        <input type="text" name="warna" class="w-full p-2 border border-gray-300 rounded-lg">

                        @error('warna')

                        <small class="text-red-500">{{$message}}</small>

                        @enderror

                    </div>

                    <div class="space-y-1">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea type="text" name="deskripsi" class="w-full p-2 border border-gray-300 rounded-lg" required>
                        </textarea>
                        @error('deskripsi')

                        <small class="text-red-500">{{$message}}</small>

                        @enderror

                    </div>

                    <div class="space-y-1">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" class="w-full p-2 border border-gray-300 rounded-lg" required>

                        @error('harga')

                        <small class="text-red-500">{{$message}}</small>

                        @enderror

                    </div>

                    <div class="space-y-1">
                        <label for="stok">Stok</label>
                        <input type="text" name="stok" class="w-full p-2 border border-gray-300 rounded-lg" required>

                        @error('category_id')

                        <small class="text-red-500">{{$message}}</small>

                        @enderror

                    </div>

                    <div class="space-y-1">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="w-full p-2 rounded-lg" required>

                        @error('image')

                        <small class="text-red-500">{{$message}}</small>

                        @enderror

                    </div>


                    <hr class="mx-8 h-0.5 bg-gray-500" />
                    <button type="submit" id="create" class="w-full btn bg-indigo-500/90 rounded-lg hover:bg-indigo-700 text-white p-2">
                        Create Product
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection