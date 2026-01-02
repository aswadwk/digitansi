<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Digitansi | Digital Marketing & Akuntansi</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body { font-family: 'Instrument Sans', sans-serif; -webkit-font-smoothing: antialiased; }
            .section-padding { padding-top: 100px; padding-bottom: 100px; }
            .tracking-widest-lg { tracking-widest: 0.3em; }
        </style>
    </head>
    <body class="bg-white text-black selection:bg-black selection:text-white uppercase font-medium">
        <!-- Navigation -->
        <nav class="fixed w-full top-0 z-50 bg-white/90 backdrop-blur-xl border-b border-zinc-100">
            <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
                <a href="/" class="text-xl font-bold tracking-tighter">DIGITANSI.</a>
                <div class="hidden md:flex gap-10 text-[11px] tracking-widest">
                    <a href="#about" class="hover:text-zinc-500 transition">Visi & Misi</a>
                    <a href="#layanan" class="hover:text-zinc-500 transition">Layanan</a>
                    <a href="#solusi" class="hover:text-zinc-500 transition">Kenapa Kami</a>
                    <a href="#paket" class="hover:text-zinc-500 transition">Paket Harga</a>
                </div>
                <div>
                    <a href="http://wa.me/6282291860809" class="bg-black text-white px-6 py-2.5 text-[10px] tracking-[0.2em] hover:bg-zinc-800 transition inline-block">
                        KONSULTASI GRATIS
                    </a>
                </div>
            </div>
        </nav>

        <!-- Hero -->
        <section class="min-h-screen flex items-center pt-20">
            <div class="max-w-7xl mx-auto px-6 w-full">
                <div class="max-w-5xl">
                    <span class="text-[10px] tracking-[0.4em] text-zinc-400 mb-8 block font-bold">Mitra Strategis Bisnis Modern</span>
                    <h1 class="text-6xl md:text-[120px] font-bold leading-[0.85] tracking-tighter mb-12">
                        DIGITAL MARKETING <br>& AKUNTANSI.
                    </h1>
                    <div class="flex flex-col md:flex-row gap-12 items-start md:items-center">
                        <p class="text-sm tracking-wider text-zinc-500 max-w-xl leading-loose normal-case">
                            Digitansi.com hadir untuk menggabungkan kekuatan pemasaran digital dengan sistem keuangan yang tertata rapi. Kami membantu pelaku usaha untuk tumbuh dengan strategi berbasis data — dari awareness sampai profit.
                        </p>
                        <div class="flex gap-4 shrink-0">
                            <a href="#layanan" class="bg-black text-white px-8 py-4 text-[11px] tracking-widest hover:bg-zinc-800 transition">LIHAT LAYANAN</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Clients Marquee -->
        <section class="py-24 bg-white border-t border-zinc-100 overflow-hidden">
            <div class="max-w-7xl mx-auto px-6 mb-16">
                <span class="text-[10px] tracking-[0.3em] text-zinc-400 mb-4 block font-bold">DIPERCAYAKAN OLEH</span>
                <h2 class="text-2xl font-bold tracking-tighter uppercase">MITRA BISNIS KAMI</h2>
            </div>
            <div class="relative flex overflow-x-hidden">
                <div class="py-12 animate-scroll flex whitespace-nowrap">
                    <!-- Placeholder Logos (Repeat for smooth loop) -->
                    @for ($i = 0; $i < 2; $i++)
                        <div class="flex items-center gap-24 px-12">
                            <div class="w-[200px] h-[200px] opacity-80 hover:opacity-100 transition cursor-pointer flex items-center justify-center border border-zinc-100 text-[10px] tracking-widest font-black">
                                <img src="/images/tour-travel.png" alt="Client Logo 01" class="max-w-full max-h-full object-contain">
                            </div>
                            <div class="w-[200px] h-[200px] opacity-80 hover:opacity-100 transition cursor-pointer flex items-center justify-center border border-zinc-100 text-[10px] tracking-widest font-black">
                                <img src="/images/ayo-dent.png" alt="Client Logo 01" class="max-w-full max-h-full object-contain">
                            </div>
                            <div class="w-[200px] h-[80px] grayscale opacity-30 hover:opacity-100 transition cursor-pointer flex items-center justify-center border border-zinc-100 text-[10px] tracking-widest font-black">CLIENT_LOGO_02</div>
                            <div class="w-[200px] h-[80px] grayscale opacity-30 hover:opacity-100 transition cursor-pointer flex items-center justify-center border border-zinc-100 text-[10px] tracking-widest font-black">CLIENT_LOGO_03</div>
                            <div class="w-[200px] h-[80px] grayscale opacity-30 hover:opacity-100 transition cursor-pointer flex items-center justify-center border border-zinc-100 text-[10px] tracking-widest font-black">CLIENT_LOGO_04</div>
                            <div class="w-[200px] h-[80px] grayscale opacity-30 hover:opacity-100 transition cursor-pointer flex items-center justify-center border border-zinc-100 text-[10px] tracking-widest font-black">CLIENT_LOGO_05</div>
                        </div>
                    @endfor
                </div>
            </div>
        </section>

        <!-- Vision & Mission -->
        <section id="about" class="section-padding border-y border-zinc-100 bg-zinc-50">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-24">
                    <div>
                        <span class="text-[10px] tracking-[0.3em] text-zinc-400 mb-6 block font-bold">01 / VISI</span>
                        <h2 class="text-3xl font-bold tracking-tight leading-tight mb-8">MENJADI EKOSISTEM DIGITAL YANG MENGHUBUNGKAN MARKETING, AKUNTANSI, DAN TEKNOLOGI.</h2>
                        <div class="h-px w-20 bg-black"></div>
                    </div>
                    <div>
                        <span class="text-[10px] tracking-[0.3em] text-zinc-400 mb-6 block font-bold">02 / MISI</span>
                        <ul class="space-y-6 text-[12px] tracking-widest leading-relaxed list-none p-0">
                            <li class="flex gap-4"><span>—</span> SOLUSI DIGITAL MARKETING BERBASIS DATA DAN HASIL NYATA.</li>
                            <li class="flex gap-4"><span>—</span> MEMBANTU PELAKU USAHA MEMAHAMI DAN MENGELOLA KEUANGAN.</li>
                            <li class="flex gap-4"><span>—</span> MENGEDUKASI BISNIS AGAR SIAP MENGHADAPI ERA DIGITAL.</li>
                            <li class="flex gap-4"><span>—</span> INTEGRASI PEMASARAN DAN PEMBUKUAN OTOMATIS.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Us -->
        <section id="solusi" class="section-padding bg-black text-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="max-w-3xl mb-24">
                    <h2 class="text-5xl md:text-7xl font-bold tracking-tighter leading-[0.9] mb-8">KAMI TIDAK MENJUAL KLIK, KAMI MEMBANGUN PROFIT.</h2>
                    <p class="text-zinc-500 text-sm tracking-widest">INTEGRASI MARKETING DAN AKUNTANSI DALAM SATU SISTEM.</p>
                </div>

                <div class="grid md:grid-cols-3 gap-16">
                    <div>
                        <h4 class="text-lg font-bold mb-6 tracking-tight">BERBASIS DATA</h4>
                        <p class="text-zinc-500 text-xs leading-loose normal-case">Setiap strategi, copy, dan optimasi iklan didasarkan pada analisis data performa dan laporan keuangan Anda.</p>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold mb-6 tracking-tight">KOLABORATIF</h4>
                        <p class="text-zinc-500 text-xs leading-loose normal-case">Kami melihat Anda sebagai partner jangka panjang, bukan sekadar vendor. Sukses Anda adalah kesuksesan kami.</p>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold mb-6 tracking-tight">AMAN & MODERN</h4>
                        <p class="text-zinc-500 text-xs leading-loose normal-case">Keamanan informasi keuangan Anda adalah prioritas utama dengan dukungan tools analitik terbaik.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing -->
        <section id="paket" class="section-padding bg-zinc-50">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-24">
                    <h2 class="text-4xl font-bold tracking-tighter mb-4">PAKET LAYANAN</h2>
                    <p class="text-[10px] tracking-[0.4em] text-zinc-400 font-bold uppercase">Digital Marketing & Keuangan Bisnis Anda</p>
                </div>

                <div class="grid md:grid-cols-4 gap-4">
                    <!-- Paket Beginner -->
                    <div class="bg-white p-10 border border-zinc-100 flex flex-col h-full">
                        <div class="mb-10">
                            <span class="text-[10px] tracking-widest text-zinc-400 block mb-2 font-bold">UMKM PEMULA</span>
                            <h3 class="text-xl font-bold">BEGINNER</h3>
                        </div>
                        <div class="text-2xl font-bold mb-8 tracking-tighter">1.4JT <span class="text-[10px] tracking-widest text-zinc-400">/ MONTH</span></div>
                        <ul class="text-[9px] tracking-widest space-y-4 mb-12 flex-1 border-t border-zinc-50 pt-8 list-none p-0 uppercase">
                            <li>— FB & IG ADS</li>
                            <li>— LAPORAN PEKANAN</li>
                            <li>— OPTIMASI BUDGET</li>
                            <li>— FREE AD COPY</li>
                            <li>— LANDING PAGE</li>
                        </ul>
                        <a href="http://wa.me/6282291860809" class="block text-center border border-black py-4 text-[10px] font-bold tracking-widest hover:bg-black hover:text-white transition">PILIH PAKET</a>
                    </div>

                    <!-- Paket Starter -->
                    <div class="bg-white p-10 border border-zinc-100 flex flex-col h-full">
                        <div class="mb-10">
                            <span class="text-[10px] tracking-widest text-zinc-400 block mb-2 font-bold">UMKM STANDAR</span>
                            <h3 class="text-xl font-bold">STARTER</h3>
                        </div>
                        <div class="text-2xl font-bold mb-8 tracking-tighter">1.4JT <span class="text-[10px] tracking-widest text-zinc-400">/ MONTH</span></div>
                        <ul class="text-[9px] tracking-widest space-y-4 mb-12 flex-1 border-t border-zinc-50 pt-8 list-none p-0 uppercase">
                            <li>— LAPORAN LABA RUGI</li>
                            <li>— LAPORAN PAJAK</li>
                            <li>— FB & IG ADS</li>
                            <li>— FREE DESAIN VISUAL</li>
                            <li>— LANDING PAGE</li>
                        </ul>
                        <a href="http://wa.me/6282291860809" class="block text-center border border-black py-4 text-[10px] font-bold tracking-widest hover:bg-black hover:text-white transition">PILIH PAKET</a>
                    </div>

                    <!-- Paket Growth -->
                    <div class="bg-black text-white p-10 flex flex-col h-full relative overflow-hidden">
                        <div class="absolute top-4 right-[-35px] bg-white text-black py-1 px-10 text-[8px] font-black rotate-45 tracking-widest">POPULAR</div>
                        <div class="mb-10">
                            <span class="text-[10px] tracking-widest text-zinc-600 block mb-2 font-bold uppercase">BISNIS BERKEMBANG</span>
                            <h3 class="text-xl font-bold">GROWTH</h3>
                        </div>
                        <div class="text-2xl font-bold mb-8 tracking-tighter text-white">3.5JT <span class="text-[10px] tracking-widest text-zinc-600">/ MONTH</span></div>
                        <ul class="text-[9px] tracking-widest space-y-4 mb-12 flex-1 border-t border-zinc-800 pt-8 list-none p-0 uppercase">
                            <li>— SEMUA FITUR STARTER</li>
                            <li>— TAX PLANNING</li>
                            <li>— KARTU PEMBAYARAN KHUSUS</li>
                            <li>— SPT MASA & TAHUNAN</li>
                            <li>— PRIORITAS SUPORT</li>
                        </ul>
                        <a href="http://wa.me/6282291860809" class="block text-center bg-white text-black py-4 text-[10px] font-bold tracking-widest hover:bg-zinc-200 transition">PILIH PAKET</a>
                    </div>

                    <!-- Paket Elite -->
                    <div class="bg-white p-10 border border-zinc-100 flex flex-col h-full">
                        <div class="mb-10">
                            <span class="text-[10px] tracking-widest text-zinc-400 block mb-2 font-bold uppercase">BISNIS SERIUS</span>
                            <h3 class="text-xl font-bold">ELITE</h3>
                        </div>
                        <div class="text-2xl font-bold mb-8 tracking-tighter">4.9JT <span class="text-[10px] tracking-widest text-zinc-400">/ MONTH</span></div>
                        <ul class="text-[9px] tracking-widest space-y-4 mb-12 flex-1 border-t border-zinc-50 pt-8 list-none p-0 uppercase">
                            <li>— SOLUSI LENGKAP</li>
                            <li>— SISTEM OTOMATIS</li>
                            <li>— ACCOUNTING CONTROLLER</li>
                            <li>— FULL TAX COMPLIANCE</li>
                            <li>— DEDICATED TEAM</li>
                        </ul>
                        <a href="http://wa.me/6282291860809" class="block text-center border border-black py-4 text-[10px] font-bold tracking-widest hover:bg-black hover:text-white transition">PILIH PAKET</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="py-24 border-t border-zinc-100">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex flex-col md:flex-row justify-between items-start gap-16">
                    <div class="max-w-xs">
                        <a href="/" class="text-xl font-bold tracking-tighter block mb-8">DIGITANSI.</a>
                        <p class="text-[11px] tracking-widest leading-loose text-zinc-400 uppercase">Mitra strategis yang menggabungkan kekuatan pemasaran digital dengan sistem keuangan yang tertata rapi.</p>
                    </div>
                    <div class="flex-1 grid grid-cols-2 md:grid-cols-3 gap-16 uppercase tracking-widest text-[10px] font-bold">
                        <div>
                            <span class="text-zinc-300 block mb-8">KONTAK</span>
                            <div class="flex flex-col gap-6">
                                <span>📧 hello@digitansi.com</span>
                                <span>📞 +62 822 9186 0809</span>
                                <span>📍 JAKARTA, INDONESIA</span>
                            </div>
                        </div>
                        <div>
                            <span class="text-zinc-300 block mb-8">SOCIAL</span>
                            <div class="flex flex-col gap-6">
                                <a href="#" class="hover:text-zinc-400 transition">INSTAGRAM</a>
                                <a href="#" class="hover:text-zinc-400 transition">LINKEDIN</a>
                                <a href="#" class="hover:text-zinc-400 transition">FACEBOOK</a>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <span class="text-zinc-300 block mb-8">LAINNYA</span>
                            <div class="flex flex-col gap-6">
                                <a href="#" class="hover:text-zinc-400 transition">PRIVACY</a>
                                <a href="#" class="hover:text-zinc-400 transition">TERMS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-32 pt-10 border-t border-zinc-50 flex justify-between items-center text-[9px] font-bold text-zinc-300 tracking-[0.4em] uppercase">
                    <span>&copy; 2026 DIGITANSI.COM</span>
                    <span>MADE FOR GROWTH</span>
                </div>
            </div>
        </footer>
    </body>
</html>
