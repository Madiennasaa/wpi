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
        height: 420px;
        background: #f1f5f9;
    }
    
    .leader-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center top;
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

    /* Tab Navigation Styles */
    .dewan-tabs-container {
        display: flex;
        justify-content: center;
        margin-bottom: 3rem;
    }

    .dewan-tabs {
        display: inline-flex;
        background: white;
        border-radius: 2rem;
        padding: 0.5rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        overflow-x: auto;
        gap: 0.5rem;
    }

    .dewan-tab {
        padding: 0.875rem 2rem;
        border: none;
        background: transparent;
        color: #64748b;
        font-weight: 600;
        font-size: 0.875rem;
        border-radius: 1.5rem;
        cursor: pointer;
        transition: all 0.3s ease;
        white-space: nowrap;
    }

    .dewan-tab:hover {
        background: #f1f5f9;
        color: #0f766e;
    }

    .dewan-tab.active {
        background: linear-gradient(135deg, #facc15 0%, #fbbf24 100%);
        color: #1f2937;
        box-shadow: 0 4px 12px rgba(250, 204, 21, 0.3);
    }

    /* Tab Content */
    .tab-content {
        display: none;
        animation: fadeIn 0.5s ease-out;
    }

    .tab-content.active {
        display: block;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Ketua Umum Card Styles */
    .ketua-card {
        background: linear-gradient(145deg, #ffffff, #f8fafc);
        border-radius: 2rem;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        border: 2px solid rgba(20, 184, 166, 0.1);
        transition: all 0.4s ease;
    }

    .ketua-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(20, 184, 166, 0.15);
        border-color: rgba(20, 184, 166, 0.3);
    }

    .ketua-image-wrapper {
        position: relative;
        height: 480px;
        overflow: hidden;
        background: linear-gradient(135deg, #14b8a6 0%, #0d9488 100%);
    }

    .ketua-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center top;
        transition: transform 0.6s ease;
    }

    .ketua-card:hover .ketua-image {
        transform: scale(1.05);
    }

    .ketua-info {
        padding: 3rem;
        text-align: center;
        background: white;
    }

    .ketua-name {
        font-size: 2rem;
        font-weight: 800;
        color: #1e293b;
        margin-bottom: 0.75rem;
        letter-spacing: -0.02em;
    }

    .ketua-title {
        font-size: 1rem;
        color: #64748b;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }

    /* Responsive Tabs */
    @media (max-width: 768px) {
        .dewan-tabs {
            flex-wrap: nowrap;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
        }

        .dewan-tabs::-webkit-scrollbar {
            display: none;
        }

        .dewan-tab {
            padding: 0.75rem 1.5rem;
            font-size: 0.75rem;
        }

        .ketua-image-wrapper {
            height: 380px;
        }

        .ketua-info {
            padding: 2rem;
        }

        .ketua-name {
            font-size: 1.5rem;
        }

        .ketua-title {
            font-size: 0.875rem;
        }

        .leader-image-container {
            height: 320px;
        }
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

{{-- LEADERSHIP SECTION WITH TABS --}}
<section class="py-20 lg:py-32 bg-gradient-to-b from-white to-gray-50 relative overflow-hidden" id="leadership-section">
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

        {{-- TAB NAVIGATION --}}
        <div class="dewan-tabs-container">
            <div class="dewan-tabs">
                <button class="dewan-tab active" data-tab="pengurus">Dewan Pengurus</button>
                <button class="dewan-tab" data-tab="pembina">Dewan Pembina</button>
                <button class="dewan-tab" data-tab="pakar">Dewan Pakar</button>
            </div>
        </div>

        {{-- TAB CONTENT --}}
        <div id="tab-content-container">
            {{-- DEWAN PENGURUS --}}
            <div class="tab-content active" data-content="pengurus">
                {{-- Founder WPI --}}
                <div class="text-center mb-12">
                    <h3 class="text-3xl font-bold text-gray-900 mb-6">FOUNDER WPI</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                        Penggagas dan pendiri Wirausaha Pelajar Indonesia yang meletakkan pondasi organisasi
                    </p>
                </div>
                
                <div class="max-w-4xl mx-auto mb-20">
                    <div class="ketua-card">
                        <div class="ketua-image-wrapper">
                            <img src="{{ asset('images/founder.jpeg') }}" alt="Kak Bekky - Founder WPI" class="ketua-image">
                        </div>
                        <div class="ketua-info">
                            <h4 class="ketua-name">KAK BEKKY</h4>
                            <p class="ketua-title">FOUNDER WIRAUSAHA PELAJAR INDONESIA</p>
                            <p class="text-gray-600 mt-4 leading-relaxed">
                                Seorang pengusaha muda yang bisnisnya bergerak dalam bidang pendidikan. Meresmikan WPI pada tanggal 28 Februari 2015 di Universitas Indonesia bersama para pengusaha Indonesia yang peduli akan pentingnya pendidikan wirausaha pada pelajar.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- National Chairman --}}
                <div class="text-center mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">CHAIRMAN NASIONAL (BoC)</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto">
                        Memimpin Dewan Komisaris dan membimbing President Director
                    </p>
                </div>
                
                <div class="grid md:grid-cols-1 gap-8 max-w-2xl mx-auto mb-20">
                    <div class="leadership-minimalist-card">
                        <div class="leader-image-container">
                            <img src="{{ asset('images/founder.jpeg') }}" alt="Kak Bekky" class="leader-image">
                            <div class="leader-overlay"></div>
                            <div class="leader-badge bg-gradient-to-r from-tosca-400 to-tosca-500 text-white">
                                CHAIRMAN
                            </div>
                        </div>
                        <div class="leader-info">
                            <h3 class="leader-name">Kak Bekky</h3>
                            <p class="leader-position">National Chairman - Board of Commissioner</p>
                            <hr class="leader-divider">
                            <p class="leader-description">
                                Ditunjuk dan diangkat oleh Founder WPI. Bertugas membimbing President Director/CEO dan membantu membuka akses kerjasama bisnis serta hubungan dengan aparatur pemerintah.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- President Director --}}
                <div class="text-center mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">PRESIDENT DIRECTOR (BoD)</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto">
                        CEO Nasional yang memimpin Dewan Direksi dan para CEO di seluruh Indonesia
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto mb-20">
                    <div class="leadership-minimalist-card">
                        <div class="leader-image-container">
                            <img src="{{ asset('images/pres.png') }}" alt="President Director" class="leader-image">
                            <div class="leader-overlay"></div>
                            <div class="leader-badge bg-gradient-to-r from-yellow-400 to-yellow-500 text-gray-900">
                                PRESIDENT DIRECTOR
                            </div>
                        </div>
                        <div class="leader-info">
                            <h3 class="leader-name">Ismail</h3>
                            <p class="leader-position">President Director WPI</p>
                            <hr class="leader-divider">
                            <p class="leader-description">
                                Memimpin Dewan Direksi Pusat WPI dan para CEO di seluruh Indonesia. Dipilih saat RUPS Nasional oleh seluruh CEO.
                            </p>
                        </div>
                    </div>

                    <div class="leadership-minimalist-card">
                        <div class="leader-image-container">
                            <img src="{{ asset('images/wapres.png') }}" alt="Vice President Director" class="leader-image">
                            <div class="leader-overlay"></div>
                            <div class="leader-badge bg-gradient-to-r from-tosca-400 to-tosca-500 text-white">
                                VICE PRESIDENT
                            </div>
                        </div>
                        <div class="leader-info">
                            <h3 class="leader-name">Yusuf Budi Raharjo</h3>
                            <p class="leader-position">Vice President Director WPI</p>
                            <hr class="leader-divider">
                            <p class="leader-description">
                                Membantu President Director dalam segala urusan operasional organisasi tingkat nasional.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Board of Directors --}}
                <div class="text-center mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">BOARD OF DIRECTORS</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto">
                        Jajaran direktur yang mengelola operasional WPI tingkat nasional
                    </p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <div class="bg-white rounded-2xl p-6 shadow-lg border-2 border-gray-100 hover:border-tosca-300 transition-all duration-300">
                        <div class="w-12 h-12 bg-tosca-100 rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-cogs text-tosca-600 text-xl"></i>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Operation Director</h4>
                        <p class="text-sm text-gray-600">Bertanggung jawab atas kegiatan Nasional dengan berkoordinasi dengan Presdir dan Marketing Director</p>
                    </div>

                    <div class="bg-white rounded-2xl p-6 shadow-lg border-2 border-gray-100 hover:border-yellow-300 transition-all duration-300">
                        <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-chart-line text-yellow-600 text-xl"></i>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Financial Director</h4>
                        <p class="text-sm text-gray-600">Mengelola keuangan organisasi tingkat Nasional</p>
                    </div>

                    <div class="bg-white rounded-2xl p-6 shadow-lg border-2 border-gray-100 hover:border-tosca-300 transition-all duration-300">
                        <div class="w-12 h-12 bg-tosca-100 rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-bullhorn text-tosca-600 text-xl"></i>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Marketing Director</h4>
                        <p class="text-sm text-gray-600">Merekrut CEO baru untuk pengembangan jaringan WPI</p>
                    </div>

                    <div class="bg-white rounded-2xl p-6 shadow-lg border-2 border-gray-100 hover:border-yellow-300 transition-all duration-300">
                        <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-gavel text-yellow-600 text-xl"></i>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Legal Director</h4>
                        <p class="text-sm text-gray-600">Memberikan Surat Pengangkatan dan pencopotan jabatan untuk CEO</p>
                    </div>

                    <div class="bg-white rounded-2xl p-6 shadow-lg border-2 border-gray-100 hover:border-tosca-300 transition-all duration-300">
                        <div class="w-12 h-12 bg-tosca-100 rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-file-contract text-tosca-600 text-xl"></i>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Corporate Secretary</h4>
                        <p class="text-sm text-gray-600">Membantu Dewan Direksi dalam hal administrasi dan pencatatan kegiatan</p>
                    </div>
                </div>

                {{-- Mantan Pimpinan Nasional --}}
                <hr class="timeline-divider">

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
                            <img src="{{ asset('images/mantan-pres-1.jpeg') }}" alt="Rosyad" class="leader-image grayscale hover:grayscale-0 transition-all duration-500">
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
                        </div>
                    </div>

                    {{-- Mantan President 2 --}}
                    <div class="leadership-minimalist-card opacity-90 hover:opacity-100">
                        <div class="leader-image-container">
                            <img src="{{ asset('images/mantan-pres-2.jpeg') }}" alt="Denni Arnanda" class="leader-image grayscale hover:grayscale-0 transition-all duration-500">
                            <div class="leader-overlay"></div>
                            <div class="leader-badge bg-gradient-to-r from-gray-400 to-gray-500 text-white">
                                PRESIDENT 2019-2021
                            </div>
                        </div>
                        <div class="leader-info">
                            <h3 class="leader-name">Denni Arnanda</h3>
                            <p class="leader-position">Mantan President WPI</p>
                            <hr class="leader-divider">
                            <p class="leader-description">
                                Memimpin WPI pada periode 2019-2021. Fokus pada penguatan struktur internal dan kolaborasi dengan lembaga pendidikan.
                            </p>
                        </div>
                    </div>

                    {{-- Mantan President 3 --}}
                    <div class="leadership-minimalist-card opacity-90 hover:opacity-100">
                        <div class="leader-image-container">
                            <img src="{{ asset('images/mantan-pres-3.jpeg') }}" alt="Iqbal" class="leader-image grayscale hover:grayscale-0 transition-all duration-500">
                            <div class="leader-overlay"></div>
                            <div class="leader-badge bg-gradient-to-r from-gray-400 to-gray-500 text-white">
                                PRESIDENT 2016-2019
                            </div>
                        </div>
                        <div class="leader-info">
                            <h3 class="leader-name">Muhamad Iqbal Tawakal</h3>
                            <p class="leader-position">Mantan President WPI</p>
                            <hr class="leader-divider">
                            <p class="leader-description">
                                Memimpin WPI pada periode 2016-2019. Berperan dalam konsolidasi organisasi dan pengembangan program dasar wirausaha pelajar. Pencipta WPI GuideBook versi 1.0.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- DEWAN PEMBINA --}}
            <div class="tab-content" data-content="pembina">
                <div class="text-center mb-12">
                    <h3 class="text-3xl font-bold text-gray-900 mb-6">DEWAN PEMBINA</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                        Dewan yang memberikan bimbingan dan dukungan strategis bagi perkembangan WPI
                    </p>
                </div>

                <div class="max-w-4xl mx-auto">
                    <div class="bg-gradient-to-br from-white to-tosca-50/30 rounded-2xl p-8 shadow-lg border-2 border-gray-100">
                        <div class="mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-2xl flex items-center justify-center mb-4 shadow-lg">
                                <i class="fas fa-users-gear text-3xl text-white"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Advisory Board</h3>
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
                                            <span class="text-tosca-700 font-bold text-sm">1</span>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-900">Ketua Dewan Pembina</p>
                                            <p class="text-sm text-gray-600">Biasanya kepala daerah kota setempat</p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <div class="w-6 h-6 bg-tosca-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                            <span class="text-tosca-700 font-bold text-sm">2</span>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-900">Anggota Dewan Pembina</p>
                                            <p class="text-sm text-gray-600">Pejabat, pengusaha, tokoh masyarakat</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="bg-tosca-100/30 rounded-xl p-5">
                                <h5 class="font-bold text-tosca-800 mb-2">Peran Utama:</h5>
                                <p class="text-gray-700">
                                    Mendukung penuh segala aktivitas dan acara yang dijalankan kepengurusan WPI baik nasional maupun chapter.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- DEWAN PAKAR --}}
            <div class="tab-content" data-content="pakar">
                <div class="text-center mb-12">
                    <h3 class="text-3xl font-bold text-gray-900 mb-6">DEWAN PAKAR</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                        Dewan ahli yang memberikan masukan dan arahan dalam pengembangan WPI
                    </p>
                </div>

                <div class="max-w-4xl mx-auto">
                    <div class="bg-gradient-to-br from-white to-yellow-50/30 rounded-2xl p-8 shadow-lg border-2 border-gray-100">
                        <div class="mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-2xl flex items-center justify-center mb-4 shadow-lg">
                                <i class="fas fa-lightbulb text-3xl text-gray-900"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Expert Board</h3>
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
                                            <span class="text-yellow-700 font-bold text-sm">1</span>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-900">Ketua Dewan Pakar</p>
                                            <p class="text-sm text-gray-600">Biasanya ketua organisasi besar di wilayah tersebut</p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <div class="w-6 h-6 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                            <span class="text-yellow-700 font-bold text-sm">2</span>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-900">Anggota Dewan Pakar</p>
                                            <p class="text-sm text-gray-600">Pengusaha, tokoh organisasi, tokoh masyarakat</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="bg-yellow-100/30 rounded-xl p-5">
                                <h5 class="font-bold text-yellow-800 mb-2">Peran Utama:</h5>
                                <p class="text-gray-700">
                                    Memberikan arahan strategis dan dukungan penuh untuk kegiatan WPI di tingkat nasional dan chapter.
                                </p>
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

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = document.querySelectorAll('.dewan-tab');
    const tabContents = document.querySelectorAll('.tab-content');

    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');
            
            // Remove active class from all buttons and contents
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));
            
            // Add active class to clicked button and corresponding content
            this.classList.add('active');
            const targetContent = document.querySelector(`[data-content="${targetTab}"]`);
            if (targetContent) {
                targetContent.classList.add('active');
            }
        });
    });
});
</script>
@endpush