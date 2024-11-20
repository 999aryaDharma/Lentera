<title>Keranjang</title>

@extends('layout.navbar')

@section('content')
<div class="mt-28 flex place-content-center h-screen">

    <!-- card baramg -->

    <div class="px-4 py-8 sm:px-6 sm:py-10 w-4/6 lg:px-8">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900 font-mont">Cart</h2>

        <div class="mx-auto max-w-2xl px-4 py-4 sm:px-6 sm:py-5 lg:max-w-7xl lg:px-8 shadow-md mt-5 drop-shadow-lg">
            <div class="flex gap-5">
                <input type="checkbox" class="border-1 rounded-md h-5 w-5">
                <h1 class="font-medium">Pilih Semua <span class="text-slate-400 font-extralight">(3)</span></h1>
            </div>
        </div>

        <!-- Barang -->
        <div class="mx-auto max-w-2xl px-4 py-8 sm:px-6 sm:py-10 lg:max-w-7xl lg:px-8 shadow-md mt-5 drop-shadow-lg">
            <div class="flex justify-between">

                <div class="flex gap-5 place-items-center">
                    <div class="">
                        <input type="checkbox" class="border-1 rounded-md h-5 w-5">
                    </div>
                    <div>
                        <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="" class="w-20">
                    </div>
                    <div>
                        <h3 class="text-sm text-gray-700">
                            Basic Tee
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Black</p>
                        <p class="font-bold">Rp 100.000</p>
                    </div>
                </div>

                <div class="place-content-center">

                    <!-- Tombol Jumlah -->
                    <div class="flex gap-5 border-2 rounded-lg p-1">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-minus">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                            </svg>
                        </button>
                        <h1>1</h1>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                        </button>
                    </div>

                    <!-- Tombol hapus -->
                    <div class="grid justify-items-end mt-5">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 7l16 0" />
                                <path d="M10 11l0 6" />
                                <path d="M14 11l0 6" />
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Barang -->
        <div class="mx-auto max-w-2xl px-4 py-8 sm:px-6 sm:py-10 lg:max-w-7xl lg:px-8 shadow-md mt-5 drop-shadow-lg">
            <div class="flex justify-between">

                <div class="flex gap-5 place-items-center">
                    <div class="">
                        <input type="checkbox" class="border-1 rounded-md h-5 w-5">
                    </div>
                    <div>
                        <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="" class="w-20">
                    </div>
                    <div>
                        <h3 class="text-sm text-gray-700">
                            Basic Tee
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Black</p>
                        <p class="font-bold">Rp 100.000</p>
                    </div>
                </div>

                <div class="place-content-center">

                    <!-- Tombol Jumlah -->
                    <div class="flex gap-5 border-2 rounded-lg p-1">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-minus">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                            </svg>
                        </button>
                        <h1>1</h1>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                        </button>
                    </div>

                    <!-- Tombol hapus -->
                    <div class="grid justify-items-end mt-5">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 7l16 0" />
                                <path d="M10 11l0 6" />
                                <path d="M14 11l0 6" />
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Barang -->
        <div class="mx-auto max-w-2xl px-4 py-8 sm:px-6 sm:py-10 lg:max-w-7xl lg:px-8 shadow-md mt-5 drop-shadow-lg">
            <div class="flex justify-between">

                <div class="flex gap-5 place-items-center">
                    <div class="">
                        <input type="checkbox" class="border-1 rounded-md h-5 w-5">
                    </div>
                    <div>
                        <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="" class="w-20">
                    </div>
                    <div>
                        <h3 class="text-sm text-gray-700">
                            Basic Tee
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Black</p>
                        <p class="font-bold">Rp 100.000</p>
                    </div>
                </div>

                <div class="place-content-center">

                    <!-- Tombol Jumlah -->
                    <div class="flex gap-5 border-2 rounded-lg p-1">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-minus">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                            </svg>
                        </button>
                        <h1>1</h1>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                        </button>
                    </div>

                    <!-- Tombol hapus -->
                    <div class="grid justify-items-end mt-5">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 7l16 0" />
                                <path d="M10 11l0 6" />
                                <path d="M14 11l0 6" />
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
        </div>



    </div>

    <!-- card pembayaran -->
    <div class="w-1/4 max-h-52 px-4 py-8 mt-10 sm:px-6 sm:py-10 lg:max-w-3xl lg:px-8 border-2 rounded-lg text-center sticky top-28">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900 font-mont">Pembelian</h2>
        <div class="flex justify-between py-5">
            <p>Total</p>
            <p>Rp. 100.000</p>
        </div>
        <a href="">
            <button type="submit" class="w-full bg-indigo-500/90 rounded-lg text-white hover:bg-indigo-700">
                <h1 class="p-3">Beli Langsung</h1>
            </button>
        </a>
    </div>

</div>