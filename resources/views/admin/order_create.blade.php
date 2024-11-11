@extends('layout.sidebar')

@section('title')
    <h3 class="ml-4 mb-3 text-2xl font-bold">Create Order</h3>
@endsection

@section('admin')
@vite('resources/css/app.css')
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
            <div class="shadow-lg rounded-xl overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-medium text-center text-gray-900 mb-6">Create a New Order</h2>
                    <form action="{{ route('adminpage.order.store') }}" method="POST" data-redirect-route="/admin/orderlist" class="space-y-4">
                        @csrf

                        <div class="space-y-1">
                            <label for="user_id">Select User</label>
                            <select name="user_id" class="w-full p-2 border border-gray-300 rounded-lg">
                                <option value="">-- Choose User --</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                            @error('user_id')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="space-y-1">
                            <label for="total_price">Total Price</label>
                            <input type="text" name="total_price" class="w-full p-2 border border-gray-300 rounded-lg" required>
                            @error('total_price')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="space-y-1">
                            <label for="discount">Discount</label>
                            <input type="text" name="discount" class="w-full p-2 border border-gray-300 rounded-lg">
                        </div>

                        <div class="space-y-1">
                            <label for="shipping_address">Shipping Address</label>
                            <input type="text" name="shipping_address" class="w-full p-2 border border-gray-300 rounded-lg" required>
                            @error('shipping_address')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="space-y-1">
                            <label for="payment_status">Payment Status</label>
                            <select name="payment_status" class="w-full p-2 border border-gray-300 rounded-lg" required>
                                <option value="pending">Pending</option>
                                <option value="failed">Failed</option>
                                <option value="paid">Paid</option>
                            </select>
                            @error('payment_status')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                        <hr class="mx-8 h-0.5 bg-gray-500" />
                        <button type="submit" id="create" class="w-full btn bg-indigo-500/90 rounded-lg hover:bg-indigo-700 text-white p-2">
                            Create Order
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
