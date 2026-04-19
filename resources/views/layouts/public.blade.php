<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HNN MotoSport</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white font-sans selection:bg-red-600">

    <nav class="bg-[#111] border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center gap-4">
                <img src="{{ asset('img/logo_hnn.png') }}" alt="Logo" class="h-12">
                <span class="font-bold text-xl tracking-tighter">HNN <span class="text-red-600">MOTOSPORT</span></span>
            </div>
            <div class="hidden md:flex space-x-6 text-sm font-bold uppercase">
                <a href="/" class="hover:text-red-600 transition">Beranda</a>
                <a href="/stok-motor" class="hover:text-red-600 transition">Stok</a>
                <a href="/tentang-kami" class="hover:text-red-600 transition">Tentang Kami</a>
                <a href="/jual-kendaraan" class="hover:text-red-600 transition">Jual Kendaraan</a>
            </div>
        </div>
        <div class="h-1 bg-gradient-to-r from-red-600 to-red-800"></div>
    </nav>

    <main>
        @yield('content')
    </main>

</body>

</html>