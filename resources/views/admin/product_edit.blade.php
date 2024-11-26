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
                    <h2 class="text-xl font-medium text-center text-gray-900 mb-6">Edit a New Product</h2>
                    <form action="{{ route('adminpage.product.update', [$products->id]) }}" method="POST" data-redirect-route="/admin/product" class="space-y-4"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="space-y-1">
                            <label for="name">Nama Produk</label>
                            <input type="text" name="name" value="{{ $products->name }}"
                                class="w-full p-2 border border-gray-300 rounded-lg" required>

                            @error('product')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror

                        </div>

                        <div class="space-y-1">
                            <label for="category_id">Select Category</label>
                            <select name="category_id" class="w-full p-2 border border-gray-300 rounded-lg">
                                @foreach ($category as $k)
                                    <option value="{{ $k->id }}"
                                        {{ $k->id == $products->category_id ? 'selected' : '' }}>
                                        {{ $k->category }}
                                    </option>
                                @endforeach
                            </select>


                            @error('category_id')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="space-y-1">
                            <label for="size">Size</label>
                            <select name="size" class="w-full p-2 border border-gray-300 rounded-lg" required>
                                @foreach ($sizes as $size)
                                    <option value="{{ $size }}" {{ $size == $products->size ? 'selected' : '' }}>
                                        {{ $size }}
                                    </option>
                                @endforeach
                            </select>


                            @error('size')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror

                        </div>

                        <div class="space-y-1">
                            <label for="warna">Warna</label>
                            <input type="text" name="warna" value="{{ $products->warna }}"
                                class="w-full p-2 border border-gray-300 rounded-lg">

                            @error('warna')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror

                        </div>

                        <div class="space-y-1">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" name="deskripsi" value="{{ $products->deskripsi }}"
                                class="w-full p-2 border border-gray-300 rounded-lg">
                            @error('deskripsi')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror

                        </div>

                        <div class="space-y-1">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" value="{{ $products->harga }}"
                                class="w-full p-2 border border-gray-300 rounded-lg" required>

                            @error('harga')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror

                        </div>

                        <div class="space-y-1">
                            <label for="stok">Stok</label>
                            <input type="text" name="stok" value="{{ $products->stok }}"
                                class="w-full p-2 border border-gray-300 rounded-lg" required>

                            @error('category_id')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror

                        </div>

                        <div class="space-y-1">
                            <label for="image">Image</label>
                            <input type="file" name="image" value="{{ $products->image }}" class="w-full p-2 rounded-lg" required>
                        
                            <!-- Menampilkan gambar produk -->
                            @if($products->image)
                                <div class="mt-2">
                                    <img src="{{ asset($products->image) }}" alt="Product Image" class="w-32 h-32 object-cover">
                                </div>
                            @endif
                        
                            @error('image')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                        


                        <hr class="mx-8 h-0.5 bg-gray-500" />
                        <button type="submit" id="update"
                            class="w-full btn bg-indigo-500/90 rounded-lg hover:bg-indigo-700 text-white p-2">
                            Edit Product
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
