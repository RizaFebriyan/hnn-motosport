@extends('layouts.public')

@section('content')

    <!-- Hero Section -->

    <div class="relative h-[100dvh] w-full flex items-center bg-[#0a0a0a] overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('img/hero-bg.png') }}" alt="Hero Background"
                class="w-full h-full object-cover object-center opacity-40 grayscale">
            <div
                class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-black/20 md:bg-gradient-to-r md:from-black md:via-black/80 md:to-transparent">
            </div>
        </div>

        <div class="relative w-full max-w-7xl mx-auto px-6 sm:px-8 pt-20 md:pt-0">
            <div class="max-w-3xl">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 bg-red-600/20 border border-red-600/40 text-red-500 text-[9px] md:text-xs font-black uppercase tracking-[0.2em] mb-6">
                    <span class="w-1.5 h-1.5 rounded-full bg-red-600 animate-pulse"></span>
                    Dealer Kendaraan Bekas Berkualitas - Pamulang
                </div>

                <h1
                    class="text-3xl sm:text-4xl md:text-7xl font-black text-white uppercase tracking-tighter leading-tight mb-6">
                    SOLUSI KENDARAAN <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-800">
                        BEKAS TERPERCAYA
                    </span>
                </h1>

                <p
                    class="text-gray-300 text-sm md:text-xl mb-8 border-l-4 border-red-600 pl-4 max-w-2xl font-light leading-relaxed">
                    Tersedia berbagai pilihan unit mulai dari <b class="font-semibold">Matic, Bebek, Sport, hingga Mobil
                        Bekas.</b> Kondisi prima, dan harga terbaik di Tangerang Selatan.
                </p>

                <div class="flex flex-col sm:flex-row items-center gap-4">
                    <a href="/stok-motor"
                        class="w-full sm:w-auto px-8 py-4 bg-red-600 text-white font-black uppercase text-xs tracking-widest hover:bg-white hover:text-red-600 transition duration-500 text-center">
                        Cek Stok Unit
                    </a>
                    <a href="https://wa.me/6282218796819" target="_blank"
                        class="w-full sm:w-auto px-8 py-4 bg-transparent border border-gray-700 text-white font-black uppercase text-xs tracking-widest hover:border-red-600 transition duration-500 text-center">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 right-0 w-1/3 h-1/2 bg-red-600/10 blur-[120px] pointer-events-none"></div>
    </div>

    <!-- Hero end -->

    <!-- Categories -->

    <div class="bg-[#0f0f0f] py-16 border-b border-gray-900">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-sm font-black text-red-600 uppercase tracking-[0.3em] mb-2">Kategori</h2>
                <p class="text-3xl font-bold uppercase italic">Cari Berdasarkan Jenis</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                @foreach($categories as $cat)
                    <a href="/stok-motor?category={{ $cat->slug }}"
                        class="group bg-black border border-gray-800 p-6 text-center hover:border-red-600 transition duration-500">
                        <div class="mb-4 flex justify-center">
                            <div
                                class="w-12 h-12 bg-gray-900 rounded-full flex items-center justify-center group-hover:bg-red-600 transition duration-500">
                                <svg class="w-6 h-6 text-gray-500 group-hover:text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                        </div>
                        <span
                            class="text-xs font-bold uppercase tracking-widest group-hover:text-red-600">{{ $cat->name }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Categories end -->

    <!-- Recent Items -->

    <div class="py-24 bg-black">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-4">
                <div>
                    <h2 class="text-sm font-black text-red-600 uppercase tracking-[0.3em] mb-2">Stok Terbaru</h2>
                    <p class="text-4xl font-black uppercase italic leading-none text-white">Recent <span
                            class="text-red-600">Items</span></p>
                </div>
                <a href="/stok-motor"
                    class="text-xs font-bold uppercase tracking-widest text-gray-500 hover:text-white border-b border-gray-800 pb-1 transition">
                    Lihat Semua Stok &rarr;
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($recent_vehicles as $bike)
                    <div
                        class="group bg-[#0a0a0a] border border-gray-900 overflow-hidden hover:border-red-600/50 transition duration-500">
                        <div class="relative h-64 overflow-hidden bg-gray-900">
                            <div class="absolute top-4 left-4 z-10">
                                <span class="bg-red-600 text-white text-[10px] font-black px-3 py-1 uppercase tracking-tighter">
                                    {{ $bike->status }}
                                </span>
                            </div>

                            <div
                                class="w-full h-full flex items-center justify-center bg-zinc-900 group-hover:scale-110 transition duration-700">
                                <p class="text-zinc-700 italic text-sm uppercase font-bold tracking-widest">Image Coming Soon
                                </p>
                            </div>

                            <div
                                class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                                <a href="#"
                                    class="px-6 py-3 bg-white text-black font-bold uppercase text-xs tracking-widest hover:bg-red-600 hover:text-white transition duration-300">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="flex justify-between items-start mb-2">
                                <span
                                    class="text-[10px] font-bold text-red-600 uppercase tracking-widest">{{ $bike->brand->name }}</span>
                                <span class="text-[10px] font-bold text-gray-500 uppercase italic">{{ $bike->year }}</span>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-4 group-hover:text-red-500 transition duration-300">
                                {{ $bike->title }}
                            </h3>

                            <div class="flex justify-between items-center border-t border-gray-900 pt-5">
                                <div class="flex flex-col">
                                    <span class="text-[10px] text-gray-500 uppercase font-bold">Harga</span>
                                    <span class="text-lg font-black text-white italic">Rp
                                        {{ number_format($bike->price, 0, ',', '.') }}</span>
                                </div>
                                <div class="text-right">
                                    <span class="text-[10px] text-gray-500 uppercase font-bold block">Mesin</span>
                                    <span class="text-sm font-bold text-gray-300">{{ $bike->cc }} CC</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Recent Items end -->

@endsection