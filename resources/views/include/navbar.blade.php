<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title></title>
</head>

<body>
    <nav class="h-20 shadow-md shadow-indigo-500/40 fixed w-full top-0 bg-white flex justify-around place-items-center z-50">
        <div>
            <a href="#" class="text-white"><img src="img/logo.png" alt="logo" class="h-20"></a>
        </div>
        <div class="w-1/2 border-2 rounded-lg flex h-8 place-items-center">
            <svg class="ml-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                <path d="M21 21l-6 -6" />
            </svg>
            <input type="text" placeholder="Cari di Lentera" class="w-full focus:outline-none pl-5">
        </div>
        <div>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 17h-11v-14h-2" />
                    <path d="M6 5l14 1l-1 7h-13" />
                </svg></a>
        </div>
        <div class="justify-between">
            <button class="btn bg-indigo-500/90 h-8 rounded-lg hover:bg-indigo-700"><a href="" class="text-center m-5 text-white">Masuk</a></button>
            <button class="btn rounded-lg h-8 border-2 border-indigo-500/90 hover:bg-indigo-700 text-indigo-500/90 hover:text-white"><a href="" class="text-center m-5 ">Daftar</a></button>
        </div>
    </nav>
</body>

</html>