
<title>Pembayaran</title>
@extends('navbar')

@section('content')
<div class="absolute font-sans mt-20 w-full">

  <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <div class="mt-10">
      <h2 class="text-xl font-bold">Beli Langsung</h2>
      <p class="text-sm text-gray-500">Ini halaman terakhir dari proses belanjamu. Pastikan semua sudah benar, ya. :)</p>
    </div>
    <div class="mb-4 p-4 border rounded-lg">
      <div class="flex items-start space-x-4">
        <div class="flex items-center">
          <span class="bg-purple-500 text-white text-sm px-2 py-1 rounded">Lentera</span>
          <p class="ml-2 text-gray-700 text-sm">Renon</p>
        </div>
      </div>
      <div class="flex mt-4">
        <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Product Image" class="w-20 h-20 object-cover rounded">
        <div class="ml-4 flex-1">
          <h3 class="text-lg font-semibold">ini baju</h3>
          <p class="text-sm text-gray-500">4000gr Silver, NON BUNDLING</p>
          <div class="flex items-center mt-4">
                <button class="bg-white border border-gray-200 h-9 px-3 py-1 rounded-l-lg hover:bg-gray-200">-</button>
                <input type="text" value="1" class="w-12 h-9 text-center border-gray-300 border-t border-b">
                <button class="bg-white border border-gray-200 h-9 px-3 py-1 rounded-r-lg hover:bg-gray-200 ">+</button>
            </div>
          <p class="text-sm mt-2 text-blue-600">Sisa 5</p>
        </div>
      </div>
    <div class="bg-gray-100 p-6">
  <!-- Main Container -->
  <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md space-y-4">
    
    <!-- Title -->
    <div>
      <h2 class="text-xl font-bold">Beli Langsung</h2>
      <p class="text-sm text-gray-500">Ini halaman terakhir dari proses belanjamu. Pastikan semua sudah benar, ya. :)</p>
    </div>

    <!-- Address and Contact Section -->
    <div class="p-4 border rounded-lg bg-gray-50 space-y-2">
      <div class="flex items-center space-x-2">
        <span class="bg-gray-300 text-gray-800 text-xs px-2 py-1 rounded">Utama</span>
        <p class="font-semibold text-gray-700">Rumah - Dicky (6287758778743)</p>
      </div>
      <p class="text-sm text-gray-600">jalan bedugul gang tirta nomor 1, Kuta, Kab. Badung</p>
    </div>

    <!-- Shipping and Courier Options -->
    <div class="p-4 border rounded-lg bg-gray-50 space-y-4">
      <div class="flex justify-between items-center">
        <div class="flex flex-col">
          <label for="shipping-option" class="text-sm font-semibold text-gray-700">Pilih Pengiriman</label>
          <select id="shipping-option" class="mt-1 p-2 border rounded-lg focus:outline-none focus:border-blue-500">
            <option>Reguler</option>
            <option>Express</option>
            <option>Same Day</option>
          </select>
        </div>
        
        <div class="flex flex-col">
          <label for="courier-option" class="text-sm font-semibold text-gray-700">Pilih Kurir</label>
          <select id="courier-option" class="mt-1 p-2 border rounded-lg focus:outline-none focus:border-blue-500">
            <option>Kurir Rekomendasi (Rp140.000)</option>
            <option>Kurir Ekonomis (Rp100.000)</option>
            <option>Kurir Cepat (Rp160.000)</option>
          </select>
          <p class="text-xs text-gray-500 mt-1">Estimasi tiba 3 - 7 Nov</p>
        </div>
      </div>
    </div>
    <div class="p-4 border rounded-lg bg-gray-50 space-y-2">
      <h3 class="text-lg font-bold">Metode pembayaran</h3>
      <div class="flex items-center space-x-2 p-4 border rounded-lg bg-white">
        <input type="radio" id="payment-method" class="w-5 h-5 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
        <label for="payment-method" class="flex flex-col">
          <span class="font-semibold text-gray-700">BCA Virtual Account</span>
          <span class="text-sm text-gray-600">Pembelian barang Sale ini hanya bisa menggunakan metode pembayaran tertentu.</span>
        </label><br>
      </div>
      <div class="flex items-center space-x-2 p-4 border rounded-lg bg-white">
        <input type="radio" id="payment-method" class="w-5 h-5 text-indigo-600 focus:ring-indigo-500 border-indigo-700 rounded">
        <label for="payment-method" class="flex flex-col">
          <span class="font-semibold text-gray-700">Man Virtual Account</span>
          <span class="text-sm text-gray-600">Pembelian barang Sale ini hanya bisa menggunakan metode pembayaran tertentu.</span>
        </label><br>
      </div>
    </div>
    
  </div>
</div>
    <div class="bg-gray-50 p-4 rounded-lg border mt-6">
      <h3 class="text-lg font-bold mb-2">Ringkasan Belanja</h3>
      <div class="space-y-2">
        <div class="flex justify-between text-gray-600">
          <p>Total Harga (1 Barang)</p>
          <p>Rp500.000</p>
        </div>

      </div>
      <hr class="my-4">
      <div class="space-y-2">
        <div class="flex justify-between text-gray-600">
          <p>Biaya Layanan</p>
          <p>Rp1.000</p>
        </div>
        <div class="flex justify-between text-gray-600">
          <p>Biaya Jasa Aplikasi</p>
          <p>Rp0</p>
        </div>
      </div>
      <hr class="my-4">
      <div class="flex justify-between font-bold text-gray-900 text-lg">
        <p>Total Tagihan</p>
        <p>Rp501.000</p>
      </div>
      <button class="mt-4 w-full bg-indigo-500/90 hover:bg-indigo-700 text-white py-2 rounded-lg cursor-not-allowed" disabled><a href="">Bayar</a></button>
    </div>
  </div>
</div>

@endsection