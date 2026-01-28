@extends('layouts.master')

@section('title', 'Visi dan Misi WPI')
@section('meta_description', 'Visi dan Misi Wirausaha Pelajar Indonesia (WPI) dalam membentuk generasi wirausaha muda yang mandiri, kreatif, dan berdaya saing.')
@section('meta_keywords', 'Visi Misi WPI, Wirausaha Pelajar Indonesia, organisasi pelajar, kewirausahaan pelajar')

@push('styles')
<style>
    /* Vision Card Animation */
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    
    .vision-card {
        animation: float 6s ease-in-out infinite;
    }
    
    /* Mission Item Stagger */
    .mission-item {
        opacity: 0;
        animation: slideInLeft 0.6s ease-out forwards;
    }
    
    .mission-item:nth-child(1) { animation-delay: 0.1s; }
    .mission-item:nth-child(2) { animation-delay: 0.2s; }
    .mission-item:nth-child(3) { animation-delay: 0.3s; }
    .mission-item:nth-child(4) { animation-delay: 0.4s; }
    
    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    /* Number Animation */
    .mission-number {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .mission-item:hover .mission-number {
        transform: scale(1.2) rotate(-5deg);
    }
    
    /* Icon Pulse */
    @keyframes pulse {
        0%, 100% {
            opacity: 1;
            transform: scale(1);
        }
        50% {
            opacity: 0.8;
            transform: scale(1.05);
        }
    }
    
    .icon-pulse {
        animation: pulse 2s ease-in-out infinite;
    }
    
    /* Gradient Animation */
    @keyframes gradient-shift {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }
    
    .animated-gradient {
        background-size: 200% 200%;
        animation: gradient-shift 8s ease infinite;
    }
</style>
@endpush

@section('content')

{{-- HERO SECTION --}}
<section class="relative bg-gradient-to-br from-tosca-700 via-tosca-600 to-tosca-500 text-white py-20 lg:py-32 overflow-hidden">
    {{-- Decorative Elements --}}
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-tosca-300 rounded-full blur-3xl"></div>
    </div>
    
    {{-- Geometric Pattern --}}
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff20_1px,transparent_1px),linear-gradient(to_bottom,#ffffff20_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center max-w-4xl mx-auto">
            {{-- Breadcrumb --}}
            <div class="flex items-center justify-center gap-2 text-tosca-100 text-sm mb-6">
                <a href="/" class="hover:text-yellow-300 transition-colors">Beranda</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <span class="text-yellow-300 font-semibold">Visi dan Misi</span>
            </div>
            
            <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm text-yellow-300 rounded-full text-sm font-bold tracking-wider mb-6 border border-white/20">
                TENTANG KAMI
            </span>
            
            <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                Visi dan <span class="text-yellow-300">Misi</span>
            </h1>
            
            <p class="text-xl lg:text-2xl text-tosca-50 leading-relaxed font-light max-w-3xl mx-auto">
                Landasan nilai dan arah gerak Wirausaha Pelajar Indonesia dalam membangun generasi wirausaha masa depan
            </p>
        </div>
    </div>
</section>

{{-- VISI MISI SECTION --}}
<section class="py-20 lg:py-32 bg-gradient-to-br from-tosca-700 via-tosca-600 to-tosca-500 relative overflow-hidden">
    {{-- Decorative Background --}}
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-tosca-300 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
        {{-- Heading --}}
        <div class="text-center mb-16">
            <h2 class="font-display text-4xl lg:text-5xl font-bold text-white mb-4">
                Visi & Misi Kami
            </h2>
            <p class="text-tosca-100 text-lg">
                Landasan gerak Wirausaha Pelajar Indonesia
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-8">
            {{-- VISI --}}
            <div class="bg-white/10 backdrop-blur-md border border-white/20 p-10 lg:p-12 rounded-3xl hover:bg-white/15 transition-all duration-300 group">
                <div class="w-16 h-16 bg-yellow-400 rounded-2xl flex items-center justify-center mb-6 group-hover:rotate-6 transition-transform">
                    <svg class="w-8 h-8 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7
                               -1.274 4.057-5.064 7-9.542 7
                               -4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>

                <h3 class="font-display text-3xl lg:text-4xl font-bold text-yellow-300 mb-6 uppercase tracking-wide">
                    Visi
                </h3>

                <p class="text-lg text-white/90 leading-relaxed">
                    Menjadikan <strong class="text-yellow-300">Wirausaha Pelajar Indonesia (WPI)</strong>
                    sebagai wadah utama dalam mencetak <strong class="text-yellow-300">wirausaha muda sejak dini</strong>,
                    serta membangun ekosistem kewirausahaan pelajar yang
                    <strong class="text-yellow-300">inovatif, mandiri, dan berdaya saing</strong>
                    di seluruh Indonesia.
                </p>
            </div>

            {{-- MISI --}}
            <div class="bg-white/10 backdrop-blur-md border border-white/20 p-10 lg:p-12 rounded-3xl hover:bg-white/15 transition-all duration-300 group">
                <div class="w-16 h-16 bg-yellow-400 rounded-2xl flex items-center justify-center mb-6 group-hover:rotate-6 transition-transform">
                    <svg class="w-8 h-8 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>

                <h3 class="font-display text-3xl lg:text-4xl font-bold text-yellow-300 mb-6 uppercase tracking-wide">
                    Misi
                </h3>

                <ul class="space-y-5">
                    <li class="flex gap-4 text-white/90 leading-relaxed">
                        <span class="flex-shrink-0 w-8 h-8 bg-yellow-400 text-gray-900 rounded-lg flex items-center justify-center font-bold text-sm">
                            1
                        </span>
                        <span class="text-lg">
                            Menumbuhkan jiwa kewirausahaan serta membangun koneksi dan kolaborasi
                            antar pelajar dan mahasiswa di seluruh Indonesia.
                        </span>
                    </li>

                    <li class="flex gap-4 text-white/90 leading-relaxed">
                        <span class="flex-shrink-0 w-8 h-8 bg-yellow-400 text-gray-900 rounded-lg flex items-center justify-center font-bold text-sm">
                            2
                        </span>
                        <span class="text-lg">
                            Mengembangkan ilmu, keterampilan, dan kompetensi kewirausahaan anggota
                            melalui edukasi, pelatihan, dan pendampingan berkelanjutan.
                        </span>
                    </li>

                    <li class="flex gap-4 text-white/90 leading-relaxed">
                        <span class="flex-shrink-0 w-8 h-8 bg-yellow-400 text-gray-900 rounded-lg flex items-center justify-center font-bold text-sm">
                            3
                        </span>
                        <span class="text-lg">
                            Membantu akses permodalan, pemasaran, serta peluang usaha
                            guna mendorong pertumbuhan bisnis anggota.
                        </span>
                    </li>

                    <li class="flex gap-4 text-white/90 leading-relaxed">
                        <span class="flex-shrink-0 w-8 h-8 bg-yellow-400 text-gray-900 rounded-lg flex items-center justify-center font-bold text-sm">
                            4
                        </span>
                        <span class="text-lg">
                            Menanamkan dan menyebarkan semangat kewirausahaan
                            di kalangan pelajar dan mahasiswa secara berkelanjutan.
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- CTA SECTION --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
        <div class="mb-8">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-2xl mb-6">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
            </div>
        </div>
        
        <h2 class="font-display text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
            Wujudkan Visi Bersama <span class="gradient-text">WPI</span>
        </h2>
        <p class="text-xl text-gray-600 mb-10 max-w-2xl mx-auto leading-relaxed">
            Mari bergabung dan berkontribusi dalam mewujudkan visi dan misi WPI untuk masa depan Indonesia yang lebih baik
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://wa.me/6285697818910" class="btn-primary inline-flex items-center justify-center px-8 py-4 rounded-full text-base font-bold group">
                GABUNG SEKARANG
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            <a href="/" class="btn-secondary inline-flex items-center justify-center px-8 py-4 rounded-full text-base font-bold">
                KEMBALI KE BERANDA
            </a>
        </div>
    </div>
</section>

@endsection