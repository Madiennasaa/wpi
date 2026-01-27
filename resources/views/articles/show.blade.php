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
            {{-- Breadcrumb --}}
            <div class="flex items-center justify-center gap-2 text-tosca-100 text-sm mb-6">
                <a href="/" class="hover:text-yellow-300 transition-colors">Beranda</a>
                <i class="fas fa-chevron-right"></i>
                <a href="{{ route('artikel.index') }}" class="hover:text-yellow-300 transition-colors">Artikel</a>
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
                        @foreach (preg_split("/\r\n|\n|\r/", $article->content) as $paragraph)
                            @if(trim($paragraph))
                                <p>{{ $paragraph }}</p>
                            @endif
                        @endforeach
                    </div>
                </div>
                
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
                
                {{-- Back Button --}}
                <div class="mt-10 text-center lg:text-left">
                    <a href="{{ route('artikel.index') }}" 
                       class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-br from-tosca-500 to-tosca-600 text-white rounded-full font-bold hover:shadow-xl transition-all group">
                        <i class="fas fa-arrow-left group-hover:-translate-x-1 transition-transform"></i>
                        Kembali ke Daftar Artikel
                    </a>
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
                    </div>
                </div>

                {{-- Related Links --}}
                <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-2xl p-6 border border-yellow-200">
                    <h3 class="font-bold text-gray-900 mb-4 text-lg flex items-center gap-2">
                        <i class="fas fa-bookmark text-yellow-600"></i>
                        Halaman Terkait
                    </h3>
                    <div class="space-y-3">
                        <a href="{{ route('artikel.index') }}" 
                           class="flex items-center gap-3 text-gray-700 hover:text-tosca-600 transition-colors group">
                            <i class="fas fa-chevron-right group-hover:translate-x-1 transition-transform"></i>
                            <span class="text-sm font-semibold">Semua Artikel</span>
                        </a>
                        <a href="{{ route('artikel.index', ['filter' => 'berita']) }}" 
                           class="flex items-center gap-3 text-gray-700 hover:text-tosca-600 transition-colors group">
                            <i class="fas fa-chevron-right group-hover:translate-x-1 transition-transform"></i>
                            <span class="text-sm font-semibold">Berita WPI</span>
                        </a>
                        <a href="{{ route('artikel.index', ['filter' => 'kegiatan']) }}" 
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

{{-- CTA SECTION --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
        <div class="mb-8">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-2xl mb-6">
                <i class="fas fa-newspaper text-4xl text-white"></i>
            </div>
        </div>
        
        <h2 class="font-display text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
            Baca Artikel <span class="gradient-text">Lainnya</span>
        </h2>
        <p class="text-xl text-gray-600 mb-10 max-w-2xl mx-auto leading-relaxed">
            Jelajahi lebih banyak informasi menarik seputar kewirausahaan pelajar dan kegiatan WPI
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('artikel.index') }}" 
               class="btn-primary inline-flex items-center justify-center px-8 py-4 rounded-full text-base font-bold group">
                LIHAT SEMUA ARTIKEL
                <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
            </a>
            <a href="/" 
               class="btn-secondary inline-flex items-center justify-center px-8 py-4 rounded-full text-base font-bold">
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
</script>
@endpush