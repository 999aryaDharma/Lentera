<title>Lentera</title>

@extends('layout.navbar')
@section('content')

<div class="mx-auto max-w-2xl px-4 py-8 sm:px-6 sm:py-10 lg:max-w-7xl lg:px-8 mt-24">

    <div class="mt-6 grid grid-cols-1 gap-x-3 gap-y-5 sm:grid-cols-2 lg:grid-cols-5 xl:gap-x-4">
        @if ($dataproduct->isEmpty())
        <h2>No results found. Showing all products:</h2>
        @endif

        @foreach ($dataproduct as $product)

        <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
                <img src="images/{{$product->image}}" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
                <div>
                    <h3 class="text-sm text-gray-700">
                        <a href="{{ route('detailProduct', [$product->id]) }}">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            {{$product->product}}
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">{{$product->warna}}</p>
                </div>
                <div>
                    <p class="mt-1 text-sm text-gray-500 text-end">{{$product->size}}</p>
                    <p class="text-sm font-medium text-gray-900">{{ number_format($product->harga, 2, ',', '.') }}</p>
                </div>
            </div>
        </div>

        @endforeach
    </div>



</div>


<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if ($message = Session::get('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: '{{ $message }}',
        confirmButtonColor: '#7066E0',
    });
</script>
@endif
</body>

@endsection