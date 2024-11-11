@extends('layout.sidebar')
@section('title')
    <h3 class="ml-4">Manage Order</h3>
@endsection

@section('admin')
    <div class="w-full px-6 py-6 mx-auto">
        <!-- table 1 -->

        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6>Authors table</h6>
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
                                        <th
                                            class="py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            <button class="btn bg-indigo-500/90 h-8 rounded-lg hover:bg-indigo-700"><a
                                                    href="{{ route('adminpage.order.create') }}"
                                                    class="text-center m-5 text-white">Tambah</a></button>
                                        </th>
                                    </tr>
                                </thead>
                                @foreach ($orders as $order)
                                    <tbody class="">
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
                                                            {{ $order->user->email }}</p>
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
                                                <p class="mb-0 text-sm font-semibold leading-tight">{{ $order->discount }}
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
                                            <td class="p-4 text-center border-b flex justify-center space-x-1">
                                                {{-- Detail Button --}}
                                                <button
                                                    class="btn rounded-lg h-8 border-2 border-indigo-500/90 hover:bg-indigo-700 text-indigo-500/90 hover:text-white grid place-content-center">
                                                    <a href="" class="text-center m-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                            <path
                                                                d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                                        </svg>
                                                    </a>
                                                </button>

                                                {{-- Edit Button --}}
                                                <button
                                                    class="btn rounded-lg h-8 border-2 border-indigo-500/90 hover:bg-indigo-700 text-indigo-500/90 hover:text-white grid place-content-center">
                                                    <a href="{{ route('adminpage.order.edit', ['id' => $order->id]) }}"
                                                        class="text-center m-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                            <path d="M16 5l3 3" />
                                                        </svg>
                                                    </a>
                                                </button>

                                                <form action="{{ route('adminpage.order.delete', ['id' => $order->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" id="delete"
                                                        class="btn rounded-lg h-8 border-2 border-indigo-500/90 hover:bg-indigo-700 text-indigo-500/90 hover:text-white grid place-content-center">
                                                        <span class="m-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path d="M4 7l16 0" />
                                                                <path d="M10 11l0 6" />
                                                                <path d="M14 11l0 6" />
                                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
