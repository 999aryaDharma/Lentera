@extends('admin.sidebar')

@section('admin')
<h1 class="font-bold text-3xl">Edit Category</h1>

<div>
    <form action="{{route('category.update',[$data->id])}}" method="post" class="flex flex-col gap-4">
        @csrf
        @method('PUT')
        <input class="p-2 mt-8 rounded-xl border" type="text" name="category" placeholder="Kategori" value="{{$data->category}}">

        <input class="w-full p-2 rounded-xl border" type="number" name="jumlah" placeholder="Jumlah" value="{{$data->jumlah}}">

        <input class="w-full p-2 rounded-xl border bg-[#725EEA] text-white" type="submit" value="Simpan">


    </form>
</div>

@endsection