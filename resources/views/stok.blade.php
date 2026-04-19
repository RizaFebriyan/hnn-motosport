@extends('layouts.public')

@section('content')
    <div class="bg-black min-h-screen pt-40 pb-20">
        <div class="max-w-7xl mx-auto px-6">

            <div class="mb-16 border-l-4 border-red-600 pl-6">
                <h1 class="text-4xl md:text-5xl font-black text-white uppercase italic leading-none">
                    Bike <span class="text-red-600">Stock</span>
                </h1>
                <p class="text-gray-500 mt-2 uppercase tracking-[0.2em] text-[10px] font-bold">Pilihan Unit Terbaik di
                    Tangerang Selatan</p>
            </div>

            <div class="flex flex-col lg:flex-row gap-12">

                <aside class="w-full lg:w-1/4">
                    <div class="bg-[#0a0a0a] border border-gray-900 p-6 sticky top-32">
                        <form action="{{ route('stok') }}" method="GET" class="space-y-8">
                            <div>
                                <h3
                                    class="text-white font-bold uppercase text-[11px] tracking-widest mb-4 border-b border-gray-900 pb-2">
                                    Cari Unit</h3>
                                <input type="text" name="search" value="{{ request('search') }}"
                                    placeholder="Contoh: Ninja..."
                                    class="w-full bg-black border border-gray-800 text-white px-4 py-3 text-xs focus:border-red-600 outline-none transition">
                            </div>

                            <div>
                                <h3
                                    class="text-white font-bold uppercase text-[11px] tracking-widest mb-4 border-b border-gray-900 pb-2">
                                    Kategori</h3>
                                <div class="grid grid-cols-2 lg:grid-cols-1 gap-3">
                                    @foreach($categories as $cat)
                                        <label class="flex items-center gap-3 cursor-pointer group">
                                            <input type="radio" name="category" value="{{ $cat->slug }}"
                                                class="appearance-none w-3 h-3 border border-gray-700 checked:bg-red-600 transition"
                                                {{ request('category') == $cat->slug ? 'checked' : '' }}>
                                            <span
                                                class="text-gray-500 text-[10px] uppercase font-bold group-hover:text-white transition">{{ $cat->name }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>

                            <div>
                                <h3
                                    class="text-white font-bold uppercase text-[11px] tracking-widest mb-4 border-b border-gray-900 pb-2">
                                    Rentang Harga</h3>
                                <div class="space-y-3">
                                    <input type="number" name="min_price" value="{{ request('min_price') }}"
                                        placeholder="Min (Rp)"
                                        class="w-full bg-black border border-gray-800 text-white px-4 py-3 text-xs focus:border-red-600 outline-none transition">
                                    <input type="number" name="max_price" value="{{ request('max_price') }}"
                                        placeholder="Max (Rp)"
                                        class="w-full bg-black border border-gray-800 text-white px-4 py-3 text-xs focus:border-red-600 outline-none transition">
                                </div>
                            </div>

                            <div class="pt-4 space-y-3">
                                <button type="submit"
                                    class="w-full py-4 bg-red-600 text-white font-black uppercase text-[10px] tracking-widest hover:bg-white hover:text-red-600 transition duration-500">
                                    Terapkan Filter
                                </button>
                                <a href="{{ route('stok') }}"
                                    class="block text-center text-gray-600 text-[9px] uppercase font-bold hover:text-white transition">Reset
                                    Filter</a>
                            </div>
                        </form>
                    </div>
                </aside>

                <main class="w-full lg:w-3/4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @forelse($vehicles as $item)
                            @include('components.vehicle-card', ['bike' => $item])
                        @empty
                            <div class="col-span-full py-24 text-center border border-dashed border-gray-900">
                                <p class="text-gray-600 italic uppercase tracking-widest text-xs">Maaf, unit belum tersedia
                                    untuk kriteria ini.</p>
                            </div>
                        @endforelse
                    </div>

                    <div class="mt-16">
                        {{ $vehicles->appends(request()->query())->links() }}
                    </div>
                </main>

            </div>
        </div>
    </div>
@endsection