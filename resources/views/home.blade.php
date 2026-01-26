@extends('layouts.master')

@section('title', 'Wirausaha Pelajar Indonesia | Komunitas Wirausaha Pelajar Nasional')
@section('meta_description', 'Wirausaha Pelajar Indonesia adalah komunitas nasional pelajar dan mahasiswa untuk membangun jiwa wirausaha sejak dini.')
@section('meta_keywords', 'wirausaha pelajar, komunitas wirausaha, entrepreneur muda, wpi indonesia')
@section('og_title', 'Wirausaha Pelajar Indonesia')
@section('og_description', 'Jadilah bagian dari jaringan wirausaha pelajar terbesar di Indonesia')

@section('content')

{{-- HERO SECTION --}}
<section class="h-screen max-h-[500px] sm:max-h-[600px] md:max-h-[700px] lg:max-h-[85vh] bg-cover bg-center relative">
    <div class="h-full bg-primary flex items-center justify-center px-4 sm:px-6 md:px-8 lg:px-16">
        <div class="max-w-2xl w-full text-white text-center lg:text-left">
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl mb-4 md:mb-5 font-bold leading-tight drop-shadow-lg">Bangkit Bersama WPI</h1>
            <p class="text-sm sm:text-base md:text-lg mb-6 md:mb-9 opacity-95 drop-shadow leading-relaxed">Wadah pelajar dan mahasiswa Indonesia untuk belajar, berwirausaha, dan bertumbuh bersama.</p>
            <a href="#" class="inline-block bg-secondary px-6 sm:px-8 md:px-11 py-2.5 md:py-3.5 text-primary rounded-full font-bold text-xs sm:text-sm uppercase tracking-wide transition-all hover:bg-secondary-light hover:-translate-y-0.5 hover:shadow-lg hover:shadow-secondary/40">TENTANG KAMI</a>
        </div>
    </div>
</section>

{{-- STATS SECTION --}}
<section class="py-8 sm:py-10 md:py-12 lg:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 md:gap-8">
            {{-- Stat 1 --}}
            <div class="text-center p-3 sm:p-4">
                <div class="mb-2 sm:mb-3">
                    <span class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-primary">48</span>
                </div>
                <p class="text-xs sm:text-sm md:text-base font-semibold text-gray-700 uppercase tracking-wide">Tahun</p>
            </div>
            
            {{-- Stat 2 --}}
            <div class="text-center p-3 sm:p-4">
                <div class="mb-2 sm:mb-3">
                    <span class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-primary">6</span>
                </div>
                <p class="text-xs sm:text-sm md:text-base font-semibold text-gray-700 uppercase tracking-wide">Cabang</p>
            </div>
            
            {{-- Stat 3 --}}
            <div class="text-center p-3 sm:p-4">
                <div class="mb-2 sm:mb-3">
                    <span class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-primary">3000</span>
                    <span class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold text-secondary">+</span>
                </div>
                <p class="text-xs sm:text-sm md:text-base font-semibold text-gray-700 uppercase tracking-wide">Anggota</p>
            </div>
            
            {{-- Stat 4 --}}
            <div class="text-center p-3 sm:p-4">
                <div class="mb-2 sm:mb-3">
                    <span class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-primary">171</span>
                </div>
                <p class="text-xs sm:text-sm md:text-base font-semibold text-gray-700 uppercase tracking-wide">Pengurus Inti</p>
            </div>
        </div>
    </div>
</section>

{{-- ABOUT SECTION --}}
<section class="py-10 sm:py-12 md:py-16 lg:py-20 bg-[#f0fffe]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-8 md:gap-10 lg:gap-16 items-center">
            <div class="order-2 md:order-1">
                <h2 class="text-2xl sm:text-3xl md:text-4xl text-primary mb-3 md:mb-4 font-bold leading-tight">Wirausaha Pelajar Indonesia</h2>
                <p class="text-xs sm:text-sm md:text-base text-primary font-semibold mb-4 md:mb-6 uppercase tracking-wide">Wadah pelajar dan mahasiswa untuk belajar, berwirausaha, dan bertumbuh</p>
                <p class="mb-3 md:mb-4 text-gray-600 leading-relaxed text-sm md:text-base">Wirausaha Pelajar Indonesia (WPI) adalah wadah dinamis bagi para pelajar dan mahasiswa yang ingin berkembang, berinovasi, hingga berkontribusi dalam membangun perekonomian bangsa. Dengan semangat kolaborasi, WPI tidak hanya membangun jaringan bisnis, tetapi juga menciptakan ruang bagi pertumbuhan wirausaha baru yang berdaya saing tinggi.</p>
                <p class="mb-5 md:mb-6 text-gray-600 leading-relaxed text-sm md:text-base">Sebagai komunitas yang solid, WPI menyediakan berbagai program dan jaringan strategis untuk membantu anggotanya mencapai kesuksesan. Mulai dari pelatihan, akses ke pasar, hingga kolaborasi dengan pemerintah dan sektor swasta, kami berkomitmen untuk menciptakan ekosistem bisnis yang mendukung pertumbuhan dan keberlanjutan usaha.</p>
                <a href="#" class="inline-block bg-primary text-white px-6 sm:px-8 md:px-9 py-2.5 md:py-3 rounded-full font-bold text-xs sm:text-sm uppercase tracking-wide transition-all hover:bg-primary-darker hover:-translate-y-0.5 hover:shadow-lg hover:shadow-primary/40">KENALI LEBIH DALAM</a>
            </div>
            <div class="order-1 md:order-2">
                <img src="{{ asset('images/about.png') }}" alt="WPI" class="w-full rounded-lg shadow-2xl shadow-primary/20">
            </div>
        </div>
    </div>
</section>

{{-- VISI MISI SECTION --}}
<section class="py-10 sm:py-12 md:py-16 lg:py-20 bg-gradient-visi">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-6 md:gap-8 lg:gap-12 items-stretch">
            <div class="bg-[#1a6f62] p-6 sm:p-8 md:p-10 lg:p-14 flex flex-col justify-start rounded-lg">
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-secondary mb-4 md:mb-6 font-extrabold uppercase tracking-wide">Visi</h2>
                <p class="text-sm sm:text-base md:text-lg text-white leading-relaxed">Menjadikan HIPMI sebagai organisasi pencetak pengusaha muda dan pembentuk ekosistem wirausaha terbaik di Kota Jakarta melalui program kerja yang tepat inovatif dengan semangat dan marwah organisasi HIPMI</p>
            </div>
            <div class="bg-[#0f4d47] p-6 sm:p-8 md:p-10 lg:p-14 flex flex-col justify-start rounded-lg">
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-secondary mb-4 md:mb-6 font-extrabold uppercase tracking-wide">Misi</h2>
                <ol class="list-none p-0 m-0 space-y-3 md:space-y-4">
                    <li class="text-sm sm:text-base md:text-lg text-white leading-relaxed pl-7 sm:pl-8 relative before:content-['1.'] before:absolute before:left-0 before:font-bold before:text-secondary before:text-base sm:before:text-lg">Bangun koneksi dan kolaborasi dengan semangat inovasi dan optimalisasi</li>
                    <li class="text-sm sm:text-base md:text-lg text-white leading-relaxed pl-7 sm:pl-8 relative before:content-['2.'] before:absolute before:left-0 before:font-bold before:text-secondary before:text-base sm:before:text-lg">Pengembangan ilmu dan kompetensi untuk anggota</li>
                    <li class="text-sm sm:text-base md:text-lg text-white leading-relaxed pl-7 sm:pl-8 relative before:content-['3.'] before:absolute before:left-0 before:font-bold before:text-secondary before:text-base sm:before:text-lg">Membantu solusi modal dan akses pasar untuk anggota</li>
                    <li class="text-sm sm:text-base md:text-lg text-white leading-relaxed pl-7 sm:pl-8 relative before:content-['4.'] before:absolute before:left-0 before:font-bold before:text-secondary before:text-base sm:before:text-lg">Menyebarkan semangat kewirausahaan di Kota Jakarta</li>
                </ol>
            </div>
        </div>
    </div>
</section>

{{-- EVENTS & NEWS SECTION --}}
<section class="py-10 sm:py-12 md:py-16 lg:py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-[1.5fr_1fr] gap-8 md:gap-10 lg:gap-16">
            {{-- Left: News --}}
            <div>
                <h2 class="text-xl sm:text-2xl md:text-3xl text-[#FFD700] font-bold mb-6 md:mb-8 lg:mb-10">
                    Berita, Cerita, dan Kegiatan WPI
                </h2>
                
                <div class="space-y-6">
                    {{-- News Item 1 --}}
                    <div class="bg-white rounded-lg md:rounded-none overflow-hidden shadow-sm md:shadow-none flex flex-col sm:flex-row gap-4 md:gap-6 p-4 md:p-0 md:pb-6 border-b border-gray-200">
                        <div class="w-full sm:w-48 md:w-52 h-48 sm:h-40 md:h-44 flex-shrink-0 rounded-lg md:rounded-none overflow-hidden">
                            <img src="{{ asset('images/news1.png') }}" alt="Berita WPI 1" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-1 md:py-4">
                            <span class="inline-block bg-[#E8F5F3] text-[#1a6f62] px-3 py-1 rounded-full text-xs font-semibold mb-3 w-fit">
                                WPI NEWS
                            </span>
                            <h3 class="text-base sm:text-lg md:text-xl text-gray-900 font-bold mb-2 md:mb-3 leading-snug">
                                Seminar Nasional Kewirausahaan Pelajar WPI 2025
                            </h3>
                            <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                                Seminar nasional Wirausaha Pelajar Indonesia yang membahas penguatan karakter
                                positif, produktif, dan kreatif melalui kewirausahaan sejak dini [...]
                            </p>
                        </div>
                    </div>
                    
                    {{-- News Item 2 --}}
                    <div class="bg-white rounded-lg md:rounded-none overflow-hidden shadow-sm md:shadow-none flex flex-col sm:flex-row gap-4 md:gap-6 p-4 md:p-0 md:pb-6 border-b border-gray-200">
                        <div class="w-full sm:w-48 md:w-52 h-48 sm:h-40 md:h-44 flex-shrink-0 rounded-lg md:rounded-none overflow-hidden">
                            <img src="{{ asset('images/news2.png') }}" alt="Berita WPI 2" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-1 md:py-4">
                            <span class="inline-block bg-[#E8F5F3] text-[#1a6f62] px-3 py-1 rounded-full text-xs font-semibold mb-3 w-fit">
                                KEGIATAN
                            </span>
                            <h3 class="text-base sm:text-lg md:text-xl text-gray-900 font-bold mb-2 md:mb-3 leading-snug">
                                Pelatihan Bisnis Digital untuk Pelajar dan Mahasiswa
                            </h3>
                            <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                                WPI menyelenggarakan pelatihan bisnis digital sebagai bagian dari program edukasi
                                kewirausahaan bagi pelajar dan mahasiswa di seluruh Indonesia [...]
                            </p>
                        </div>
                    </div>
                    
                    {{-- News Item 3 --}}
                    <div class="bg-white rounded-lg md:rounded-none overflow-hidden shadow-sm md:shadow-none flex flex-col sm:flex-row gap-4 md:gap-6 p-4 md:p-0 md:pb-6 border-b border-gray-200">
                        <div class="w-full sm:w-48 md:w-52 h-48 sm:h-40 md:h-44 flex-shrink-0 rounded-lg md:rounded-none overflow-hidden">
                            <img src="{{ asset('images/news3.png') }}" alt="Berita WPI 3" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-1 md:py-4">
                            <span class="inline-block bg-[#E8F5F3] text-[#1a6f62] px-3 py-1 rounded-full text-xs font-semibold mb-3 w-fit">
                                WPI UPDATE
                            </span>
                            <h3 class="text-base sm:text-lg md:text-xl text-gray-900 font-bold mb-2 md:mb-3 leading-snug">
                                Jaringan Anggota WPI Terus Bertumbuh di Berbagai Daerah
                            </h3>
                            <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                                Wirausaha Pelajar Indonesia terus berkembang dan menghimpun pelajar serta mahasiswa
                                dari berbagai daerah sebagai bagian dari gerakan wirausaha pelajar nasional [...]
                            </p>
                        </div>
                    </div>
                </div>
                
                <a href="#" class="inline-block bg-gradient-to-r from-[#1a9b8a] to-[#157d71] text-white px-6 sm:px-8 md:px-10 py-2.5 md:py-3 rounded-full font-bold text-xs sm:text-sm uppercase transition-all hover:shadow-lg hover:shadow-[#1a9b8a]/30 hover:-translate-y-0.5 mt-6 md:mt-8">
                    BACA ARTIKEL LAINNYA
                </a>
            </div>
            
            {{-- Right: Calendar Events --}}
            <div class="space-y-4 md:space-y-6">
                <div class="bg-gradient-to-br from-[#f0fffe] to-[#e8fffe] border-l-4 border-[#FFD54F] p-5 sm:p-6 rounded-lg shadow-md hover:shadow-lg transition-all">
                    <div class="flex gap-4 sm:gap-6">
                        <div class="flex flex-col items-center justify-center bg-gradient-to-br from-[#1a9b8a] to-[#157d71] px-3 sm:px-4 py-2 sm:py-3 rounded-lg min-w-[70px] sm:min-w-[80px]">
                            <span class="text-xs font-bold text-white uppercase">OKT</span>
                            <span class="text-4xl sm:text-5xl font-bold text-[#FFD54F] leading-none">22</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <span class="text-xs sm:text-sm text-[#1a9b8a] font-medium block mb-2">
                                <i class="far fa-clock mr-1"></i> 09:00 - Selesai
                            </span>
                            <h4 class="text-sm sm:text-base text-[#1a6f62] font-bold mb-2 leading-snug">
                                Seminar Kewirausahaan Pelajar Nasional WPI
                            </h4>
                            <p class="text-xs sm:text-sm text-[#1a9b8a]">
                                <i class="fas fa-map-marker-alt mr-1"></i> Aula Pendidikan / Hybrid
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gradient-to-br from-[#f0fffe] to-[#e8fffe] border-l-4 border-[#FFD54F] p-5 sm:p-6 rounded-lg shadow-md hover:shadow-lg transition-all">
                    <div class="flex gap-4 sm:gap-6">
                        <div class="flex flex-col items-center justify-center bg-gradient-to-br from-[#1a9b8a] to-[#157d71] px-3 sm:px-4 py-2 sm:py-3 rounded-lg min-w-[70px] sm:min-w-[80px]">
                            <span class="text-xs font-bold text-white uppercase">OKT</span>
                            <span class="text-4xl sm:text-5xl font-bold text-[#FFD54F] leading-none">25</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <span class="text-xs sm:text-sm text-[#1a9b8a] font-medium block mb-2">
                                <i class="far fa-clock mr-1"></i> 13:00 - Selesai
                            </span>
                            <h4 class="text-sm sm:text-base text-[#1a6f62] font-bold mb-2 leading-snug">
                                Kelas Online Bisnis Pemula WPI
                            </h4>
                            <p class="text-xs sm:text-sm text-[#1a9b8a]">
                                <i class="fas fa-map-marker-alt mr-1"></i> Online Meeting (Zoom)
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gradient-to-br from-[#f0fffe] to-[#e8fffe] border-l-4 border-[#FFD54F] p-5 sm:p-6 rounded-lg shadow-md hover:shadow-lg transition-all">
                    <div class="flex gap-4 sm:gap-6">
                        <div class="flex flex-col items-center justify-center bg-gradient-to-br from-[#1a9b8a] to-[#157d71] px-3 sm:px-4 py-2 sm:py-3 rounded-lg min-w-[70px] sm:min-w-[80px]">
                            <span class="text-xs font-bold text-white uppercase">MEI</span>
                            <span class="text-4xl sm:text-5xl font-bold text-[#FFD54F] leading-none">12</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <span class="text-xs sm:text-sm text-[#1a9b8a] font-medium block mb-2">
                                <i class="far fa-clock mr-1"></i> - - -
                            </span>
                            <h4 class="text-sm sm:text-base text-[#1a6f62] font-bold mb-2 leading-snug">
                                WPI Youth Entrepreneur Expo 2025
                            </h4>
                            <p class="text-xs sm:text-sm text-[#1a9b8a]">
                                <i class="fas fa-map-marker-alt mr-1"></i> Nasional (Offline & Online)
                            </p>
                        </div>
                    </div>
                </div>
                
                <a href="#" class="inline-block bg-gradient-to-r from-[#1a9b8a] to-[#157d71] text-white px-6 sm:px-8 md:px-10 py-2.5 md:py-3 rounded-full font-bold text-xs sm:text-sm uppercase transition-all hover:shadow-lg hover:shadow-[#1a9b8a]/30 hover:-translate-y-0.5">
                    KEGIATAN LAINNYA
                </a>
            </div>
        </div>
    </div>
</section>

{{-- KEGIATAN KAMI SECTION --}}
<section class="py-10 sm:py-12 md:py-16 lg:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl sm:text-3xl md:text-4xl text-gray-800 font-bold text-center mb-8 md:mb-12 lg:mb-16">
            Kegiatan Kami
        </h2>
        
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            {{-- Activity Card 1 --}}
            <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-all flex flex-col">
                <div class="relative h-56 sm:h-60 md:h-64 group">
                    <img src="{{ asset('images/activity1.png') }}" alt="Seminar Kewirausahaan Pelajar WPI" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                        <button class="w-14 h-14 sm:w-16 sm:h-16 bg-white rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                            <i class="fas fa-play text-xl sm:text-2xl text-gray-800 ml-1"></i>
                        </button>
                    </div>
                </div>
                <div class="p-5 sm:p-6 flex flex-col flex-grow">
                    <h3 class="text-lg sm:text-xl text-gray-800 font-bold mb-3">
                        Seminar Kewirausahaan Pelajar Nasional
                    </h3>
                    <p class="text-sm text-gray-600 mb-4 flex-grow">
                        Aula Pendidikan, 18 Oktober 2025
                    </p>
                    <div class="mt-auto">
                        <span class="inline-block bg-[#FFD700] text-gray-800 px-4 py-1.5 rounded-full text-xs font-bold">
                            3 MIN
                        </span>
                    </div>
                </div>
            </div>
            
            {{-- Activity Card 2 --}}
            <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-all flex flex-col">
                <div class="relative h-56 sm:h-60 md:h-64 group">
                    <img src="{{ asset('images/activity2.png') }}" alt="Pelatihan Bisnis Digital WPI" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                        <button class="w-14 h-14 sm:w-16 sm:h-16 bg-white rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                            <i class="fas fa-play text-xl sm:text-2xl text-gray-800 ml-1"></i>
                        </button>
                    </div>
                </div>
                <div class="p-5 sm:p-6 flex flex-col flex-grow">
                    <h3 class="text-lg sm:text-xl text-gray-800 font-bold mb-3">
                        Pelatihan Bisnis Digital untuk Pelajar
                    </h3>
                    <p class="text-sm text-gray-600 mb-4 flex-grow">
                        Pelatihan kewirausahaan berbasis digital untuk meningkatkan kreativitas dan produktivitas
                        pelajar serta mahasiswa WPI di berbagai daerah.
                    </p>
                    <div class="mt-auto">
                        <span class="inline-block bg-[#FFD700] text-gray-800 px-4 py-1.5 rounded-full text-xs font-bold">
                            3 MIN
                        </span>
                    </div>
                </div>
            </div>
            
            {{-- Activity Card 3 --}}
            <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-all flex flex-col">
                <div class="relative h-56 sm:h-60 md:h-64 group">
                    <img src="{{ asset('images/activity3.png') }}" alt="Leadership Camp WPI" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                        <button class="w-14 h-14 sm:w-16 sm:h-16 bg-white rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                            <i class="fas fa-play text-xl sm:text-2xl text-gray-800 ml-1"></i>
                        </button>
                    </div>
                </div>
                <div class="p-5 sm:p-6 flex flex-col flex-grow">
                    <h3 class="text-lg sm:text-xl text-gray-800 font-bold mb-3">
                        Leadership Camp & Entrepreneur Mindset WPI
                    </h3>
                    <p class="text-sm text-gray-600 mb-4 flex-grow">
                        Program pengembangan kepemimpinan dan pola pikir wirausaha bagi pelajar dan mahasiswa
                        sebagai calon pemimpin masa depan.
                    </p>
                    <div class="mt-auto">
                        <span class="inline-block bg-[#FFD700] text-gray-800 px-4 py-1.5 rounded-full text-xs font-bold">
                            3 MIN
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- BENEFITS SECTION --}}
<section class="py-10 sm:py-12 md:py-16 lg:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8 md:mb-12">
            <h2 class="text-xl sm:text-2xl md:text-3xl text-[#1a9b8a] mb-2 font-bold">Temukan beragam manfaat</h2>
            <p class="text-sm sm:text-base md:text-lg text-[#1a9b8a] font-semibold">untuk akselerasi langkahmu</p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 md:gap-6 lg:gap-8">
            <div class="bg-white p-6 sm:p-7 md:p-8 rounded-xl text-center transition-all hover:-translate-y-1 hover:shadow-xl hover:shadow-accent/30 border-2 border-gray-200 hover:border-accent relative overflow-hidden before:content-[''] before:absolute before:top-0 before:left-0 before:right-0 before:h-1 before:bg-gradient-benefits">
                <div class="mb-3 md:mb-4">
                    <i class="fas fa-network-wired text-3xl sm:text-4xl md:text-5xl text-[#1a9b8a]"></i>
                </div>
                <h3 class="text-base sm:text-lg md:text-xl text-accent mb-3 md:mb-4 font-bold">Jaringan Bisnis</h3>
                <p class="text-sm md:text-base text-gray-600 leading-relaxed">Akses ke komunitas wirausaha pelajar yang luas di seluruh Indonesia.</p>
            </div>
            
            <div class="bg-white p-6 sm:p-7 md:p-8 rounded-xl text-center transition-all hover:-translate-y-1 hover:shadow-xl hover:shadow-accent/30 border-2 border-gray-200 hover:border-accent relative overflow-hidden before:content-[''] before:absolute before:top-0 before:left-0 before:right-0 before:h-1 before:bg-gradient-benefits">
                <div class="mb-3 md:mb-4">
                    <i class="fas fa-user-tie text-3xl sm:text-4xl md:text-5xl text-[#1a9b8a]"></i>
                </div>
                <h3 class="text-base sm:text-lg md:text-xl text-accent mb-3 md:mb-4 font-bold">Mentoring</h3>
                <p class="text-sm md:text-base text-gray-600 leading-relaxed">Bimbingan dari pengusaha dan mentor berpengalaman.</p>
            </div>
            
            <div class="bg-white p-6 sm:p-7 md:p-8 rounded-xl text-center transition-all hover:-translate-y-1 hover:shadow-xl hover:shadow-accent/30 border-2 border-gray-200 hover:border-accent relative overflow-hidden before:content-[''] before:absolute before:top-0 before:left-0 before:right-0 before:h-1 before:bg-gradient-benefits">
                <div class="mb-3 md:mb-4">
                    <i class="fas fa-calendar-alt text-3xl sm:text-4xl md:text-5xl text-[#1a9b8a]"></i>
                </div>
                <h3 class="text-base sm:text-lg md:text-xl text-accent mb-3 md:mb-4 font-bold">Akses ke Acara & Pelatihan</h3>
                <p class="text-sm md:text-base text-gray-600 leading-relaxed">Kesempatan mengikuti seminar dan workshop bisnis eksklusif.</p>
            </div>
            
            <div class="bg-white p-6 sm:p-7 md:p-8 rounded-xl text-center transition-all hover:-translate-y-1 hover:shadow-xl hover:shadow-accent/30 border-2 border-gray-200 hover:border-accent relative overflow-hidden before:content-[''] before:absolute before:top-0 before:left-0 before:right-0 before:h-1 before:bg-gradient-benefits">
                <div class="mb-3 md:mb-4">
                    <i class="fas fa-handshake text-3xl sm:text-4xl md:text-5xl text-[#1a9b8a]"></i>
                </div>
                <h3 class="text-base sm:text-lg md:text-xl text-accent mb-3 md:mb-4 font-bold">Advokasi & Dukungan</h3>
                <p class="text-sm md:text-base text-gray-600 leading-relaxed">Representasi bisnis di forum lokal dan nasional.</p>
            </div>
        </div>
    </div>
</section>

{{-- TESTIMONIAL SECTION --}}
<section class="py-10 sm:py-12 md:py-16 lg:py-20 bg-gradient-testimonial">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-8 md:gap-10 lg:gap-12 items-center">
            <div class="order-2 md:order-1">
                <img src="{{ asset('images/testimoni.png') }}" alt="Testimonial" class="w-full rounded-xl shadow-xl shadow-accent/20">
            </div>
            <div class="order-1 md:order-2">
                <img src="https://md-aqil.github.io/images/quote.png" alt="Quote" class="w-10 sm:w-12 md:w-16 mb-4 md:mb-5" style="filter: hue-rotate(160deg) saturate(1.5);">
                <p class="text-sm sm:text-base md:text-lg leading-relaxed text-gray-600 mb-4 md:mb-5 italic">"Bergabung dengan WPI telah memberikan akselerasi yang signifikan bagi bisnis saya. Melalui program mentoring dan networking, saya mendapatkan akses ke mitra baru dan peluang pasar yang lebih luas. Selain itu, kolaborasi yang terjalin dengan anggota lain memberikan insight berharga dalam mengembangkan strategi bisnis yang lebih efektif. WPI benar-benar menjadi wadah yang tepat bagi para pelajar yang ingin mengembangkan jiwa kewirausahaan."</p>
                <p class="text-base sm:text-lg md:text-xl font-semibold text-accent">Ahmad Rizki Pratama</p>
            </div>
        </div>
    </div>
</section>

{{-- FOOTER --}}
<footer class="bg-gradient-to-r from-[#1a9b8a] to-[#157d71] text-white py-8 sm:py-10 md:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-[2fr_1fr_1fr] gap-6 md:gap-8 mb-6 md:mb-8">
            <div>
                <h3 class="text-xl sm:text-2xl mb-3 sm:mb-4 text-[#FFD54F]">WPI</h3>
                <p class="leading-relaxed text-sm sm:text-base text-gray-100">Wirausaha Pelajar Indonesia adalah komunitas pelajar dan mahasiswa yang berfokus pada pemberdayaan ekonomi, menciptakan kolaborasi antar anggota, dan mendorong inovasi untuk mencapai kesuksesan bersama.</p>
            </div>
            
            <div>
                <p class="mb-2 sm:mb-3 text-sm sm:text-base text-gray-100"><strong class="text-[#FFD54F]">Alamat:</strong><br>Jl. Contoh No. 123, Jakarta Pusat</p>
                <p class="mb-2 sm:mb-3 text-sm sm:text-base text-gray-100"><strong class="text-[#FFD54F]">Phone:</strong> +62 856-9781-8910</p>
                <p class="text-sm sm:text-base text-gray-100"><strong class="text-[#FFD54F]">Email:</strong> Info.wpi.pusat@gmail.com</p>
            </div>
            
            <div>
                <h4 class="text-base sm:text-lg font-bold text-[#FFD54F] mb-3 sm:mb-4">Ikuti Kami</h4>
                <div class="flex gap-3 sm:gap-4">
                    <a href="https://www.facebook.com/wirausahapelajarindonesia" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center text-white transition-all hover:bg-[#FFD54F] hover:text-[#1a9b8a] hover:scale-110">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/wirausahapelajar/" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center text-white transition-all hover:bg-[#FFD54F] hover:text-[#1a9b8a] hover:scale-110">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center text-white transition-all hover:bg-[#FFD54F] hover:text-[#1a9b8a] hover:scale-110">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.youtube.com/@wirausahapelajarindonesia6565" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center text-white transition-all hover:bg-[#FFD54F] hover:text-[#1a9b8a] hover:scale-110">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center text-white transition-all hover:bg-[#FFD54F] hover:text-[#1a9b8a] hover:scale-110">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="text-center pt-4 sm:pt-5 border-t border-white/20">
            <p class="text-xs sm:text-sm text-gray-200">&copy; 2026 Wirausaha Pelajar Indonesia. All Rights Reserved.</p>
        </div>
    </div>
</footer>

@endsection