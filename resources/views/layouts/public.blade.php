<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HNN MotoSport</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logo_hnn.png') }}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
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

    <footer class="bg-gray-950 border-t border-gray-900 py-12 mt-20">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div class="text-gray-400 text-sm">
                <p class="font-bold text-white mb-2">HNN MOTOSPORT</p>
                <p>Jl. Mujair Raya No.42A, RT.1/RW.4, Bambu Apus,</p>
                <p>Kec. Pamulang, Kota Tangerang Selatan, Banten 15414.</p>
            </div>
            <div class="text-center md:text-right text-gray-500 text-xs">
                <p>&copy; 2026 HNN MotoSport. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>

</html>