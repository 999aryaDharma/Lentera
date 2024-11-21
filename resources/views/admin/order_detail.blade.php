@extends('layout.sidebar')

@section('title')
    <h3 class="ml-4">Order Detail</h3>
@endsection

@section('admin')
<!-- Order Detail -->
<div class="flex w-full mt-8 mx-6">
    <div class="bg-white rounded-2xl">
        <div class="flex font-sans m-8">
            <div
                class="flex-none h-80 w-80 relative group  border-2 p-3 shadow-md shadow-indigo-500/40 rounded-lg ">
                <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg"
                    alt="" class="absolute  inset-0 w-full h-full object-cover" loading="lazy" />
            </div>

            <div class="flex-auto mt-8 ml-6">
                <div class="">
                    <div class="flex -mt-10 justify-between">
                        <h1 class="text-4xl font-bold text-slate-900">
                            Classic Utility Jacket <span class="text-lg">(Id_Product)</span>
                        </h1>
                    </div>
                    <!-- Right Section (Order) -->
                    <div class="w-full p-3 pb-1 rounded-lg shadow-md">
                        <div class="flex items-center justify-between mx-5">
                            <h2 class="text-gray-800 text-lg font-semibold">Price/pcs: </h2>
                            <span class="font-bold text-xl">Rp500.000</span>
                        </div>
                        <hr class="h-px mx-1 mt-0 mb-1 bg-gray-500" />
                        <div class="flex items-center justify-between mx-5">
                            <h2 class="text-gray-800 text-lg font-semibold">Jumlah: </h2>
                            <span class="font-bold text-xl">12</span>
                        </div>
                        <hr class="h-px mx-1 mt-0 mb-1 bg-gray-500" />
                        <div class="flex items-center justify-between mx-5">
                            <h2 class="text-gray-800 text-lg font-semibold">Subtotal: </h2>
                            <span class="font-bold text-xl">Rp6.000.000</span>
                        </div>
                        <hr class="h-px mx-1 mt-0 mb-1 bg-gray-500" />
                        <div class="flex items-center justify-between mx-5">
                            <h2 class="text-gray-800 text-lg font-semibold">Discount: </h2>
                            <span class="font-bold text-xl">0%</span>
                        </div>
                        <hr class="h-px mx-1 mt-0 mb-1 bg-gray-500" />
                        <div class="flex items-center justify-between mx-5">
                            <h2 class="text-gray-800 text-lg font-semibold">Total: </h2>
                            <span class="font-bold text-xl">Rp6.000.000</span>
                        </div>
                        <hr class="h-px mx-1 mt-0 mb-1 bg-gray-500" />
                        <div class="flex items-center justify-between mx-5">
                            <h2 class="text-gray-800 text-lg font-semibold">Size: </h2>
                            <div class="flex items-baseline my-1">
                                <div class="space-x-2 flex text-sm">
                                    <label>
                                        <input class="sr-only peer" name="size" type="radio" value="xs"
                                            checked />
                                        <div
                                            class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-indigo-500/90 peer-checked:text-white">
                                            XS
                                        </div>
                                    </label>
                                    <label>
                                        <input class="sr-only peer" name="size" type="radio"
                                            value="s" />
                                        <div
                                            class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-indigo-500/90 peer-checked:text-white">
                                            S
                                        </div>
                                    </label>
                                    <label>
                                        <input class="sr-only peer" name="size" type="radio"
                                            value="m" />
                                        <div
                                            class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-indigo-500/90 peer-checked:text-white">
                                            M
                                        </div>
                                    </label>
                                    <label>
                                        <input class="sr-only peer" name="size" type="radio"
                                            value="l" />
                                        <div
                                            class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-indigo-500/90 peer-checked:text-white">
                                            L
                                        </div>
                                    </label>
                                    <label>
                                        <input class="sr-only peer" name="size" type="radio"
                                            value="xl" />
                                        <div
                                            class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-indigo-500/90 peer-checked:text-white">
                                            XL
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div>
            <p class="text-lg text-slate-700 pb-3 px-8">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex totam quo ad amet aut nesciunt sit. Cumque eaque aliquam sed et optio consequuntur harum? Cupiditate porro ducimus architecto soluta ratione!
                <br>
                <a class="readmore cursor-pointer text-indigo-500/90">Read More </a>
            </p>
        </div>
    </div>
</div>
<!--Order Detail End-->	
@endsection
