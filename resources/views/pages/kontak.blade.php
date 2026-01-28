@extends('layouts.master')

@section('title', 'Kontak Wirausaha Pelajar Indonesia')
@section('meta_description', 'Hubungi Wirausaha Pelajar Indonesia untuk informasi keanggotaan, program, kegiatan, dan kerja sama.')
@section('meta_keywords', 'kontak wpi, wirausaha pelajar indonesia, kontak organisasi pelajar, wpi indonesia')

@push('styles')
<style>
    /* Contact Card Animation */
    .contact-card {
        opacity: 0;
        animation: fadeInUp 0.6s ease-out forwards;
    }
    
    .contact-card:nth-child(1) { animation-delay: 0.1s; }
    .contact-card:nth-child(2) { animation-delay: 0.2s; }
    .contact-card:nth-child(3) { animation-delay: 0.3s; }
    
    /* Fallback for no animation support */
    @media (prefers-reduced-motion: reduce) {
        .contact-card {
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
    
    /* Social Icon Hover */
    .social-icon {
        transition: all 0.3s ease;
    }
    
    .social-icon:hover {
        transform: translateY(-5px) scale(1.1);
    }
    
    /* CTA Card Animation */
    .cta-card {
        opacity: 0;
        animation: fadeInUp 0.6s ease-out 0.4s forwards;
    }
    
    /* Fallback for no animation support */
    @media (prefers-reduced-motion: reduce) {
        .cta-card {
            opacity: 1;
            animation: none;
        }
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
                <span class="text-yellow-300 font-semibold">Kontak</span>
            </div>
            
            <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm text-yellow-300 rounded-full text-sm font-bold tracking-wider mb-6 border border-white/20">
                HUBUNGI KAMI
            </span>
            
            <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                Kontak <span class="text-yellow-300">WPI</span>
            </h1>
            
            <p class="text-xl lg:text-2xl text-tosca-50 leading-relaxed font-light max-w-3xl mx-auto">
                Hubungi kami untuk informasi keanggotaan, kerja sama, kegiatan, maupun pertanyaan lainnya
            </p>
        </div>
    </div>
</section>

{{-- CONTACT INFO SECTION --}}
<section class="py-20 lg:py-28 bg-white relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-20 left-10 w-96 h-96 bg-tosca-200 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-yellow-200 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-start">

            {{-- LEFT: CONTACT INFORMATION --}}
            <div>
                <div class="mb-10">
                    <h2 class="font-display text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                        Informasi <span class="text-transparent bg-clip-text bg-gradient-to-r from-tosca-600 to-yellow-500">Kontak</span>
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-tosca-500 to-yellow-400 rounded-full mb-6"></div>
                    <p class="text-gray-600 text-lg">
                        Jangan ragu untuk menghubungi kami melalui saluran komunikasi berikut
                    </p>
                </div>

                <div class="space-y-6">

                    {{-- Alamat --}}
                    <div class="contact-card group">
                        <div class="flex items-start gap-5 p-6 bg-white rounded-2xl border-2 border-gray-100 hover:border-tosca-300 transition-all duration-300 hover:shadow-lg">
                            <div class="w-14 h-14 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-xl flex items-center justify-center text-white shadow-lg flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold text-gray-900 mb-2 text-lg">Sekretariat Nasional</h4>
                                <p class="text-gray-600 leading-relaxed">
                                    Wirausaha Pelajar Indonesia<br>
                                    Jakarta, Indonesia
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Telepon --}}
                    <div class="contact-card group">
                        <div class="flex items-start gap-5 p-6 bg-white rounded-2xl border-2 border-gray-100 hover:border-yellow-400 transition-all duration-300 hover:shadow-lg">
                            <div class="w-14 h-14 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-xl flex items-center justify-center text-gray-900 shadow-lg flex-shrink-0">
                                <i class="fas fa-phone-alt text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold text-gray-900 mb-2 text-lg">Telepon / WhatsApp</h4>
                                <p class="text-gray-600 mb-1">
                                    <a href="tel:+6285697818910" class="hover:text-tosca-600 transition-colors">+62 856-9781-8910</a>
                                </p>
                                <span class="text-sm text-gray-500">Aktif pada hari dan jam kerja</span>
                            </div>
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="contact-card group">
                        <div class="flex items-start gap-5 p-6 bg-white rounded-2xl border-2 border-gray-100 hover:border-tosca-300 transition-all duration-300 hover:shadow-lg">
                            <div class="w-14 h-14 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-xl flex items-center justify-center text-white shadow-lg flex-shrink-0">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold text-gray-900 mb-2 text-lg">Email</h4>
                                <p class="text-gray-600 mb-1">
                                    <a href="mailto:info.wpi.pusat@gmail.com" class="hover:text-tosca-600 transition-colors">info.wpi.pusat@gmail.com</a>
                                </p>
                                <span class="text-sm text-gray-500">
                                    Untuk pertanyaan umum, kerja sama, dan administrasi
                                </span>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- SOCIAL MEDIA --}}
                <div class="mt-12">
                    <h4 class="font-bold text-gray-900 mb-6 text-lg">Media Sosial Resmi</h4>
                    <div class="flex gap-4">
                        <a href="https://www.facebook.com/wirausahapelajarindonesia" target="_blank"
                            class="social-icon w-14 h-14 bg-gradient-to-br from-tosca-500 to-tosca-600 text-white rounded-xl flex items-center justify-center hover:from-yellow-400 hover:to-yellow-500 hover:text-gray-900 shadow-lg">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="https://www.instagram.com/wirausahapelajar/" target="_blank"
                            class="social-icon w-14 h-14 bg-gradient-to-br from-tosca-500 to-tosca-600 text-white rounded-xl flex items-center justify-center hover:from-yellow-400 hover:to-yellow-500 hover:text-gray-900 shadow-lg">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="https://www.youtube.com/@wirausahapelajarindonesia6565" target="_blank"
                            class="social-icon w-14 h-14 bg-gradient-to-br from-tosca-500 to-tosca-600 text-white rounded-xl flex items-center justify-center hover:from-yellow-400 hover:to-yellow-500 hover:text-gray-900 shadow-lg">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- RIGHT: CTA CARD --}}
            <div class="cta-card lg:sticky lg:top-24">
                <div class="bg-gradient-to-br from-tosca-600 via-tosca-500 to-yellow-500 rounded-3xl p-10 lg:p-12 shadow-2xl relative overflow-hidden">
                    {{-- Decorative Elements --}}
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute top-0 right-0 w-48 h-48 bg-yellow-300 rounded-full blur-3xl"></div>
                        <div class="absolute bottom-0 left-0 w-48 h-48 bg-tosca-300 rounded-full blur-3xl"></div>
                    </div>
                    
                    <div class="relative">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-yellow-400 rounded-2xl mb-6 shadow-lg">
                            <i class="fas fa-comments text-3xl text-gray-900"></i>
                        </div>
                        
                        <h3 class="font-display text-3xl lg:text-4xl font-bold text-white mb-4">
                            Mari Terhubung Bersama WPI
                        </h3>
                        
                        <p class="text-tosca-50 text-lg leading-relaxed mb-8">
                            Kami terbuka untuk kolaborasi, kemitraan, serta partisipasi aktif pelajar dan mahasiswa dalam membangun ekosistem wirausaha yang berdaya saing.
                        </p>

                        <a href="https://wa.me/6285697818910" target="_blank"
                           class="inline-flex items-center justify-center gap-3 bg-white text-tosca-600 px-8 py-5 rounded-full font-bold uppercase tracking-wide hover:bg-gray-50 transition-all shadow-xl hover:shadow-2xl hover:-translate-y-1 group w-full sm:w-auto">
                            <i class="fab fa-whatsapp text-2xl"></i>
                            <span>Hubungi Kami Sekarang</span>
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        
                        <div class="mt-8 pt-8 border-t border-white/20">
                            <p class="text-tosca-100 text-sm text-center">
                                Atau hubungi melalui email & telepon di samping
                            </p>
                        </div>
                    </div>
                </div>
                
                {{-- Quick Links --}}
                <div class="mt-8 bg-white rounded-2xl p-6 shadow-lg border-2 border-gray-100">
                    <h4 class="font-bold text-gray-900 mb-4">Link Cepat</h4>
                    <div class="space-y-3">
                        <a href="/" class="flex items-center gap-3 text-gray-600 hover:text-tosca-600 transition-colors group">
                            <i class="fas fa-info-circle text-tosca-500"></i>
                            <span>Tentang WPI</span>
                            <i class="fas fa-chevron-right ml-auto text-sm group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <a href="/program" class="flex items-center gap-3 text-gray-600 hover:text-tosca-600 transition-colors group">
                            <i class="fas fa-layer-group text-tosca-500"></i>
                            <span>Program Kami</span>
                            <i class="fas fa-chevron-right ml-auto text-sm group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <a href="#" class="flex items-center gap-3 text-gray-600 hover:text-tosca-600 transition-colors group">
                            <i class="fas fa-user-plus text-tosca-500"></i>
                            <span>Cara Bergabung</span>
                            <i class="fas fa-chevron-right ml-auto text-sm group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                Lokasi Sekretariat
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-tosca-500 to-yellow-400 mx-auto rounded-full"></div>
        </div>
        
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden border-2 border-gray-100">
            {{-- Menggunakan aspect-video agar tingginya proporsional secara otomatis --}}
            <div class="aspect-video w-full">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15866.510316702213!2d106.83009182127564!3d-6.180576264709727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sMonumen%20Nasional!5e0!3m2!1sid!2sid!4v1769521290185!5m2!1sid!2sid" {{-- Pastikan pakai URL embed asli kamu di sini --}}
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>

{{-- FAQ SECTION --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                Pertanyaan <span class="text-transparent bg-clip-text bg-gradient-to-r from-tosca-600 to-yellow-500">Umum</span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-tosca-500 to-yellow-400 mx-auto rounded-full mb-6"></div>
            <p class="text-gray-600">
                Beberapa pertanyaan yang sering diajukan
            </p>
        </div>
        
        <div class="space-y-4">
            <div class="bg-gray-50 rounded-xl p-6 border-2 border-gray-100 hover:border-tosca-300 transition-all">
                <h4 class="font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <i class="fas fa-question-circle text-tosca-500"></i>
                    Bagaimana cara bergabung dengan WPI?
                </h4>
                <p class="text-gray-600">
                    Anda dapat bergabung dengan mengunjungi halaman <a href="#" class="text-tosca-600 font-medium hover:underline">Cara Bergabung</a> untuk informasi lengkap mengenai syarat dan prosedur pendaftaran.
                </p>
            </div>
            
            <div class="bg-gray-50 rounded-xl p-6 border-2 border-gray-100 hover:border-tosca-300 transition-all">
                <h4 class="font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <i class="fas fa-question-circle text-tosca-500"></i>
                    Apakah ada biaya keanggotaan?
                </h4>
                <p class="text-gray-600">
                    Untuk informasi detail mengenai biaya keanggotaan dan program, silakan hubungi kami melalui WhatsApp atau email yang tertera di atas.
                </p>
            </div>
            
            <div class="bg-gray-50 rounded-xl p-6 border-2 border-gray-100 hover:border-tosca-300 transition-all">
                <h4 class="font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <i class="fas fa-question-circle text-tosca-500"></i>
                    Apakah WPI menerima kerja sama dengan pihak eksternal?
                </h4>
                <p class="text-gray-600">
                    Ya, kami sangat terbuka untuk berbagai bentuk kerja sama dan kemitraan. Silakan hubungi kami untuk mendiskusikan peluang kolaborasi.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection