@extends('layouts.master')

@section('title', 'Struktur Organisasi | Wirausaha Pelajar Indonesia')
@section('meta_description', 'Struktur kepengurusan Wirausaha Pelajar Indonesia terdiri dari Badan Kepengurusan Inti dan Badan Kepengurusan Harian.')
@section('meta_keywords', 'struktur organisasi WPI, kepengurusan WPI, organisasi wirausaha pelajar, struktur kepemimpinan')

@push('styles')
<style>
    /* Structure Cards Animation */
    .structure-card {
        opacity: 0;
        animation: fadeInUp 0.6s ease-out forwards;
    }
    
    .structure-card:nth-child(1) { animation-delay: 0.1s; }
    .structure-card:nth-child(2) { animation-delay: 0.2s; }
    .structure-card:nth-child(3) { animation-delay: 0.3s; }
    .structure-card:nth-child(4) { animation-delay: 0.4s; }
    
    /* Fallback for no animation support */
    @media (prefers-reduced-motion: reduce) {
        .structure-card {
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
    
    /* Structure Node Animation */
    .structure-node {
        opacity: 0;
        transform: translateY(20px);
        animation: nodeFadeIn 0.6s ease-out forwards;
    }
    
    /* Fallback for no animation support */
    @media (prefers-reduced-motion: reduce) {
        .structure-node {
            opacity: 1;
            transform: translateY(0);
            animation: none;
        }
    }
    
    @keyframes nodeFadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Diagram Lines Animation */
    .structure-line {
        opacity: 0;
        animation: lineGrow 1s ease-out forwards;
    }
    
    /* Fallback for no animation support */
    @media (prefers-reduced-motion: reduce) {
        .structure-line {
            opacity: 1;
            animation: none;
            height: 40px;
        }
    }
    
    @keyframes lineGrow {
        from {
            opacity: 0;
            height: 0;
        }
        to {
            opacity: 1;
            height: 40px;
        }
    }
    
    /* Leadership Card Hover Effects */
    .leadership-card {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .leadership-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 25px 50px -12px rgba(20, 184, 166, 0.25);
    }
    
    /* Timeline Item Animation */
    .timeline-item {
        opacity: 0;
        animation: slideInRight 0.5s ease-out forwards;
    }
    
    .timeline-item:nth-child(1) { animation-delay: 0.1s; }
    .timeline-item:nth-child(2) { animation-delay: 0.2s; }
    .timeline-item:nth-child(3) { animation-delay: 0.3s; }
    .timeline-item:nth-child(4) { animation-delay: 0.4s; }
    .timeline-item:nth-child(5) { animation-delay: 0.5s; }
    .timeline-item:nth-child(6) { animation-delay: 0.6s; }
    .timeline-item:nth-child(7) { animation-delay: 0.7s; }
    
    /* Fallback for no animation support */
    @media (prefers-reduced-motion: reduce) {
        .timeline-item {
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
    
    /* Requirement Badge Animation */
    .req-badge {
        transition: all 0.3s ease;
    }
    
    .req-item:hover .req-badge {
        transform: scale(1.1);
        box-shadow: 0 8px 20px rgba(250, 204, 21, 0.2);
    }

    /* New Leadership Styles - Minimalist */
    .leadership-minimalist-card {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        background: linear-gradient(145deg, #ffffff, #f8fafc);
        border-radius: 1.5rem;
        border: 1px solid rgba(20, 184, 166, 0.1);
        overflow: hidden;
    }
    
    .leadership-minimalist-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 40px -15px rgba(20, 184, 166, 0.15);
        border-color: rgba(20, 184, 166, 0.2);
    }
    
    .leader-image-container {
        position: relative;
        overflow: hidden;
        border-radius: 1rem 1rem 0 0;
        height: 320px;
    }
    
    .leader-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }
    
    .leadership-minimalist-card:hover .leader-image {
        transform: scale(1.05);
    }
    
    .leader-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.4));
        height: 80px;
        z-index: 1;
    }
    
    .leader-badge {
        position: absolute;
        top: 1.5rem;
        left: 1.5rem;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(8px);
        padding: 0.5rem 1rem;
        border-radius: 2rem;
        font-weight: 700;
        font-size: 0.75rem;
        letter-spacing: 0.05em;
        z-index: 2;
        border: 1px solid rgba(20, 184, 166, 0.2);
    }
    
    .leader-info {
        padding: 2rem;
    }
    
    .leader-name {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 0.25rem;
        line-height: 1.2;
    }
    
    .leader-position {
        font-size: 0.875rem;
        color: #64748b;
        font-weight: 500;
        margin-bottom: 1rem;
    }
    
    .leader-description {
        font-size: 0.875rem;
        color: #475569;
        line-height: 1.6;
    }
    
    .leader-divider {
        height: 2px;
        background: linear-gradient(to right, transparent, #14b8a6, transparent);
        margin: 1rem 0;
        border: none;
    }
    
    .timeline-divider {
        height: 1px;
        background: linear-gradient(to right, transparent, #cbd5e1, transparent);
        margin: 4rem 0;
        border: none;
    }
    
    .section-subtitle {
        font-size: 1.25rem;
        color: #64748b;
        text-align: center;
        margin-bottom: 3rem;
        font-weight: 400;
    }
    
    .leader-social {
        display: flex;
        gap: 0.75rem;
        margin-top: 1.5rem;
    }
    
    .social-icon {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f1f5f9;
        color: #64748b;
        transition: all 0.3s ease;
        text-decoration: none;
    }
    
    .social-icon:hover {
        background: #14b8a6;
        color: white;
        transform: translateY(-2px);
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
                <i class="fas fa-chevron-right"></i>
                <span class="text-yellow-300 font-semibold">Struktur Organisasi</span>
            </div>
            
            <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm text-yellow-300 rounded-full text-sm font-bold tracking-wider mb-6 border border-white/20">
                TENTANG KAMI
            </span>
            
            <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                Struktur <span class="text-yellow-300">Organisasi</span>
            </h1>
            
            <p class="text-xl lg:text-2xl text-tosca-50 leading-relaxed font-light max-w-3xl mx-auto">
                Organisasi yang solid dengan struktur kepengurusan yang jelas untuk memastikan efektivitas dalam mencapai visi dan misi WPI
            </p>
        </div>
    </div>
</section>

{{-- OVERVIEW SECTION --}}
<section class="py-20 lg:py-32 bg-white relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-20 right-20 w-96 h-96 bg-yellow-200 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-2xl mb-6">
                <i class="fas fa-sitemap text-4xl text-white"></i>
            </div>
            
            <h2 class="font-display text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                <span class="gradient-text">Dua Pilar</span> Kepengurusan
            </h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-tosca-500 to-yellow-400 mx-auto rounded-full mb-8"></div>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Struktur kepengurusan WPI dibagi menjadi dua badan utama yang saling mendukung dalam mencapai tujuan organisasi
            </p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 max-w-5xl mx-auto">
            {{-- BoC Card --}}
            <div class="structure-card group">
                <div class="bg-gradient-to-br from-white to-tosca-50/30 rounded-2xl p-6 lg:p-8 shadow-lg border-2 border-gray-100 hover:border-tosca-300 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-2xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-users-cog text-3xl text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">Badan Kepengurusan Inti</h3>
                            <p class="text-tosca-600 font-semibold">Board of Commissioner (BoC)</p>
                        </div>
                    </div>
                    
                    <div class="space-y-4 text-gray-600">
                        <p class="leading-relaxed">
                            Kepengurusan inti dipimpin oleh seorang <strong>Chairman</strong> dan dianggotai oleh komisaris. Komisaris ditunjuk dan diangkat oleh chairman, sedangkan chairman ditunjuk dan diangkat oleh Founder WPI.
                        </p>
                        
                        <div class="bg-tosca-50 rounded-xl p-5 border border-tosca-100">
                            <h4 class="font-bold text-tosca-700 mb-3 flex items-center gap-2">
                                <i class="fas fa-tasks text-tosca-600"></i>
                                Tugas Utama BoC:
                            </h4>
                            <ul class="space-y-2 ml-7">
                                <li class="flex items-start gap-2">
                                    <span class="text-tosca-500 mt-1">•</span>
                                    <span>Membimbing President Director/CEO</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-tosca-500 mt-1">•</span>
                                    <span>Membantu membuka akses kerjasama bisnis</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-tosca-500 mt-1">•</span>
                                    <span>Menjalin hubungan dengan aparatur pemerintah setempat</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- BoD Card --}}
            <div class="structure-card group">
                <div class="bg-gradient-to-br from-white to-yellow-50/30 rounded-2xl p-6 lg:p-8 shadow-lg border-2 border-gray-100 hover:border-yellow-300 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-2xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-user-tie text-3xl text-gray-900"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">Badan Kepengurusan Harian</h3>
                            <p class="text-yellow-600 font-semibold">Board of Director (BoD)</p>
                        </div>
                    </div>
                    
                    <div class="space-y-4 text-gray-600">
                        <p class="leading-relaxed">
                            Kepengurusan harian dipimpin oleh <strong>President Director/CEO</strong> dan dianggotai oleh jajaran director/Chief. Director/Chief ditunjuk dan diangkat oleh President Director/CEO.
                        </p>
                        
                        <div class="bg-yellow-50 rounded-xl p-5 border border-yellow-100">
                            <h4 class="font-bold text-yellow-700 mb-3 flex items-center gap-2">
                                <i class="fas fa-tasks text-yellow-600"></i>
                                Wewenang BoD:
                            </h4>
                            <ul class="space-y-2 ml-7">
                                <li class="flex items-start gap-2">
                                    <span class="text-yellow-500 mt-1">•</span>
                                    <span>Melaksanakan operasional organisasi sehari-hari</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-yellow-500 mt-1">•</span>
                                    <span>Mengelola program dan kegiatan WPI</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-yellow-500 mt-1">•</span>
                                    <span>Bertanggung jawab atas perkembangan organisasi</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- DIAGRAM SECTION --}}
<section class="py-20 lg:py-32 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-20 left-20 w-96 h-96 bg-tosca-200 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-6xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-2xl mb-6">
                <i class="fas fa-diagram-project text-4xl text-gray-900"></i>
            </div>
            
            <h2 class="font-display text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Struktur <span class="gradient-text">Kepengurusan</span>
            </h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-yellow-400 to-tosca-500 mx-auto rounded-full mb-8"></div>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Diagram alur kepengurusan dari tingkat nasional hingga chapter
            </p>
        </div>
        
        <div class="structure-diagram bg-gradient-to-br from-tosca-50 to-yellow-50 rounded-3xl p-6 lg:p-10 shadow-lg border-2 border-tosca-200">
            <div class="flex flex-col items-center space-y-8">
                {{-- Founder Level --}}
                <div class="structure-node bg-white rounded-2xl p-6 shadow-lg border-2 border-tosca-300 min-w-[280px] text-center">
                    <span class="inline-block px-3 py-1 bg-tosca-100 text-tosca-700 rounded-full text-xs font-bold mb-3">
                        FOUNDER WPI
                    </span>
                    <h4 class="text-xl font-bold text-gray-900 mb-1">Kak Bekky</h4>
                    <p class="text-sm text-gray-500">Penunjuk Chairman Nasional</p>
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <i class="fas fa-crown text-yellow-500 text-lg"></i>
                    </div>
                </div>
                
                <div class="structure-line w-1 bg-gradient-to-b from-tosca-400 to-tosca-200 rounded-full"></div>
                
                {{-- Chairman Level --}}
                <div class="structure-node bg-white rounded-2xl p-6 shadow-lg border-2 border-tosca-300 min-w-[280px] text-center">
                    <span class="inline-block px-3 py-1 bg-tosca-100 text-tosca-700 rounded-full text-xs font-bold mb-3">
                        CHAIRMAN NASIONAL (BoC)
                    </span>
                    <h4 class="text-xl font-bold text-gray-900 mb-1">Pemimpin Dewan Komisaris</h4>
                    <p class="text-sm text-gray-500">Membimbing President Director</p>
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <i class="fas fa-users text-tosca-500 text-lg"></i>
                    </div>
                </div>
                
                <div class="structure-line w-1 bg-gradient-to-b from-yellow-400 to-yellow-200 rounded-full"></div>
                
                {{-- President Director Level --}}
                <div class="structure-node bg-white rounded-2xl p-6 shadow-lg border-2 border-yellow-300 min-w-[280px] text-center">
                    <span class="inline-block px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-bold mb-3">
                        PRESIDENT DIRECTOR (BoD)
                    </span>
                    <h4 class="text-xl font-bold text-gray-900 mb-1">CEO Nasional</h4>
                    <p class="text-sm text-gray-500">Memimpin Dewan Direksi</p>
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <i class="fas fa-user-tie text-yellow-500 text-lg"></i>
                    </div>
                </div>
                
                <div class="structure-line w-1 bg-gradient-to-b from-tosca-400 to-tosca-200 rounded-full"></div>
                
                {{-- Chapter Level --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                    <div class="structure-node bg-white rounded-2xl p-6 shadow-lg border-2 border-tosca-300 text-center">
                        <span class="inline-block px-3 py-1 bg-tosca-100 text-tosca-700 rounded-full text-xs font-bold mb-3">
                            CHAPTER CHAIRMAN (BoC)
                        </span>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Ketua Chapter</h4>
                        <p class="text-sm text-gray-500">Dewan Komisaris Chapter</p>
                        <div class="mt-4 pt-4 border-t border-gray-100">
                            <i class="fas fa-map-marker-alt text-tosca-500 text-lg"></i>
                        </div>
                    </div>
                    
                    <div class="structure-node bg-white rounded-2xl p-6 shadow-lg border-2 border-yellow-300 text-center">
                        <span class="inline-block px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-bold mb-3">
                            CHIEF EXECUTIVE OFFICER (BoD)
                        </span>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">CEO Chapter</h4>
                        <p class="text-sm text-gray-500">Direktur Chapter</p>
                        <div class="mt-4 pt-4 border-t border-gray-100">
                            <i class="fas fa-user-tie text-yellow-500 text-lg"></i>
                        </div>
                    </div>
                </div>
                
                <div class="structure-line w-1 bg-gradient-to-b from-tosca-400 to-tosca-200 rounded-full"></div>
                
                {{-- Operational Level --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                    <div class="structure-node bg-white rounded-2xl p-5 shadow-lg border-2 border-tosca-300 text-center">
                        <span class="inline-block px-3 py-1 bg-tosca-100 text-tosca-700 rounded-full text-xs font-bold mb-3">
                            SCHOOL GROUP
                        </span>
                        <h4 class="text-lg font-bold text-gray-900 mb-1">General Manager</h4>
                        <p class="text-xs text-gray-500">SD, SMP, SMA di sebuah kota</p>
                        <div class="mt-3 pt-3 border-t border-gray-100">
                            <i class="fas fa-school text-tosca-500"></i>
                        </div>
                    </div>
                    
                    <div class="structure-node bg-white rounded-2xl p-5 shadow-lg border-2 border-tosca-300 text-center">
                        <span class="inline-block px-3 py-1 bg-tosca-100 text-tosca-700 rounded-full text-xs font-bold mb-3">
                            SUB-CHAPTER
                        </span>
                        <h4 class="text-lg font-bold text-gray-900 mb-1">General Manager</h4>
                        <p class="text-xs text-gray-500">Wilayah operasional</p>
                        <div class="mt-3 pt-3 border-t border-gray-100">
                            <i class="fas fa-building text-tosca-500"></i>
                        </div>
                    </div>
                    
                    <div class="structure-node bg-white rounded-2xl p-5 shadow-lg border-2 border-tosca-300 text-center">
                        <span class="inline-block px-3 py-1 bg-tosca-100 text-tosca-700 rounded-full text-xs font-bold mb-3">
                            CAMPUS GROUP
                        </span>
                        <h4 class="text-lg font-bold text-gray-900 mb-1">General Manager</h4>
                        <p class="text-xs text-gray-500">Jurusan dalam universitas</p>
                        <div class="mt-3 pt-3 border-t border-gray-100">
                            <i class="fas fa-university text-tosca-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- PENGURUS KEHORMATAAN SECTION --}}
<section class="py-20 lg:py-32 bg-white relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 opacity-5">
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-yellow-200 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-6xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-tosca-100 text-tosca-700 rounded-full text-sm font-bold tracking-wider mb-4">
                PENUNJANG ORGANISASI
            </span>
            <h2 class="font-display text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Struktur <span class="gradient-text">Pengurus Kehormatan</span>
            </h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-tosca-500 to-yellow-400 mx-auto rounded-full mb-8"></div>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Dewan yang memberikan dukungan dan arahan strategis bagi perkembangan WPI
            </p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-8 max-w-5xl mx-auto">
            {{-- Dewan Pembina --}}
            <div class="structure-card group">
                <div class="bg-gradient-to-br from-white to-tosca-50/30 rounded-2xl p-6 lg:p-8 shadow-lg border-2 border-gray-100 hover:border-tosca-300 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-2xl flex items-center justify-center mb-4 shadow-lg">
                            <i class="fas fa-users-gear text-3xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Dewan Pembina</h3>
                        <p class="text-tosca-600 font-semibold">Advisory Board</p>
                    </div>
                    
                    <div class="space-y-6">
                        <div class="bg-tosca-50/50 rounded-xl p-5 border border-tosca-100">
                            <h4 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                                <i class="fas fa-user-friends text-tosca-600"></i>
                                Susunan Dewan Pembina:
                            </h4>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-3">
                                    <div class="w-6 h-6 bg-tosca-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                        <span class="text-tosca-700 font-bold">a</span>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-900">Ketua Dewan Pembina</p>
                                        <p class="text-sm text-gray-600">Biasanya kepala daerah kota setempat</p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-6 h-6 bg-tosca-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                        <span class="text-tosca-700 font-bold">b</span>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-900">Anggota Dewan Pembina</p>
                                        <p class="text-sm text-gray-600">Pejabat, pengusaha, tokoh masyarakat, dsb.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Dewan Pakar --}}
            <div class="structure-card group">
                <div class="bg-gradient-to-br from-white to-yellow-50/30 rounded-2xl p-6 lg:p-8 shadow-lg border-2 border-gray-100 hover:border-yellow-300 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-2xl flex items-center justify-center mb-4 shadow-lg">
                            <i class="fas fa-lightbulb text-3xl text-gray-900"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Dewan Pakar</h3>
                        <p class="text-yellow-600 font-semibold">Expert Board</p>
                    </div>
                    
                    <div class="space-y-6">
                        <div class="bg-yellow-50/50 rounded-xl p-5 border border-yellow-100">
                            <h4 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                                <i class="fas fa-user-tie text-yellow-600"></i>
                                Susunan Dewan Pakar:
                            </h4>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-3">
                                    <div class="w-6 h-6 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                        <span class="text-yellow-700 font-bold">c</span>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-900">Ketua Dewan Pakar</p>
                                        <p class="text-sm text-gray-600">Biasanya ketua organisasi besar di wilayah tersebut</p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-6 h-6 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                        <span class="text-yellow-700 font-bold">d</span>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-900">Anggota Dewan Pakar</p>
                                        <p class="text-sm text-gray-600">Pengusaha, tokoh organisasi, tokoh masyarakat, dsb.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-12 bg-gradient-to-r from-tosca-50 to-yellow-50 rounded-2xl p-6 lg:p-8 border border-tosca-200 max-w-3xl mx-auto">
            <h4 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                <i class="fas fa-handshake text-tosca-600"></i>
                Peran Utama Pengurus Kehormatan
            </h4>
            <p class="text-gray-700 leading-relaxed">
                Mendukung penuh segala aktivitas dan acara yang dijalankan kepengurusan WPI baik nasional maupun chapter. Pengurus kehormatan tidak wajib dibentuk, namun berperan penting dalam memberikan legitimasi dan akses strategis.
            </p>
        </div>
    </div>
</section>

{{-- TUGAS PENGURUS PUSAT SECTION --}}
<section class="py-20 lg:py-32 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-20 left-20 w-96 h-96 bg-tosca-200 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-6xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-yellow-100 text-yellow-700 rounded-full text-sm font-bold tracking-wider mb-4">
                TUGAS & TANGGUNG JAWAB
            </span>
            <h2 class="font-display text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Tugas <span class="gradient-text">Pengurus Pusat</span>
            </h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-yellow-400 to-tosca-500 mx-auto rounded-full mb-8"></div>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Deskripsi tugas dan tanggung jawab masing-masing direksi dalam kepengurusan pusat WPI
            </p>
        </div>
        
        <div class="space-y-6 max-w-4xl mx-auto">
            {{-- President Director --}}
            <div class="timeline-item">
                <div class="bg-white rounded-2xl p-6 shadow-lg border-2 border-gray-100 hover:border-tosca-300 transition-all duration-300 hover:shadow-xl">
                    <h3 class="text-xl font-bold text-gray-900 mb-2 flex items-center gap-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-crown text-white text-lg"></i>
                        </div>
                        President Director
                    </h3>
                    <p class="text-gray-700">
                        Memimpin Dewan Direksi Pusat WPI, dan para CEO di seluruh Indonesia.
                    </p>
                </div>
            </div>
            
            {{-- Vice President Director --}}
            <div class="timeline-item">
                <div class="bg-white rounded-2xl p-6 shadow-lg border-2 border-gray-100 hover:border-yellow-300 transition-all duration-300 hover:shadow-xl">
                    <h3 class="text-xl font-bold text-gray-900 mb-2 flex items-center gap-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-xl flex items-center justify-center">
                            <i class="fas fa-user-tie text-gray-900 text-lg"></i>
                        </div>
                        Vice President Director
                    </h3>
                    <p class="text-gray-700">
                        Membantu President Director dalam segala urusan yang membutuhkan bantuan Vice President Director.
                    </p>
                </div>
            </div>
            
            {{-- Operation Director --}}
            <div class="timeline-item">
                <div class="bg-white rounded-2xl p-6 shadow-lg border-2 border-gray-100 hover:border-tosca-300 transition-all duration-300 hover:shadow-xl">
                    <h3 class="text-xl font-bold text-gray-900 mb-2 flex items-center gap-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-cogs text-white text-lg"></i>
                        </div>
                        Operation Director
                    </h3>
                    <p class="text-gray-700">
                        Bertanggung jawab atas kegiatan Nasional dengan berkoordinasi dengan President Director dan Marketing Director.
                    </p>
                </div>
            </div>
            
            {{-- Financial Director --}}
            <div class="timeline-item">
                <div class="bg-white rounded-2xl p-6 shadow-lg border-2 border-gray-100 hover:border-yellow-300 transition-all duration-300 hover:shadow-xl">
                    <h3 class="text-xl font-bold text-gray-900 mb-2 flex items-center gap-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-xl flex items-center justify-center">
                            <i class="fas fa-chart-line text-gray-900 text-lg"></i>
                        </div>
                        Financial Director
                    </h3>
                    <p class="text-gray-700">
                        Mengelola keuangan organisasi tingkat Nasional.
                    </p>
                </div>
            </div>
            
            {{-- Marketing Director --}}
            <div class="timeline-item">
                <div class="bg-white rounded-2xl p-6 shadow-lg border-2 border-gray-100 hover:border-tosca-300 transition-all duration-300 hover:shadow-xl">
                    <h3 class="text-xl font-bold text-gray-900 mb-2 flex items-center gap-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-bullhorn text-white text-lg"></i>
                        </div>
                        Marketing Director
                    </h3>
                    <p class="text-gray-700">
                        Bertanggung jawab dalam merekrut CEO baru untuk pengembangan jaringan WPI.
                    </p>
                </div>
            </div>
            
            {{-- Legal Director --}}
            <div class="timeline-item">
                <div class="bg-white rounded-2xl p-6 shadow-lg border-2 border-gray-100 hover:border-yellow-300 transition-all duration-300 hover:shadow-xl">
                    <h3 class="text-xl font-bold text-gray-900 mb-2 flex items-center gap-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-xl flex items-center justify-center">
                            <i class="fas fa-gavel text-gray-900 text-lg"></i>
                        </div>
                        Legal Director
                    </h3>
                    <p class="text-gray-700">
                        Memberikan Surat Pengangkatan dan pencopotan jabatan untuk CEO.
                    </p>
                </div>
            </div>
            
            {{-- Corporate Secretary --}}
            <div class="timeline-item">
                <div class="bg-white rounded-2xl p-6 shadow-lg border-2 border-gray-100 hover:border-tosca-300 transition-all duration-300 hover:shadow-xl">
                    <h3 class="text-xl font-bold text-gray-900 mb-2 flex items-center gap-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-file-contract text-white text-lg"></i>
                        </div>
                        Corporate Secretary (CorSec)
                    </h3>
                    <p class="text-gray-700">
                        Membantu Dewan Direksi dalam hal administrasi dan pencatatan kegiatan organisasi.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- LEADERSHIP SECTION --}}
<section class="py-20 lg:py-32 bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-20 right-20 w-96 h-96 bg-tosca-200 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-tosca-100 text-tosca-700 rounded-full text-sm font-bold tracking-wider mb-4">
                STRUKTUR PIMPINAN
            </span>
            <h2 class="font-display text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Pimpinan <span class="gradient-text">WPI</span>
            </h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-tosca-500 to-yellow-400 mx-auto rounded-full mb-8"></div>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Jajaran pimpinan yang mengarahkan visi, strategi, dan gerak organisasi Wirausaha Pelajar Indonesia
            </p>
        </div>
        
        {{-- Pendiri WPI --}}
        <div class="text-center mb-12">
            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center justify-center gap-2">
                <span class="w-3 h-3 bg-tosca-500 rounded-full"></span>
                Pendiri WPI
                <span class="w-3 h-3 bg-tosca-500 rounded-full"></span>
            </h3>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Individu-individu yang menggagas dan meletakkan pondasi organisasi WPI
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto mb-16">
            {{-- Founder 1 --}}
            <div class="leadership-minimalist-card">
                <div class="leader-image-container">
                    <img src="{{ asset('images/founder.jpeg') }}" alt="Kak Bekky" class="leader-image">
                    <div class="leader-overlay"></div>
                    <div class="leader-badge bg-gradient-to-r from-yellow-400 to-yellow-500 text-gray-900">
                        FOUNDER
                    </div>
                </div>
                <div class="leader-info">
                    <h3 class="leader-name">Kak Bekky</h3>
                    <p class="leader-position">Pendiri Wirausaha Pelajar Indonesia</p>
                    <hr class="leader-divider">
                    <p class="leader-description">
                        Penggagas utama visi dan arah besar WPI. Berperan sebagai pembina utama organisasi di tingkat nasional dan penentu kebijakan strategis.
                    </p>
                    <div class="leader-social">
                        <a href="#" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Co-Founder 1 --}}
            <div class="leadership-minimalist-card">
                <div class="leader-image-container">
                    <img src="{{ asset('images/cofounder.jpeg') }}" alt="Rezza Artha" class="leader-image">
                    <div class="leader-overlay"></div>
                    <div class="leader-badge bg-gradient-to-r from-tosca-400 to-tosca-500 text-white">
                        CO-FOUNDER
                    </div>
                </div>
                <div class="leader-info">
                    <h3 class="leader-name">Rezza Artha</h3>
                    <p class="leader-position">Wakil Pendiri WPI</p>
                    <hr class="leader-divider">
                    <p class="leader-description">
                        Berperan aktif dalam perumusan kebijakan strategis, pengembangan organisasi secara nasional, dan pembentukan struktur kepemimpinan.
                    </p>
                    <div class="leader-social">
                        <a href="#" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Co-Founder 2 --}}
            <div class="leadership-minimalist-card">
                <div class="leader-image-container">
                    <img src="{{ asset('images/cofounder2.png') }}" alt="Adnan Mughoffar" class="leader-image">
                    <div class="leader-overlay"></div>
                    <div class="leader-badge bg-gradient-to-r from-tosca-400 to-tosca-500 text-white">
                        CO-FOUNDER
                    </div>
                </div>
                <div class="leader-info">
                    <h3 class="leader-name">Adnan Mughoffar</h3>
                    <p class="leader-position">Wakil Pendiri WPI</p>
                    <hr class="leader-divider">
                    <p class="leader-description">
                        Mendukung pengelolaan organisasi, penguatan struktur kepemimpinan, dan pengembangan jaringan strategis WPI.
                    </p>
                    <div class="leader-social">
                        <a href="#" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Pimpinan Nasional Saat Ini --}}
        <div class="text-center mb-12 mt-20">
            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center justify-center gap-2">
                <span class="w-3 h-3 bg-yellow-400 rounded-full"></span>
                Pimpinan Nasional Saat Ini
                <span class="w-3 h-3 bg-yellow-400 rounded-full"></span>
            </h3>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Kepemimpinan yang sedang menjabat dan bertanggung jawab atas operasional organisasi
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto mb-20">
            {{-- President --}}
            <div class="leadership-minimalist-card">
                <div class="leader-image-container">
                    <img src="{{ asset('images/pres.png') }}" alt="Ismail" class="leader-image">
                    <div class="leader-overlay"></div>
                    <div class="leader-badge bg-gradient-to-r from-tosca-500 to-tosca-600 text-white">
                        PRESIDENT
                    </div>
                </div>
                <div class="leader-info">
                    <h3 class="leader-name">Ismail</h3>
                    <p class="leader-position">President WPI</p>
                    <hr class="leader-divider">
                    <p class="leader-description">
                        Bertanggung jawab atas kepemimpinan nasional, pengambilan keputusan strategis, serta pengelolaan seluruh program dan cabang WPI.
                    </p>
                    <div class="leader-social">
                        <a href="#" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Vice President --}}
            <div class="leadership-minimalist-card">
                <div class="leader-image-container">
                    <img src="{{ asset('images/wapres.png') }}" alt="Yusuf Budi Raharjo" class="leader-image">
                    <div class="leader-overlay"></div>
                    <div class="leader-badge bg-gradient-to-r from-yellow-400 to-yellow-500 text-gray-900">
                        VICE PRESIDENT
                    </div>
                </div>
                <div class="leader-info">
                    <h3 class="leader-name">Yusuf Budi Raharjo</h3>
                    <p class="leader-position">Vice President WPI</p>
                    <hr class="leader-divider">
                    <p class="leader-description">
                        Mendampingi Presiden dalam menjalankan organisasi serta mengoordinasikan pelaksanaan program nasional dan daerah.
                    </p>
                    <div class="leader-social">
                        <a href="#" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <hr class="timeline-divider">

        {{-- Mantan Pimpinan Nasional --}}
        <div class="text-center mb-12">
            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center justify-center gap-2">
                <span class="w-3 h-3 bg-gray-400 rounded-full"></span>
                Mantan Pimpinan Nasional
                <span class="w-3 h-3 bg-gray-400 rounded-full"></span>
            </h3>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Para pemimpin yang telah berkontribusi dalam perjalanan WPI sebelumnya
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            {{-- Mantan President 1 --}}
            <div class="leadership-minimalist-card opacity-90 hover:opacity-100">
                <div class="leader-image-container">
                    <img src="{{ asset('images/mantan-pres-1.jpeg') }}" alt="Nama Mantan President 1" class="leader-image grayscale hover:grayscale-0 transition-all duration-500">
                    <div class="leader-overlay"></div>
                    <div class="leader-badge bg-gradient-to-r from-gray-400 to-gray-500 text-white">
                        PRESIDENT 2022-2025
                    </div>
                </div>
                <div class="leader-info">
                    <h3 class="leader-name">Rosyad</h3>
                    <p class="leader-position">Mantan President WPI</p>
                    <hr class="leader-divider">
                    <p class="leader-description">
                        Memimpin WPI pada periode 2022-2025. Berhasil mengembangkan dan meluncurkan program wirausaha pelajar nasional.
                    </p>
                    <div class="leader-social">
                        <a href="#" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Mantan President 2 --}}
            <div class="leadership-minimalist-card opacity-90 hover:opacity-100">
                <div class="leader-image-container">
                    <img src="{{ asset('images/mantan-pres-2.jpg') }}" alt="Nama Mantan President 2" class="leader-image grayscale hover:grayscale-0 transition-all duration-500">
                    <div class="leader-overlay"></div>
                    <div class="leader-badge bg-gradient-to-r from-gray-400 to-gray-500 text-white">
                        PRESIDENT 2018-2020
                    </div>
                </div>
                <div class="leader-info">
                    <h3 class="leader-name">Nama Mantan President 2</h3>
                    <p class="leader-position">Mantan President WPI</p>
                    <hr class="leader-divider">
                    <p class="leader-description">
                        Memimpin WPI pada periode 2018-2020. Fokus pada penguatan struktur internal dan kolaborasi dengan lembaga pendidikan.
                    </p>
                    <div class="leader-social">
                        <a href="#" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Mantan President 3 --}}
            <div class="leadership-minimalist-card opacity-90 hover:opacity-100">
                <div class="leader-image-container">
                    <img src="{{ asset('images/mantan-pres-3.jpeg') }}" alt="Nama Mantan President 3" class="leader-image grayscale hover:grayscale-0 transition-all duration-500">
                    <div class="leader-overlay"></div>
                    <div class="leader-badge bg-gradient-to-r from-gray-400 to-gray-500 text-white">
                        PRESIDENT 2019-2021
                    </div>
                </div>
                <div class="leader-info">
                    <h3 class="leader-name">Iqbal</h3>
                    <p class="leader-position">Mantan President WPI</p>
                    <hr class="leader-divider">
                    <p class="leader-description">
                        Memimpin WPI pada periode 2019-2021, Berperan dalam konsolidasi organisasi dan pengembangan program dasar wirausaha pelajar.
                    </p>
                    <div class="leader-social">
                        <a href="#" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
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
                <i class="fas fa-handshake text-4xl text-white"></i>
            </div>
        </div>
        
        <h2 class="font-display text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
            Ingin Menjadi Bagian dari <span class="gradient-text">Struktur Kami</span>?
        </h2>
        <p class="text-xl text-gray-600 mb-10 max-w-2xl mx-auto leading-relaxed">
            Bergabunglah dengan kepengurusan WPI dan berkontribusi dalam membangun generasi wirausaha pelajar Indonesia
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://wa.me/6285697818910" class="btn-primary inline-flex items-center justify-center px-8 py-4 rounded-full text-base font-bold group">
                CARA BERGABUNG
                <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
            </a>
            <a href="{{ route('kontak') }}" class="btn-secondary inline-flex items-center justify-center px-8 py-4 rounded-full text-base font-bold">
                KONTAK KEPENGURUSAN
            </a>
        </div>
    </div>
</section>

@endsection