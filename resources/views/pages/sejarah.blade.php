@extends('layouts.master')

@section('title', 'Sejarah WPI')
@section('meta_description', 'Sejarah Wirausaha Pelajar Indonesia (WPI) sebagai organisasi pelajar nasional yang berfokus pada pengembangan kewirausahaan sejak dini.')
@section('meta_keywords', 'Sejarah WPI, Wirausaha Pelajar Indonesia, organisasi pelajar, kewirausahaan pelajar')

@push('styles')
<style>
    /* Timeline Styles */
    .timeline-item {
        opacity: 0;
        animation: fadeInUp 0.8s ease-out forwards;
    }
    
    .timeline-item:nth-child(1) { animation-delay: 0.1s; }
    .timeline-item:nth-child(2) { animation-delay: 0.2s; }
    .timeline-item:nth-child(3) { animation-delay: 0.3s; }
    .timeline-item:nth-child(4) { animation-delay: 0.4s; }
    
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
    
    /* Quote Styling */
    .quote-decoration {
        position: relative;
    }
    
    .quote-decoration::before {
        content: '"';
        position: absolute;
        top: -20px;
        left: -30px;
        font-size: 120px;
        font-family: 'Playfair Display', Georgia, serif;
        color: rgba(20, 184, 166, 0.1);
        line-height: 1;
    }
    
    /* Stats Animation */
    @keyframes countUp {
        from {
            transform: scale(0.5);
            opacity: 0;
        }
        to {
            transform: scale(1);
            opacity: 1;
        }
    }
    
    .stat-number {
        animation: countUp 0.6s ease-out;
    }
    
    /* Image Overlay Effect */
    .image-overlay {
        position: relative;
        overflow: hidden;
    }
    
    .image-overlay::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(14, 184, 166, 0.2) 0%, rgba(250, 204, 21, 0.2) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
    }
    
    .image-overlay:hover::after {
        opacity: 1;
    }
</style>
@endpush

@section('content')

{{-- HERO SECTION --}}
<section class="relative bg-gradient-to-br from-tosca-700 via-tosca-600 to-tosca-500 text-white py-20 lg:py-32 overflow-hidden">
    {{-- Decorative Elements --}}
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-tosca-300 rounded-full blur-3xl"></div>
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
                <span class="text-yellow-300 font-semibold">Sejarah WPI</span>
            </div>
            
            <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm text-yellow-300 rounded-full text-sm font-bold tracking-wider mb-6 border border-white/20">
                TENTANG KAMI
            </span>
            
            <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                Sejarah <span class="text-yellow-300">WPI</span>
            </h1>
            
            <p class="text-xl lg:text-2xl text-tosca-50 leading-relaxed font-light max-w-3xl mx-auto">
                Perjalanan Wirausaha Pelajar Indonesia dalam membangun generasi wirausaha muda yang mandiri dan berdaya saing
            </p>
        </div>
    </div>
</section>

{{-- OPENING STATEMENT --}}
<section class="py-16 lg:py-24 bg-white relative">
    <div class="max-w-5xl mx-auto px-6 lg:px-8">
        <div class="quote-decoration bg-gradient-to-br from-tosca-50 to-yellow-50 p-10 lg:p-16 rounded-3xl border-l-4 border-yellow-400 shadow-xl">
            <p class="text-2xl lg:text-3xl font-light text-gray-800 leading-relaxed italic mb-6">
                "Wirausaha Pelajar Indonesia lahir dari kesadaran akan pentingnya menanamkan jiwa kewirausahaan sejak usia pelajar dan mahasiswa."
            </p>
            <div class="flex items-center gap-4">
                <div class="w-1 h-16 bg-gradient-to-b from-tosca-500 to-yellow-400 rounded-full"></div>
                <div>
                    <p class="text-lg font-bold text-gray-900">Visi Pendirian WPI</p>
                    <p class="text-gray-600">Membangun generasi wirausaha sejak dini</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- KONTEN SEJARAH --}}
<section class="py-16 lg:py-24 bg-gradient-to-b from-white to-gray-50">
    <div class="max-w-5xl mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-[1fr_300px] gap-12">
            {{-- Main Content --}}
            <div class="space-y-8">
                {{-- Section 1: Latar Belakang --}}
                <div class="bg-white rounded-2xl p-8 lg:p-10 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-book text-2xl text-white"></i>
                        </div>
                        <h2 class="font-display text-3xl font-bold text-gray-900">Latar Belakang</h2>
                    </div>
                    
                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-4">
                        <p>
                            <strong class="text-tosca-600">Wirausaha Pelajar Indonesia (WPI)</strong> lahir dari kesadaran akan pentingnya
                            menanamkan jiwa kewirausahaan sejak usia pelajar dan mahasiswa.
                            Di tengah tantangan globalisasi dan perubahan ekonomi yang cepat,
                            pelajar Indonesia dituntut tidak hanya unggul secara akademik,
                            tetapi juga memiliki kemandirian, kreativitas, dan daya juang.
                        </p>
                    </div>
                </div>

                {{-- Section 2: Pembentukan --}}
                <div class="bg-white rounded-2xl p-8 lg:p-10 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-xl flex items-center justify-center">
                            <i class="fas fa-users text-2xl text-gray-900"></i>
                        </div>
                        <h2 class="font-display text-3xl font-bold text-gray-900">Pembentukan Organisasi</h2>
                    </div>
                    
                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-4">
                        <p>
                            WPI dibentuk sebagai wadah pembinaan dan pengembangan potensi
                            kewirausahaan pelajar di seluruh Indonesia.
                            Organisasi ini hadir untuk menjawab kebutuhan akan ruang belajar,
                            berkolaborasi, dan bertumbuh bagi pelajar yang memiliki minat
                            di bidang usaha dan ekonomi kreatif.
                        </p>
                    </div>
                </div>

                {{-- Section 3: Komitmen --}}
                <div class="bg-white rounded-2xl p-8 lg:p-10 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-check-circle text-2xl text-white"></i>
                        </div>
                        <h2 class="font-display text-3xl font-bold text-gray-900">Komitmen & Nilai</h2>
                    </div>
                    
                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-4">
                        <p>
                            Sejak awal berdirinya, WPI berkomitmen menjadi organisasi yang
                            <strong class="text-tosca-600">positif, produktif, dan progresif</strong> dengan mengedepankan nilai
                            edukasi, kolaborasi, serta kontribusi nyata bagi masyarakat.
                            Berbagai program pelatihan, kegiatan kewirausahaan, dan
                            penguatan jaringan antar pelajar terus dikembangkan.
                        </p>
                    </div>
                    
                    {{-- Core Values Grid --}}
                    <div class="grid sm:grid-cols-3 gap-4 mt-8">
                        <div class="text-center p-6 bg-gradient-to-br from-tosca-50 to-tosca-100 rounded-xl">
                            <div class="w-12 h-12 bg-tosca-500 rounded-lg mx-auto mb-3 flex items-center justify-center">
                                <i class="fas fa-star text-2xl text-white"></i>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-1">Positif</h4>
                            <p class="text-sm text-gray-600">Semangat optimis</p>
                        </div>
                        <div class="text-center p-6 bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-xl">
                            <div class="w-12 h-12 bg-yellow-400 rounded-lg mx-auto mb-3 flex items-center justify-center">
                                <i class="fas fa-rocket text-2xl text-gray-900"></i>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-1">Produktif</h4>
                            <p class="text-sm text-gray-600">Hasil nyata</p>
                        </div>
                        <div class="text-center p-6 bg-gradient-to-br from-tosca-50 to-tosca-100 rounded-xl">
                            <div class="w-12 h-12 bg-tosca-500 rounded-lg mx-auto mb-3 flex items-center justify-center">
                                <i class="fas fa-chart-line text-2xl text-white"></i>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-1">Progresif</h4>
                            <p class="text-sm text-gray-600">Terus berkembang</p>
                        </div>
                    </div>
                </div>

                {{-- Section 4: Perkembangan --}}
                <div class="bg-gradient-to-br from-tosca-600 to-tosca-700 rounded-2xl p-8 lg:p-10 shadow-xl text-white">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-yellow-400 rounded-xl flex items-center justify-center">
                            <i class="fas fa-bolt text-2xl text-gray-900"></i>
                        </div>
                        <h2 class="font-display text-3xl font-bold">Perkembangan Terkini</h2>
                    </div>
                    
                    <div class="prose prose-lg max-w-none text-tosca-50 leading-relaxed space-y-4">
                        <p>
                            Hingga saat ini, <strong class="text-yellow-300">WPI terus berkembang</strong> sebagai gerakan pelajar
                            berskala nasional yang bertujuan membangun generasi muda Indonesia
                            yang siap menjadi pelaku perubahan dan penggerak ekonomi masa depan.
                        </p>
                        <p class="text-lg">
                            Dengan jangkauan di berbagai daerah dan ribuan anggota aktif, 
                            WPI telah membuktikan diri sebagai wadah terpercaya bagi pelajar 
                            yang ingin mengembangkan jiwa kewirausahaan sejak dini.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Sidebar --}}
            <div class="space-y-6">
                {{-- Quick Stats --}}
                <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 sticky top-24">
                    <h3 class="font-bold text-gray-900 mb-6 text-lg">Statistik WPI</h3>
                    
                    <div class="space-y-6">
                        <div>
                            <div class="flex items-baseline gap-2 mb-2">
                                <span class="stat-number font-display text-4xl font-bold gradient-text">11</span>
                                <span class="text-sm text-gray-600">tahun</span>
                            </div>
                            <p class="text-sm text-gray-600">Pengalaman berkarya</p>
                        </div>
                        
                        <div class="h-px bg-gray-200"></div>
                        
                        <div>
                            <div class="flex items-baseline gap-2 mb-2">
                                <span class="stat-number font-display text-4xl font-bold gradient-text">6</span>
                                <span class="text-sm text-gray-600">cabang</span>
                            </div>
                            <p class="text-sm text-gray-600">Di seluruh Indonesia</p>
                        </div>
                        
                        <div class="h-px bg-gray-200"></div>
                        
                        <div>
                            <div class="flex items-baseline gap-2 mb-2">
                                <span class="stat-number font-display text-4xl font-bold gradient-text">3000+</span>
                            </div>
                            <p class="text-sm text-gray-600">Anggota aktif</p>
                        </div>
                        
                        <div class="h-px bg-gray-200"></div>
                        
                        <div>
                            <div class="flex items-baseline gap-2 mb-2">
                                <span class="stat-number font-display text-4xl font-bold gradient-text">171</span>
                            </div>
                            <p class="text-sm text-gray-600">Pengurus inti</p>
                        </div>
                    </div>
                </div>

                {{-- Related Links --}}
                <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-2xl p-6 border border-yellow-200">
                    <h3 class="font-bold text-gray-900 mb-4 text-lg">Halaman Terkait</h3>
                    <div class="space-y-3">
                        <a href="#" class="flex items-center gap-3 text-gray-700 hover:text-tosca-600 transition-colors group">
                            <i class="fas fa-chevron-right group-hover:translate-x-1 transition-transform"></i>
                            <span class="text-sm font-semibold">Visi dan Misi</span>
                        </a>
                        <a href="#" class="flex items-center gap-3 text-gray-700 hover:text-tosca-600 transition-colors group">
                            <i class="fas fa-chevron-right group-hover:translate-x-1 transition-transform"></i>
                            <span class="text-sm font-semibold">Struktur Organisasi</span>
                        </a>
                        <a href="#" class="flex items-center gap-3 text-gray-700 hover:text-tosca-600 transition-colors group">
                            <i class="fas fa-chevron-right group-hover:translate-x-1 transition-transform"></i>
                            <span class="text-sm font-semibold">Program WPI</span>
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
                <i class="fas fa-users text-4xl text-white"></i>
            </div>
        </div>
        
        <h2 class="font-display text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
            Jadilah Bagian dari <span class="gradient-text">Sejarah WPI</span>
        </h2>
        <p class="text-xl text-gray-600 mb-10 max-w-2xl mx-auto leading-relaxed">
            Bergabunglah dengan ribuan pelajar lainnya yang telah memulai perjalanan kewirausahaan mereka bersama WPI
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://wa.me/6285697818910" class="btn-primary inline-flex items-center justify-center px-8 py-4 rounded-full text-base font-bold group">
                GABUNG SEKARANG
                <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
            </a>
            <a href="/" class="btn-secondary inline-flex items-center justify-center px-8 py-4 rounded-full text-base font-bold">
                KEMBALI KE BERANDA
            </a>
        </div>
    </div>
</section>

@endsection