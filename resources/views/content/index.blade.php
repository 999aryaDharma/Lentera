<title>Lentera</title>

@extends('navbar')


@section('content')
<div class="mt-28">

   <!-- Carousel -->
   <div id="default-carousel" class="relative  mx-auto max-w-2xl lg:max-w-7xl shadow-md h-80" data-carousel="slide">
   <!-- Carousel wrapper -->
      <div class="relative h-80 overflow-hidden rounded-lg md:h-80">
            <!-- item -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
               <img src="img/LenteraPutih.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
      
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
               <img src="img/LenteraPutih.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
   
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
               <img src="img/LenteraPutih.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
               <img src="img/LenteraPutih.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
               <img src="img/LenteraPutih.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
         </div>
      <!-- Slider indicators -->
      <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
         </div>
      <!-- Slider controls -->
      <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
               <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
               </svg>
               <span class="sr-only">Previous</span>
            </span>
         </button>
      <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
               <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
               </svg>
               <span class="sr-only">Next</span>
            </span>
         </button>
   </div>
   
   <!-- New Product -->
   <div class="mx-auto max-w-2xl px-4 py-8 sm:px-6 sm:py-10 lg:max-w-7xl lg:px-8 shadow-md mt-24 drop-shadow-lg">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">New Product</h2>

      <div class="mt-6 grid grid-cols-1 gap-x-3 gap-y-5 sm:grid-cols-2 lg:grid-cols-5 xl:gap-x-4">
         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="{{route('detail')}}">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>

         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>

         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>

         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>

         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>

         <!-- More products... -->
      </div>



   </div>


   <!-- Best Seller -->
   <div class="mx-auto max-w-2xl mt-5 px-4 py-8 sm:px-6 sm:py-10 lg:max-w-7xl lg:px-8 shadow-md ">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">Best Seller</h2>

      <div class="mt-6 grid grid-cols-1 gap-x-3 gap-y-5 sm:grid-cols-2 lg:grid-cols-5 xl:gap-x-4">
         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>

         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>

         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>

         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>

         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>
         <!-- More products... -->
      </div>


   </div>


   <!-- All Produck -->
   <div class="mx-auto  max-w-2xl mt-24 px-4 py-8 sm:px-6 sm:py-10 lg:max-w-7xl lg:px-8 shadow-inner ">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">All Product</h2>

      <div class="mt-6 grid grid-cols-1 gap-x-3 gap-y-5 sm:grid-cols-2 lg:grid-cols-5 xl:gap-x-4">
         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>

         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>

         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>

         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>

         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>

         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>

         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>

         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>

         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>

         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>

         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>

         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>

         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>

         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>

         <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg max-w-60 max-h-72">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 max-h-52">
               <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="max-h-52 max-w-52 object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
               <div>
                  <h3 class="text-sm text-gray-700">
                     <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Basic Tee
                     </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Black</p>
               </div>
               <p class="text-sm font-medium text-gray-900">Rp 100.000</p>
            </div>
         </div>
         <!-- More products... -->
      </div>
   </div>

   <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

   @endsection