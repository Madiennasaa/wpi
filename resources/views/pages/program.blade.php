@extends('layouts.master')

@section('title', 'Tujuan WPI')
@section('meta_description', 'Tujuan Wirausaha Pelajar Indonesia (WPI) dalam membangun jiwa kewirausahaan, kemandirian, dan daya saing pelajar Indonesia.')
@section('meta_keywords', 'Tujuan WPI, Tujuan Wirausaha Pelajar Indonesia, kewirausahaan pelajar')

@push('styles')
<style>
    /* Goal Item Stagger Animation */
    .goal-item {
        opacity: 0;
        animation: fadeInUp 0.6s ease-out forwards;
    }
    
    .goal-item:nth-child(1) { animation-delay: 0.1s; }
    .goal-item:nth-child(2) { animation-delay: 0.2s; }
    .goal-item:nth-child(3) { animation-delay: 0.3s; }
    .goal-item:nth-child(4) { animation-delay: 0.4s; }
    .goal-item:nth-child(5) { animation-delay: 0.5s; }
    .goal-item:nth-child(6) { animation-delay: 0.6s; }
    
    /* Fallback for no animation support */
    @media (prefers-reduced-motion: reduce) {
        .goal-item {
            opacity: 1;
            animation: none;
        }
    }
    
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
    
    /* Stats Animation */
    .stat-item {
        opacity: 0;
        animation: fadeInUp 0.5s ease-out forwards;
    }
    
    .stat-item:nth-child(1) { animation-delay: 0.1s; }
    .stat-item:nth-child(2) { animation-delay: 0.2s; }
    .stat-item:nth-child(3) { animation-delay: 0.3s; }
    .stat-item:nth-child(4) { animation-delay: 0.4s; }
    
    /* Fallback for no animation support */
    @media (prefers-reduced-motion: reduce) {
        .stat-item {
            opacity: 1;
            animation: none;
        }
    }
    
    /* Card Hover Effects */
    .goal-card {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .goal-item:hover .goal-card {
        transform: translateY(-8px);
    }
    
    /* Icon Animation */
    .goal-icon {
        transition: all 0.3s ease;
    }
    
    .goal-item:hover .goal-icon {
        transform: scale(1.1);
    }
    
    /* Number Badge Subtle Effect */
    .goal-number {
        transition: all 0.3s ease;
    }
    
    .goal-item:hover .goal-number {
        transform: scale(1.1);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }
</style>
@endpush

@section('content')

{{-- HERO SECTION --}}
<section class="relative bg-gradient-to-br from-tosca-700 via-tosca-600 to-tosca-500 text-white py-20 lg:py-32 overflow-hidden">
    {{-- Decorative Elements --}}
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-1/3 w-96 h-96 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/3 w-96 h-96 bg-tosca-300 rounded-full blur-3xl"></div>
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
                <i class="fas fa-chevron-right"></i>
                <span class="text-yellow-300 font-semibold">Tujuan WPI</span>
            </div>
            
            <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm text-yellow-300 rounded-full text-sm font-bold tracking-wider mb-6 border border-white/20">
                TENTANG KAMI
            </span>
            
            <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                Tujuan <span class="text-yellow-300">WPI</span>
            </h1>
            
            <p class="text-xl lg:text-2xl text-tosca-50 leading-relaxed font-light max-w-3xl mx-auto">
                Arah dan cita-cita Wirausaha Pelajar Indonesia dalam mencetak generasi wirausaha muda
            </p>
        </div>
    </div>
</section>

{{-- INTRODUCTION --}}
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
        <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-2xl mb-8 shadow-lg">
            <i class="fas fa-bullseye text-4xl text-white"></i>
        </div>
        
        <h2 class="font-display text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
            Enam Tujuan <span class="text-transparent bg-clip-text bg-gradient-to-r from-tosca-600 to-yellow-500">Utama WPI</span>
        </h2>
        
        <div class="w-24 h-1 bg-gradient-to-r from-tosca-500 to-yellow-400 mx-auto rounded-full mb-8"></div>
        
        <p class="text-lg text-gray-600 leading-relaxed max-w-2xl mx-auto">
            WPI memiliki enam tujuan strategis yang menjadi kompas dalam setiap kegiatan dan program untuk membangun generasi wirausaha Indonesia yang tangguh dan berdaya saing
        </p>
    </div>
</section>

{{-- TUJUAN SECTION --}}
<section class="py-16 lg:py-24 bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-40 left-10 w-72 h-72 bg-tosca-200 rounded-full blur-3xl"></div>
        <div class="absolute bottom-40 right-10 w-72 h-72 bg-yellow-200 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-6xl mx-auto px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-8 lg:gap-10">
            
            {{-- Goal 1 --}}
            <div class="goal-item flex">
                <div class="goal-card bg-white rounded-2xl p-8 lg:p-10 shadow-lg hover:shadow-2xl border-2 border-gray-100 hover:border-tosca-300 transition-all duration-300 w-full">
                    <div class="flex gap-6 items-start">
                        <div class="goal-number flex-shrink-0 w-16 h-16 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-xl flex items-center justify-center shadow-lg">
                            <span class="text-2xl font-bold text-white">01</span>
                        </div>
                        <div class="flex-1">
                            <div class="goal-icon w-14 h-14 bg-gradient-to-br from-tosca-100 to-tosca-200 rounded-xl flex items-center justify-center mb-4 border-2 border-tosca-300">
                                <i class="fas fa-seedling text-2xl text-tosca-600"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Menumbuhkan Jiwa Kewirausahaan</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Menumbuhkan jiwa kewirausahaan di kalangan pelajar dan mahasiswa Indonesia sejak dini.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Goal 2 --}}
            <div class="goal-item flex">
                <div class="goal-card bg-white rounded-2xl p-8 lg:p-10 shadow-lg hover:shadow-2xl border-2 border-gray-100 hover:border-yellow-400 transition-all duration-300 w-full">
                    <div class="flex gap-6 items-start">
                        <div class="goal-number flex-shrink-0 w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-xl flex items-center justify-center shadow-lg">
                            <span class="text-2xl font-bold text-gray-900">02</span>
                        </div>
                        <div class="flex-1">
                            <div class="goal-icon w-14 h-14 bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-xl flex items-center justify-center mb-4 border-2 border-yellow-300">
                                <i class="fas fa-coins text-2xl text-yellow-600"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Kemandirian Ekonomi</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Mendorong kemandirian ekonomi pelajar melalui pengembangan usaha kreatif dan inovatif.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Goal 3 --}}
            <div class="goal-item flex">
                <div class="goal-card bg-white rounded-2xl p-8 lg:p-10 shadow-lg hover:shadow-2xl border-2 border-gray-100 hover:border-tosca-300 transition-all duration-300 w-full">
                    <div class="flex gap-6 items-start">
                        <div class="goal-number flex-shrink-0 w-16 h-16 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-xl flex items-center justify-center shadow-lg">
                            <span class="text-2xl font-bold text-white">03</span>
                        </div>
                        <div class="flex-1">
                            <div class="goal-icon w-14 h-14 bg-gradient-to-br from-tosca-100 to-tosca-200 rounded-xl flex items-center justify-center mb-4 border-2 border-tosca-300">
                                <i class="fas fa-chart-line text-2xl text-tosca-600"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Peningkatan Kapasitas</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Meningkatkan kapasitas pelajar dalam kewirausahaan, kepemimpinan, dan manajemen usaha.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Goal 4 --}}
            <div class="goal-item flex">
                <div class="goal-card bg-white rounded-2xl p-8 lg:p-10 shadow-lg hover:shadow-2xl border-2 border-gray-100 hover:border-yellow-400 transition-all duration-300 w-full">
                    <div class="flex gap-6 items-start">
                        <div class="goal-number flex-shrink-0 w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-xl flex items-center justify-center shadow-lg">
                            <span class="text-2xl font-bold text-gray-900">04</span>
                        </div>
                        <div class="flex-1">
                            <div class="goal-icon w-14 h-14 bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-xl flex items-center justify-center mb-4 border-2 border-yellow-300">
                                <i class="fas fa-trophy text-2xl text-yellow-600"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Generasi Berdaya Saing</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Menciptakan generasi wirausaha muda yang inovatif, berdaya saing, dan berintegritas tinggi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Goal 5 --}}
            <div class="goal-item flex">
                <div class="goal-card bg-white rounded-2xl p-8 lg:p-10 shadow-lg hover:shadow-2xl border-2 border-gray-100 hover:border-tosca-300 transition-all duration-300 w-full">
                    <div class="flex gap-6 items-start">
                        <div class="goal-number flex-shrink-0 w-16 h-16 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-xl flex items-center justify-center shadow-lg">
                            <span class="text-2xl font-bold text-white">05</span>
                        </div>
                        <div class="flex-1">
                            <div class="goal-icon w-14 h-14 bg-gradient-to-br from-tosca-100 to-tosca-200 rounded-xl flex items-center justify-center mb-4 border-2 border-tosca-300">
                                <i class="fas fa-project-diagram text-2xl text-tosca-600"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Ekosistem Kolaboratif</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Membangun ekosistem kewirausahaan pelajar yang kolaboratif, berkelanjutan, dan inklusif.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Goal 6 --}}
            <div class="goal-item flex">
                <div class="goal-card bg-white rounded-2xl p-8 lg:p-10 shadow-lg hover:shadow-2xl border-2 border-gray-100 hover:border-yellow-400 transition-all duration-300 w-full">
                    <div class="flex gap-6 items-start">
                        <div class="goal-number flex-shrink-0 w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-xl flex items-center justify-center shadow-lg">
                            <span class="text-2xl font-bold text-gray-900">06</span>
                        </div>
                        <div class="flex-1">
                            <div class="goal-icon w-14 h-14 bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-xl flex items-center justify-center mb-4 border-2 border-yellow-300">
                                <i class="fas fa-hands-helping text-2xl text-yellow-600"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Kontribusi Sosial</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Mendorong kontribusi pelajar dalam pembangunan ekonomi dan sosial masyarakat Indonesia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- STATS HIGHLIGHT --}}
<section class="py-16 lg:py-20 bg-gradient-to-br from-tosca-600 via-tosca-500 to-tosca-400 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-6xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-white mb-4">
                Dampak Nyata WPI
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-yellow-300 to-yellow-400 mx-auto rounded-full mb-6"></div>
            <p class="text-tosca-50 text-lg">Pencapaian dalam mewujudkan tujuan organisasi</p>
        </div>
        
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="stat-item text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-yellow-400 rounded-2xl mb-4 shadow-lg">
                    <i class="fas fa-users text-3xl text-gray-900"></i>
                </div>
                <div class="font-display text-4xl lg:text-5xl font-bold text-white mb-2">3000+</div>
                <p class="text-tosca-100 font-medium">Pelajar Terbina</p>
            </div>
            
            <div class="stat-item text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-yellow-400 rounded-2xl mb-4 shadow-lg">
                    <i class="fas fa-briefcase text-3xl text-gray-900"></i>
                </div>
                <div class="font-display text-4xl lg:text-5xl font-bold text-white mb-2">500+</div>
                <p class="text-tosca-100 font-medium">Usaha Rintisan</p>
            </div>
            
            <div class="stat-item text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-yellow-400 rounded-2xl mb-4 shadow-lg">
                    <i class="fas fa-calendar-check text-3xl text-gray-900"></i>
                </div>
                <div class="font-display text-4xl lg:text-5xl font-bold text-white mb-2">100+</div>
                <p class="text-tosca-100 font-medium">Program & Acara</p>
            </div>
            
            <div class="stat-item text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-yellow-400 rounded-2xl mb-4 shadow-lg">
                    <i class="fas fa-map-marked-alt text-3xl text-gray-900"></i>
                </div>
                <div class="font-display text-4xl lg:text-5xl font-bold text-white mb-2">6+</div>
                <p class="text-tosca-100 font-medium">Wilayah Cabang</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA SECTION --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
        <div class="mb-8">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-2xl mb-6 shadow-lg">
                <i class="fas fa-rocket text-4xl text-gray-900"></i>
            </div>
        </div>
        
        <h2 class="font-display text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
            Wujudkan Tujuan Bersama <span class="text-transparent bg-clip-text bg-gradient-to-r from-tosca-600 to-yellow-500">WPI</span>
        </h2>
        <p class="text-xl text-gray-600 mb-10 max-w-2xl mx-auto leading-relaxed">
            Mari bergabung dan berkontribusi dalam mewujudkan tujuan WPI untuk menciptakan generasi wirausaha Indonesia yang unggul
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#" class="btn-primary inline-flex items-center justify-center px-8 py-4 rounded-full text-base font-bold group">
                MULAI PERJALANAN
                <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
            </a>
            <a href="/" class="btn-secondary inline-flex items-center justify-center px-8 py-4 rounded-full text-base font-bold">
                KEMBALI KE BERANDA
            </a>
        </div>
    </div>
</section>

@endsection