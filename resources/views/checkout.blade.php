@extends('layout.navbar')

@section('content')
    <form action="{{ route('order.store') }}" method="POST">
        @csrf
        <div class="mt-20 flex place-content-center">
            <!-- card barang -->
            <div class="px-4 py-6 sm:px-6 sm:py-10 w-3/6 lg:px-8">
                <h2 class="text-2xl font-bold tracking-tight text-gray-900 font-mont">Your Products Here</h2>
                @foreach ($carts as $cart)
                    <!-- Cart Item -->
                    <div
                        class="mx-auto max-w-2xl px-4 py-8 sm:px-6 sm:py-7 lg:max-w-7xl lg:px-6 shadow-md mt-5 drop-shadow-lg">
                        <div class="flex justify-between">
                            <div class="flex gap-5 place-items-center">
                                <div>
                                    <img src="{{ $cart->product->image }}" alt="{{ $cart->product->name }}" class="w-28">
                                </div>
                                <div>
                                    <h3 class="text-lg text-gray-700">{{ $cart->product->name }}</h3>
                                    <p class="mt-1 text-sm text-gray-500">{{ $cart->product->warna }}</p>
                                    <p class="mt-1 text-sm text-gray-500">Size: {{ $cart->product->size }}</p>
                                    <p class="font-bold">Rp {{ number_format($cart->product->harga, 0, ',', '.') }}</p>
                                </div>
                            </div>

                            <div class="place-content-center space-y-1 mb-0">
                                <div class="flex gap-5 rounded-lg justify-between w-60">
                                    <h1 class="font-semibold">Quantity</h1>
                                    <input type="hidden" name="cart[{{ $cart->id }}][qty]" value="{{ $cart->qty }}">
                                    <span>{{ $cart->qty }} pcs</span>
                                </div>
                                <div class="flex gap-5 rounded-lg justify-between w-60">
                                    <h1 class="font-semibold">Sub Total</h1>
                                    <span>Rp {{ number_format($cart->qty * $cart->product->harga, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- card pembayaran -->
            <div class="p-2 m-4 rounded-xl">
                <h2 class="text-2xl mt-5 font-bold tracking-tight text-gray-900 font-mont">Check Out Here</h2>
                <div class="max-w-4xl mx-auto bg-white mt-4 p-6 border-8 border-gray-200 rounded-lg shadow-md space-y-4">
                    <div>
                        <h2 class="text-xl font-bold">Beli Langsung</h2>
                        <p class="text-sm text-gray-500">Ini halaman terakhir dari proses belanjamu. Pastikan semua sudah
                            benar,
                            ya. :)</p>
                    </div>

                    <!-- Address and Contact Section -->
                    <div class="p-4 border rounded-lg bg-gray-50 space-y-2">
                        <div class="flex items-center space-x-2 justify-between">
                            <p class="font-semibold text-gray-700"><span
                                    class="bg-gray-300 text-gray-800 text-xs px-2 py-1 mr-2 rounded">Penerima</span>{{ $user->name }}
                                ({{ $user->telepon }})</p>

                            <!-- Edit Button -->
                            <button id="editBtn"
                                class="btn rounded-lg h-8 p-1 hover:bg-gray-500 text-gray-400 hover:text-white grid place-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                    <path d="M16 5l3 3" />
                                </svg>
                            </button>
                        </div>
                        <div class="flex items-center space-x-2">
                            <p class="font-semibold text-gray-700"><span
                                    class="bg-gray-300 text-gray-800 text-xs px-2 py-1 mr-2 rounded">Alamat</span>{{ $user->alamat }}
                            </p>
                        </div>
                    </div>
                    <!-- Payment Methods -->
                    <div class="p-4 border rounded-lg bg-gray-50 space-y-2">
                        <h3 class="text-lg font-bold">Metode pembayaran</h3>
                        <select type="text" name="payment_method" class="w-full p-2 border border-gray-300 rounded-lg"
                            required>
                            <option value="">-- Choose Payment Method --</option>
                            <option value="QRIS">QRIS</option>
                            <option value="Cash On Delivery">Cash On Delivery</option>
                        </select>
                    </div>
                </div>
                <!-- Ringkasan Belanja -->
                <div class="bg-gray-50 p-6 rounded-lg border mt-6 sticky top-28 z-10 ">
                    <h3 class="text-lg font-bold mb-2">Ringkasan Belanja</h3>
                    <div class="space-y-2">
                        <div class="flex justify-between text-gray-600">
                            <span>Total Harga</span>
                            <span>Rp {{ number_format($total, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between text-gray-600">
                            <span>Diskon</span>
                            <span>Rp 0</span>
                        </div>
                        <div class="flex justify-between text-gray-800 font-bold">
                            <span>Total Pembayaran</span>
                            <span name="total" value="{{ $total }}">Rp
                                {{ number_format($total, 0, ',', '.') }}</span>
                        </div>
                    </div>
                    <button type="submit" id="checkout"
                        class="mt-4 w-full py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg transform hover:scale-105 transition-all duration-300 ease-in-out">Buat
                        Pesanan</button>
                </div>
            </div>

        </div>
    </form>

    <div id="editModal" class="hidden">
        <div class="fixed inset-0 z-20 bg-gray-500 bg-opacity-50 flex items-center justify-center ">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                <h3 class="text-xl font-semibold mb-4">Edit Your Information</h3>
                <form action="{{ route('updateUserInfo') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-semibold">Name</label>
                            <input type="text" name="name" id="name" value="{{ $user->name }}"
                                class="w-full p-2 border border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="telepon" class="block text-sm font-semibold">Telepon</label>
                            <input type="text" name="telepon" id="telepon" value="{{ $user->telepon }}"
                                class="w-full p-2 border border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="alamat" class="block text-sm font-semibold">Alamat</label>
                            <textarea name="alamat" id="alamat" rows="3" class="w-full p-2 border border-gray-300 rounded-md">{{ $user->alamat }}</textarea>
                        </div>
                        <div class="flex justify-end gap-3 mt-4">
                            <button type="button" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg"
                                id="closeModal">Cancel</button>
                            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg">Save
                                Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        document.getElementById('editBtn').addEventListener('click', function() {
            document.getElementById('editModal').classList.remove('hidden');
        });

        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('editModal').classList.add('hidden');
        });
    </script>

    <script>
    </script>
@endsection
