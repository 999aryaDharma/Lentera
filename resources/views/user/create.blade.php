@extends('layout.sidebar')

@section('admin')

<div class="container mx-auto p-3">
    <div class="flex items-center justify-between mb-6">
        <h1 class="font-bold text-3xl">Add User</h1>
        <a href="{{ route('adminpage.user.index') }}">
            <button type="button" class="btn bg-red-600 text-white py-1 px-4 rounded-lg hover:bg-red-700">
                &lt; Back
            </button>
        </a>
    </div>

    <div class="mr-4 rounded-xl bg-gray-50">
        <div class=" shadow-lg rounded-xl overflow-hidden">
            <div class="p-6">
                <h2 class="text-xl font-medium text-center text-gray-900 mb-6">Add an User Here!</h2>
                <form action="{{ route('adminpage.user.store') }}" method="POST" class="space-y-4 ">
                    @csrf
                    <div class="space-y-1">
                        <input type="text" name="nama" placeholder="Enter Name" 
                               class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-green-200">
                        @error('nama')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="space-y-1">
                        <input type="email" name="email" placeholder="Email Address" 
                               class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-green-200">
                        @error('email')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="space-y-1">
                        <input type="password" name="password" placeholder="Password" 
                               class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-green-200">
                        @error('password')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="space-y-1">
                        <input type="text" name="alamat" placeholder="Alamat" 
                               class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-green-200">
                        @error('alamat')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="space-y-1">
                        <input type="text" name="telepon" placeholder="Telepon" 
                               class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-green-200">
                        @error('telepon')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="space-y-1">
                        <select name="role" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-green-200">
                            <option value="" disabled selected>Select Role</option>
                            <option value="admin">Admin</option>
                            <option value="guest">Guest</option>
                        </select>
                        @error('role')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <hr class="border-gray-300 my-4">
                    <button type="submit" id="create" class="w-full btn bg-indigo-500/90 rounded-lg hover:bg-indigo-700 text-white p-3">
                        Add User
                    </button>     
                </form>
            </div>
        </div>
    </div>
</div>

@endsection