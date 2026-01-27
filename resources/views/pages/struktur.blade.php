@extends('layouts.master')

@section('title', 'Struktur Organisasi | Wirausaha Pelajar Indonesia')
@section('meta_description', 'Struktur kepengurusan Wirausaha Pelajar Indonesia terdiri dari Badan Kepengurusan Inti dan Badan Kepengurusan Harian.')
@section('meta_keywords', 'struktur organisasi WPI, kepengurusan WPI, organisasi wirausaha pelajar, struktur kepemimpinan')
@section('og_title', 'Struktur Organisasi Wirausaha Pelajar Indonesia')
@section('og_description', 'Pelajari struktur kepengurusan dan kepemimpinan Wirausaha Pelajar Indonesia')

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
    
    /* Gradient Text */
    .gradient-text {
        background: linear-gradient(135deg, var(--tosca-600) 0%, var(--tosca-400) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        display: inline-block;
        padding: 0.1em 0;
    }
    
    .gradient-text-yellow {
        background: linear-gradient(135deg, var(--yellow-500) 0%, var(--yellow-400) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    /* Structure Cards */
    .structure-card {
        background: white;
        border-radius: 1.5rem;
        padding: 2rem;
        border: 2px solid var(--gray-100);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }
    
    .structure-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px -15px rgba(20, 184, 166, 0.15);
        border-color: var(--tosca-200);
    }
    
    .structure-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--tosca-400) 0%, var(--yellow-400) 100%);
    }
    
    /* Structure Diagram */
    .structure-diagram {
        background: linear-gradient(135deg, var(--tosca-50) 0%, var(--tosca-100) 100%);
        border-radius: 1.5rem;
        padding: 2rem;
        border: 2px solid var(--tosca-200);
        position: relative;
    }
    
    .structure-node {
        background: white;
        border-radius: 1rem;
        padding: 1rem 1.5rem;
        border: 2px solid var(--tosca-300);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        min-width: 200px;
        text-align: center;
    }
    
    .structure-line {
        height: 40px;
        width: 2px;
        background: linear-gradient(to bottom, var(--tosca-400), var(--tosca-200));
        margin: 0 auto;
    }
    
    /* Leadership Cards */
    .leadership-card {
        background: white;
        border-radius: 1.5rem;
        overflow: hidden;
        border: 2px solid var(--gray-100);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .leadership-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
    }
    
    .leadership-img {
        height: 280px;
        overflow: hidden;
    }
    
    .leadership-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .leadership-card:hover .leadership-img img {
        transform: scale(1.05);
    }
    
    /* Timeline */
    .timeline-item {
        position: relative;
        padding-left: 2rem;
        margin-bottom: 2rem;
    }
    
    .timeline-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0.5rem;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--tosca-500) 0%, var(--yellow-500) 100%);
    }
    
    .timeline-item::after {
        content: '';
        position: absolute;
        left: 5px;
        top: 1.5rem;
        bottom: -2rem;
        width: 2px;
        background: var(--tosca-200);
    }
    
    .timeline-item:last-child::after {
        display: none;
    }
    
    /* Section Spacing */
    section {
        padding: 5rem 0;
    }
    
    @media (min-width: 1024px) {
        section {
            padding: 8rem 0;
        }
    }
</style>
@endpush

@section('content')

{{-- HERO SECTION --}}
<section class="bg-gradient-to-br from-tosca-700 via-tosca-600 to-tosca-500 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 py-20 lg:py-32">
        <div class="max-w-4xl">
            <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm text-yellow-300 rounded-full text-sm font-semibold tracking-wider border border-white/20 mb-6">
                STRUKTUR ORGANISASI
            </span>
            
            <h1 class="font-display text-5xl sm:text-6xl lg:text-7xl font-bold text-white mb-8 leading-[1.1]">
                Struktur Kepengurusan
                <br>
                <span class="text-yellow-300">Wirausaha Pelajar Indonesia</span>
            </h1>
            
            <p class="text-xl lg:text-2xl text-tosca-50 mb-12 max-w-3xl leading-relaxed font-light">
                Organisasi yang solid dengan struktur kepengurusan yang jelas untuk memastikan efektivitas dalam mencapai visi dan misi WPI.
            </p>
        </div>
    </div>
</section>

{{-- OVERVIEW SECTION --}}
<section class="bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="font-display text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                <span class="gradient-text">Dua Pilar</span> Kepengurusan
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Struktur kepengurusan WPI dibagi menjadi dua badan utama yang saling mendukung dalam mencapai tujuan organisasi
            </p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12">
            {{-- BoC Card --}}
            <div class="structure-card">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-2xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
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
                        <h4 class="font-bold text-tosca-700 mb-2 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
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
            
            {{-- BoD Card --}}
            <div class="structure-card">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
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
                        <h4 class="font-bold text-yellow-700 mb-2 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
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
</section>

{{-- DIAGRAM SECTION --}}
<section class="bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="font-display text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Struktur <span class="gradient-text">Kepengurusan</span>
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Diagram alur kepengurusan dari tingkat nasional hingga chapter
            </p>
        </div>
        
        <div class="structure-diagram">
            <div class="flex flex-col items-center space-y-8">
                {{-- Founder Level --}}
                <div class="structure-node">
                    <h4 class="font-bold text-tosca-700 text-sm mb-1">FOUNDER WPI</h4>
                    <h3 class="text-xl font-bold text-gray-900">Kak Bekky</h3>
                    <p class="text-sm text-gray-500 mt-1">Penunjuk Chairman Nasional</p>
                </div>
                
                <div class="structure-line"></div>
                
                {{-- Chairman Level --}}
                <div class="structure-node">
                    <h4 class="font-bold text-tosca-700 text-sm mb-1">CHAIRMAN NASIONAL (BoC)</h4>
                    <h3 class="text-xl font-bold text-gray-900">Pemimpin Dewan Komisaris</h3>
                    <p class="text-sm text-gray-500 mt-1">Membimbing President Director</p>
                </div>
                
                <div class="structure-line"></div>
                
                {{-- President Director Level --}}
                <div class="structure-node">
                    <h4 class="font-bold text-yellow-700 text-sm mb-1">PRESIDENT DIRECTOR (BoD)</h4>
                    <h3 class="text-xl font-bold text-gray-900">CEO Nasional</h3>
                    <p class="text-sm text-gray-500 mt-1">Memimpin Dewan Direksi</p>
                </div>
                
                <div class="structure-line"></div>
                
                {{-- Chapter Level --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                    <div class="structure-node">
                        <h4 class="font-bold text-tosca-700 text-sm mb-1">CHAPTER CHAIRMAN (BoC)</h4>
                        <h3 class="text-xl font-bold text-gray-900">Ketua Chapter</h3>
                        <p class="text-sm text-gray-500 mt-1">Dewan Komisaris Chapter</p>
                    </div>
                    
                    <div class="structure-node">
                        <h4 class="font-bold text-yellow-700 text-sm mb-1">CHIEF EXECUTIVE OFFICER (BoD)</h4>
                        <h3 class="text-xl font-bold text-gray-900">CEO Chapter</h3>
                        <p class="text-sm text-gray-500 mt-1">Direktur Chapter</p>
                    </div>
                </div>
                
                <div class="structure-line"></div>
                
                {{-- Operational Level --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                    <div class="structure-node">
                        <h4 class="font-bold text-tosca-700 text-sm mb-1">SCHOOL GROUP</h4>
                        <h3 class="text-xl font-bold text-gray-900">General Manager</h3>
                        <p class="text-sm text-gray-500 mt-1">SD, SMP, SMA di sebuah kota</p>
                    </div>
                    
                    <div class="structure-node">
                        <h4 class="font-bold text-tosca-700 text-sm mb-1">SUB-CHAPTER</h4>
                        <h3 class="text-xl font-bold text-gray-900">General Manager</h3>
                        <p class="text-sm text-gray-500 mt-1">Wilayah operasional</p>
                    </div>
                    
                    <div class="structure-node">
                        <h4 class="font-bold text-tosca-700 text-sm mb-1">CAMPUS GROUP</h4>
                        <h3 class="text-xl font-bold text-gray-900">General Manager</h3>
                        <p class="text-sm text-gray-500 mt-1">Jurusan dalam universitas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- PENGURUS KEORMAATAN SECTION --}}
<section class="bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-tosca-50 text-tosca-700 rounded-full text-sm font-bold tracking-wider mb-4">
                PENUNJANG ORGANISASI
            </span>
            <h2 class="font-display text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Struktur <span class="gradient-text">Pengurus Kehormatan</span>
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Dewan yang memberikan dukungan dan arahan strategis bagi perkembangan WPI
            </p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-12">
            {{-- Dewan Pembina --}}
            <div class="structure-card">
                <div class="mb-8">
                    <div class="w-20 h-20 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-2xl flex items-center justify-center mb-4">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-2">Dewan Pembina</h3>
                    <p class="text-tosca-600 font-semibold">Advisory Board</p>
                </div>
                
                <div class="space-y-6">
                    <div class="bg-gray-50 rounded-xl p-5">
                        <h4 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                            <svg class="w-5 h-5 text-tosca-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            Susunan Dewan Pembina:
                        </h4>
                        <ul class="space-y-3 ml-7">
                            <li class="flex items-start gap-2">
                                <span class="text-tosca-500 font-bold mt-1">a.</span>
                                <div>
                                    <p class="font-semibold text-gray-900">Ketua Dewan Pembina</p>
                                    <p class="text-sm text-gray-600">Biasanya kepala daerah kota setempat</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-tosca-500 font-bold mt-1">b.</span>
                                <div>
                                    <p class="font-semibold text-gray-900">Anggota Dewan Pembina</p>
                                    <p class="text-sm text-gray-600">Pejabat, pengusaha, tokoh masyarakat, dsb.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            {{-- Dewan Pakar --}}
            <div class="structure-card">
                <div class="mb-8">
                    <div class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl flex items-center justify-center mb-4">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-2">Dewan Pakar</h3>
                    <p class="text-yellow-600 font-semibold">Expert Board</p>
                </div>
                
                <div class="space-y-6">
                    <div class="bg-gray-50 rounded-xl p-5">
                        <h4 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                            <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            Susunan Dewan Pakar:
                        </h4>
                        <ul class="space-y-3 ml-7">
                            <li class="flex items-start gap-2">
                                <span class="text-yellow-500 font-bold mt-1">c.</span>
                                <div>
                                    <p class="font-semibold text-gray-900">Ketua Dewan Pakar</p>
                                    <p class="text-sm text-gray-600">Biasanya ketua organisasi besar di wilayah tersebut</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-yellow-500 font-bold mt-1">d.</span>
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
        
        <div class="mt-12 bg-gradient-to-r from-tosca-50 to-yellow-50 rounded-2xl p-8 border border-tosca-200">
            <h4 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                <svg class="w-6 h-6 text-tosca-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
                Peran Utama Pengurus Kehormatan
            </h4>
            <p class="text-gray-700 leading-relaxed">
                Mendukung penuh segala aktivitas dan acara yang dijalankan kepengurusan WPI baik nasional maupun chapter. Pengurus kehormatan tidak wajib dibentuk, namun berperan penting dalam memberikan legitimasi dan akses strategis.
            </p>
        </div>
    </div>
</section>

{{-- TUGAS PENGURUS PUSAT SECTION --}}
<section class="bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-yellow-100 text-yellow-700 rounded-full text-sm font-bold tracking-wider mb-4">
                TUGAS & TANGGUNG JAWAB
            </span>
            <h2 class="font-display text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Tugas <span class="gradient-text">Pengurus Pusat</span>
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Deskripsi tugas dan tanggung jawab masing-masing direksi dalam kepengurusan pusat WPI
            </p>
        </div>
        
        <div class="space-y-8">
            {{-- President Director --}}
            <div class="timeline-item">
                <h3 class="text-2xl font-bold text-gray-900 mb-2">President Director</h3>
                <p class="text-gray-700 mb-4">
                    Memimpin Dewan Direksi Pusat WPI, dan para CEO di seluruh Indonesia.
                </p>
            </div>
            
            {{-- Vice President Director --}}
            <div class="timeline-item">
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Vice President Director</h3>
                <p class="text-gray-700 mb-4">
                    Membantu President Director dalam segala urusan yang membutuhkan bantuan Vice President Director.
                </p>
            </div>
            
            {{-- Operation Director --}}
            <div class="timeline-item">
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Operation Director</h3>
                <p class="text-gray-700 mb-4">
                    Bertanggung jawab atas kegiatan Nasional dengan berkoordinasi dengan President Director dan Marketing Director.
                </p>
            </div>
            
            {{-- Financial Director --}}
            <div class="timeline-item">
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Financial Director</h3>
                <p class="text-gray-700 mb-4">
                    Mengelola keuangan organisasi tingkat Nasional.
                </p>
            </div>
            
            {{-- Marketing Director --}}
            <div class="timeline-item">
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Marketing Director</h3>
                <p class="text-gray-700 mb-4">
                    Bertanggung jawab dalam merekrut CEO baru untuk pengembangan jaringan WPI.
                </p>
            </div>
            
            {{-- Legal Director --}}
            <div class="timeline-item">
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Legal Director</h3>
                <p class="text-gray-700 mb-4">
                    Memberikan Surat Pengangkatan dan pencopotan jabatan untuk CEO.
                </p>
            </div>
            
            {{-- Corporate Secretary --}}
            <div class="timeline-item">
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Corporate Secretary (CorSec)</h3>
                <p class="text-gray-700 mb-4">
                    Membantu Dewan Direksi dalam hal administrasi dan pencatatan kegiatan organisasi.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- SYARAT & KETENTUAN SECTION --}}
<section class="bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-tosca-50 text-tosca-700 rounded-full text-sm font-bold tracking-wider mb-4">
                PERSYARATAN
            </span>
            <h2 class="font-display text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Syarat & Ketentuan <span class="gradient-text">Kepengurusan</span>
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Persyaratan dan aturan yang berlaku bagi pengurus WPI tingkat nasional
            </p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-12">
            {{-- Persyaratan Umum --}}
            <div class="structure-card">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Persyaratan Umum</h3>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-tosca-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-tosca-600 font-bold">1</span>
                        </div>
                        <span class="text-gray-700">Mahasiswa aktif</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-tosca-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-tosca-600 font-bold">2</span>
                        </div>
                        <span class="text-gray-700">Memiliki usaha atau bisnis</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-tosca-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-tosca-600 font-bold">3</span>
                        </div>
                        <span class="text-gray-700">Memiliki pengalaman memimpin organisasi</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-tosca-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-tosca-600 font-bold">4</span>
                        </div>
                        <span class="text-gray-700">Berdomisili di Jakarta</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-tosca-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-tosca-600 font-bold">5</span>
                        </div>
                        <span class="text-gray-700">Kreatif, mandiri, inisiatif, semangat, dan suka bekerja keras dalam kegiatan sosial</span>
                    </li>
                </ul>
            </div>
            
            {{-- Ketentuan Khusus --}}
            <div class="structure-card">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Ketentuan Khusus</h3>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-yellow-600 font-bold">1</span>
                        </div>
                        <span class="text-gray-700">President Director dan Vice President Director dipilih saat RUPS Nasional oleh seluruh CEO dan dilantik serta disetujui oleh Chairman Nasional (Kak Bekky)</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-yellow-600 font-bold">2</span>
                        </div>
                        <span class="text-gray-700">Board of Director dipilih secara bijaksana oleh President Director dan Vice President Director</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-yellow-600 font-bold">3</span>
                        </div>
                        <span class="text-gray-700">Masa jabatan President Director, Vice President Director, dan Board of Director adalah 3 tahun dan dapat dipilih kembali</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-yellow-600 font-bold">4</span>
                        </div>
                        <span class="text-gray-700">President Director dan Vice President Director wajib menjalankan tugas dan program kegiatan yang telah dibuat</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-yellow-600 font-bold">5</span>
                        </div>
                        <span class="text-gray-700">Segala hal yang belum diatur dalam GuideBook ini akan diputuskan dalam National Board Meeting</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- LEADERSHIP SECTION --}}
<section class="bg-gradient-to-br from-tosca-600 via-tosca-500 to-tosca-400 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 right-20 w-96 h-96 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-20 w-96 h-96 bg-white rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm text-yellow-300 rounded-full text-sm font-bold tracking-wider mb-4">
                PIMPINAN ORGANISASI
            </span>
            <h2 class="font-display text-4xl lg:text-5xl font-bold text-white mb-4">
                Pimpinan <span class="text-yellow-300">WPI</span>
            </h2>
            <p class="text-xl text-tosca-100 max-w-3xl mx-auto">
                Founder dan pimpinan utama yang memimpin perjalanan Wirausaha Pelajar Indonesia
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            {{-- Founder --}}
            <div class="leadership-card">
                <div class="leadership-img">
                    <img src="{{ asset('images/founder.png') }}" alt="Founder WPI">
                </div>
                <div class="p-6">
                    <span class="inline-block px-3 py-1 bg-tosca-100 text-tosca-700 rounded-full text-xs font-bold mb-3">
                        FOUNDER
                    </span>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Kak Bekky</h3>
                    <p class="text-gray-600">Pendiri Wirausaha Pelajar Indonesia</p>
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <p class="text-sm text-gray-500">
                            Penunjuk Chairman Nasional dan pengambil kebijakan tertinggi organisasi
                        </p>
                    </div>
                </div>
            </div>
            
            {{-- President Director --}}
            <div class="leadership-card">
                <div class="leadership-img">
                    <img src="{{ asset('images/president.png') }}" alt="President Director">
                </div>
                <div class="p-6">
                    <span class="inline-block px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-bold mb-3">
                        PRESIDENT DIRECTOR
                    </span>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Nama President</h3>
                    <p class="text-gray-600">CEO Nasional WPI</p>
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <p class="text-sm text-gray-500">
                            Memimpin Dewan Direksi Pusat dan para CEO di seluruh Indonesia
                        </p>
                    </div>
                </div>
            </div>
            
            {{-- Vice President Director --}}
            <div class="leadership-card">
                <div class="leadership-img">
                    <img src="{{ asset('images/vice-president.png') }}" alt="Vice President Director">
                </div>
                <div class="p-6">
                    <span class="inline-block px-3 py-1 bg-tosca-100 text-tosca-700 rounded-full text-xs font-bold mb-3">
                        VICE PRESIDENT DIRECTOR
                    </span>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Nama Vice President</h3>
                    <p class="text-gray-600">Wakil CEO Nasional WPI</p>
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <p class="text-sm text-gray-500">
                            Membantu President Director dalam mengelola organisasi
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA SECTION --}}
<section class="bg-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
        <h2 class="font-display text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
            Ingin Menjadi Bagian dari <span class="gradient-text">Struktur Kami</span>?
        </h2>
        <p class="text-xl text-gray-600 mb-10 max-w-2xl mx-auto leading-relaxed">
            Bergabunglah dengan kepengurusan WPI dan berkontribusi dalam membangun generasi wirausaha pelajar Indonesia
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#" class="btn-primary inline-flex items-center justify-center px-8 py-4 rounded-full text-base font-bold group">
                CARA BERGABUNG
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            <a href="#" class="btn-secondary inline-flex items-center justify-center px-8 py-4 rounded-full text-base font-bold">
                KONTAK KEPENGURUSAN
            </a>
        </div>
    </div>
</section>
@endsection