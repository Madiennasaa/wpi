@extends('layouts.master')

@section('title', $title)
@section('meta_description', 'Informasi terbaru seputar Wirausaha Pelajar Indonesia - berita, kegiatan, dan artikel kewirausahaan pelajar')
@section('meta_keywords', 'artikel WPI, berita WPI, kegiatan WPI, wirausaha pelajar')

@push('styles')
<style>
    /* Article Card Animation */
    .article-card {
        opacity: 0;
        animation: fadeInUp 0.8s ease-out forwards;
    }
    
    .article-card:nth-child(1) { animation-delay: 0.1s; }
    .article-card:nth-child(2) { animation-delay: 0.2s; }
    .article-card:nth-child(3) { animation-delay: 0.3s; }
    .article-card:nth-child(4) { animation-delay: 0.4s; }
    .article-card:nth-child(5) { animation-delay: 0.5s; }
    .article-card:nth-child(6) { animation-delay: 0.6s; }
    
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
    
    /* Card Hover Effect */
    .article-card-inner {
        transition: all 0.4s ease;
    }
    
    .article-card:hover .article-card-inner {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
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
        background: linear-gradient(135deg, rgba(14, 184, 166, 0.3) 0%, rgba(250, 204, 21, 0.3) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
    }
    
    .article-card:hover .image-overlay::after {
        opacity: 1;
    }
    
    /* Filter Tab Animation */
    .filter-tab {
        transition: all 0.3s ease;
    }
    
    .filter-tab:hover {
        transform: translateY(-2px);
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
                <span class="text-yellow-300 font-semibold">{{ $title }}</span>
            </div>
            
            <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm text-yellow-300 rounded-full text-sm font-bold tracking-wider mb-6 border border-white/20">
                INFORMASI & KONTEN
            </span>
            
            <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                {{ $title }}
            </h1>
            
            <p class="text-xl lg:text-2xl text-tosca-50 leading-relaxed font-light max-w-3xl mx-auto">
                @if($type == 'berita')
                    Informasi dan berita terbaru seputar perkembangan Wirausaha Pelajar Indonesia
                @elseif($type == 'kegiatan')
                    Dokumentasi kegiatan dan event yang telah dilaksanakan oleh Wirausaha Pelajar Indonesia
                @endif
            </p>
        </div>
    </div>
</section>

{{-- FILTER & GRID SECTION --}}
<section class="py-16 lg:py-24 bg-gradient-to-b from-white to-gray-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        {{-- Articles Grid --}}
        @if($articles->count() > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                @foreach ($articles as $item)
                    <article class="article-card">
                        <a href="{{ route('artikel.show', $item->slug) }}" class="block h-full">
                            <div class="article-card-inner bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden h-full flex flex-col hover:border-tosca-200 transition-colors">
                                {{-- Thumbnail --}}
                                <div class="relative aspect-video image-overlay">
                                    <img src="{{ asset('storage/' . $item->thumbnail) }}" 
                                         alt="{{ $item->title }}"
                                         class="w-full h-full object-cover">
                                    
                                    {{-- Category Badge --}}
                                    <span class="absolute top-4 left-4 px-4 py-2 rounded-full text-xs font-bold text-white shadow-lg {{ $item->type == 'kegiatan' ? 'bg-gradient-to-r from-yellow-400 to-yellow-500' : 'bg-gradient-to-r from-tosca-500 to-tosca-600' }}">
                                        <i class="fas {{ $item->type == 'kegiatan' ? 'fa-calendar-alt' : 'fa-newspaper' }} mr-1"></i>
                                        {{ strtoupper($item->type) }}
                                    </span>
                                </div>
                                
                                {{-- Content --}}
                                <div class="p-6 lg:p-8 flex-1 flex flex-col">
                                    {{-- Date --}}
                                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                                        <i class="fas fa-clock"></i>
                                        <span>{{ $item->published_at->format('d M Y') }}</span>
                                    </div>
                                    
                                    {{-- Title --}}
                                    <h3 class="font-display text-xl font-bold text-gray-900 mb-3 line-clamp-2 hover:text-tosca-600 transition-colors">
                                        {{ $item->title }}
                                    </h3>
                                    
                                    {{-- Excerpt --}}
                                    <p class="text-gray-600 text-sm leading-relaxed line-clamp-3 mb-4 flex-1">
                                        {{ $item->excerpt }}
                                    </p>
                                    
                                    {{-- Read More --}}
                                    <div class="flex items-center gap-2 text-tosca-600 font-bold text-sm mt-auto group">
                                        <span>Baca Selengkapnya</span>
                                        <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </article>
                @endforeach
            </div>
            
            {{-- Pagination --}}
            <div class="mt-12 lg:mt-16">
                {{ $articles->links() }}
            </div>
        @else
            {{-- Empty State --}}
            <div class="text-center py-20 lg:py-32">
                <div class="inline-flex items-center justify-center w-24 h-24 bg-gradient-to-br from-gray-100 to-gray-200 rounded-3xl mb-6">
                    <i class="fas fa-inbox text-5xl text-gray-400"></i>
                </div>
                <h3 class="font-display text-2xl font-bold text-gray-900 mb-3">Belum Ada {{ $title }}</h3>
                <p class="text-gray-600 text-lg mb-8">Konten untuk kategori ini akan segera hadir</p>
                <a href="/" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-br from-tosca-500 to-tosca-600 text-white rounded-full font-bold hover:shadow-lg transition-shadow">
                    <i class="fas fa-arrow-left"></i>
                    Kembali ke Beranda
                </a>
            </div>
        @endif
    </div>
</section>

{{-- CTA SECTION --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
        <div class="mb-8">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-tosca-500 to-tosca-600 rounded-2xl mb-6">
                <i class="fas fa-bell text-4xl text-white"></i>
            </div>
        </div>
        
        <h2 class="font-display text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
            Jangan Lewatkan <span class="bg-gradient-to-r from-tosca-500 to-yellow-400 bg-clip-text text-transparent">Update Terbaru</span>
        </h2>
        <p class="text-xl text-gray-600 mb-10 max-w-2xl mx-auto leading-relaxed">
            Ikuti terus informasi dan kegiatan terbaru dari Wirausaha Pelajar Indonesia
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://wa.me/6285697818910" class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-br from-yellow-400 to-yellow-500 text-gray-900 rounded-full text-base font-bold group hover:shadow-lg transition-all">
                BERGABUNG DENGAN WPI
                <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
            </a>
            <a href="/" class="inline-flex items-center justify-center px-8 py-4 bg-white border-2 border-tosca-500 text-tosca-600 rounded-full text-base font-bold hover:bg-tosca-50 transition-colors">
                KEMBALI KE BERANDA
            </a>
        </div>
    </div>
</section>

@endsection