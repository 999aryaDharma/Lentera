<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.css" rel="stylesheet">

    <style>
        /* Animasi rotasi untuk ikon */
        .rotate-180 {
            transform: rotate(180deg);
        }
    </style>

</head>

<body>
    <nav
        class="h-20 shadow-md shadow-indigo-500/40 fixed w-full top-0 bg-white flex justify-around place-items-center z-50">
        <div class="mx-4 ml-12">
            <a href="{{ route('index') }}" class="text-white"><img src="{{ asset('img/logo.png') }}" alt="logo"
                    class="h-20"></a>
        </div>

        <form class="w-3/5 px-3 mb-4">
            <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="search"
                    class="mt-4 h-10 block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-indigo-500/40 focus:border-indigo-500/40 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search in Lentera" required />
            </div>
        </form>

        <div class="flex">
            @if (auth()->check() && auth()->user()->carts()->count() > 0)
                <div
                    class="bg-red-500 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center transform translate-x-2 -translate-y-2">
                    {{ auth()->user()->carts()->sum('qty') }}
                </div>
            @endif


            <a href="{{ route('cart.index') }}">
                <div
                    class="flex transition-background duration-300 ease-in-out hover:bg-indigo-500 hover:text-white p-1 px-2 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M17 17h-11v-14h-2" />
                        <path d="M6 5l14 1l-1 7h-13" />
                    </svg>
                    <span>Cart</span>
                </div>
            </a>

        </div>
        @guest
            <div class="flex justify-between gap-1 mx-1">
                <button
                    class="btn bg-indigo-500/90 h-8 rounded-lg hover:bg-indigo-700 transition-background duration-300 ease-in-out"><a
                        href="{{ route('login') }}" class="text-center m-5 text-white">Masuk</a></button>
                <button
                    class="btn rounded-lg h-8 border-2 border-indigo-500/90 hover:bg-indigo-700 text-indigo-500/90 hover:text-white transition-background duration-300 ease-in-out"><a
                        href="{{ route('register') }}" class="text-center m-5 ">Daftar</a></button>
            </div>
        @else
            <div class="relative mr-16">
                <!-- Bagian ikon dan nama user -->
                <div class="flex items-center cursor-pointer transition-background duration-300 ease-in-out hover:bg-indigo-500 hover:text-white p-1 px-2 rounded-md"
                    onclick="toggleDropdown()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    </svg>
                    <h1>{{ Auth::user()->name }}</h1>
                    <svg id="chevronIcon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down pl-1 transition-transform duration-200 ease-out">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6 9l6 6l6 -6" />
                    </svg>
                </div>

                <!-- User Dropdown -->
                <div id="dropdownMenu"
                    class="absolute right-0 mt-2 w-40 bg-white border border-gray-300 rounded-lg shadow-lg opacity-0 transform scale-95 transition-all duration-200 ease-out hidden">
                    @if (Auth::user()->role == 'admin')
                        <div class="flex pl-2 py-0 hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-home mt-2">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                            </svg>
                            <a href="{{ route('adminpage.dashboard') }}"
                                class="block px-2 py-2 mt-1 text-sm font-bold text-gray-700 rounded-lg">Admin Page</a>
                        </div>
                        <hr class="mx-3">
                    @endif
                    <div class="flex pl-2 py-0 hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-logout my-2 ml-1">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                            <path d="M9 12h12l-3 -3" />
                            <path d="M18 15l3 -3" />
                        </svg>
                        <a id='logout'
                            class="block px-1 py-2 text-sm font-bold text-gray-700 rounded-lg cursor-pointer">Logout</a>
                    </div>
                    <hr class="mx-3">
                    <div class="flex pl-2 py-0 hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-notes my-2">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />
                            <path d="M9 7l6 0" />
                            <path d="M9 11l6 0" />
                            <path d="M9 15l4 0" />
                        </svg>
                        <a href="{{ route('order.user') }}"
                            class="block px-2 py-2 text-sm font-bold text-gray-700 rounded-lg">Your Orders</a>
                    </div>
                </div>
            </div>
        @endguest
    </nav>

    @yield('content')

    <!-- foooter -->
    <footer class="border-t-2 border-indigo-500/40 bg-indigo-800 mt-24 text-white">
        <div class=" w-1/3 mx-10 py-10">
            <img src="{{ asset('img/logo.png') }}" alt="" class="h-28">
            <p class="py-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe officiis rem dolorum illum
                nesciunt. Necessitatibus?.</p>
            <div class="flex gap-5">
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                        <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                        <path d="M16.5 7.5v.01" />
                    </svg>
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-brand-tiktok">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M21 7.917v4.034a9.948 9.948 0 0 1 -5 -1.951v4.5a6.5 6.5 0 1 1 -8 -6.326v4.326a2.5 2.5 0 1 0 4 2v-11.5h4.083a6.005 6.005 0 0 0 4.917 4.917z" />
                    </svg>
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                    </svg>
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-brand-youtube">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z" />
                        <path d="M10 9l5 3l-5 3z" />
                    </svg>
                </a>
            </div>
        </div>
    </footer>
    {{-- User DropDown --}}
    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('dropdownMenu');
            const chevronIcon = document.getElementById('chevronIcon');

            if (dropdown.classList.contains('hidden')) {
                dropdown.classList.remove('hidden');
                chevronIcon.classList.add('rotate-180'); // Menambahkan rotasi ke ikon
                setTimeout(() => {
                    dropdown.classList.add('opacity-100', 'scale-100');
                    dropdown.classList.remove('opacity-0', 'scale-95');
                }, 10); // Slight delay to ensure transition applies
            } else {
                dropdown.classList.add('opacity-0', 'scale-95');
                dropdown.classList.remove('opacity-100', 'scale-100');
                chevronIcon.classList.remove('rotate-180'); // Menghapus rotasi dari ikon
                setTimeout(() => {
                    dropdown.classList.add('hidden');
                }, 300); // Match duration to transition time
            }
        }

        // Menutup dropdown ketika diklik di luar
        window.addEventListener('click', function(e) {
            const dropdown = document.getElementById('dropdownMenu');
            const chevronIcon = document.getElementById('chevronIcon');

            if (!dropdown.contains(e.target) && !e.target.closest('.flex')) {
                dropdown.classList.add('opacity-0', 'scale-95');
                dropdown.classList.remove('opacity-100', 'scale-100');
                chevronIcon.classList.remove('rotate-180'); // Menghapus rotasi dari ikon saat dropdown tertutup
                setTimeout(() => {
                    dropdown.classList.add('hidden');
                }, 300); // Match duration to transition time
            }
        });
    </script>

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
