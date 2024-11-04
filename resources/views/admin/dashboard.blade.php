<title>Admin Dashboard</title>
@extends('admin.sidebar')

@section('admin')
<h1 class="font-bold text-3xl">Dashboard</h1>
<div class="h-full mt-10 grid grid-cols-4 gap-4 mr-16">
    <a href="{{route('productAdmin')}}" class=" h-32 shadow-md border-2 rounded-lg flex justify-center place-items-center gap-2 px-5">
        <svg class="w-28 h-28 text-slate-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-package">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
            <path d="M12 12l8 -4.5" />
            <path d="M12 12l0 9" />
            <path d="M12 12l-8 -4.5" />
            <path d="M16 5.25l-8 4.5" />
        </svg>
        <div>
            <h1 class="font-bold text-3xl">Product</h1>
            <span class="font-bold text-lg text-slate-500">200</span>
        </div>
    </a>

    <a href="{{route('category')}}" class=" h-32 shadow-md border-2 rounded-lg flex justify-center place-items-center gap-2 px-5">
        <svg class="w-28 h-28 text-slate-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-category">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M10 3h-6a1 1 0 0 0 -1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1 -1v-6a1 1 0 0 0 -1 -1z" />
            <path d="M20 3h-6a1 1 0 0 0 -1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1 -1v-6a1 1 0 0 0 -1 -1z" />
            <path d="M10 13h-6a1 1 0 0 0 -1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1 -1v-6a1 1 0 0 0 -1 -1z" />
            <path d="M17 13a4 4 0 1 1 -3.995 4.2l-.005 -.2l.005 -.2a4 4 0 0 1 3.995 -3.8z" />
        </svg>
        <div>
            <h1 class="font-bold text-3xl">Category</h1>
            <span class="font-bold text-lg text-slate-500">200</span>
        </div>
    </a>

    <a href="{{route('order')}}" class=" h-32 shadow-md border-2 rounded-lg flex justify-center place-items-center gap-2 px-5">
        <svg class="w-28 h-28 text-slate-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard-list">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
            <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
            <path d="M9 12l.01 0" />
            <path d="M13 12l2 0" />
            <path d="M9 16l.01 0" />
            <path d="M13 16l2 0" />
        </svg>
        <div>
            <h1 class="font-bold text-2xl">Order List</h1>
            <span class="font-bold text-lg text-slate-500">200</span>
        </div>
    </a>

    <a href="{{route('user')}}" class=" h-32 shadow-md border-2 rounded-lg flex justify-center place-items-center gap-2 px-5">
        <svg class="w-28 h-28 text-slate-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
        </svg>
        <div>
            <h1 class="font-bold text-3xl">User</h1>
            <span class="font-bold text-lg text-slate-500">200</span>
        </div>
    </a>

</div>

@endsection