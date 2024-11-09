@extends('admin.sidebar')

@section('admin')
<h1 class="font-bold text-3xl">Category</h1>

<table class="table-fixed border-collapse p-10 rounded-lg">
    <thead class="border-b-2">
        <tr class="text-indigo-500/50">
            <th class="p-4">Id Category</th>
            <th class="p-4">Nama Kategori</th>
            <th class="p-4">Jumlah</th>
            <th class="p-4">Date add</th>
            <th class="p-4">Date update</th>
            <th colspan="2" class="p-4">
                <button class="btn bg-indigo-500/90 h-8 rounded-lg hover:bg-indigo-700"><a href="{{route('category.create')}}" class="text-center m-5 text-white">Tambah</a></button>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $k)
        <tr class=" border-b">
            <td class="p-4">{{$k->id}}</td>
            <td class="p-4">{{$k->category}}</td>
            <td class="p-4">{{$k->jumlah}}</td>
            <td class="p-4">{{$k->created_at}}</td>
            <td class="p-4">{{$k->updated_at}}</td>
            <td class="p-4">
                <button class="btn rounded-lg h-8 border-2 border-indigo-500/90 hover:bg-indigo-700 text-indigo-500/90 hover:text-white grid place-content-center">
                    <a href="{{route('category.edit',[$k->id])}}" class="text-center m-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                            <path d="M16 5l3 3" />
                        </svg>
                    </a>
                </button>
            </td>
            <td class="p-4">
                <form method="POST" action="{{route('category.destroy',[$k->id])}}" class="btn rounded-lg h-8 border-2 border-indigo-500/90 hover:bg-indigo-700 text-indigo-500/90 hover:text-white grid place-content-center">

                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Hapus" class="m-5">
                    <!-- <span class="m-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 7l16 0" />
                            <path d="M10 11l0 6" />
                            <path d="M14 11l0 6" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                        </svg>
                    </span> -->
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection