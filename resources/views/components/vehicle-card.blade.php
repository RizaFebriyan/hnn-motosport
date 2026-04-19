<div class="group bg-[#0a0a0a] border border-gray-900 overflow-hidden hover:border-red-600/50 transition duration-500">
    <div class="relative h-64 overflow-hidden bg-zinc-900">
        <div class="absolute top-4 left-4 z-10">
            <span class="bg-red-600 text-white text-[9px] font-black px-3 py-1 uppercase tracking-tighter">
                {{ $bike->status ?? 'Tersedia' }}
            </span>
        </div>

        @if($bike->image && file_exists(public_path('storage/' . $bike->image)))
            <img src="{{ asset('storage/' . $bike->image) }}" alt="{{ $bike->title }}"
                class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition duration-700">
        @else
            <div class="w-full h-full flex items-center justify-center bg-zinc-900 border-b border-gray-900">
                <div class="text-center">
                    <p class="text-zinc-700 italic text-[10px] uppercase font-black tracking-[0.2em]">Image Coming Soon</p>
                    <p class="text-zinc-800 text-[8px] uppercase font-bold mt-1">HNN Motosport</p>
                </div>
            </div>
        @endif

        <div
            class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
            <a href="#"
                class="px-6 py-3 bg-white text-black font-black uppercase text-[10px] tracking-widest hover:bg-red-600 hover:text-white transition duration-300">
                Detail Unit
            </a>
        </div>
    </div>

    <div class="p-6">
        <div class="flex justify-between items-start mb-2">
            <span
                class="text-[13px] font-black text-red-600 uppercase tracking-widest">{{ $bike->brand->name ?? 'Brand' }}</span>
            <span class="text-[13px] font-bold text-gray-600 uppercase italic">{{ $bike->year }}</span>
        </div>
        <h3
            class="text-lg font-bold text-white mb-4 group-hover:text-red-500 transition duration-300 uppercase tracking-tighter leading-tight">
            {{ $bike->title }}
        </h3>

        <div class="flex justify-between items-center border-t border-gray-900 pt-5">
            <div class="flex flex-col">
                <span class="text-[9px] text-gray-600 uppercase font-bold tracking-tighter">Harga</span>
                <span class="text-lg font-black text-white italic tracking-tighter">
                    Rp {{ number_format($bike->price, 0, ',', '.') }}
                </span>
            </div>
            <div class="text-right">
                <span class="text-[9px] text-gray-600 uppercase font-bold tracking-tighter block">Mesin</span>
                <span class="text-sm font-bold text-gray-400">{{ $bike->cc ?? '-' }} CC</span>
            </div>
        </div>
    </div>
</div>