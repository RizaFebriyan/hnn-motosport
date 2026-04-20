@extends('layouts.public')

@section('content')
    <div class="bg-black min-h-screen pt-32 pb-20">
        <div class="max-w-4xl mx-auto px-6">

            <div class="text-center mb-16">
                <span class="text-red-600 font-black uppercase tracking-[0.3em] text-xs">Trade-In & Cash</span>
                <h1 class="text-4xl md:text-6xl font-black text-white uppercase italic leading-none mt-2">
                    Jual Motor Anda <br> <span class="text-red-600">Harga Terbaik</span>
                </h1>
                <p class="text-gray-500 mt-6 max-w-2xl mx-auto text-sm leading-relaxed">
                    Ingin menjual kendaraan atau tukar tambah? Tim HNN Motosport siap memberikan penawaran transparan dan
                    proses cepat untuk unit Anda.
                </p>
            </div>

            <div class="bg-[#0a0a0a] border border-gray-900 p-8 md:p-12">
                <form action="#" method="POST" class="space-y-8">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-2">
                            <label class="text-[10px] text-gray-500 uppercase font-black tracking-widest">Nama
                                Lengkap</label>
                            <input type="text" name="name" required placeholder="Masukkan nama Anda..."
                                class="w-full bg-black border border-gray-800 text-white px-4 py-4 text-xs focus:border-red-600 outline-none transition">
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] text-gray-500 uppercase font-black tracking-widest">Nomor
                                WhatsApp</label>
                            <input type="tel" name="phone" required placeholder="Contoh: 0812..."
                                class="w-full bg-black border border-gray-800 text-white px-4 py-4 text-xs focus:border-red-600 outline-none transition">
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] text-gray-500 uppercase font-black tracking-widest">Merk & Tipe
                                Motor</label>
                            <input type="text" name="brand_model" required placeholder="Contoh: Honda Vario 160"
                                class="w-full bg-black border border-gray-800 text-white px-4 py-4 text-xs focus:border-red-600 outline-none transition">
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] text-gray-500 uppercase font-black tracking-widest">Tahun
                                Kendaraan</label>
                            <input type="number" name="year" required placeholder="Contoh: 2022"
                                class="w-full bg-black border border-gray-800 text-white px-4 py-4 text-xs focus:border-red-600 outline-none transition">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-[10px] text-gray-500 uppercase font-black tracking-widest">Kondisi & Catatan
                            Tambahan</label>
                        <textarea name="notes" rows="4" placeholder="Jelaskan kondisi mesin, body, atau status pajak..."
                            class="w-full bg-black border border-gray-800 text-white px-4 py-4 text-xs focus:border-red-600 outline-none transition"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full py-5 bg-red-600 text-white font-black uppercase text-xs tracking-[0.2em] hover:bg-white hover:text-red-600 transition duration-500 shadow-lg shadow-red-600/20">
                        Kirim Penawaran Sekarang
                    </button>
                </form>
            </div>

            <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
                <div class="space-y-4">
                    <div class="text-3xl font-black text-zinc-800">01</div>
                    <h4 class="text-white font-bold uppercase text-xs tracking-widest">Isi Data</h4>
                    <p class="text-gray-500 text-[11px] leading-relaxed">Lengkapi formulir detail kendaraan yang ingin Anda
                        jual secara lengkap.</p>
                </div>
                <div class="space-y-4">
                    <div class="text-3xl font-black text-zinc-800">02</div>
                    <h4 class="text-white font-bold uppercase text-xs tracking-widest">Inspeksi Unit</h4>
                    <p class="text-gray-500 text-[11px] leading-relaxed">Tim ahli kami akan melakukan pengecekan fisik untuk
                        menentukan nilai terbaik.</p>
                </div>
                <div class="space-y-4">
                    <div class="text-3xl font-black text-zinc-800">03</div>
                    <h4 class="text-white font-bold uppercase text-xs tracking-widest">Cair / Tukar</h4>
                    <p class="text-gray-500 text-[11px] leading-relaxed">Dapatkan pembayaran tunai seketika atau gunakan
                        sebagai DP unit baru.</p>
                </div>
            </div>

        </div>
    </div>
@endsection