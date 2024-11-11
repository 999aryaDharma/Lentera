@extends('layout.sidebar')

@section('title')
    <h3 class="my-2 text-3xl font-bold capitalize">Add User</h3>
@endsection

@section('admin')
<div class="container ml-3 mt-3 p-3">
    <div class="mr-4 rounded-xl bg-white ">
        <div class=" shadow-lg rounded-xl overflow-hidden justify-center">
            <div class="p-6">
                <div class="flex items-center justify-between mt-0 mb-5">
                    <h2 class="font-bold text-2xl pl-10">Add an User Here!</h2>
                    <a href="{{ route('adminpage.user.index') }}">
                        <button type="button" class="btn bg-red-600 text-white py-1 px-4 rounded-lg hover:bg-red-700">
                            &lt; Back
                        </button>
                    </a>
                </div>
                <form action="{{ route('adminpage.user.store') }}" method="POST" data-redirect-route="/admin/user" class="space-y-4 px-3">
                    @csrf
                    <div class="space-y-1">
                        <label for="">User Name</label>
                        <input type="text" name="nama" placeholder="Enter Name" 
                               class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-green-200">
                        @error('nama')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="space-y-1">
                        <label for="">Email Address</label>
                        <input type="email" name="email" placeholder="Email Address" 
                               class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-green-200">
                        @error('email')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="space-y-1">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Password" 
                               class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-green-200">
                        @error('password')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="space-y-1">
                        <label for="">Address</label>
                        <input type="text" name="alamat" placeholder="Alamat" 
                               class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-green-200">
                        @error('alamat')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="space-y-1">
                        <label for="">Phone Number</label>
                        <input type="text" name="telepon" placeholder="Telepon" 
                               class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-green-200">
                        @error('telepon')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="space-y-1">
                        <label for="">User Role</label>
                        <select name="role" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-green-200">
                            <option value="" disabled selected>Select Role</option>
                            <option value="admin">Admin</option>
                            <option value="guest">Guest</option>
                        </select>
                        @error('role')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <hr class="mx-8 h-0.5 bg-gray-500" />

                    <button type="submit" id="create" class="w-full btn bg-indigo-500/90 rounded-lg hover:bg-indigo-700 text-white p-3">
                        Add User
                    </button>     
                </form>
            </div>
        </div>
    </div>
</div>

@endsection