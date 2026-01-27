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

{{-- VISI SECTION --}}
<section class="py-20 lg:py-32 bg-white relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-20 right-20 w-96 h-96 bg-tosca-200 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-6xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-2xl mb-6 icon-pulse">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
            </div>
            
            <h2 class="font-display text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Visi <span class="gradient-text">WPI</span>
            </h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-tosca-500 to-yellow-400 mx-auto rounded-full mb-8"></div>
        </div>

        <div class="vision-card max-w-4xl mx-auto">
            <div class="animated-gradient bg-gradient-to-br from-tosca-600 via-tosca-500 to-tosca-400 rounded-3xl p-10 lg:p-16 shadow-2xl text-white relative overflow-hidden">
                {{-- Decorative Elements --}}
                <div class="absolute top-0 right-0 w-64 h-64 bg-yellow-400 rounded-full blur-3xl opacity-20"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-white rounded-full blur-3xl opacity-10"></div>
                
                <div class="relative">
                    {{-- Quote Mark --}}
                    <div class="mb-6">
                        <svg class="w-16 h-16 text-yellow-300 opacity-60" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                    </div>
                    
                    <p class="text-2xl lg:text-3xl xl:text-4xl font-light leading-relaxed mb-8">
                        Menjadikan HIPMI sebagai organisasi <strong class="font-bold text-yellow-300">pencetak pengusaha muda</strong> dan pembentuk ekosistem wirausaha terbaik di Kota Jakarta melalui program kerja yang <strong class="font-bold text-yellow-300">tepat inovatif</strong> dengan semangat dan marwah organisasi HIPMI.
                    </p>
                    
                    {{-- Key Points --}}
                    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                            <div class="text-3xl mb-2">🏢</div>
                            <p class="text-sm font-semibold">Pencetak Pengusaha</p>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                            <div class="text-3xl mb-2">🌐</div>
                            <p class="text-sm font-semibold">Ekosistem Terbaik</p>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                            <div class="text-3xl mb-2">💡</div>
                            <p class="text-sm font-semibold">Program Inovatif</p>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                            <div class="text-3xl mb-2">🔥</div>
                            <p class="text-sm font-semibold">Semangat HIPMI</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- MISI SECTION --}}
<section class="py-20 lg:py-32 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 opacity-5">
        <div class="absolute bottom-20 left-20 w-96 h-96 bg-yellow-200 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-6xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-2xl mb-6 icon-pulse">
                <svg class="w-10 h-10 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            
            <h2 class="font-display text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Misi <span class="gradient-text-yellow">WPI</span>
            </h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-yellow-400 to-tosca-500 mx-auto rounded-full mb-8"></div>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Empat pilar utama yang menjadi langkah strategis WPI dalam mewujudkan visi organisasi
            </p>
        </div>

        <div class="max-w-5xl mx-auto space-y-6">
            {{-- Mission Item 1 --}}
            <div class="mission-item group">
                <div class="bg-white rounded-2xl p-6 lg:p-8 shadow-lg border-2 border-gray-100 hover:border-tosca-300 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
                    <div class="flex gap-6 items-start">
                        <div class="mission-number flex-shrink-0 w-16 h-16 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-xl flex items-center justify-center shadow-lg">
                            <span class="text-2xl font-bold text-white">01</span>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-start gap-3 mb-3">
                                <div class="w-10 h-10 bg-tosca-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-5 h-5 text-tosca-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                    </svg>
                                </div>
                                <p class="text-lg lg:text-xl text-gray-800 leading-relaxed font-medium">
                                    Bangun koneksi dan kolaborasi dengan semangat inovasi dan optimalisasi.
                                </p>
                            </div>
                            <div class="ml-13">
                                <span class="inline-block px-3 py-1 bg-tosca-50 text-tosca-700 rounded-full text-xs font-semibold">Koneksi & Kolaborasi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mission Item 2 --}}
            <div class="mission-item group">
                <div class="bg-white rounded-2xl p-6 lg:p-8 shadow-lg border-2 border-gray-100 hover:border-yellow-300 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
                    <div class="flex gap-6 items-start">
                        <div class="mission-number flex-shrink-0 w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-xl flex items-center justify-center shadow-lg">
                            <span class="text-2xl font-bold text-gray-900">02</span>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-start gap-3 mb-3">
                                <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                    </svg>
                                </div>
                                <p class="text-lg lg:text-xl text-gray-800 leading-relaxed font-medium">
                                    Pengembangan ilmu dan kompetensi untuk anggota.
                                </p>
                            </div>
                            <div class="ml-13">
                                <span class="inline-block px-3 py-1 bg-yellow-50 text-yellow-700 rounded-full text-xs font-semibold">Pengembangan Kapasitas</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mission Item 3 --}}
            <div class="mission-item group">
                <div class="bg-white rounded-2xl p-6 lg:p-8 shadow-lg border-2 border-gray-100 hover:border-tosca-300 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
                    <div class="flex gap-6 items-start">
                        <div class="mission-number flex-shrink-0 w-16 h-16 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-xl flex items-center justify-center shadow-lg">
                            <span class="text-2xl font-bold text-white">03</span>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-start gap-3 mb-3">
                                <div class="w-10 h-10 bg-tosca-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-5 h-5 text-tosca-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                </div>
                                <p class="text-lg lg:text-xl text-gray-800 leading-relaxed font-medium">
                                    Membantu solusi modal dan akses pasar untuk anggota.
                                </p>
                            </div>
                            <div class="ml-13">
                                <span class="inline-block px-3 py-1 bg-tosca-50 text-tosca-700 rounded-full text-xs font-semibold">Modal & Akses Pasar</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mission Item 4 --}}
            <div class="mission-item group">
                <div class="bg-white rounded-2xl p-6 lg:p-8 shadow-lg border-2 border-gray-100 hover:border-yellow-300 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
                    <div class="flex gap-6 items-start">
                        <div class="mission-number flex-shrink-0 w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-xl flex items-center justify-center shadow-lg">
                            <span class="text-2xl font-bold text-gray-900">04</span>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-start gap-3 mb-3">
                                <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                </div>
                                <p class="text-lg lg:text-xl text-gray-800 leading-relaxed font-medium">
                                    Menyebarkan semangat kewirausahaan di Kota Jakarta.
                                </p>
                            </div>
                            <div class="ml-13">
                                <span class="inline-block px-3 py-1 bg-yellow-50 text-yellow-700 rounded-full text-xs font-semibold">Semangat Kewirausahaan</span>
                            </div>
                        </div>
                    </div>
                </div>
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
            <a href="#" class="btn-primary inline-flex items-center justify-center px-8 py-4 rounded-full text-base font-bold group">
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