@extends('admin.sidebar')

@section('admin')
<h1 class="font-bold text-3xl">Tambah Category</h1>

<div>
    <form action="{{route('category.store')}}" method="post" class="flex flex-col gap-4">
        @csrf
        <input class="p-2 mt-8 rounded-xl border" type="text" name="category" placeholder="Kategori">

        <input class="w-full p-2 rounded-xl border" type="number" name="jumlah" placeholder="Jumlah">

        <input class="w-full p-2 rounded-xl border bg-[#725EEA] text-white" type="submit" value="Simpan">


    </form>
</div>

@endsection