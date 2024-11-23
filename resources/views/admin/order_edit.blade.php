@extends('layout.sidebar')

@section('title')
    <h3 class="ml-4 mb-3 text-2xl font-bold">Edit Order</h3>
@endsection

@section('admin')
    <div class="container mx-auto p-3">
        <div class="flex items-center justify-between mb-6">
            <h1 class="font-bold text-3xl"></h1>
            <a href="{{ route('adminpage.order.index') }}">
                <button type="button" class="btn bg-red-600 text-white py-1 px-4 rounded-lg hover:bg-red-700">
                    &lt; Back
                </button>
            </a>
        </div>

        <div class="mr-4 rounded-xl bg-gray-50">
            <div class=" shadow-lg rounded-xl overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-medium text-center text-gray-900 mb-6">Edit an Order Here!</h2>
                    <form action="{{ route('adminpage.order.update', [$orders->id]) }}" method="POST" id=""
                        class="space-y-4 ">
                        @csrf
                        @method('PUT')
                        <div class="space-y-1">
                            <label for="">Id Order</label>
                            <input type="text" name="id" placeholder="" value="{{ $orders->id }}" disabled
                                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-green-200">
                        </div>

                        <div class="space-y-1">
                            <label for="">Nama User</label>
                            <input type="text" name="name" value="{{ $orders->user->name }}" disabled
                                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-green-200">
                        </div>

                        <div class="space-y-1">
                            <label for="">Total Harga</label>
                            <input type="text" name="total_price" placeholder="" value="{{ $orders->total_price }}" disabled
                                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-green-200">
                        </div>

                        <div class="space-y-1">
                            <label for="">Alamat Pengiriman </label>
                            <input type="text" name="shipping_address" placeholder="" disabled
                                value="{{ $orders->shipping_address }}"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-green-200">
                        </div>
                        <div class="space-y-1">
                            <label for="">Status</label>
                            <select name="payment_status"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-green-200">
                                @if ($orders->payment_status == 'pending')
                                    <option value="pending" selected>Pending</option>
                                    <option value="failed">Failed</option>
                                    <option value="paid">Paid</option>
                                @elseif ($orders->payment_status == 'failed')
                                    <option value="failed" selected>Failed</option>
                                    <option value="paid">Paid</option>
                                @elseif ($orders->payment_status == 'paid')
                                    <option value="paid" selected>Paid</option>
                                    <option value="failed">Failed</option>
                                @endif
                            </select>
                            @error('payment_status')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                        <hr class="border-gray-300 my-4">
                        <button type="submit" id="update"
                            class="w-full btn bg-indigo-500/90 rounded-lg hover:bg-indigo-700 text-white p-3">
                            Edit Order
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
