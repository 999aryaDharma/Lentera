@extends('layout.sidebar')

@section('admin')
<h1 class="font-bold text-3xl">User</h1>
<div class="fixed">
    <table class="table-fixed border-collapse p-10 rounded-lg">
        <thead class="border-b-2">
            <tr class="text-indigo-500/50">
                <th class="p-4">Id User</th>
                <th class="p-4">Role</th>
                <th class="p-4">Nama</th>
                <th class="p-4">Email</th>
                <th class="p-4">Alamat</th>
                <th class="p-4">Telepone</th>
                <th class="p-4">Created at</th>
                <th class="p-4">Updated at</th>
                <th colspan="2" class="p-4">
                    <button class="btn bg-indigo-500/90 h-8 rounded-lg hover:bg-indigo-700"><a href="{{ route('adminpage.user.create') }}" class="text-center m-5 text-white">Tambah</a></button>
                </th>
            </tr>
        </thead>
        <tbody class="text-center ">
            @foreach ($data as $d )
            <tr class=" border-b">
                <td class="p-4">{{ $d->id }}</td>
                <td class="p-4">{{ $d->role }}</td>
                <td class="p-4">{{ $d->name }}</td>
                <td class="p-4">{{ $d->email }}</td>
                <td class="p-4">{{ $d->alamat }}</td>
                <td class="p-4">{{ $d->telepon }}</td>
                <td class="p-4">{{ $d->created_at }}</td>
                <td class="p-4">{{ $d->updated_at }}</td>
                <td class="p-4">
                    {{-- Edit Button --}}
                    <button class="btn rounded-lg h-8 border-2 border-indigo-500/90 hover:bg-indigo-700 text-indigo-500/90 hover:text-white grid place-content-center">
                        <a href="{{ route('adminpage.user.edit', ['id' => $d->id]) }}" class="text-center m-5">
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
                    {{-- Delete Button --}}
                    <form action="{{ route('adminpage.user.delete', ['id' => $d->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" id="delete" class="btn rounded-lg h-8 border-2 border-indigo-500/90 hover:bg-indigo-700 text-indigo-500/90 hover:text-white grid place-content-center">
                            <span class="m-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                </svg>
                            </span>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection