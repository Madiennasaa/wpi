@extends('layouts.master')

@section('title', $article->title)
@section('meta_description', $article->excerpt)
@section('meta_keywords', 'artikel WPI, ' . $article->type . ', wirausaha pelajar')

@push('styles')
<style>
    /* Content Animation */
    .article-content {
        opacity: 0;
        animation: fadeInUp 0.8s ease-out forwards;
        animation-delay: 0.2s;
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
    
    /* Prose Styling Enhancement */
    .prose h2 {
        color: #0e7490;
        font-weight: 700;
        margin-top: 2.5rem;
        margin-bottom: 1.25rem;
        padding-bottom: 0.5rem;
        border-bottom: 3px solid #facc15;
    }
    
    .prose h3 {
        color: #155e75;
        font-weight: 600;
        margin-top: 2rem;
        margin-bottom: 1rem;
    }
    
    .prose p {
        margin-bottom: 1.5rem;
    }
    
    .prose a {
        color: #0e7490;
        text-decoration: underline;
        font-weight: 600;
        transition: color 0.3s;
    }
    
    .prose a:hover {
        color: #facc15;
    }
    
    .prose img {
        border-radius: 1rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        margin: 2rem 0;
    }
    
    .prose blockquote {
        border-left: 4px solid #facc15;
        background: linear-gradient(to right, #f0fdfa, #fefce8);
        padding: 1.5rem;
        border-radius: 0.75rem;
        font-style: italic;
        color: #374151;
        margin: 2rem 0;
    }
    
    .prose ul, .prose ol {
        margin: 1.5rem 0;
        padding-left: 1.5rem;
    }
    
    .prose li {
        margin-bottom: 0.75rem;
        padding-left: 0.5rem;
    }
    
    /* Share Buttons */
    .share-btn {
        transition: all 0.3s ease;
    }
    
    .share-btn:hover {
        transform: translateY(-3px);
    }
    
    /* Related Articles Hover */
    .related-article-card {
        transition: all 0.4s ease;
    }
    
    .related-article-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    /* Registration Form Styles */
    .registration-section {
        background: linear-gradient(135deg, #f0fdfa 0%, #fefce8 100%);
        border: 2px solid #14b8a6;
        box-shadow: 0 10px 40px rgba(20, 184, 166, 0.1);
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-label {
        display: block;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 0.5rem;
        font-size: 0.875rem;
    }

    .form-label .required {
        color: #ef4444;
        margin-left: 0.25rem;
    }

    .form-input {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 2px solid #e2e8f0;
        border-radius: 0.75rem;
        font-size: 0.875rem;
        transition: all 0.3s ease;
        background: white;
    }

    .form-input:focus {
        outline: none;
        border-color: #14b8a6;
        box-shadow: 0 0 0 3px rgba(20, 184, 166, 0.1);
    }

    .form-input::placeholder {
        color: #94a3b8;
    }

    .form-select {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 2px solid #e2e8f0;
        border-radius: 0.75rem;
        font-size: 0.875rem;
        transition: all 0.3s ease;
        background: white;
        cursor: pointer;
    }

    .form-select:focus {
        outline: none;
        border-color: #14b8a6;
        box-shadow: 0 0 0 3px rgba(20, 184, 166, 0.1);
    }

    .btn-register {
        background: linear-gradient(135deg, #14b8a6 0%, #0d9488 100%);
        color: white;
        padding: 1rem 2rem;
        border-radius: 0.75rem;
        font-weight: 700;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        width: 100%;
        font-size: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
    }

    .btn-register:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(20, 184, 166, 0.3);
    }

    .btn-register:disabled {
        opacity: 0.6;
        cursor: not-allowed;
        transform: none;
    }

    .loading-spinner {
        display: inline-block;
        width: 20px;
        height: 20px;
        border: 3px solid rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        border-top-color: white;
        animation: spin 1s ease-in-out infinite;
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }

    .alert {
        padding: 1rem;
        border-radius: 0.75rem;
        margin-bottom: 1rem;
        font-weight: 600;
    }

    .alert-success {
        background-color: #d1fae5;
        color: #065f46;
        border: 1px solid #34d399;
    }

    .alert-error {
        background-color: #fee2e2;
        color: #991b1b;
        border: 1px solid #f87171;
    }

    .registration-closed {
        background: linear-gradient(135deg, #fee2e2 0%, #fef3c7 100%);
        border: 2px solid #ef4444;
    }

    .badge-closed {
        background: #ef4444;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 9999px;
        font-weight: 700;
        font-size: 0.875rem;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }
</style>
@endpush

@section('content')

{{-- HERO SECTION --}}
<section class="relative bg-gradient-to-br from-tosca-700 via-tosca-600 to-tosca-500 text-white py-20 lg:py-32 overflow-hidden">
    {{-- Background Image Overlay --}}
    <div class="absolute inset-0">
        <img src="{{ asset('storage/'.$article->thumbnail) }}" 
             alt="{{ $article->title }}"
             class="w-full h-full object-cover opacity-20">
        <div class="absolute inset-0 bg-gradient-to-br from-tosca-900/90 via-tosca-800/90 to-tosca-700/90"></div>
    </div>
    
    {{-- Decorative Elements --}}
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-tosca-300 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-5xl mx-auto px-6 lg:px-8">
        <div class="text-center">
            {{-- Breadcrumb - UPDATED --}}
            <div class="flex items-center justify-center gap-2 text-tosca-100 text-sm mb-6">
                <a href="/" class="hover:text-yellow-300 transition-colors">Beranda</a>
                <i class="fas fa-chevron-right"></i>
                @if($article->type == 'berita')
                    <a href="{{ route('berita.index') }}" class="hover:text-yellow-300 transition-colors">Berita</a>
                @else
                    <a href="{{ route('kegiatan.index') }}" class="hover:text-yellow-300 transition-colors">Kegiatan</a>
                @endif
                <i class="fas fa-chevron-right"></i>
                <span class="text-yellow-300 font-semibold">Detail</span>
            </div>
            
            {{-- Category Badge --}}
            <span class="inline-block px-6 py-2 rounded-full text-sm font-bold mb-6 shadow-lg {{ $article->type == 'kegiatan' ? 'bg-gradient-to-r from-yellow-400 to-yellow-500 text-gray-900' : 'bg-gradient-to-r from-tosca-500 to-tosca-600 text-white border border-white/20' }}">
                <i class="fas {{ $article->type == 'kegiatan' ? 'fa-calendar-alt' : 'fa-newspaper' }} mr-2"></i>
                {{ strtoupper($article->type) }}
            </span>
            
            {{-- Title --}}
            <h1 class="font-display text-3xl sm:text-4xl lg:text-5xl font-bold mb-6 leading-tight">
                {{ $article->title }}
            </h1>
            
            {{-- Meta Info --}}
            <div class="flex items-center justify-center gap-6 text-tosca-100">
                <div class="flex items-center gap-2">
                    <i class="fas fa-clock"></i>
                    <span>{{ $article->published_at->format('d F Y') }}</span>
                </div>
                <div class="w-1 h-1 bg-tosca-300 rounded-full"></div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-eye"></i>
                    <span>{{ number_format(rand(100, 999)) }} views</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- MAIN CONTENT --}}
<section class="py-16 lg:py-24 bg-gradient-to-b from-white to-gray-50">
    <div class="max-w-5xl mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-[1fr_300px] gap-12">
            
            {{-- Article Content --}}
            <div class="article-content">
                {{-- Featured Image --}}
                <div class="mb-10 lg:mb-12">
                    <img src="{{ asset('storage/'.$article->thumbnail) }}" 
                         alt="{{ $article->title }}"
                         class="w-full rounded-2xl shadow-2xl">
                </div>
                
                {{-- Content Body --}}
                <div class="bg-white rounded-2xl p-8 lg:p-12 shadow-lg border border-gray-100">
                    <div class="prose prose-lg max-w-none text-gray-800 leading-relaxed">
                        {!! $article->content !!}
                    </div>
                </div>

                {{-- REGISTRATION SECTION (Only for 'kegiatan' type) --}}
                @if($article->type == 'kegiatan')
                <div id="registration-section" class="mt-10 registration-section rounded-2xl p-8 lg:p-10">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="font-display text-2xl lg:text-3xl font-bold text-gray-900 flex items-center gap-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-xl flex items-center justify-center">
                                <i class="fas fa-user-plus text-white text-xl"></i>
                            </div>
                            Daftar Sekarang
                        </h3>
                    </div>

                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Isi formulir di bawah ini untuk mendaftar pada kegiatan <strong>{{ $article->title }}</strong>. Data Anda akan tersimpan dengan aman.
                    </p>

                    <div id="alert-container"></div>

                    <form id="registrationForm" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            {{-- Nama Lengkap --}}
                            <div class="form-group">
                                <label for="nama" class="form-label">
                                    Nama Lengkap
                                    <span class="required">*</span>
                                </label>
                                <input type="text" 
                                       id="nama" 
                                       name="nama" 
                                       class="form-input" 
                                       placeholder="Masukkan nama lengkap Anda"
                                       required>
                            </div>

                            {{-- Email --}}
                            <div class="form-group">
                                <label for="email" class="form-label">
                                    Email
                                    <span class="required">*</span>
                                </label>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       class="form-input" 
                                       placeholder="contoh@email.com"
                                       required>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            {{-- No. WhatsApp --}}
                            <div class="form-group">
                                <label for="whatsapp" class="form-label">
                                    No. WhatsApp
                                    <span class="required">*</span>
                                </label>
                                <input type="tel" 
                                       id="whatsapp" 
                                       name="whatsapp" 
                                       class="form-input" 
                                       placeholder="08xxxxxxxxxx"
                                       required>
                            </div>

                            {{-- Instansi/Sekolah --}}
                            <div class="form-group">
                                <label for="instansi" class="form-label">
                                    Instansi/Sekolah
                                    <span class="required">*</span>
                                </label>
                                <input type="text" 
                                       id="instansi" 
                                       name="instansi" 
                                       class="form-input" 
                                       placeholder="Nama sekolah/universitas"
                                       required>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            {{-- Kota/Kabupaten --}}
                            <div class="form-group">
                                <label for="kota" class="form-label">
                                    Kota/Kabupaten
                                    <span class="required">*</span>
                                </label>
                                <input type="text" 
                                       id="kota" 
                                       name="kota" 
                                       class="form-input" 
                                       placeholder="Kota/Kabupaten tempat tinggal"
                                       required>
                            </div>

                            {{-- Status --}}
                            <div class="form-group">
                                <label for="status" class="form-label">
                                    Status
                                    <span class="required">*</span>
                                </label>
                                <select id="status" name="status" class="form-select" required>
                                    <option value="">Pilih Status</option>
                                    <option value="Pelajar SD">Pelajar SD</option>
                                    <option value="Pelajar SMP">Pelajar SMP</option>
                                    <option value="Pelajar SMA/SMK">Pelajar SMA/SMK</option>
                                    <option value="Mahasiswa">Mahasiswa</option>
                                    <option value="Umum">Umum</option>
                                </select>
                            </div>
                        </div>

                        {{-- Alasan Mengikuti --}}
                        <div class="form-group">
                            <label for="alasan" class="form-label">
                                Alasan Mengikuti Kegiatan
                            </label>
                            <textarea id="alasan" 
                                      name="alasan" 
                                      rows="4" 
                                      class="form-input" 
                                      placeholder="Ceritakan alasan Anda ingin mengikuti kegiatan ini (opsional)"></textarea>
                        </div>

                        {{-- Hidden Fields --}}
                        <input type="hidden" name="kegiatan" value="{{ $article->title }}">
                        <input type="hidden" name="tanggal_daftar" id="tanggal_daftar">

                        {{-- Submit Button --}}
                        <button type="submit" class="btn-register" id="submitBtn">
                            <i class="fas fa-paper-plane"></i>
                            Kirim Pendaftaran
                        </button>

                        <p class="text-xs text-gray-500 text-center mt-4">
                            <i class="fas fa-shield-alt mr-1"></i>
                            Data Anda akan kami jaga kerahasiaannya dan hanya digunakan untuk keperluan pendaftaran kegiatan ini.
                        </p>
                    </form>
                </div>
                @endif
                
                {{-- Share Section --}}
                <div class="mt-10 bg-gradient-to-br from-tosca-50 to-yellow-50 rounded-2xl p-8 border border-tosca-100">
                    <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                        <i class="fas fa-share-alt text-tosca-600"></i>
                        Bagikan Artikel Ini
                    </h3>
                    <div class="flex flex-wrap gap-3">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" 
                           target="_blank"
                           class="share-btn flex items-center gap-2 px-5 py-3 bg-blue-600 text-white rounded-xl font-semibold hover:bg-blue-700 shadow-md">
                            <i class="fab fa-facebook-f"></i>
                            Facebook
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($article->title) }}" 
                           target="_blank"
                           class="share-btn flex items-center gap-2 px-5 py-3 bg-sky-500 text-white rounded-xl font-semibold hover:bg-sky-600 shadow-md">
                            <i class="fab fa-twitter"></i>
                            Twitter
                        </a>
                        <a href="https://wa.me/?text={{ urlencode($article->title . ' - ' . request()->url()) }}" 
                           target="_blank"
                           class="share-btn flex items-center gap-2 px-5 py-3 bg-green-600 text-white rounded-xl font-semibold hover:bg-green-700 shadow-md">
                            <i class="fab fa-whatsapp"></i>
                            WhatsApp
                        </a>
                        <button onclick="copyLink()" 
                                class="share-btn flex items-center gap-2 px-5 py-3 bg-gray-600 text-white rounded-xl font-semibold hover:bg-gray-700 shadow-md">
                            <i class="fas fa-link"></i>
                            Salin Link
                        </button>
                    </div>
                </div>
                
                {{-- Back Button - UPDATED --}}
                <div class="mt-10 text-center lg:text-left">
                    @if($article->type == 'berita')
                        <a href="{{ route('berita.index') }}" 
                           class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-br from-tosca-500 to-tosca-600 text-white rounded-full font-bold hover:shadow-xl transition-all group">
                            <i class="fas fa-arrow-left group-hover:-translate-x-1 transition-transform"></i>
                            Kembali ke Daftar Berita
                        </a>
                    @else
                        <a href="{{ route('kegiatan.index') }}" 
                           class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-br from-yellow-400 to-yellow-500 text-gray-900 rounded-full font-bold hover:shadow-xl transition-all group">
                            <i class="fas fa-arrow-left group-hover:-translate-x-1 transition-transform"></i>
                            Kembali ke Daftar Kegiatan
                        </a>
                    @endif
                </div>
            </div>

            {{-- Sidebar --}}
            <div class="space-y-6">
                {{-- Author/Publisher Info --}}
                <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 sticky top-24">
                    <h3 class="font-bold text-gray-900 mb-4 text-lg">Informasi Publikasi</h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-building text-white"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 mb-1">Dipublikasikan oleh</p>
                                <p class="font-bold text-gray-900">WPI Official</p>
                            </div>
                        </div>
                        
                        <div class="h-px bg-gray-200"></div>
                        
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-calendar text-gray-900"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 mb-1">Tanggal Publikasi</p>
                                <p class="font-bold text-gray-900">{{ $article->published_at->format('d F Y') }}</p>
                            </div>
                        </div>
                        
                        <div class="h-px bg-gray-200"></div>
                        
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-tag text-white"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 mb-1">Kategori</p>
                                <p class="font-bold text-gray-900">{{ ucfirst($article->type) }}</p>
                            </div>
                        </div>

                        @if($article->type == 'kegiatan')
                        <div class="h-px bg-gray-200"></div>
                        
                        {{-- Quick Register Button in Sidebar --}}
                        <a href="#registration-section" 
                           class="flex items-center justify-center gap-2 w-full px-4 py-3 bg-gradient-to-br from-yellow-400 to-yellow-500 text-gray-900 rounded-xl font-bold hover:shadow-lg transition-all">
                            <i class="fas fa-user-plus"></i>
                            Daftar Kegiatan
                        </a>
                        @endif
                    </div>
                </div>

                {{-- Related Links - UPDATED --}}
                <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-2xl p-6 border border-yellow-200">
                    <h3 class="font-bold text-gray-900 mb-4 text-lg flex items-center gap-2">
                        <i class="fas fa-bookmark text-yellow-600"></i>
                        Halaman Terkait
                    </h3>
                    <div class="space-y-3">
                        <a href="{{ route('berita.index') }}" 
                           class="flex items-center gap-3 text-gray-700 hover:text-tosca-600 transition-colors group">
                            <i class="fas fa-chevron-right group-hover:translate-x-1 transition-transform"></i>
                            <span class="text-sm font-semibold">Berita WPI</span>
                        </a>
                        <a href="{{ route('kegiatan.index') }}" 
                           class="flex items-center gap-3 text-gray-700 hover:text-tosca-600 transition-colors group">
                            <i class="fas fa-chevron-right group-hover:translate-x-1 transition-transform"></i>
                            <span class="text-sm font-semibold">Kegiatan WPI</span>
                        </a>
                        <a href="/" 
                           class="flex items-center gap-3 text-gray-700 hover:text-tosca-600 transition-colors group">
                            <i class="fas fa-chevron-right group-hover:translate-x-1 transition-transform"></i>
                            <span class="text-sm font-semibold">Beranda</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA SECTION - UPDATED --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
        <div class="mb-8">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-2xl mb-6">
                <i class="fas fa-newspaper text-4xl text-white"></i>
            </div>
        </div>
        
        <h2 class="font-display text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
            Baca <span class="bg-gradient-to-r from-tosca-500 to-yellow-400 bg-clip-text text-transparent">{{ $article->type == 'berita' ? 'Berita' : 'Kegiatan' }}</span> Lainnya
        </h2>
        <p class="text-xl text-gray-600 mb-10 max-w-2xl mx-auto leading-relaxed">
            Jelajahi lebih banyak informasi menarik seputar {{ $article->type == 'berita' ? 'berita' : 'kegiatan' }} Wirausaha Pelajar Indonesia
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            @if($article->type == 'berita')
                <a href="{{ route('berita.index') }}" 
                   class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-br from-tosca-500 to-tosca-600 text-white rounded-full text-base font-bold group hover:shadow-lg transition-all">
                    LIHAT SEMUA BERITA
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
            @else
                <a href="{{ route('kegiatan.index') }}" 
                   class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-br from-yellow-400 to-yellow-500 text-gray-900 rounded-full text-base font-bold group hover:shadow-lg transition-all">
                    LIHAT SEMUA KEGIATAN
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
            @endif
            <a href="/" 
               class="inline-flex items-center justify-center px-8 py-4 bg-white border-2 border-tosca-500 text-tosca-600 rounded-full text-base font-bold hover:bg-tosca-50 transition-colors">
                KEMBALI KE BERANDA
            </a>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    function copyLink() {
        navigator.clipboard.writeText(window.location.href).then(() => {
            alert('Link berhasil disalin!');
        });
    }

    // Registration Form Handler
    @if($article->type == 'kegiatan')
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('registrationForm');
        const submitBtn = document.getElementById('submitBtn');
        const alertContainer = document.getElementById('alert-container');
        
        // Set tanggal daftar otomatis
        const today = new Date();
        const formattedDate = today.toISOString().split('T')[0];
        document.getElementById('tanggal_daftar').value = formattedDate;

        // GANTI DENGAN URL GOOGLE APPS SCRIPT ANDA
        const scriptURL = 'https://script.google.com/macros/s/AKfycbwmNslIj0KohPdOJGLErjXfQQnibfB3wvP4C3xw0LIwdzZfhuzASVTTA_TQtj2PIzJmPA/exec';
        
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Disable button dan tampilkan loading
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="loading-spinner"></span> Mengirim...';
            
            // Hapus alert sebelumnya
            alertContainer.innerHTML = '';
            
            // Ambil data form
            const formData = new FormData(form);
            
            // Kirim ke Google Spreadsheet
            fetch(scriptURL, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.result === 'success') {
                    // Tampilkan success message
                    alertContainer.innerHTML = `
                        <div class="alert alert-success">
                            <i class="fas fa-check-circle mr-2"></i>
                            Pendaftaran berhasil! Terima kasih telah mendaftar. Kami akan menghubungi Anda segera.
                        </div>
                    `;
                    
                    // Reset form
                    form.reset();
                    
                    // Scroll ke alert
                    alertContainer.scrollIntoView({ behavior: 'smooth', block: 'center' });
                } else {
                    throw new Error('Gagal mengirim data');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alertContainer.innerHTML = `
                    <div class="alert alert-error">
                        <i class="fas fa-exclamation-circle mr-2"></i>
                        Terjadi kesalahan. Silakan coba lagi atau hubungi admin.
                    </div>
                `;
            })
            .finally(() => {
                // Enable button kembali
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Kirim Pendaftaran';
            });
        });

        // Validasi nomor WhatsApp
        const whatsappInput = document.getElementById('whatsapp');
        whatsappInput.addEventListener('input', function(e) {
            // Hanya izinkan angka
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    });
    @endif
</script>
@endpush