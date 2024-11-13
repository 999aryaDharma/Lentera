@extends('layout.sidebar')

@section('title')
<h3 class="ml-4 mb-3 text-2xl font-bold">Tambah Category</h3>
@endsection

@section('admin')
@vite('resources/css/app.css')

<div class="container mx-auto p-3">
    <div class="flex items-center justify-between mb-6">
        <h1 class="font-bold text-3xl"></h1>
        <a href="{{ route('adminpage.category.index') }}">
            <button type="button" class="btn bg-red-600 text-white py-1 px-4 rounded-lg hover:bg-red-700">
                &lt; Back
            </button>
        </a>
    </div>

    <div class="mr-4 rounded-xl bg-gray-50">
        <div class=" shadow-lg rounded-xl overflow-hidden">
            <div class="p-6">
                <h2 class="text-xl font-medium text-center text-gray-900 mb-6">Edit an Order Here!</h2>
                <form action="{{route('adminpage.category.store')}}" method="POST" data-redirect-route="/admin/category" id=""
                    class="space-y-4 ">
                    @csrf

                    <div class="space-y-1">
                        <label for="">Category</label>
                        <input type="text" name="category" 
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-green-200">
                    </div>

                    <div class="space-y-1">
                        <label for="">Jumlah</label>
                        <input type="number" name="jumlah" 
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-green-200">
                    </div>


                    <hr class="border-gray-300 my-4">
                    <button type="submit" id="create"
                        class="w-full btn bg-indigo-500/90 rounded-lg hover:bg-indigo-700 text-white p-3">
                        Tambah Category
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection





<!-- <h1 class="font-bold text-3xl">Tambah Category</h1>

<div>
    <form action="{{route('adminpage.category.store')}}" method="post" class="flex flex-col gap-4">
        @csrf
        <input class="p-2 mt-8 rounded-xl border" type="text" name="category" placeholder="Kategori">

        <input class="w-full p-2 rounded-xl border" type="number" name="jumlah" placeholder="Jumlah">

        <input class="w-full p-2 rounded-xl border bg-[#725EEA] text-white" type="submit" value="Simpan">


    </form>
</div>  -->

