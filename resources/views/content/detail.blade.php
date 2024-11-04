<title>Detail</title>
@extends('navbar')

@section('content')
<div class="flex font-sans mt-28 mb-14 mx-44  ">
   <div class="flex-none h-96 w-96 relative group  border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg ">
      <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="" class="absolute  inset-0 w-full h-full object-cover" loading="lazy" />
      <div class="absolute w-20 h-20 -bottom-24 group  border-2 p-2 shadow-md shadow-indigo-500/40 rounded-lg">
         <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="" class="w-16 h-16" loading="lazy" />
      </div>
      <div class="absolute w-20 h-20 ml-24 -bottom-24 group  border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg">
         <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="" class="w-16 h-16" loading="lazy" />
      </div>
      <div class="absolute  w-20 h-20 ml-48 -bottom-24 group border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg">
         <img class="w-16 h-16" src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="" loading="lazy" />
      </div>
      <div class="absolute w-20 h-20 ml-72 -bottom-24 group border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg">
         <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="" class="w-16 h-16" loading="lazy" />
      </div>
   </div>

   <form class="flex-auto p-10 ml-20 ">
      <div class="">
         <h1 class="flex-auto text-4xl -mt-10 font-bold text-slate-900">
            Classic Utility Jacket
         </h1>
         <div class="text-lg font-semibold text-slate-500 mt-6 ">
            <p>Rp.500.000</p>
         </div>
         <div class="w-full flex-none text-sm font-medium text-slate-700 mt-6">
            In stock
         </div>
      </div>
      <div class="flex items-baseline mt-6 mb-6 pb-6 ">
         <div class="space-x-2 flex text-sm">
            <label>
               <input class="sr-only peer" name="size" type="radio" value="xs" checked />
               <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-indigo-500/90 peer-checked:text-white">
                  XS
               </div>
            </label>
            <label>
               <input class="sr-only peer" name="size" type="radio" value="s" />
               <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-indigo-500/90 peer-checked:text-white">
                  S
               </div>
            </label>
            <label>
               <input class="sr-only peer" name="size" type="radio" value="m" />
               <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-indigo-500/90 peer-checked:text-white">
                  M
               </div>
            </label>
            <label>
               <input class="sr-only peer" name="size" type="radio" value="l" />
               <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-indigo-500/90 peer-checked:text-white">
                  L
               </div>
            </label>
            <label>
               <input class="sr-only peer" name="size" type="radio" value="xl" />
               <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-indigo-500/90 peer-checked:text-white">
                  XL
               </div>
            </label>
         </div>
      </div>
      <!-- <div class="flex space-x-4 mb-6 text-sm font-medium">
         <div class="flex-auto flex space-x-4">
            <button class="h-10 px-6 font-semibold rounded-md border border-slate-200 bg-indigo-500/90 text-white hover:bg-white hover:text-indigo-500/90 " type="submit">
          Buy now
        </button>
            <button class="h-10 px-6 font-semibold rounded-md border border-slate-200 text-indigo-500/90 hover:bg-indigo-500/90 hover:text-white" type="button">
               Add to Cart
            </button>
         </div>
         <button class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-slate-300 border border-slate-200" type="button" aria-label="Like">
        <svg width="20" height="20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
        </svg>
      </button>
      </div> -->
      <p class="text-lg text-slate-700">
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Error saepe magnam, modi odit labore officia natus. Cum laudantium aperiam, cumque esse natus, alias blanditiis facilis omnis ex consectetur fugiat quaerat distinctio asperiores dolorem dolore repellendus sint ratione earum labore suscipit
         eygfyegfyge feuwgyfeg egywgfyew. <br><a class="readmore text-indigo-500/90">Read More </a>
      <!-- <div class="message text-lg">
         To give an attractive look to web sites, styles are heavily used.
         JQuery is a powerful JavaScript library that allows us to add dynamic elements to our web
         sites. Not only it is easy to learn, but it's easy to implement too. A person must have a
         good knowledge of HTML and CSS and a bit of JavaScript. jQuery is an open source project
         that provides a wide range of features with cross-platform compatibility. <br><a class="hide text-indigo-500/90">Hide</a>
      </div> -->
      </p>
   </form>
</div>
<!-- ulasan -->
<div class=" bg-gray-100 p-6">
   <div class="flex space-x-6">
      <!-- Left Section (Reviews) -->
      <div class="ml-60   bg-white p-6 rounded-lg shadow-md w-1/3">
         <h2 class="text-gray-800 text-lg font-semibold">ULASAN PEMBELI</h2>
         <div class="flex items-center mt-2">
            <span class="text-yellow-400 text-4xl">★</span>
            <span class="text-gray-800 text-4xl ml-2">4.8</span>
            <span class="text-gray-500 text-lg ml-1">/5.0</span>
         </div>
         <p class="text-gray-600 text-sm mt-1">100% pembeli merasa puas</p>
         <p class="text-gray-500 text-sm">4 rating • 1 ulasan</p>

         <div class="mt-4">
            <!-- Ratings Breakdown -->
            <div class="flex items-center text-gray-700">
               <span class="text-yellow-400">★</span>
               <span class="ml-2">5</span>
               <div class="w-3/4 h-2 bg-gray-200 ml-2 rounded-full">
                  <div class="bg-indigo-500/90 h-full w-3/4 rounded-full"></div>
               </div>
               <span class="ml-2">3</span>
            </div>
            <div class="flex items-center text-gray-700 mt-1">
               <span class="text-yellow-400">★</span>
               <span class="ml-2">4</span>
               <div class="w-3/4 h-2 bg-gray-200 ml-2 rounded-full">
                  <div class="bg-indigo-500/90 h-full w-1/4 rounded-full"></div>
               </div>
               <span class="ml-2">1</span>
            </div>
            <div class="flex items-center text-gray-700 mt-1">
               <span class="text-yellow-400">★</span>
               <span class="ml-2">3</span>
               <div class="w-3/4 h-2 bg-gray-200 ml-2 rounded-full"></div>
               <span class="ml-2">0</span>
            </div>
            <div class="flex items-center text-gray-700 mt-1">
               <span class="text-yellow-400">★</span>
               <span class="ml-2">2</span>
               <div class="w-3/4 h-2 bg-gray-200 ml-2 rounded-full"></div>
               <span class="ml-2">0</span>
            </div>
            <div class="flex items-center text-gray-700 mt-1">
               <span class="text-yellow-400">★</span>
               <span class="ml-2">1</span>
               <div class="w-3/4 h-2 bg-gray-200 ml-2 rounded-full"></div>
               <span class="ml-2">0</span>
            </div>
         </div>

         <!-- Selected Review -->
         <div class="mt-6">
            <h3 class="text-gray-800 font-semibold">ULASAN PILIHAN</h3>
            <div class="flex items-center mt-2">
               <span class="text-yellow-400">★★★★★</span>
               <span class="text-gray-500 text-sm ml-2">4 minggu lalu</span>
            </div>
            <p class="mt-2 text-gray-700">Keren, 😍 bajunya nyaman banget. Seller ramah dan responsif</p>
            <img src="https://via.placeholder.com/80" alt="Review Image" class="w-20 h-20 mt-2 rounded-md">
            <p class="text-gray-500 text-sm mt-2">9 orang terbantu</p>
         </div>
      </div>

      <!-- Right Section (Order) -->
      <div class="-mr-60 bg-white p-6 rounded-lg shadow-md w-1/3 h-1/2 sticky top-28">
         <h2 class="text-gray-800 text-lg font-semibold">Atur jumlah dan catatan</h2>
         <div class="flex items-center mt-4">
            <button class="bg-gray-200 px-3 py-1 rounded-l-lg">-</button>
            <input type="text" value="1" class="w-12 text-center border-gray-300 border-t border-b">
            <button class="bg-gray-200 px-3 py-1 rounded-r-lg">+</button>
            <span class="text-gray-500 ml-4">Stok Total: 983</span>
         </div>
         <p class="text-gray-800 text-2xl font-semibold mt-4">Rp500.000</p>
         <div class="flex space-x-4 mt-4">
            <button class="bg-indigo-500/90 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg"><a href="{{route('beli')}}">Beli</a></button>
            <button class="bg-indigo-500/90 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg">+ Keranjang</button>
         </div>
         <div class="flex items-center space-x-4 text-gray-500 text-sm mt-4">
            <span>💬 Chat</span>
            <span>❤️ Wishlist</span>
            <span>🔗 Share</span>
         </div>
      </div>
   </div>
</div>

<!-- recomend product -->
<div class="mx-auto max-w-2xl px-4 py-8 sm:px-6 sm:py-16 lg:max-w-7xl lg:px-8 shadow-md ">
   <h2 class="text-2xl font-bold tracking-tight text-gray-900 font-mont">Recomend</h2>

   <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
      <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg">
         <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
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
            <p class="text-sm font-medium text-gray-900">$35</p>
         </div>
      </div>

      <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg">
         <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
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
            <p class="text-sm font-medium text-gray-900">$35</p>
         </div>
      </div>


      <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg">
         <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
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
            <p class="text-sm font-medium text-gray-900">$35</p>
         </div>
      </div>

      <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg">
         <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
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
            <p class="text-sm font-medium text-gray-900">$35</p>
         </div>
      </div>
      <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg">
         <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
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
            <p class="text-sm font-medium text-gray-900">$35</p>
         </div>
      </div>
      <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg">
         <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
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
            <p class="text-sm font-medium text-gray-900">$35</p>
         </div>
      </div>
      <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg">
         <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
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
            <p class="text-sm font-medium text-gray-900">$35</p>
         </div>
      </div>
      <div class="group relative border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg">
         <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
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
            <p class="text-sm font-medium text-gray-900">$35</p>
         </div>
      </div>

      <!-- recommended products... -->
   </div>



</div>

@endsection

<script src="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.2.js" type="text/javascript"></script>
<script type="text/javascript">
   $(document).ready(function() {
      $(".message").hide();
      $("a.readmore").click(function() {
         $(".message").show();
         $(this).hide();
         $("a.hide").show();
      });
      $("a.hide").click(function() {
         $(".message").hide();
         $(this).hide();
         $("a.readmore").show();
      });
   });
</script>