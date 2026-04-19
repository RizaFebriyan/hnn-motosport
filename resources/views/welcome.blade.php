@extends('layouts.public')

@section('content')

    <div class="relative min-h-screen w-full flex items-center bg-[#0a0a0a] overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('img/hero-bg.png') }}" alt="Hero Background"
                class="w-full h-full object-cover object-center opacity-40 grayscale">
            <div
                class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-black/20 md:bg-gradient-to-r md:from-black md:via-black/80 md:to-transparent">
            </div>
        </div>

        <div class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 md:py-0">
            <div class="max-w-3xl">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 bg-red-600/20 border border-red-600/40 text-red-500 text-[10px] md:text-xs font-black uppercase tracking-[0.2em] mb-8">
                    <span class="w-2 h-2 rounded-full bg-red-600 animate-pulse"></span>
                    Dealer Kendaraan Bekas Berkualitas - Pamulang
                </div>

                <h1 class="text-4xl md:text-7xl font-black text-white uppercase tracking-tighter leading-[1.1] mb-8">
                    SOLUSI KENDARAAN <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-800 drop-shadow-sm">
                        BEKAS TERPERCAYA
                    </span>
                </h1>

                <p
                    class="text-gray-300 text-base md:text-xl mb-12 border-l-4 border-red-600 pl-5 max-w-2xl font-light leading-relaxed">
                    Tersedia berbagai pilihan unit mulai dari **Matic, Bebek, Sport, hingga Mobil Bekas**. Kondisi prima,
                    surat lengkap, dan harga terbaik di Tangerang Selatan.
                </p>

                <div class="flex flex-col sm:flex-row items-center gap-4">
                    <a href="/stok-motor"
                        class="w-full sm:w-auto px-10 py-5 bg-red-600 text-white font-black uppercase text-sm tracking-widest hover:bg-white hover:text-red-600 transition duration-500 shadow-xl text-center">
                        Cek Stok Unit
                    </a>
                    <a href="https://wa.me/6282218796819" target="_blank"
                        class="w-full sm:w-auto px-10 py-5 bg-transparent border border-gray-700 text-white font-black uppercase text-sm tracking-widest hover:border-red-600 transition duration-500 text-center">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 right-0 w-1/3 h-1/2 bg-red-600/10 blur-[120px] pointer-events-none"></div>
    </div>


    <div class="py-20 bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex justify-between items-end mb-10 border-b border-gray-800 pb-4">
                <h2 class="text-3xl font-black uppercase tracking-tight flex items-center gap-3">
                    <span class="w-8 h-1 bg-red-600 block"></span>
                    Featured Hot Deals
                </h2>
                <a href="/stok-motor"
                    class="text-sm font-bold text-gray-400 hover:text-red-600 uppercase transition hidden md:block">
                    View All Stock &rarr;
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($recent_vehicles as $bike)
                    <div
                        class="bg-[#111] border border-gray-800 rounded-sm overflow-hidden group hover:-translate-y-2 hover:border-red-600 transition duration-300 shadow-lg">
                        <div class="relative h-64 bg-gray-900 flex items-center justify-center overflow-hidden">
                            <div
                                class="absolute top-4 left-0 bg-red-600 text-white text-[10px] font-black uppercase px-3 py-1 z-10 shadow-md transform -rotate-45 -translate-x-4 translate-y-2 w-32 text-center">
                                Special
                            </div>

                            <span class="text-gray-700 italic text-sm group-hover:scale-110 transition duration-500">[ Tempat
                                Gambar Motor ]</span>

                            <div class="absolute bottom-4 right-0 bg-red-600 px-4 py-2">
                                <span class="text-white font-black text-lg tracking-tight">RP
                                    {{ number_format($bike->price, 0, ',', '.') }}</span>
                            </div>
                        </div>

                        <div class="p-6">
                            <p class="text-xs text-gray-500 font-bold uppercase mb-2 tracking-wider">
                                {{ $bike->brand->name }} &bull; {{ $bike->category->name }}
                            </p>
                            <h3
                                class="text-xl font-bold mb-4 text-white line-clamp-2 leading-snug group-hover:text-red-500 transition">
                                {{ $bike->title }}
                            </h3>

                            <div
                                class="flex justify-between items-center border-t border-gray-800 pt-4 mt-4 text-xs font-bold text-gray-400 uppercase">
                                <span>Mileage: <span class="text-white">1,200 Km</span></span>
                                <a href="#" class="text-red-600 hover:text-white transition flex items-center gap-1">
                                    Details <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection