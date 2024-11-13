<title>Admin Dashboard</title>
@extends('layout.sidebar')

@section('title')
<h3 class="ml-4">Dashboard</h3>
@endsection

@section('admin')
<!-- cards -->
<div class="w-full px-6 py-6 mx-auto">
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
        <!-- card1 -->
        <a href="{{route('adminpage.user.index')}}" class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal">Users Now</p>
                                <h5 class="mb-0 font-bold">
                                    {{ $userCount }} Users
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div
                                class="inline-block w-16 h-16 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-users mt-2.5">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>

        <!-- card2 -->
        <a href="{{route('adminpage.order.index')}}" class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal">Order List</p>
                                <h5 class="mb-0 font-bold">
                                    {{ $orderCount }} Orders
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div
                                class="inline-block w-16 h-16 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500 text-white">
                                <svg class="text-white mt-2" xmlns="http://www.w3.org/2000/svg" width="44"
                                    height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard-list">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                    <path
                                        d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                    <path d="M9 12l.01 0" />
                                    <path d="M13 12l2 0" />
                                    <path d="M9 16l.01 0" />
                                    <path d="M13 16l2 0" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>

        <!-- card3 -->
        <a href="{{route('adminpage.product.index')}}" class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal">Products</p>
                                <h5 class="mb-0 font-bold">
                                    {{ $productCount }} products
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div
                                class="inline-block w-16 h-16 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                                <svg class="text-white mt-2" xmlns="http://www.w3.org/2000/svg" width="46"
                                    height="46" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-package">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
                                    <path d="M12 12l8 -4.5" />
                                    <path d="M12 12l0 9" />
                                    <path d="M12 12l-8 -4.5" />
                                    <path d="M16 5.25l-8 4.5" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>

        <!-- card4 -->
        <a href="{{route('adminpage.category.index')}}" class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal">Categories</p>
                                <h5 class="mb-0 font-bold">
                                    {{ $categoryCount }} Categories
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div
                                class="inline-block w-16 h-16 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                                <svg class="text-slate-200 mt-2.5" xmlns="http://www.w3.org/2000/svg" width="44"
                                    height="44" viewBox="0 0 24 24" fill="currentColor"
                                    class="icon icon-tabler icons-tabler-filled icon-tabler-category">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M10 3h-6a1 1 0 0 0 -1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1 -1v-6a1 1 0 0 0 -1 -1z" />
                                    <path
                                        d="M20 3h-6a1 1 0 0 0 -1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1 -1v-6a1 1 0 0 0 -1 -1z" />
                                    <path
                                        d="M10 13h-6a1 1 0 0 0 -1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1 -1v-6a1 1 0 0 0 -1 -1z" />
                                    <path d="M17 13a4 4 0 1 1 -3.995 4.2l-.005 -.2l.005 -.2a4 4 0 0 1 3.995 -3.8z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<!-- Tabel -->
<div class="w-full px-6 py-6 mx-auto">
    <!-- table 1 -->

    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6>Order List</h6>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                                <tr class="">
                                    <th
                                        class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        ID
                                    </th>
                                    <th
                                        class="py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        User
                                    </th>
                                    <th
                                        class="py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Total Price
                                    </th>
                                    <th
                                        class="py-3 px-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Discount
                                    </th>
                                    <th
                                        class="py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-normal text-slate-400 opacity-70">
                                        Final Price
                                    </th>
                                    <th
                                        class="py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-normal text-slate-400 opacity-70">
                                        Address
                                    </th>
                                    <th
                                        class="py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-normal text-slate-400 opacity-70">
                                        Status
                                    </th>

                                </tr>
                            </thead>

                            <tbody class="">
                                @foreach ($dataorders as $order)

                                <tr>
                                    <td
                                        class="px-3 text-center align-middle border-b whitespace-nowrap shadow-transparent">
                                        <span
                                            class="text-xs font-semibold leading-tight text-slate-400">{{ $order->id }}</span>
                                    </td>
                                    <td
                                        class="p-2 text-left align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <div class="flex pl-2 py-1">
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 text-sm leading-normal">{{ $order->user->name }}
                                                </h6>
                                                <p class="mb-0 text-sm leading-tight text-slate-400">
                                                    {{ $order->user->email }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 text-center align-middle border-b whitespace-nowrap shadow-transparent">
                                        <span
                                            class="text-sm font-semibold leading-tight text-slate-400">{{ number_format($order->total_price, 2, ',', '.') }}</span>
                                    </td>
                                    <td
                                        class="p-2 text-center align-middle bg-transparent border-b whitespace-normal shadow-transparent">
                                        <p class="mb-0 text-sm font-semibold leading-tight">
                                            {{ $order->discount }}
                                        </p>
                                    </td>
                                    <td
                                        class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <span
                                            class="text-sm font-semibold leading-tight text-slate-400">{{ number_format($order->final_price, 2, ',', '.') }}</span>
                                    </td>
                                    <td
                                        class="p-2 text-left align-middle bg-transparent border-b whitespace-normal shadow-transparent">
                                        <span
                                            class="text-sm font-semibold leading-tight text-slate-400">{{ $order->shipping_address}}</span>
                                    </td>
                                    <td
                                        class="p-2 text-center align-middle bg-transparent border-b whitespace-normal shadow-transparent">
                                        @if ($order->payment_status == 'paid')
                                        <span
                                            class="text-sm font-semibold leading-tight border px-3 pb-0.5 rounded-md bg-green-400 text-slate-600">{{ $order->payment_status }}
                                        </span>
                                        @elseif (($order->payment_status == 'failed'))
                                        <span
                                            class="text-sm font-semibold leading-tight border px-3 pb-0.5 rounded-md bg-red-500 text-slate-200">{{ $order->payment_status }}
                                        </span>
                                        @elseif (($order->payment_status == 'pending'))
                                        <span
                                            class="text-sm font-semibold leading-tight border px-3 pb-0.5 rounded-md bg-gray-300 text-slate-600">{{ $order->payment_status }}
                                        </span>
                                        @endif
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection