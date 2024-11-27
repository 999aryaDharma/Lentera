<title>Keranjang</title>

@extends('layout.navbar')

@section('content')
    <div class="mt-20 flex place-content-center min-h-screen">
        <div class="px-4 py-8 sm:px-6 sm:py-10 w-4/6 lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900 font-mont">Cart</h2>
            <small class="text-red-500 italic">*pastikan quantity tidak melebihi stok!</small>

            <!-- Barang -->
            @if ($carts->count() > 0)
                @foreach ($carts as $cart)
                    <div class="mx-auto max-w-2xl px-4 py-8 sm:px-6 sm:py-8 lg:max-w-7xl lg:px-6 shadow-md mt-3">
                        <div class="flex justify-between cart-item" data-item-id="{{ $cart->id }}">
                            <div class="flex gap-5 place-items-center">
                                <a href="{{ route('detailProduct', ['id' => $cart->product->id]) }}">
                                    <div>
                                        <img src="{{ asset($cart->product->image) }}" alt=""
                                            class="w-28 drop-shadow-lg">
                                    </div>
                                </a>
                                <div class="space-y-1">
                                    <h3 class="text-xl font-semibold text-gray-700">{{ $cart->product->name }}</h3>
                                    <p class="text-sm text-gray-500">{{ $cart->product->warna }}</p>
                                    <p class="text-sm text-gray-500">Size: {{ $cart->product->size }}</p>
                                    <p class="text-sm text-gray-500">Stok: {{ $cart->product->stok }}</p>
                                    <p class="font-bold price">
                                        IDR {{ number_format($cart->product->harga, 2, ',', '.') }}
                                    </p>
                                </div>
                            </div>

                            <div class="place-content-center">
                                <div class="grid justify-items-end">
                                    <form action="{{ route('cart.destroy', [$cart->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" id="delete"
                                            class="hover:bg-red-500 hover:text-white p-1 rounded-md transition-all">
                                            <!-- Ikon Trash -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M4 7l16 0" />
                                                <path d="M10 11l0 6" />
                                                <path d="M14 11l0 6" />
                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>

                                <div class="flex justify-between">
                                    <span>Quantity :</span>
                                    <form action="{{ route('cart.update', [$cart->id]) }}" method="post" class="flex gap-2 items-center">
                                        @csrf
                                        @method('PUT')
                                        <input type="number" name="qty" value="{{ $cart->qty }}" min="1" 
                                               class="ml-1 w-10 text-center p-0 rounded-md border border-gray-300">
                                        <button type="submit" 
                                                class="hover:bg-blue-500 hover:text-white p-1 rounded-md transition-all">
                                            <!-- Ikon Update -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" 
                                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                                 class="icon icon-tabler icon-tabler-refresh">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                                                <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                                <div class="">

                                    <p class="text-md text-center font-semibold text-gray-500">Sub Total</p>
                                    <p class="font-bold subtotal text-center">
                                        IDR {{ number_format($cart->qty * $cart->product->harga, 2, ',', '.') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-center text-xl font-semibold text-slate-900 mt-12">
                    <h1 class="mb-12">No item in your Cart</h1>
                </div>
            @endif
            <div class="text-center">
                <a href="{{ route('index') }}">
                    <button
                        class="justify-center w-20 mt-10 bg-red-500 hover:bg-red-700 transform hover:scale-105 text-white py-1 rounded-md transition-all duration-300 ease-in-out">
                        <span>Back</span>
                    </button>
                </a>
            </div>
        </div>

        <!-- card pembayaran -->
        <div
            class="w-1/4 max-h-52 px-4 py-8 mt-10 sm:px-6 sm:py-10 lg:max-w-3xl lg:px-8 border-2 rounded-lg text-center sticky top-28">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900 font-mont">Your Total Price</h2>
            <div class="flex justify-between py-5">
                <p>Total</p>
                <p class="your-total-price">IDR {{ number_format($total, 2, ',', '.') }}</p>
            </div>
            <a href="{{ route('checkout.index') }}">
                <button type="submit"
                    class="w-full bg-indigo-500/90 rounded-lg text-white hover:bg-indigo-700 transform hover:scale-105 transition-all duration-300 ease-in-out">
                    <h1 class="p-3">Beli Langsung</h1>
                </button>
            </a>
        </div>
    </div>
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
    @if ($message = Session::get('failed'))
        <script>
            Swal.fire({
                icon: "warning",
                title: "Oops...",
                text: "{{ $message }}",
                confirmButtonColor: '#7066E0',
            });
        </script>
    @endif
@endsection
