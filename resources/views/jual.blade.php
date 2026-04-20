@extends('layouts.public')

@section('content')
    <div class="bg-black min-h-screen pt-32 pb-20">
        <div class="max-w-2xl mx-auto px-6">

            <div class="text-center mb-12">
                <span class="text-red-600 font-black uppercase tracking-[0.3em] text-xs">Trade-In & Cash</span>
                <h1 class="text-4xl md:text-6xl font-black text-white uppercase italic leading-none mt-2">
                    Jual Motor Anda <br> <span class="text-red-600">Harga Terbaik</span>
                </h1>
                <p class="text-gray-500 mt-6 max-w-2xl mx-auto text-sm leading-relaxed">
                    Ingin menjual kendaraan atau tukar tambah? Tim HNN Motosport siap memberikan penawaran transparan dan
                    proses cepat untuk unit Anda.
                </p>
            </div>

            <div class="max-w-2xl mx-auto px-6">
                <div class="bg-[#0a0a0a] border border-gray-900 p-10 shadow-2xl">
                    <form action="{{ route('jual.send') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-[10px] text-gray-500 uppercase font-black tracking-widest">Nama
                                    Lengkap</label>
                                <input type="text" name="nama" required placeholder="Nama Anda"
                                    class="w-full bg-black border border-gray-800 text-white p-4 text-xs focus:border-red-600 outline-none transition">
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] text-gray-500 uppercase font-black tracking-widest">Nomor
                                    WhatsApp</label>
                                <input type="text" name="whatsapp" required placeholder="0812..."
                                    class="w-full bg-black border border-gray-800 text-white p-4 text-xs focus:border-red-600 outline-none transition">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-[10px] text-gray-500 uppercase font-black tracking-widest">Merk & Tipe
                                    Motor</label>
                                <input type="text" name="merk_tipe" required placeholder="Contoh: Honda Vario 160"
                                    class="w-full bg-black border border-gray-800 text-white p-4 text-xs focus:border-red-600 outline-none transition">
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] text-gray-500 uppercase font-black tracking-widest">Tahun
                                    Kendaraan</label>
                                <input type="number" name="tahun" required placeholder="Contoh: 2022"
                                    class="w-full bg-black border border-gray-800 text-white p-4 text-xs focus:border-red-600 outline-none transition">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-[10px] text-gray-500 uppercase font-black tracking-widest">Kilometer
                                    (Odo)</label>
                                <input type="text" name="km" required placeholder="Contoh: 15.000"
                                    class="w-full bg-black border border-gray-800 text-white p-4 text-xs focus:border-red-600 outline-none transition">
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] text-gray-500 uppercase font-black tracking-widest">Status
                                    Pajak</label>
                                <select name="pajak" required
                                    class="w-full bg-black border border-gray-800 text-white p-4 text-xs focus:border-red-600 outline-none transition appearance-none">
                                    <option value="" disabled selected>Pilih Status Pajak</option>
                                    <option value="Hidup">Hidup / Aktif</option>
                                    <option value="Mati">Mati / Off</option>
                                </select>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] text-gray-500 uppercase font-black tracking-widest">Foto Kendaraan
                                (Maks 2MB)</label>
                            <input type="file" name="foto" accept="image/*" required
                                class="w-full bg-black border border-gray-800 text-gray-400 p-3 text-xs file:bg-red-600 file:border-none file:text-white file:px-4 file:py-2 file:mr-4 file:text-[10px] file:font-black file:uppercase cursor-pointer">
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] text-gray-500 uppercase font-black tracking-widest">Catatan
                                Tambahan</label>
                            <textarea name="catatan" rows="3" placeholder="Jelaskan kondisi mesin atau body..."
                                class="w-full bg-black border border-gray-800 text-white p-4 text-xs focus:border-red-600 outline-none transition"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full py-5 bg-red-600 text-white font-black uppercase text-xs tracking-[0.2em] hover:bg-white hover:text-red-600 transition duration-500">
                            Kirim Penawaran Sekarang
                        </button>
                    </form>
                </div>
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

    <script>
        function sendToWhatsApp() {
            const name = document.getElementById('name').value;
            const motor = document.getElementById('motor').value;
            const year = document.getElementById('year').value;
            const km = document.getElementById('km').value;
            const notes = document.getElementById('notes').value;

            if (!name || !motor || !year) {
                alert('Mohon isi data utama terlebih dahulu.');
                return;
            }

            const phoneNumber = "6281234567890"; // Ganti dengan nomor admin HNN Motosport
            const message = `Halo HNN Motosport, saya ingin menjual motor:%0A%0A` +
                `*Nama:* ${name}%0A` +
                `*Unit:* ${motor} (${year})%0A` +
                `*Odo:* ${km} km%0A` +
                `*Catatan:* ${notes}%0A%0A` +
                `_(Saya akan melampirkan foto motor setelah pesan ini terkirim)_`;

            window.open(`https://wa.me/${phoneNumber}?text=${message}`, '_blank');
        }
    </script>
@endsection