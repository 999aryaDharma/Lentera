@extends('layout.sidebar')

@section('title')
<h3 class="ml-4 mb-3 text-2xl font-bold">Create Carousel</h3>
@endsection

@section('admin')
<div class="container mx-auto p-3">
    <div class="flex items-center justify-between mb-6">
        <h1 class="font-bold text-3xl"></h1>
        <a href="{{ route('adminpage.carousel.index') }}">
            <button type="button" class="btn bg-red-600 text-white py-1 px-4 rounded-lg hover:bg-red-700">
                &lt; Back
            </button>
        </a>
    </div>

    <div class="mr-4 rounded-xl bg-gray-50">
        <div class="shadow-lg rounded-xl overflow-hidden">
            <div class="p-6">
                <h2 class="text-xl font-medium text-center text-gray-900 mb-6">Create a New Carousel</h2>
                <form action="{{ route('adminpage.carousel.store') }}" method="POST" data-redirect-route="/admin/carousel" class="space-y-4" enctype="multipart/form-data">
                    @csrf

                    <div class="space-y-1">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="w-full p-2 border border-gray-300 rounded-lg" required>

                        @error('title')
                        <small class="text-red-500">{{ $message }}</small>
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
                        Create Carousel
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection