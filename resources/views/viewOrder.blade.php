@extends('layout.navbar')

@section('content')
    <div class="w-full px-6 mx-auto min-h-screen">
        <!-- table 1 -->
        <div class="flex flex-wrap -mx-3 mt-20">
            <div class="flex-none w-full max-w-full px-3">
                @if ($orders->count() > 0)
                    <div
                        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                        <div
                            class="flex p-6 pb-0 my-5 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                            <h1 class="font-bold text-2xl">Order List</h1>
                            <div class="flex items-center md:ml-auto md:pr-4">
                                <form class="w-full px-3 mb-4">
                                    <label for="search"
                                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                            </svg>
                                        </div>
                                        <input type="search" id="search"
                                            class="h-10 block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-indigo-500/40 focus:border-indigo-500/40 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Search your orders" required />
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="flex-auto px-0 pt-0 pb-2">
                            <div class="p-0 overflow-x-auto">
                                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                    <thead class="align-bottom">
                                        <tr class="">
                                            <th
                                                class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-500 opacity-70">
                                                No.
                                            </th>
                                            <th
                                                class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-500 opacity-70">
                                                Image
                                            </th>
                                            <th
                                                class="py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-500 opacity-70">
                                                User
                                            </th>
                                            <th
                                                class="py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-500 opacity-70">
                                                Price
                                            </th>
                                            <th
                                                class="py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-500 opacity-70">
                                                Quantity
                                            </th>
                                            <th
                                                class="py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-500 opacity-70">
                                                Total Price
                                            </th>
                                            <th
                                                class="py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-normal text-slate-500 opacity-70">
                                                Payment
                                            </th>
                                            <th
                                                class="py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-normal text-slate-500 opacity-70">
                                                Address
                                            </th>
                                            <th
                                                class="py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-normal text-slate-500 opacity-70">
                                                Status
                                            </th>
                                            <th
                                                class="py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-normal text-slate-500 opacity-70">
                                                Action
                                            </th>

                                        </tr>
                                    </thead>

                                    <tbody class="">
                                        @foreach ($orders as $order)
                                            @foreach ($order->detail as $detail)
                                                <tr>
                                                    <td
                                                    class="px-3 text-center align-middle border-b whitespace-nowrap shadow-transparent">
                                                    <span
                                                    class="text-xs font-semibold leading-tight text-slate-500">{{ $loop->iteration }}</span>
                                                </td>
                                                <td
                                                    class="p-2 text-left align-middle bg-transparent border-b whitespace-normal shadow-transparent">
                                                    <span
                                                        class="text-sm font-semibold leading-tight text-slate-500 grid place-content-center"><img
                                                            src="/images/{{$detail->product->image}}" alt=""
                                                            class="h-20"></span>
                                                </td>
                                                    <td
                                                        class="p-2 text-left align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                        <div class="flex pl-2 py-1">
                                                            <div class="flex flex-col justify-center">
                                                                <h6 class="mb-0 text-sm leading-normal">
                                                                    {{ $order->user->name }}
                                                                </h6>
                                                                <p class="mb-0 text-sm leading-tight text-slate-500">
                                                                    {{ $order->user->email }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="p-2 text-center align-middle border-b whitespace-nowrap shadow-transparent">
                                                        <span
                                                            class="text-sm font-semibold leading-tight text-slate-500">{{ number_format($detail->product->harga, 2, ',', '.') }}</span>
                                                    </td>
                                                    <td
                                                        class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                        <span
                                                            class="text-sm font-semibold leading-tight text-slate-500">{{ $detail->qty }}</span>
                                                    </td>
                                                    <td
                                                        class="p-2 text-center align-middle border-b whitespace-nowrap shadow-transparent">
                                                        <span
                                                            class="text-sm font-semibold leading-tight text-slate-500">{{ number_format($order->total_price, 2, ',', '.') }}</span>
                                                    </td>
                                                    <td
                                                        class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                        <span
                                                            class="text-sm font-semibold leading-tight text-slate-500">{{ $order->payment_method }}</span>
                                                    </td>
                                                    <td
                                                        class="p-2 text-left align-middle bg-transparent border-b whitespace-normal shadow-transparent">
                                                        <span
                                                            class="text-sm font-semibold leading-tight text-slate-500">{{ $order->shipping_address }}</span>
                                                    </td>
                                                    <td
                                                        class="p-2 text-center align-middle bg-transparent border-b whitespace-normal shadow-transparent">
                                                        @if ($order->payment_status == 'paid')
                                                            <span
                                                                class="text-sm font-semibold leading-tight border px-3 pb-0.5 rounded-md bg-green-500 text-slate-600">{{ $order->payment_status }}
                                                            </span>
                                                        @elseif ($order->payment_status == 'failed')
                                                            <span
                                                                class="text-sm font-semibold leading-tight border px-3 pb-0.5 rounded-md bg-red-500 text-slate-200">{{ $order->payment_status }}
                                                            </span>
                                                        @elseif ($order->payment_status == 'pending')
                                                            <span
                                                                class="text-sm font-semibold leading-tight border px-3 pb-0.5 rounded-md bg-gray-300 text-slate-600">{{ $order->payment_status }}
                                                            </span>
                                                        @endif
                                                    </td>
                                                    <td
                                                        class="p-2 text-center align-middle bg-transparent border-b whitespace-normal shadow-transparent">
                                                        <form action="{{ route('orderuser.destroy', [$order->id]) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" id="delete"
                                                                class="hover:bg-red-500 hover:text-white p-1 rounded-md transition-all">
                                                                <!-- Ikon Trash -->
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                    <path d="M4 7l16 0" />
                                                                    <path d="M10 11l0 6" />
                                                                    <path d="M14 11l0 6" />
                                                                    <path
                                                                        d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <span class="flex justify-end mr-5 text-2xl font-bold">Total Price:
                        {{ number_format($total, 2, ',', '.') }}</span>
                @else
                    <div class="text-center text-xl font-semibold text-slate-900 mt-28">
                        <h1 class="mb-12">No product in your Order List</h1>
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
        </div>
    </div>
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
@endsection
