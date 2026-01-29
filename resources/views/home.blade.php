@extends('layouts.master')

@section('title', 'Wirausaha Pelajar Indonesia | Komunitas Wirausaha Pelajar Nasional')
@section('meta_description', 'Wirausaha Pelajar Indonesia adalah komunitas nasional pelajar dan mahasiswa untuk membangun jiwa wirausaha sejak dini.')
@section('meta_keywords', 'wirausaha pelajar, komunitas wirausaha, entrepreneur muda, wpi indonesia')
@section('og_title', 'Wirausaha Pelajar Indonesia')
@section('og_description', 'Jadilah bagian dari jaringan wirausaha pelajar terbesar di Indonesia')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;800&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
    :root {
        --tosca-50: #f0fdfc;
        --tosca-100: #ccfbf6;
        --tosca-200: #99f6ea;
        --tosca-300: #5eead4;
        --tosca-400: #2dd4bf;
        --tosca-500: #14b8a6;
        --tosca-600: #0d9488;
        --tosca-700: #0f766e;
        --tosca-800: #115e59;
        --tosca-900: #134e4a;
        
        --yellow-50: #fefce8;
        --yellow-100: #fef9c3;
        --yellow-200: #fef08a;
        --yellow-300: #fde047;
        --yellow-400: #facc15;
        --yellow-500: #eab308;
        --yellow-600: #ca8a04;
        
        --gray-50: #fafafa;
        --gray-100: #f5f5f5;
        --gray-200: #e5e5e5;
        --gray-600: #525252;
        --gray-700: #404040;
        --gray-800: #262626;
        --gray-900: #171717;
    }
    
    * {
        font-family: 'DM Sans', -apple-system, BlinkMacSystemFont, sans-serif;
    }
    
    .font-display {
        font-family: 'Playfair Display', Georgia, serif;
    }
    
    /* Smooth Scroll */
    html {
        scroll-behavior: smooth;
    }
    
    /* Hero Gradient Animation */
    @keyframes gradient-shift {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }
    
    .hero-gradient {
        background: linear-gradient(135deg, var(--tosca-700) 0%, var(--tosca-600) 50%, var(--tosca-500) 100%);
        background-size: 200% 200%;
        animation: gradient-shift 15s ease infinite;
    }
    
    /* Decorative Elements */
    .decorative-blob {
        position: absolute;
        border-radius: 50%;
        filter: blur(80px);
        opacity: 0.15;
        pointer-events: none;
    }
    
    /* Card Hover Effects */
    .card-hover {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .card-hover:hover {
        transform: translateY(-8px);
    }
    
    /* Stat Counter Animation */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .stat-item {
        animation: fadeInUp 0.8s ease-out;
        animation-fill-mode: both;
    }
    
    .stat-item:nth-child(1) { animation-delay: 0.1s; }
    .stat-item:nth-child(2) { animation-delay: 0.2s; }
    .stat-item:nth-child(3) { animation-delay: 0.3s; }
    .stat-item:nth-child(4) { animation-delay: 0.4s; }
    
    /* Gradient Text */
    .gradient-text {
        background: linear-gradient(135deg, var(--tosca-600) 0%, var(--tosca-400) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        /* Tambahkan dua baris di bawah ini */
        display: inline-block;
        padding: 0.1em 0; 
    }
    
    .gradient-text-yellow {
        background: linear-gradient(135deg, var(--yellow-500) 0%, var(--yellow-400) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    /* Button Styles */
    .btn-primary {
        position: relative;
        overflow: hidden;
        background: var(--yellow-400);
        color: var(--gray-900);
        font-weight: 700;
        letter-spacing: 0.05em;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        background: var(--yellow-500);
        transform: translateY(-2px);
        box-shadow: 0 20px 40px -10px rgba(234, 179, 8, 0.4);
    }
    
    .btn-secondary {
        background: var(--tosca-600);
        color: white;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .btn-secondary:hover {
        background: var(--tosca-700);
        transform: translateY(-2px);
        box-shadow: 0 20px 40px -10px rgba(13, 148, 136, 0.4);
    }
    
    /* Event Card Accent */
    .event-card {
        position: relative;
        overflow: hidden;
    }
    
    .event-card::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 4px;
        background: linear-gradient(180deg, var(--yellow-400) 0%, var(--yellow-500) 100%);
    }
    
    /* News Badge */
    .news-badge {
        background: linear-gradient(135deg, var(--tosca-50) 0%, var(--tosca-100) 100%);
        color: var(--tosca-700);
        font-weight: 600;
        font-size: 0.75rem;
        letter-spacing: 0.05em;
    }
    
    /* Activity Card Play Button */
    .play-button {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .play-button:hover {
        transform: scale(1.15);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }
    
    /* Benefit Card */
    .benefit-card {
        position: relative;
        background: white;
        border: 2px solid var(--gray-100);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .benefit-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--tosca-400) 0%, var(--yellow-400) 100%);
        transform: scaleX(0);
        transition: transform 0.4s ease;
    }
    
    .benefit-card:hover::before {
        transform: scaleX(1);
    }
    
    .benefit-card:hover {
        border-color: var(--tosca-200);
        transform: translateY(-8px);
        box-shadow: 0 20px 50px -15px rgba(20, 184, 166, 0.15);
    }
    
    .benefit-icon {
        width: 64px;
        height: 64px;
        background: linear-gradient(135deg, var(--tosca-50) 0%, var(--tosca-100) 100%);
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }
    
    .benefit-card:hover .benefit-icon {
        background: linear-gradient(135deg, var(--tosca-500) 0%, var(--tosca-400) 100%);
        transform: rotate(-5deg) scale(1.1);
    }
    
    .benefit-card:hover .benefit-icon i {
        color: white;
    }
    
    /* Social Links */
    .social-link {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .social-link:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 25px rgba(250, 204, 21, 0.3);
    }
    
    /* Section Reveal Animation */
    @keyframes reveal {
        from {
            opacity: 0;
            transform: translateY(40px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .reveal-on-scroll {
        opacity: 0;
        animation: reveal 0.8s ease-out forwards;
    }
</style>
@endpush

@section('content')

{{-- HERO SECTION --}}
<section class="relative min-h-screen flex items-center justify-center overflow-hidden hero-gradient">
    {{-- Decorative Blobs --}}
    <div class="decorative-blob w-96 h-96 bg-yellow-400 top-20 -left-48"></div>
    <div class="decorative-blob w-80 h-80 bg-tosca-300 bottom-20 -right-40"></div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 py-20">
        <div class="max-w-4xl">
            <div class="mb-6 inline-block">
                <span class="px-4 py-2 bg-white/10 backdrop-blur-sm text-yellow-300 rounded-full text-sm font-semibold tracking-wider border border-white/20">
                    Komunitas Wirausaha Indonesia
                </span>
            </div>
            
            <h1 class="font-display text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-bold text-white mb-8 leading-[1.1]">
                Bangkit Bersama<br>
                <span class="text-yellow-300">Wirausaha Pelajar</span>
            </h1>
            
            <p class="text-xl lg:text-2xl text-tosca-50 mb-12 max-w-2xl leading-relaxed font-light">
                Wadah pelajar dan mahasiswa Indonesia untuk belajar, berwirausaha, dan bertumbuh bersama menuju masa depan yang gemilang.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="#" class="btn-primary inline-flex items-center justify-center px-8 py-4 rounded-full text-base font-bold group">
                    MULAI PERJALANAN
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="#" class="btn-secondary inline-flex items-center justify-center px-8 py-4 rounded-full text-base font-bold">
                    TENTANG KAMI
                </a>
            </div>
        </div>
    </div>
    
    {{-- Scroll Indicator --}}
    <div class="absolute bottom-5 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
        </svg>
    </div>
</section>

{{-- STATS SECTION --}}
<section class="py-20 lg:py-28 bg-gradient-to-b from-gray-50 to-white relative">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#0d948820_1px,transparent_1px),linear-gradient(to_bottom,#0d948820_1px,transparent_1px)] bg-[size:4rem_4rem] pointer-events-none"></div>
    
    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="font-display text-4xl lg:text-5xl font-bold gradient-text mb-4 py-2">Anggota Kami</h2>
            <p class="text-gray-600 text-lg">Angka yang membanggakan dari perjalanan WPI</p>
        </div>
        
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            {{-- Stat 1 --}}
            <div class="stat-item text-center group">
                <div class="mb-4">
                    <span class="font-display text-6xl lg:text-7xl font-bold gradient-text block">48</span>
                </div>
                <div class="h-1 w-20 mx-auto bg-gradient-to-r from-tosca-400 to-yellow-400 rounded-full mb-4 group-hover:w-28 transition-all duration-300"></div>
                <p class="text-gray-700 font-semibold text-lg uppercase tracking-wider">Tahun</p>
                <p class="text-gray-500 text-sm mt-2">Pengalaman Berkarya</p>
            </div>
            
            {{-- Stat 2 --}}
            <div class="stat-item text-center group">
                <div class="mb-4">
                    <span class="font-display text-6xl lg:text-7xl font-bold gradient-text block">6</span>
                </div>
                <div class="h-1 w-20 mx-auto bg-gradient-to-r from-tosca-400 to-yellow-400 rounded-full mb-4 group-hover:w-28 transition-all duration-300"></div>
                <p class="text-gray-700 font-semibold text-lg uppercase tracking-wider">Cabang</p>
                <p class="text-gray-500 text-sm mt-2">Di Seluruh Indonesia</p>
            </div>
            
            {{-- Stat 3 --}}
            <div class="stat-item text-center group">
                <div class="mb-4">
                    <span class="font-display text-6xl lg:text-7xl font-bold gradient-text block">3000<span class="gradient-text-yellow">+</span></span>
                </div>
                <div class="h-1 w-20 mx-auto bg-gradient-to-r from-tosca-400 to-yellow-400 rounded-full mb-4 group-hover:w-28 transition-all duration-300"></div>
                <p class="text-gray-700 font-semibold text-lg uppercase tracking-wider">Anggota</p>
                <p class="text-gray-500 text-sm mt-2">Wirausahawan Muda</p>
            </div>
            
            {{-- Stat 4 --}}
            <div class="stat-item text-center group">
                <div class="mb-4">
                    <span class="font-display text-6xl lg:text-7xl font-bold gradient-text block">171</span>
                </div>
                <div class="h-1 w-20 mx-auto bg-gradient-to-r from-tosca-400 to-yellow-400 rounded-full mb-4 group-hover:w-28 transition-all duration-300"></div>
                <p class="text-gray-700 font-semibold text-lg uppercase tracking-wider">Pengurus Inti</p>
                <p class="text-gray-500 text-sm mt-2">Tim Profesional</p>
            </div>
        </div>
    </div>
</section>

{{-- ABOUT SECTION --}}
<section class="py-20 lg:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="order-2 lg:order-1">
                <span class="inline-block px-4 py-2 bg-tosca-50 text-tosca-700 rounded-full text-sm font-bold tracking-wider mb-6">
                    TENTANG KAMI
                </span>
                
                <h2 class="font-display text-4xl lg:text-5xl xl:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                    Wirausaha Pelajar <span class="gradient-text">Indonesia</span>
                </h2>
                
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    Wirausaha Pelajar Indonesia (WPI) adalah wadah dinamis bagi para pelajar dan mahasiswa yang ingin berkembang, berinovasi, hingga berkontribusi dalam membangun perekonomian bangsa.
                </p>
                
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Dengan semangat kolaborasi, WPI tidak hanya membangun jaringan bisnis, tetapi juga menciptakan ruang bagi pertumbuhan wirausaha baru yang berdaya saing tinggi di tingkat nasional maupun global.
                </p>
                
                <div class="flex flex-wrap gap-4 mb-10">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-tosca-100 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-tosca-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-gray-700 font-semibold">Program Berkualitas</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-gray-700 font-semibold">Jaringan Luas</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-tosca-100 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-tosca-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-gray-700 font-semibold">Mentor Berpengalaman</span>
                    </div>
                </div>
                
                <a href="#" class="btn-primary inline-flex items-center px-8 py-4 rounded-full text-base font-bold group">
                    KENALI LEBIH DALAM
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
            
            <div class="order-1 lg:order-2 relative">
                <div class="absolute -top-8 -left-8 w-32 h-32 bg-yellow-200 rounded-full blur-3xl opacity-50"></div>
                <div class="absolute -bottom-8 -right-8 w-40 h-40 bg-tosca-200 rounded-full blur-3xl opacity-50"></div>
                <div class="relative">
                    <img src="{{ asset('images/about.png') }}" alt="WPI" class="w-full rounded-3xl shadow-2xl">
                    <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl p-6 shadow-xl border border-gray-100 max-w-xs">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-xl flex items-center justify-center">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-gray-900">3000+</p>
                                <p class="text-sm text-gray-600">Anggota Aktif</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- VISI MISI SECTION --}}
<section class="py-20 lg:py-32 bg-gradient-to-br from-tosca-700 via-tosca-600 to-tosca-500 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-tosca-300 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="font-display text-4xl lg:text-5xl font-bold text-white mb-4">
                Visi & Misi WPI
            </h2>
            <p class="text-tosca-100 text-lg">
                Landasan dan arah gerak Wirausaha Pelajar Indonesia
            </p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-8">
            {{-- Visi --}}
            <div class="bg-white/10 backdrop-blur-md border border-white/20 p-10 lg:p-12 rounded-3xl hover:bg-white/15 transition-all duration-300 group">
                <div class="w-16 h-16 bg-yellow-400 rounded-2xl flex items-center justify-center mb-6 group-hover:rotate-6 transition-transform">
                    <svg class="w-8 h-8 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>

                <h3 class="font-display text-3xl lg:text-4xl font-bold text-yellow-300 mb-6 uppercase tracking-wide">
                    Visi
                </h3>

                <p class="text-lg text-white/90 leading-relaxed">
                    Menjadi wadah utama pelajar dan mahasiswa Indonesia dalam mencetak generasi wirausaha muda
                    yang mandiri, inovatif, berdaya saing, serta berkontribusi positif bagi pembangunan ekonomi bangsa.
                </p>
            </div>
            
            {{-- Misi --}}
            <div class="bg-white/10 backdrop-blur-md border border-white/20 p-10 lg:p-12 rounded-3xl hover:bg-white/15 transition-all duration-300 group">
                <div class="w-16 h-16 bg-yellow-400 rounded-2xl flex items-center justify-center mb-6 group-hover:rotate-6 transition-transform">
                    <svg class="w-8 h-8 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>

                <h3 class="font-display text-3xl lg:text-4xl font-bold text-yellow-300 mb-6 uppercase tracking-wide">
                    Misi
                </h3>

                <ul class="space-y-5">
                    <li class="flex gap-4 text-white/90 leading-relaxed">
                        <span class="flex-shrink-0 w-8 h-8 bg-yellow-400 text-gray-900 rounded-lg flex items-center justify-center font-bold text-sm">1</span>
                        <span class="text-lg">
                            Menumbuhkan jiwa kewirausahaan di kalangan pelajar dan mahasiswa sejak dini.
                        </span>
                    </li>

                    <li class="flex gap-4 text-white/90 leading-relaxed">
                        <span class="flex-shrink-0 w-8 h-8 bg-yellow-400 text-gray-900 rounded-lg flex items-center justify-center font-bold text-sm">2</span>
                        <span class="text-lg">
                            Meningkatkan kompetensi, keterampilan, dan wawasan bisnis anggota melalui edukasi dan pelatihan.
                        </span>
                    </li>

                    <li class="flex gap-4 text-white/90 leading-relaxed">
                        <span class="flex-shrink-0 w-8 h-8 bg-yellow-400 text-gray-900 rounded-lg flex items-center justify-center font-bold text-sm">3</span>
                        <span class="text-lg">
                            Membangun jejaring, kolaborasi, serta ekosistem usaha antar pelajar, mahasiswa, dan mitra strategis.
                        </span>
                    </li>

                    <li class="flex gap-4 text-white/90 leading-relaxed">
                        <span class="flex-shrink-0 w-8 h-8 bg-yellow-400 text-gray-900 rounded-lg flex items-center justify-center font-bold text-sm">4</span>
                        <span class="text-lg">
                            Mendukung akses permodalan, pemasaran, dan pendampingan usaha bagi anggota WPI.
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


{{-- EVENTS & NEWS SECTION --}}
<section class="py-20 lg:py-32 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-[1.5fr_1fr] gap-12 lg:gap-16">

            {{-- LEFT: BERITA & KEGIATAN --}}
            <div>
                <div class="mb-10">
                    <span class="inline-block px-4 py-2 bg-yellow-100 text-yellow-700 rounded-full text-sm font-bold tracking-wider mb-4">
                        BERITA & KEGIATAN
                    </span>
                    <h2 class="font-display text-4xl lg:text-5xl font-bold text-gray-900">
                        Cerita & Kegiatan <span class="gradient-text-yellow">WPI</span>
                    </h2>
                </div>

                <div class="space-y-8">
                    @foreach ($berita as $item)
                        <article class="group">
                            <a href="{{ route('artikel.show', $item->slug) }}"
                               class="block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">

                                <div class="grid sm:grid-cols-[200px_1fr] gap-6">
                                    <div class="h-48 sm:h-auto overflow-hidden">
                                        <img
                                            src="{{ asset('storage/' . $item->thumbnail) }}"
                                            alt="{{ $item->title }}"
                                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                    </div>

                                    <div class="p-6 sm:py-6 sm:pr-6">
                                        <span class="inline-block px-3 py-1.5 bg-tosca-100 text-tosca-700 rounded-full text-xs font-bold mb-3">
                                            {{ strtoupper($item->type) }}
                                        </span>

                                        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-tosca-600 transition-colors leading-tight">
                                            {{ $item->title }}
                                        </h3>

                                        <p class="text-gray-600 leading-relaxed mb-4">
                                            {{ $item->excerpt }}
                                        </p>

                                        <span class="text-sm text-tosca-600 font-semibold inline-flex items-center group-hover:gap-2 transition-all">
                                            Baca Selengkapnya
                                            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform"
                                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M9 5l7 7-7 7"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </article>
                    @endforeach
                </div>

                <div class="mt-10">
                    <a href="{{ route('artikel.index') }}"
                       class="btn-secondary inline-flex items-center px-8 py-4 rounded-full font-bold group">
                        BACA ARTIKEL LAINNYA
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                  d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- RIGHT: AGENDA KEGIATAN --}}
            <div>
                <div class="mb-8">
                    <span class="inline-block px-4 py-2 bg-tosca-50 text-tosca-700 rounded-full text-sm font-bold tracking-wider mb-4">
                        AGENDA
                    </span>
                    <h3 class="font-display text-3xl font-bold text-gray-900">Event Mendatang</h3>
                </div>

                <div class="space-y-6">
                    @foreach ($kegiatan as $event)
                        <div class="event-card bg-gradient-to-br from-white to-tosca-50/30 p-6 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100">
                            <div class="flex gap-5">
                                <div class="flex-shrink-0 w-20 h-20 bg-gradient-to-br from-tosca-600 to-tosca-500 rounded-xl flex flex-col items-center justify-center text-white shadow-lg">
                                    <span class="text-xs font-bold uppercase">
                                        {{ \Carbon\Carbon::parse($event->published_at)->format('M') }}
                                    </span>
                                    <span class="text-3xl font-bold leading-none">
                                        {{ \Carbon\Carbon::parse($event->published_at)->format('d') }}
                                    </span>
                                </div>

                                <div class="flex-1">
                                    <span class="text-sm text-tosca-600 font-medium mb-2 block">
                                        Event WPI
                                    </span>

                                    <h4 class="text-lg font-bold text-gray-900 mb-2 leading-tight">
                                        {{ $event->title }}
                                    </h4>

                                    <p class="text-sm text-gray-600">
                                        {{ $event->excerpt }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-8">
                    <a href="{{ route('artikel.index') }}"
                       class="btn-secondary inline-flex items-center px-8 py-4 rounded-full font-bold w-full justify-center group">
                        LIHAT SEMUA KEGIATAN
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                  d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- KEGIATAN KAMI SECTION --}}
<section class="py-20 lg:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-yellow-100 text-yellow-700 rounded-full text-sm font-bold tracking-wider mb-4">
                DOKUMENTASI
            </span>
            <h2 class="font-display text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Kegiatan <span class="gradient-text">Kami</span>
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Rekam jejak perjalanan dan pencapaian WPI dalam membentuk generasi wirausaha Indonesia
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- Activity Card 1 --}}
            <div class="card-hover bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                <div class="relative h-64 group overflow-hidden">
                    <img src="{{ asset('images/activity1.png') }}" alt="Seminar Kewirausahaan Pelajar WPI" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent flex items-center justify-center">
                        <button class="play-button w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-xl">
                            <svg class="w-6 h-6 text-tosca-600 ml-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <span class="px-3 py-1.5 bg-yellow-100 text-yellow-700 rounded-full text-xs font-bold">
                            3 MIN
                        </span>
                        <span class="text-sm text-gray-500">18 Oktober 2025</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 leading-tight">
                        Seminar Kewirausahaan Pelajar Nasional
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Aula Pendidikan, Jakarta
                    </p>
                </div>
            </div>
            
            {{-- Activity Card 2 --}}
            <div class="card-hover bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                <div class="relative h-64 group overflow-hidden">
                    <img src="{{ asset('images/activity2.png') }}" alt="Pelatihan Bisnis Digital WPI" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent flex items-center justify-center">
                        <button class="play-button w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-xl">
                            <svg class="w-6 h-6 text-tosca-600 ml-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <span class="px-3 py-1.5 bg-yellow-100 text-yellow-700 rounded-full text-xs font-bold">
                            3 MIN
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 leading-tight">
                        Pelatihan Bisnis Digital untuk Pelajar
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Pelatihan kewirausahaan berbasis digital untuk meningkatkan kreativitas dan produktivitas pelajar serta mahasiswa WPI.
                    </p>
                </div>
            </div>
            
            {{-- Activity Card 3 --}}
            <div class="card-hover bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                <div class="relative h-64 group overflow-hidden">
                    <img src="{{ asset('images/activity3.png') }}" alt="Leadership Camp WPI" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent flex items-center justify-center">
                        <button class="play-button w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-xl">
                            <svg class="w-6 h-6 text-tosca-600 ml-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <span class="px-3 py-1.5 bg-yellow-100 text-yellow-700 rounded-full text-xs font-bold">
                            3 MIN
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 leading-tight">
                        Leadership Camp & Entrepreneur Mindset WPI
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Program pengembangan kepemimpinan dan pola pikir wirausaha bagi pelajar dan mahasiswa sebagai calon pemimpin masa depan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- BENEFITS SECTION --}}
<section class="py-20 lg:py-32 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(20,184,166,0.05)_0%,transparent_50%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_70%_80%,rgba(250,204,21,0.05)_0%,transparent_50%)]"></div>
    
    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-tosca-50 text-tosca-700 rounded-full text-sm font-bold tracking-wider mb-4">
                MANFAAT BERGABUNG
            </span>
            <h2 class="font-display text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Temukan Beragam <span class="gradient-text">Manfaat</span>
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                untuk akselerasi langkahmu menuju kesuksesan berwirausaha
            </p>
        </div>
        
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
            {{-- Benefit 1 --}}
            <div class="benefit-card p-8 rounded-2xl text-center group">
                <div class="benefit-icon mx-auto mb-6">
                    <svg class="w-8 h-8 text-tosca-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Jaringan Bisnis</h3>
                <p class="text-gray-600 leading-relaxed">
                    Akses ke komunitas wirausaha pelajar yang luas di seluruh Indonesia
                </p>
            </div>
            
            {{-- Benefit 2 --}}
            <div class="benefit-card p-8 rounded-2xl text-center group">
                <div class="benefit-icon mx-auto mb-6">
                    <svg class="w-8 h-8 text-tosca-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Mentoring</h3>
                <p class="text-gray-600 leading-relaxed">
                    Bimbingan dari pengusaha dan mentor berpengalaman
                </p>
            </div>
            
            {{-- Benefit 3 --}}
            <div class="benefit-card p-8 rounded-2xl text-center group">
                <div class="benefit-icon mx-auto mb-6">
                    <svg class="w-8 h-8 text-tosca-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Akses ke Acara & Pelatihan</h3>
                <p class="text-gray-600 leading-relaxed">
                    Kesempatan mengikuti seminar dan workshop bisnis eksklusif
                </p>
            </div>
            
            {{-- Benefit 4 --}}
            <div class="benefit-card p-8 rounded-2xl text-center group">
                <div class="benefit-icon mx-auto mb-6">
                    <svg class="w-8 h-8 text-tosca-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Advokasi & Dukungan</h3>
                <p class="text-gray-600 leading-relaxed">
                    Representasi bisnis di forum lokal dan nasional
                </p>
            </div>
        </div>
    </div>
</section>

{{-- TESTIMONIAL SECTION --}}
<section class="py-20 lg:py-32 bg-gradient-to-br from-tosca-600 via-tosca-500 to-tosca-400 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 right-20 w-96 h-96 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-20 w-96 h-96 bg-white rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div class="order-2 lg:order-1 relative">
                <div class="absolute -top-6 -left-6 w-24 h-24 bg-yellow-400 rounded-2xl opacity-20"></div>
                <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-white rounded-2xl opacity-10"></div>
                <img src="{{ asset('images/testimoni.png') }}" alt="Testimonial" class="relative w-full rounded-3xl shadow-2xl border-4 border-white/20">
            </div>
            
            <div class="order-1 lg:order-2">
                <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm text-yellow-300 rounded-full text-sm font-bold tracking-wider mb-6">
                    TESTIMONI
                </span>
                
                <div class="mb-8">
                    <svg class="w-16 h-16 text-yellow-300 opacity-60" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                    </svg>
                </div>
                
                <p class="text-xl lg:text-2xl text-white leading-relaxed mb-8 font-light">
                    Bergabung dengan WPI telah memberikan akselerasi yang signifikan bagi bisnis saya. Melalui program mentoring dan networking, saya mendapatkan akses ke mitra baru dan peluang pasar yang lebih luas.
                </p>
                
                <div class="flex items-center gap-4">
                    <div class="w-1 h-16 bg-yellow-400 rounded-full"></div>
                    <div>
                        <p class="text-xl font-bold text-white">Ahmad Rizki Pratama</p>
                        <p class="text-tosca-100">Founder & CEO, StartUp Digital</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA SECTION --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
        <h2 class="font-display text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
            Siap Memulai <span class="gradient-text">Perjalanan Wirausaha</span> Anda?
        </h2>
        <p class="text-xl text-gray-600 mb-10 max-w-2xl mx-auto leading-relaxed">
            Bergabunglah dengan ribuan pelajar dan mahasiswa yang telah memulai perjalanan kewirausahaan mereka bersama WPI
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#" class="btn-primary inline-flex items-center justify-center px-8 py-4 rounded-full text-base font-bold group">
                DAFTAR SEKARANG
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            <a href="/kontak" class="btn-secondary inline-flex items-center justify-center px-8 py-4 rounded-full text-base font-bold">
                HUBUNGI KAMI
            </a>
        </div>
    </div>
</section>

@endsection