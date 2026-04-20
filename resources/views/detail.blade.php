@extends('layouts.public')

@section('content')
    <div class="bg-black min-h-screen pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-6">

            <div class="mb-8">
                <a href="{{ route('stok') }}"
                    class="text-gray-500 hover:text-red-600 text-xs font-bold uppercase tracking-widest transition">
                    &larr; Kembali ke Stok
                </a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="space-y-4">
                    <div class="aspect-video bg-zinc-900 overflow-hidden border border-gray-900 group">
                        <img src="{{ asset('storage/' . $vehicle->image) }}" alt="{{ $vehicle->title }}"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="grid grid-cols-4 gap-4">
                        <div class="aspect-square bg-zinc-900 border border-red-600"></div>
                        <div class="aspect-square bg-zinc-900 border border-gray-900"></div>
                        <div class="aspect-square bg-zinc-900 border border-gray-900"></div>
                    </div>
                </div>

                <div class="flex flex-col">
                    <div class="mb-6">
                        <span class="text-red-600 font-black uppercase tracking-[0.3em] text-xs">
                            {{ $vehicle->brand->name }} / {{ $vehicle->category->name }}
                        </span>
                        <h1 class="text-4xl md:text-5xl font-black text-white uppercase italic leading-none mt-2">
                            {{ $vehicle->title }}
                        </h1>
                        <p class="text-3xl font-black text-white mt-4 italic border-b border-gray-900 pb-6">
                            Rp {{ number_format($vehicle->price, 0, ',', '.') }}
                        </p>
                    </div>

                    <div class="grid grid-cols-2 gap-y-6 gap-x-4 mb-8">
                        <div>
                            <p class="text-[10px] text-gray-500 uppercase font-black tracking-widest">Tahun Produksi</p>
                            <p class="text-white font-bold">{{ $vehicle->year }}</p>
                        </div>
                        <div>
                            <p class="text-[10px] text-gray-500 uppercase font-black tracking-widest">Kapasitas Mesin</p>
                            <p class="text-white font-bold">{{ $vehicle->cc }} CC</p>
                        </div>
                        <div>
                            <p class="text-[10px] text-gray-500 uppercase font-black tracking-widest">Warna</p>
                            <p class="text-white font-bold">{{ $vehicle->color ?? '-' }}</p>
                        </div>
                        <div>
                            <p class="text-[10px] text-gray-500 uppercase font-black tracking-widest">Status Pajak</p>
                            <p class="text-green-500 font-bold">Hidup / Aktif</p>
                        </div>
                    </div>

                    @php
                        $message = "Halo HNN Motosport, saya tertarik dengan unit " . $vehicle->title . " (" . $vehicle->year . "). Apakah unit ini masih tersedia?";
                        $wa_link = "https://wa.me/6281234567890?text=" . urlencode($message);
                    @endphp

                    <a href="{{ $wa_link }}" target="_blank"
                        class="w-full bg-red-600 hover:bg-white text-white hover:text-black py-5 text-center font-black uppercase text-xs tracking-[0.2em] transition duration-500 flex items-center justify-center gap-3">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.438 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z" />
                        </svg>
                        Hubungi via WhatsApp
                    </a>
                </div>
            </div>

            <div class="mt-20 border-t border-gray-900 pt-12">
                <h3 class="text-white font-black uppercase text-sm tracking-widest mb-6">Deskripsi Unit</h3>
                <div class="text-gray-400 text-sm leading-relaxed max-w-3xl">
                    {!! nl2br(e($vehicle->description)) !!}
                </div>
            </div>

        </div>
    </div>
@endsection