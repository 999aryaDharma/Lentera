<title>Detail</title>
@extends('layout.navbar')

@section('content')
<div class="flex font-sans mt-28 mb-14 mx-44  ">
    <div class="flex-none h-96 w-96 relative group  border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg ">
        <img src="/images/{{$data->image}}" alt="" class="absolute  inset-0 w-full h-full object-cover"
            loading="lazy" />
    </div>

    <form action="{{ route('cart.store') }}" method="POST" class="flex-auto p-10 ml-20 ">
        @csrf
        <div class="">
            <h1 class="flex-auto text-4xl -mt-10 font-bold text-slate-900">
                {{ $data->product }}
            </h1>
            <div class="text-lg font-semibold text-slate-900 mt-6 ">
                <p>IDR. {{ number_format($data->harga) }}</p>
            </div>
            <div class="text-lg font-semibold text-slate-500 mt-2 ">
                <p>{{ $data->warna }}</p>
            </div>
        </div>
        <div class="flex items-baseline mt-5 pb-6 ">
            <div class="space-x-2 flex text-sm">
                <div class="w-9 h-9 rounded-lg flex items-center justify-center text-white bg-indigo-500 ">
                    {{ $data->size }}
                </div>
                <div class="flex items-center">
                    <span class="text-gray-500 ml-4">Stok Total: {{ $data->stok }}</span>
                </div>
            </div>
        </div>
        <p class="text-lg text-slate-700">
            {{ $data->deskripsi }}
        </p>
        <div class="product-single_addtocart flex space-x-4 mt-4">
            @if($data->stok > 0)
            <button class="bg-indigo-500/90 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg">
                <a href="{{ route('checkout.index') }}">Beli</a></button>
            <input type="hidden" name="product_id" value="{{ $data->id }}">
            <button type="submit" class="bg-indigo-500/90 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg">+
                Keranjang</button>
            @else
            <button class="bg-gray-400 text-white px-4 py-2 rounded-lg cursor-not-allowed" disabled>
                Beli
            </button>
            <button class="bg-gray-400 text-white px-4 py-2 rounded-lg cursor-not-allowed" disabled>
                + Keranjang
            </button>
            @endif
        </div>
    </form>
</div>

<!-- All Produck -->
<div class="mx-auto max-w-2xl px-4 py-8 sm:px-6 sm:py-10 lg:max-w-7xl lg:px-8 shadow-md mt-24 drop-shadow-lg">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900">All data</h2>

    <div class="mt-6 grid grid-cols-1 gap-x-3 gap-y-5 sm:grid-cols-2 lg:grid-cols-5 xl:gap-x-4">
        @foreach ($allData as $all)
        <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72 ransform hover:scale-105 transition-background duration-300 ease-in-out">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52 transition-background duration-300 ease-in-out">
                <img src="/images/{{$all->image}}" alt="Front of men&#039;s Basic Tee in black."
                    class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
                <div>
                    <h3 class="text-sm text-gray-700">
                        <a href="{{ route('detailProduct', [$all->id]) }}">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            {{ $all->product }}
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">{{ $all->warna }}</p>
                </div>
                <p class="text-sm font-medium text-gray-900">{{ number_format($all->harga) }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

<script src="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.2.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".message").hide();
        $("a.readmore").click(function() {
            $(".message").show();
            $(this).hide();
            $("a.hide").show();
        });
        $("a.hide").click(function() {
            $(".message").hide();
            $(this).hide();
            $("a.readmore").show();
        });
    });
</script>