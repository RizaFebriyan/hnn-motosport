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

<body class="bg-black text-white font-sans" x-data="{ mobileMenuOpen: false }">

    <nav class="fixed top-0 left-0 w-full z-50 bg-black/90 backdrop-blur-md border-b border-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('img/logo_hnn.png') }}" alt="HNN Logo" class="h-10 w-auto">
                    <div class="flex flex-col">
                        <span class="font-black text-xl tracking-tighter leading-none">HNN <span
                                class="text-red-600">MOTOSPORT</span></span>
                    </div>
                </div>

                <div class="hidden md:flex items-center space-x-8 text-sm font-bold uppercase tracking-widest">
                    <a href="/" class="hover:text-red-600 transition">Beranda</a>
                    <a href="/stok-motor" class="hover:text-red-600 transition">Stok</a>
                    <a href="/tentang-kami" class="hover:text-red-600 transition">Tentang Kami</a>
                    <a href="/jual-kendaraan" class="hover:text-red-600 transition">Jual
                        Kendaraan</a>
                </div>

                <div class="md:hidden flex items-center">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-white focus:outline-none">
                        <svg x-show="!mobileMenuOpen" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                        <svg x-show="mobileMenuOpen" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" x-cloak>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
            class="md:hidden bg-[#111] border-b border-gray-800" x-cloak>
            <div class="px-4 pt-2 pb-6 space-y-1 text-center font-bold uppercase tracking-widest">
                <a href="/" class="block py-4 border-b border-gray-900 hover:text-red-600">Beranda</a>
                <a href="/stok-motor" class="block py-4 border-b border-gray-900 hover:text-red-600">Stok</a>
                <a href="/tentang-kami" class="block py-4 border-b border-gray-900 hover:text-red-600">Tentang Kami</a>
                <a href="/jual-kendaraan" class="block py-4 border-b border-gray-900 hover:text-red-600">Jual
                    Kendaraan</a>
            </div>
        </div>
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
                <p>&copy; 2026 HNN MotoSport by R.A.F. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>

</html>