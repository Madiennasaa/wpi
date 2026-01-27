@extends('layouts.master')

@section('title', 'Tugas dan Fungsi WPI')
@section('meta_description', 'Tugas dan fungsi Wirausaha Pelajar Indonesia (WPI) sebagai organisasi pelajar dalam pengembangan kewirausahaan nasional.')
@section('meta_keywords', 'Tugas WPI, Fungsi WPI, Wirausaha Pelajar Indonesia, organisasi pelajar, kewirausahaan')

@push('styles')
<style>
    /* Task Item Stagger Animation */
    .task-item {
        opacity: 0;
        animation: slideInRight 0.6s ease-out forwards;
    }
    
    .task-item:nth-child(1) { animation-delay: 0.1s; }
    .task-item:nth-child(2) { animation-delay: 0.2s; }
    .task-item:nth-child(3) { animation-delay: 0.3s; }
    .task-item:nth-child(4) { animation-delay: 0.4s; }
    .task-item:nth-child(5) { animation-delay: 0.5s; }
    
    /* Fallback for no animation support */
    @media (prefers-reduced-motion: reduce) {
        .task-item {
            opacity: 1;
            animation: none;
        }
    }
    
    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    /* Function Card Animation */
    .function-card {
        opacity: 0;
        animation: fadeInUp 0.6s ease-out forwards;
    }
    
    .function-card:nth-child(1) { animation-delay: 0.1s; }
    .function-card:nth-child(2) { animation-delay: 0.2s; }
    .function-card:nth-child(3) { animation-delay: 0.3s; }
    .function-card:nth-child(4) { animation-delay: 0.4s; }
    
    /* Fallback for no animation support */
    @media (prefers-reduced-motion: reduce) {
        .function-card {
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
    
    /* Number Badge Animation */
    .task-number {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .task-item:hover .task-number {
        transform: scale(1.15);
        box-shadow: 0 10px 25px rgba(250, 204, 21, 0.3);
    }
    
    /* Icon Rotation */
    .function-icon {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .function-card:hover .function-icon {
        transform: rotateY(180deg) scale(1.1);
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
                <span class="text-yellow-300 font-semibold">Tugas dan Fungsi</span>
            </div>
            
            <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm text-yellow-300 rounded-full text-sm font-bold tracking-wider mb-6 border border-white/20">
                TENTANG KAMI
            </span>
            
            <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                Tugas dan <span class="text-yellow-300">Fungsi</span>
            </h1>
            
            <p class="text-xl lg:text-2xl text-tosca-50 leading-relaxed font-light max-w-3xl mx-auto">
                Peran strategis Wirausaha Pelajar Indonesia dalam membangun generasi wirausaha muda
            </p>
        </div>
    </div>
</section>

{{-- TUGAS SECTION --}}
<section class="py-20 lg:py-32 bg-white relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-20 left-20 w-96 h-96 bg-tosca-200 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-6xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-2xl mb-6">
                <i class="fas fa-tasks text-4xl text-white"></i>
            </div>
            
            <h2 class="font-display text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Tugas <span class="gradient-text">WPI</span>
            </h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-tosca-500 to-yellow-400 mx-auto rounded-full mb-8"></div>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Lima tugas utama yang menjadi tanggung jawab WPI dalam membangun ekosistem wirausaha pelajar
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-6 lg:gap-8 max-w-5xl mx-auto">
            {{-- Task Item 1 --}}
            <div class="task-item group flex">
                <div class="bg-gradient-to-br from-white to-tosca-50/30 rounded-2xl p-6 lg:p-8 shadow-lg border-2 border-gray-100 hover:border-tosca-300 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 w-full">
                    <div class="flex gap-5 items-start">
                        <div class="task-number flex-shrink-0 w-14 h-14 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-xl flex items-center justify-center shadow-lg">
                            <span class="text-2xl font-bold text-gray-900">01</span>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-start gap-3 mb-2">
                                <div class="w-10 h-10 bg-tosca-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-users text-xl text-tosca-600"></i>
                                </div>
                                <p class="text-lg text-gray-800 leading-relaxed font-medium">
                                    Menjadi wadah pengembangan kewirausahaan pelajar dan mahasiswa Indonesia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Task Item 2 --}}
            <div class="task-item group flex">
                <div class="bg-gradient-to-br from-white to-yellow-50/30 rounded-2xl p-6 lg:p-8 shadow-lg border-2 border-gray-100 hover:border-yellow-300 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 w-full">
                    <div class="flex gap-5 items-start">
                        <div class="task-number flex-shrink-0 w-14 h-14 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-xl flex items-center justify-center shadow-lg">
                            <span class="text-2xl font-bold text-white">02</span>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-start gap-3 mb-2">
                                <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-graduation-cap text-xl text-yellow-600"></i>
                                </div>
                                <p class="text-lg text-gray-800 leading-relaxed font-medium">
                                    Menyelenggarakan edukasi, pelatihan, dan pembinaan kewirausahaan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Task Item 3 --}}
            <div class="task-item group flex">
                <div class="bg-gradient-to-br from-white to-tosca-50/30 rounded-2xl p-6 lg:p-8 shadow-lg border-2 border-gray-100 hover:border-tosca-300 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 w-full">
                    <div class="flex gap-5 items-start">
                        <div class="task-number flex-shrink-0 w-14 h-14 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-xl flex items-center justify-center shadow-lg">
                            <span class="text-2xl font-bold text-gray-900">03</span>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-start gap-3 mb-2">
                                <div class="w-10 h-10 bg-tosca-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-sitemap text-xl text-tosca-600"></i>
                                </div>
                                <p class="text-lg text-gray-800 leading-relaxed font-medium">
                                    Menghimpun dan mengoordinasikan pelajar yang memiliki minat usaha.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Task Item 4 --}}
            <div class="task-item group flex">
                <div class="bg-gradient-to-br from-white to-yellow-50/30 rounded-2xl p-6 lg:p-8 shadow-lg border-2 border-gray-100 hover:border-yellow-300 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 w-full">
                    <div class="flex gap-5 items-start">
                        <div class="task-number flex-shrink-0 w-14 h-14 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-xl flex items-center justify-center shadow-lg">
                            <span class="text-2xl font-bold text-white">04</span>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-start gap-3 mb-2">
                                <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-network-wired text-xl text-yellow-600"></i>
                                </div>
                                <p class="text-lg text-gray-800 leading-relaxed font-medium">
                                    Membangun ekosistem wirausaha pelajar yang kolaboratif.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Task Item 5 --}}
            <div class="task-item group md:col-span-2 max-w-2xl mx-auto w-full flex">
                <div class="bg-gradient-to-br from-white to-tosca-50/30 rounded-2xl p-6 lg:p-8 shadow-lg border-2 border-gray-100 hover:border-tosca-300 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 w-full">
                    <div class="flex gap-5 items-start">
                        <div class="task-number flex-shrink-0 w-14 h-14 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-xl flex items-center justify-center shadow-lg">
                            <span class="text-2xl font-bold text-gray-900">05</span>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-start gap-3 mb-2">
                                <div class="w-10 h-10 bg-tosca-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-rocket text-xl text-tosca-600"></i>
                                </div>
                                <p class="text-lg text-gray-800 leading-relaxed font-medium">
                                    Mendukung pembangunan SDM kewirausahaan nasional.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- FUNGSI SECTION --}}
<section class="py-20 lg:py-32 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 opacity-5">
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-yellow-200 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-6xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-2xl mb-6">
                <i class="fas fa-cogs text-4xl text-gray-900"></i>
            </div>
            
            <h2 class="font-display text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Fungsi <span class="gradient-text-yellow">WPI</span>
            </h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-yellow-400 to-tosca-500 mx-auto rounded-full mb-8"></div>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Empat fungsi strategis WPI dalam menjalankan perannya sebagai organisasi wirausaha pelajar
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            {{-- Function Card 1 --}}
            <div class="function-card flex">
                <div class="bg-white rounded-2xl p-8 lg:p-10 shadow-lg border-2 border-gray-100 hover:border-tosca-300 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 relative overflow-hidden w-full flex flex-col">
                    {{-- Corner Accent --}}
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-tosca-100 to-tosca-200 rounded-bl-[100px] opacity-50"></div>
                    
                    <div class="relative flex flex-col flex-1">
                        <div class="w-16 h-16 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                            <i class="function-icon fas fa-hands-helping text-3xl text-white"></i>
                        </div>
                        
                        <h3 class="font-display text-2xl font-bold text-gray-900 mb-3">
                            Fasilitator
                        </h3>
                        
                        <p class="text-gray-600 leading-relaxed text-lg flex-1">
                            Menyediakan ruang belajar, diskusi, dan kolaborasi kewirausahaan bagi seluruh pelajar dan mahasiswa.
                        </p>
                        
                        <div class="mt-6 flex items-center gap-2 text-tosca-600 font-semibold group-hover:gap-3 transition-all">
                            <span class="text-sm">Pelajari Lebih Lanjut</span>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Function Card 2 --}}
            <div class="function-card flex">
                <div class="bg-white rounded-2xl p-8 lg:p-10 shadow-lg border-2 border-gray-100 hover:border-yellow-300 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 relative overflow-hidden w-full flex flex-col">
                    {{-- Corner Accent --}}
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-bl-[100px] opacity-50"></div>
                    
                    <div class="relative flex flex-col flex-1">
                        <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                            <i class="function-icon fas fa-chalkboard-teacher text-3xl text-gray-900"></i>
                        </div>
                        
                        <h3 class="font-display text-2xl font-bold text-gray-900 mb-3">
                            Edukator
                        </h3>
                        
                        <p class="text-gray-600 leading-relaxed text-lg flex-1">
                            Memberikan pendidikan dan pelatihan kewirausahaan berkualitas kepada pelajar di seluruh Indonesia.
                        </p>
                        
                        <div class="mt-6 flex items-center gap-2 text-yellow-600 font-semibold group-hover:gap-3 transition-all">
                            <span class="text-sm">Pelajari Lebih Lanjut</span>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Function Card 3 --}}
            <div class="function-card flex">
                <div class="bg-white rounded-2xl p-8 lg:p-10 shadow-lg border-2 border-gray-100 hover:border-tosca-300 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 relative overflow-hidden w-full flex flex-col">
                    {{-- Corner Accent --}}
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-tosca-100 to-tosca-200 rounded-bl-[100px] opacity-50"></div>
                    
                    <div class="relative flex flex-col flex-1">
                        <div class="w-16 h-16 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                            <i class="function-icon fas fa-handshake text-3xl text-white"></i>
                        </div>
                        
                        <h3 class="font-display text-2xl font-bold text-gray-900 mb-3">
                            Mediator
                        </h3>
                        
                        <p class="text-gray-600 leading-relaxed text-lg flex-1">
                            Menghubungkan pelajar dengan dunia usaha dan pemangku kepentingan untuk menciptakan sinergi.
                        </p>
                        
                        <div class="mt-6 flex items-center gap-2 text-tosca-600 font-semibold group-hover:gap-3 transition-all">
                            <span class="text-sm">Pelajari Lebih Lanjut</span>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Function Card 4 --}}
            <div class="function-card flex">
                <div class="bg-white rounded-2xl p-8 lg:p-10 shadow-lg border-2 border-gray-100 hover:border-yellow-300 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 relative overflow-hidden w-full flex flex-col">
                    {{-- Corner Accent --}}
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-bl-[100px] opacity-50"></div>
                    
                    <div class="relative flex flex-col flex-1">
                        <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                            <i class="function-icon fas fa-lightbulb text-3xl text-gray-900"></i>
                        </div>
                        
                        <h3 class="font-display text-2xl font-bold text-gray-900 mb-3">
                            Inkubator
                        </h3>
                        
                        <p class="text-gray-600 leading-relaxed text-lg flex-1">
                            Mendorong lahirnya ide dan usaha rintisan inovatif dari kalangan pelajar dan mahasiswa.
                        </p>
                        
                        <div class="mt-6 flex items-center gap-2 text-yellow-600 font-semibold group-hover:gap-3 transition-all">
                            <span class="text-sm">Pelajari Lebih Lanjut</span>
                            <i class="fas fa-arrow-right"></i>
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
                <i class="fas fa-rocket text-4xl text-white"></i>
            </div>
        </div>
        
        <h2 class="font-display text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
            Bergabung dengan <span class="gradient-text">WPI</span>
        </h2>
        <p class="text-xl text-gray-600 mb-10 max-w-2xl mx-auto leading-relaxed">
            Jadilah bagian dari gerakan wirausaha pelajar dan kembangkan potensi kewirausahaan Anda bersama ribuan pelajar lainnya
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#" class="btn-primary inline-flex items-center justify-center px-8 py-4 rounded-full text-base font-bold group">
                DAFTAR SEKARANG
                <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
            </a>
            <a href="/" class="btn-secondary inline-flex items-center justify-center px-8 py-4 rounded-full text-base font-bold">
                KEMBALI KE BERANDA
            </a>
        </div>
    </div>
</section>

@endsection