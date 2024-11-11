<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Main Styling -->
    @vite('resources/css/app.css')
    <link href="{{ asset('assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5') }}" rel="stylesheet" />
    <title>sidebar</title>
</head>

<body class="bg-gray-200">
    <!-- sidenav  -->
    <aside
        class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 p-0 bg-gradient-to-l from-indigo-400 to-indigo-600 shadow-soft-2xl transition-transform duration-200 xl:left-0 xl:translate-x-0">
        <div class="">
            <a class="block mt-3 px-3 text-sm whitespace-nowrap text-slate-700"
                href="{{ route('adminpage.dashboard') }}" target="_blank">
                <img src="{{ asset('img/LenteraPutih.png') }}"
                    class="inline h-full transition-all duration-200 ease-nav-brand max-h-16" alt="main_logo" />
            </a>
        </div>

        <hr class="h-px mx-2 mt-0 bg-white" />

        <div class="items-center block w-auto max-h-screen overflow-auto grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
                <li class="w-full mt-4">
                    <h6 class="pl-6 ml-2 text-white text-xs font-bold leading-tight uppercase opacity-60">Interface
                        pages</h6>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 px-2 text-sm text-white ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap transition-colors {{ request()->routeIs('adminpage.dashboard') ? 'bg-white font-semibold text-black shadow-soft-xl' : '' }} group hover:bg-white hover:text-black rounded-lg "
                        href="{{ route('adminpage.dashboard') }}">
                        <div
                            class="{{ request()->routeIs('adminpage.dashboard') ? 'bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl' : '' }} mr-2 flex h-10 w-10 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5 group-hover:bg-gradient-to-tl group-hover:from-purple-700 group-hover:to-pink-500">
                            <!-- Logo Place -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none"
                                stroke="{{ request()->routeIs('adminpage.dashboard') ? 'white' : 'currentColor' }}"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-home text-indigo-950 group-hover:text-white">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 px-2 text-sm text-white ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap transition-colors {{ request()->routeIs('adminpage.user.index') ? 'bg-white font-semibold text-black shadow-soft-xl' : '' }} group hover:bg-white hover:text-black rounded-lg "
                        href="{{ route('adminpage.user.index') }}">
                        <div
                            class="{{ request()->routeIs('adminpage.user.index') ? 'bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl' : '' }} mr-2 flex h-10 w-10 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5 group-hover:bg-gradient-to-tl group-hover:from-purple-700 group-hover:to-pink-500 ">
                            <!-- Logo Place -->
                            <svg class="w-28 h-28 text-indigo-950 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none"
                                stroke="{{ request()->routeIs('adminpage.user.index') ? 'white' : 'currentColor' }}"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-users ">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Manage User</span>
                    </a>
                </li>


                <li class="mt-0.5 w-full">
                    <a class="py-2.7 px-2 text-sm text-white ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap transition-colors {{ request()->routeIs('adminpage.order.index') ? 'bg-white font-semibold text-black shadow-soft-xl' : '' }} group hover:bg-white hover:text-black rounded-lg "
                        href="{{ route('adminpage.order.index') }}">
                        <div
                            class="{{ request()->routeIs('adminpage.order.index') ? 'bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl' : '' }} mr-2 flex h-10 w-10 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5 group-hover:bg-gradient-to-tl group-hover:from-purple-700 group-hover:to-pink-500">
                            <!-- Logo Place -->
                            <svg class="w-28 h-28 text-indigo-950 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none"
                                stroke="{{ request()->routeIs('adminpage.order.index') ? 'white' : 'currentColor' }}"
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
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Order List</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 px-2 text-sm text-white ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap transition-colors {{ request()->routeIs('adminpage.product.index') ? 'bg-white font-semibold text-black shadow-soft-xl' : '' }} group hover:bg-white hover:text-black rounded-lg "
                        href="{{ route('adminpage.product.index') }}">
                        <div
                            class="{{ request()->routeIs('adminpage.product.index') ? 'bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl' : '' }} mr-2 flex h-10 w-10 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5 group-hover:bg-gradient-to-tl group-hover:from-purple-700 group-hover:to-pink-500">
                            <!-- Logo Place -->
                            <svg class="w-28 h-28 text-indigo-950 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none"
                                stroke="{{ request()->routeIs('adminpage.product.index') ? 'white' : 'currentColor' }}"
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
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Product</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 px-2 text-sm text-white ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap transition-colors {{ request()->routeIs('adminpage.category.index') ? 'bg-white font-semibold text-black shadow-soft-xl' : '' }} group hover:bg-white hover:text-black rounded-lg "
                        href="{{ route('adminpage.category.index') }}">
                        <div
                            class="{{ request()->routeIs('adminpage.category.index') ? 'bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl' : '' }} mr-2 flex h-10 w-10 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5 group-hover:bg-gradient-to-tl group-hover:from-purple-700 group-hover:to-pink-500">
                            <!-- Logo Place -->
                            <svg class="w-28 h-28 text-indigo-950 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24"
                                fill="{{ request()->routeIs('adminpage.category.index') ? 'white' : 'currentColor' }}"
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
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Category</span>
                    </a>
                </li>

                <li class="w-full mt-4">
                    <h6 class="pl-6 ml-2 text-xs text-white font-bold leading-tight uppercase opacity-60">Account pages
                    </h6>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 px-2 text-sm text-white ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap transition-all duration-100 rounded-lg group hover:bg-white hover:text-black"
                        href="{{ route('logout') }}">
                        <div
                            class="mr-2 flex h-10 w-10 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5 group-hover:bg-gradient-to-tl group-hover:from-purple-700 group-hover:to-pink-500">
                            <!-- Logo Place -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-logout-2 text-indigo-950 group-hover:text-white">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" />
                                <path d="M15 12h-12l3 -3" />
                                <path d="M6 15l-3 -3" />
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Logout</span>
                    </a>
                </li>
                
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 px-2 text-sm text-white ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap transition-all duration-100 rounded-lg group hover:bg-white hover:text-black"
                        href="{{ route('index') }}">
                        <div
                            class="mr-2 flex h-10 w-10 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5 group-hover:bg-gradient-to-tl group-hover:from-purple-700 group-hover:to-pink-500">
                            <!-- Logo Place -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-world text-indigo-950 group-hover:text-white">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                <path d="M3.6 9h16.8" />
                                <path d="M3.6 15h16.8" />
                                <path d="M11.5 3a17 17 0 0 0 0 18" />
                                <path d="M12.5 3a17 17 0 0 1 0 18" />
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Lentera Web</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- end sidenav -->

    <main class="ease-soft-in-out xl:ml-68.5 relative max-h-screen rounded-xl transition-all duration-200">
        <!-- Navbar -->
        <nav
            class="bg-white mt-4 shadow-soft-sm relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start">
            <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
                <nav>
                    <h4 class="mb-0 mt-2 font-bold capitalize">@yield('title')</h4>
                </nav>

                <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                    <div class="flex items-center md:ml-auto md:pr-4">
                        <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                            <span
                                class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                <i class="fas fa-search"></i>
                            </span>
                            <input type="text"
                                class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                placeholder="Type here..." />
                        </div>
                    </div>
                    <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                        <li class="flex items-center">
                            <a href=""
                                class="block px-0 py-2 text-sm font-semibold transition-all ease-nav-brand text-slate-500">
                                <i class="fa fa-user sm:mr-1"></i>
                                <span class="hidden sm:inline">{{ Auth::user()->name }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end Navbar -->

        <div class="flex flex-wrap">
            @yield('admin')
        </div>
        <!-- end cards -->
    </main>


    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- plugin for scrollbar  -->
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}" async></script>
    <!-- main script file  -->
    <script src="{{ asset('assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5') }}" async></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
