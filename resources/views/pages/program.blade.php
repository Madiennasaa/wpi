@extends('layouts.master')

@section('title', 'Program WPI')
@section('meta_description', 'Program Wirausaha Pelajar Indonesia (WPI) dalam pengembangan kewirausahaan, kepemimpinan, dan inkubasi bisnis pelajar.')
@section('meta_keywords', 'Program WPI, Program Wirausaha Pelajar Indonesia, kewirausahaan pelajar')

@push('styles')
<style>
    /* Program Card Stagger Animation */
    .program-card {
        opacity: 0;
        animation: fadeInScale 0.6s ease-out forwards;
    }
    
    .program-card:nth-child(1) { animation-delay: 0.1s; }
    .program-card:nth-child(2) { animation-delay: 0.2s; }
    .program-card:nth-child(3) { animation-delay: 0.3s; }
    .program-card:nth-child(4) { animation-delay: 0.4s; }
    .program-card:nth-child(5) { animation-delay: 0.5s; }
    .program-card:nth-child(6) { animation-delay: 0.6s; }
    
    @keyframes fadeInScale {
        from {
            opacity: 0;
            transform: scale(0.9);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }
    
    /* Number Badge Animation */
    .program-number {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .program-card:hover .program-number {
        transform: scale(1.2) rotate(360deg);
        box-shadow: 0 10px 30px rgba(250, 204, 21, 0.4);
    }
    
    /* Icon Float Animation */
    .program-icon {
        transition: all 0.3s ease;
    }
    
    .program-card:hover .program-icon {
        transform: translateY(-5px);
    }
    
    /* Gradient Border Reveal */
    .program-card {
        position: relative;
        border: 2px solid transparent;
        background-clip: padding-box;
    }
    
    .program-card::before {
        content: '';
        position: absolute;
        inset: -2px;
        border-radius: 1.5rem;
        padding: 2px;
        background: linear-gradient(135deg, var(--tosca-400), var(--yellow-400));
        -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .program-card:hover::before {
        opacity: 1;
    }
</style>
@endpush

@section('content')

{{-- HERO SECTION --}}
<section class="relative bg-gradient-to-br from-tosca-700 via-tosca-600 to-tosca-500 text-white py-20 lg:py-32 overflow-hidden">
    {{-- Decorative Elements --}}
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-1/4 w-96 h-96 bg-tosca-300 rounded-full blur-3xl"></div>
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
                <span class="text-yellow-300 font-semibold">Program WPI</span>
            </div>
            
            <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm text-yellow-300 rounded-full text-sm font-bold tracking-wider mb-6 border border-white/20">
                PROGRAM KAMI
            </span>
            
            <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                Program <span class="text-yellow-300">WPI</span>
            </h1>
            
            <p class="text-xl lg:text-2xl text-tosca-50 leading-relaxed font-light max-w-3xl mx-auto">
                Program strategis Wirausaha Pelajar Indonesia dalam membangun generasi wirausaha muda yang mandiri dan berdaya saing
            </p>
        </div>
    </div>
</section>

{{-- INTRODUCTION --}}
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
        <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-2xl mb-8">
            <i class="fas fa-layer-group text-4xl text-white"></i>
        </div>
        
        <h2 class="font-display text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
            Enam Program <span class="gradient-text">Unggulan WPI</span>
        </h2>
        
        <p class="text-lg text-gray-600 leading-relaxed max-w-2xl mx-auto">
            WPI menyediakan berbagai program strategis yang dirancang untuk mengembangkan potensi kewirausahaan pelajar dan mahasiswa Indonesia secara komprehensif
        </p>
    </div>
</section>

{{-- PROGRAM LIST --}}
<section class="py-16 lg:py-24 bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-20 left-10 w-96 h-96 bg-tosca-200 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-yellow-200 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- Program 1: Edukasi & Literasi --}}
            <div class="program-card bg-white rounded-2xl p-8 lg:p-10 shadow-lg hover:shadow-2xl transition-all duration-300 group">
                <div class="flex items-start gap-6 mb-6">
                    <div class="program-number flex-shrink-0 w-14 h-14 rounded-full bg-gradient-to-br from-yellow-400 to-yellow-500 text-gray-900 flex items-center justify-center font-bold text-xl shadow-lg">
                        1
                    </div>
                    <div class="program-icon w-14 h-14 bg-gradient-to-br from-tosca-100 to-tosca-200 rounded-xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-book-reader text-2xl text-tosca-600"></i>
                    </div>
                </div>
                
                <h3 class="font-display text-2xl font-bold text-gray-900 mb-4 group-hover:text-tosca-600 transition-colors">
                    Edukasi & Literasi Kewirausahaan
                </h3>
                
                <p class="text-gray-600 leading-relaxed mb-6">
                    Pembekalan mindset dan pengetahuan kewirausahaan melalui seminar, workshop, dan kelas bisnis berkualitas.
                </p>
                
                <div class="flex items-center gap-2 text-tosca-600 font-semibold text-sm group-hover:gap-3 transition-all">
                    <span>Pelajari Program</span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>

            {{-- Program 2: Pelatihan & Pembinaan --}}
            <div class="program-card bg-white rounded-2xl p-8 lg:p-10 shadow-lg hover:shadow-2xl transition-all duration-300 group">
                <div class="flex items-start gap-6 mb-6">
                    <div class="program-number flex-shrink-0 w-14 h-14 rounded-full bg-gradient-to-br from-tosca-500 to-tosca-600 text-white flex items-center justify-center font-bold text-xl shadow-lg">
                        2
                    </div>
                    <div class="program-icon w-14 h-14 bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-chalkboard-teacher text-2xl text-yellow-600"></i>
                    </div>
                </div>
                
                <h3 class="font-display text-2xl font-bold text-gray-900 mb-4 group-hover:text-tosca-600 transition-colors">
                    Pelatihan & Pembinaan Usaha
                </h3>
                
                <p class="text-gray-600 leading-relaxed mb-6">
                    Pendampingan usaha pelajar melalui pelatihan manajemen, mentoring, dan pengembangan bisnis berkelanjutan.
                </p>
                
                <div class="flex items-center gap-2 text-tosca-600 font-semibold text-sm group-hover:gap-3 transition-all">
                    <span>Pelajari Program</span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>

            {{-- Program 3: Inkubasi Bisnis --}}
            <div class="program-card bg-white rounded-2xl p-8 lg:p-10 shadow-lg hover:shadow-2xl transition-all duration-300 group">
                <div class="flex items-start gap-6 mb-6">
                    <div class="program-number flex-shrink-0 w-14 h-14 rounded-full bg-gradient-to-br from-yellow-400 to-yellow-500 text-gray-900 flex items-center justify-center font-bold text-xl shadow-lg">
                        3
                    </div>
                    <div class="program-icon w-14 h-14 bg-gradient-to-br from-tosca-100 to-tosca-200 rounded-xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-seedling text-2xl text-tosca-600"></i>
                    </div>
                </div>
                
                <h3 class="font-display text-2xl font-bold text-gray-900 mb-4 group-hover:text-tosca-600 transition-colors">
                    Inkubasi Bisnis Pelajar
                </h3>
                
                <p class="text-gray-600 leading-relaxed mb-6">
                    Program inkubasi untuk mendukung lahirnya usaha rintisan inovatif dari kalangan pelajar dan mahasiswa.
                </p>
                
                <div class="flex items-center gap-2 text-tosca-600 font-semibold text-sm group-hover:gap-3 transition-all">
                    <span>Pelajari Program</span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>

            {{-- Program 4: Jejaring & Kolaborasi --}}
            <div class="program-card bg-white rounded-2xl p-8 lg:p-10 shadow-lg hover:shadow-2xl transition-all duration-300 group">
                <div class="flex items-start gap-6 mb-6">
                    <div class="program-number flex-shrink-0 w-14 h-14 rounded-full bg-gradient-to-br from-tosca-500 to-tosca-600 text-white flex items-center justify-center font-bold text-xl shadow-lg">
                        4
                    </div>
                    <div class="program-icon w-14 h-14 bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-handshake text-2xl text-yellow-600"></i>
                    </div>
                </div>
                
                <h3 class="font-display text-2xl font-bold text-gray-900 mb-4 group-hover:text-tosca-600 transition-colors">
                    Jejaring & Kolaborasi
                </h3>
                
                <p class="text-gray-600 leading-relaxed mb-6">
                    Membangun koneksi pelajar dengan dunia usaha, komunitas, dan mitra strategis untuk memperluas peluang.
                </p>
                
                <div class="flex items-center gap-2 text-tosca-600 font-semibold text-sm group-hover:gap-3 transition-all">
                    <span>Pelajari Program</span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>

            {{-- Program 5: Pengabdian & Dampak Sosial --}}
            <div class="program-card bg-white rounded-2xl p-8 lg:p-10 shadow-lg hover:shadow-2xl transition-all duration-300 group">
                <div class="flex items-start gap-6 mb-6">
                    <div class="program-number flex-shrink-0 w-14 h-14 rounded-full bg-gradient-to-br from-yellow-400 to-yellow-500 text-gray-900 flex items-center justify-center font-bold text-xl shadow-lg">
                        5
                    </div>
                    <div class="program-icon w-14 h-14 bg-gradient-to-br from-tosca-100 to-tosca-200 rounded-xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-hands-helping text-2xl text-tosca-600"></i>
                    </div>
                </div>
                
                <h3 class="font-display text-2xl font-bold text-gray-900 mb-4 group-hover:text-tosca-600 transition-colors">
                    Pengabdian & Dampak Sosial
                </h3>
                
                <p class="text-gray-600 leading-relaxed mb-6">
                    Mendorong kewirausahaan yang berdampak positif bagi masyarakat dan lingkungan sekitar.
                </p>
                
                <div class="flex items-center gap-2 text-tosca-600 font-semibold text-sm group-hover:gap-3 transition-all">
                    <span>Pelajari Program</span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>

            {{-- Program 6: Pengembangan Kepemimpinan --}}
            <div class="program-card bg-white rounded-2xl p-8 lg:p-10 shadow-lg hover:shadow-2xl transition-all duration-300 group">
                <div class="flex items-start gap-6 mb-6">
                    <div class="program-number flex-shrink-0 w-14 h-14 rounded-full bg-gradient-to-br from-tosca-500 to-tosca-600 text-white flex items-center justify-center font-bold text-xl shadow-lg">
                        6
                    </div>
                    <div class="program-icon w-14 h-14 bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-user-tie text-2xl text-yellow-600"></i>
                    </div>
                </div>
                
                <h3 class="font-display text-2xl font-bold text-gray-900 mb-4 group-hover:text-tosca-600 transition-colors">
                    Pengembangan Kepemimpinan
                </h3>
                
                <p class="text-gray-600 leading-relaxed mb-6">
                    Membentuk karakter dan kepemimpinan pelajar yang berintegritas, visioner, dan berdampak.
                </p>
                
                <div class="flex items-center gap-2 text-tosca-600 font-semibold text-sm group-hover:gap-3 transition-all">
                    <span>Pelajari Program</span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- BENEFITS SECTION --}}
<section class="py-16 lg:py-24 bg-gradient-to-br from-tosca-600 via-tosca-500 to-tosca-400 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-6xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-white mb-4">
                Manfaat Mengikuti Program WPI
            </h2>
            <p class="text-tosca-50 text-lg max-w-2xl mx-auto">
                Dapatkan pengalaman berharga dan keterampilan yang akan membawa Anda menuju kesuksesan
            </p>
        </div>
        
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center hover:bg-white/20 transition-all">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-yellow-400 rounded-2xl mb-4">
                    <i class="fas fa-lightbulb text-3xl text-gray-900"></i>
                </div>
                <h4 class="font-bold text-white mb-2 text-lg">Mindset Wirausaha</h4>
                <p class="text-tosca-100 text-sm">Pola pikir entrepreneur sejak dini</p>
            </div>
            
            <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center hover:bg-white/20 transition-all">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-yellow-400 rounded-2xl mb-4">
                    <i class="fas fa-chart-line text-3xl text-gray-900"></i>
                </div>
                <h4 class="font-bold text-white mb-2 text-lg">Skill Development</h4>
                <p class="text-tosca-100 text-sm">Pengembangan keterampilan bisnis</p>
            </div>
            
            <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center hover:bg-white/20 transition-all">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-yellow-400 rounded-2xl mb-4">
                    <i class="fas fa-users text-3xl text-gray-900"></i>
                </div>
                <h4 class="font-bold text-white mb-2 text-lg">Network Building</h4>
                <p class="text-tosca-100 text-sm">Jaringan bisnis yang luas</p>
            </div>
            
            <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center hover:bg-white/20 transition-all">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-yellow-400 rounded-2xl mb-4">
                    <i class="fas fa-trophy text-3xl text-gray-900"></i>
                </div>
                <h4 class="font-bold text-white mb-2 text-lg">Kompetisi & Prestasi</h4>
                <p class="text-tosca-100 text-sm">Peluang berkompetisi & berprestasi</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA SECTION --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
        <div class="mb-8">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-2xl mb-6">
                <i class="fas fa-rocket text-4xl text-gray-900"></i>
            </div>
        </div>
        
        <h2 class="font-display text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
            Ikuti Program <span class="gradient-text-yellow">WPI</span> Sekarang
        </h2>
        <p class="text-xl text-gray-600 mb-10 max-w-2xl mx-auto leading-relaxed">
            Bergabunglah dengan ribuan pelajar lainnya dan kembangkan potensi kewirausahaan Anda bersama program-program unggulan WPI
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#" class="btn-primary inline-flex items-center justify-center px-8 py-4 rounded-full text-base font-bold group">
                DAFTAR PROGRAM
                <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
            </a>
            <a href="/" class="btn-secondary inline-flex items-center justify-center px-8 py-4 rounded-full text-base font-bold">
                KEMBALI KE BERANDA
            </a>
        </div>
    </div>
</section>

@endsection