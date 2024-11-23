@extends('layout.sidebar')

@section('title')
    <h3 class="ml-4">Order Detail</h3>
@endsection

@section('admin')
    <!-- Order Detail -->
    <div class="ml-6 mt-4">
        <a href="{{ route('adminpage.order.index') }}">
            <button type="button" class="btn bg-red-600 text-white py-1 px-4 rounded-lg hover:bg-red-700">
                &lt; Back
            </button>
        </a>
    </div>
    <div class="flex w-full mt-4  mx-6">
            @foreach ($order->detail as $detail)
                <div class="bg-white rounded-2xl w-full">
                    <div class="flex font-sans m-8">
                        <div
                            class="flex-none h-80 w-80 relative group  border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg ">
                            <img src="{{ asset($detail->product->image) }}" alt=""
                                class="absolute  inset-0 w-full h-full object-cover" loading="lazy" />
                        </div>

                        <div class="flex-auto mt-8 ml-6">
                            <div class="">
                                <div class="flex -mt-10 justify-between">
                                    <h1 class="text-4xl font-bold text-slate-900">
                                        {{ $detail->product->name }}
                                    </h1>
                                </div>
                                <!-- Right Section (Order) -->
                                <div class="w-full p-3 pb-1 rounded-lg shadow-md">
                                    <div class="flex items-center justify-between mx-5">
                                        <h2 class="text-gray-800 text-lg font-semibold">Price/pcs: </h2>
                                        <span class="font-bold text-xl">IDR {{ number_format($detail->product->harga, '2', ',', '.') }}</span>
                                    </div>
                                    <hr class="h-px mx-1 mt-0 mb-1 bg-gray-500" />
                                    <div class="flex items-center justify-between mx-5">
                                        <h2 class="text-gray-800 text-lg font-semibold">Quantity: </h2>
                                        <span class="font-bold text-xl">{{ $detail->qty }}</span>
                                    </div>
                                    <hr class="h-px mx-1 mt-0 mb-1 bg-gray-500" />
                                    <div class="flex items-center justify-between mx-5">
                                        <h2 class="text-gray-800 text-lg font-semibold">Subtotal: </h2>
                                        <span class="font-bold text-xl">IDR {{ number_format($detail->qty * $detail->product->harga, '2', ',', '.') }}</span>
                                    </div>
                                    <hr class="h-px mx-1 mt-0 mb-1 bg-gray-500" />
                                    <div class="flex items-center justify-between mx-5">
                                        <h2 class="text-gray-800 text-lg font-semibold">Discount: </h2>
                                        <span class="font-bold text-xl">0%</span>
                                    </div>
                                    <hr class="h-px mx-1 mt-0 mb-1 bg-gray-500" />
                                    <div class="flex items-center justify-between mx-5">
                                        <h2 class="text-gray-800 text-lg font-semibold">Total: </h2>
                                        <span class="font-bold text-xl">IDR {{ number_format($detail->qty * $detail->product->harga, '2', ',', '.') }}</span>
                                    </div>
                                    <hr class="h-px mx-1 mt-0 mb-1 bg-gray-500" />
                                    <div class="flex items-center justify-between mx-5">
                                        <h2 class="text-gray-800 text-lg font-semibold">Size: </h2>
                                        <div class="flex items-baseline my-1">
                                            <div
                                                class="w-9 h-9 rounded-lg flex items-center justify-center text-white bg-indigo-500 ">
                                                {{ $detail->product->size }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="text-lg text-slate-700 pb-3 px-8">
                            {{ $detail->product->deskripsi }}
                            <br>
                            <a class="readmore cursor-pointer text-indigo-500/90">Read More </a>
                        </p>
                    </div>
                </div>
        @endforeach
    </div>
    <!--Order Detail End-->
@endsection
