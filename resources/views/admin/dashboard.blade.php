@extends('layouts.admin')

@section('header_title', 'Dashboard')

@section('content')
<div class="mb-8">
    <h2 class="text-3xl font-bold text-gray-800 mb-2">Selamat Datang, {{ auth()->user()->name }}!</h2>
    <p class="text-gray-500">Kelola konten website Wirausaha Pelajar Indonesia</p>
</div>

<!-- Statistics Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
    <!-- Total Berita Card -->
    <div class="relative overflow-hidden bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 group border-2 border-gray-100 hover:border-tosca-300">
        <div class="absolute top-0 right-0 w-32 h-32 bg-tosca-50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-500"></div>
        
        <div class="p-8 relative">
            <div class="flex justify-between items-start mb-6">
                <div>
                    <p class="text-sm font-bold text-gray-500 uppercase tracking-wider mb-2">Total Berita</p>
                    <h3 class="text-5xl font-bold text-tosca-600">
                        {{ $total_berita }}
                    </h3>
                </div>
                <div class="w-16 h-16 bg-tosca-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 group-hover:bg-tosca-700 transition-all duration-300">
                    <i class="fa-solid fa-newspaper text-white text-2xl"></i>
                </div>
            </div>
            
            <div class="flex items-center gap-2 text-tosca-600">
                <i class="fa-solid fa-arrow-up text-sm"></i>
                <span class="text-sm font-semibold">Artikel berita terpublikasi</span>
            </div>
        </div>
        
        <div class="h-2 bg-tosca-600"></div>
    </div>

    <!-- Total Kegiatan Card -->
    <div class="relative overflow-hidden bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 group border-2 border-gray-100 hover:border-yellow-300">
        <div class="absolute top-0 right-0 w-32 h-32 bg-yellow-50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-500"></div>
        
        <div class="p-8 relative">
            <div class="flex justify-between items-start mb-6">
                <div>
                    <p class="text-sm font-bold text-gray-500 uppercase tracking-wider mb-2">Total Kegiatan</p>
                    <h3 class="text-5xl font-bold text-yellow-600">
                        {{ $total_kegiatan }}
                    </h3>
                </div>
                <div class="w-16 h-16 bg-yellow-500 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 group-hover:bg-yellow-600 transition-all duration-300">
                    <i class="fa-solid fa-calendar-days text-white text-2xl"></i>
                </div>
            </div>
            
            <div class="flex items-center gap-2 text-yellow-600">
                <i class="fa-solid fa-arrow-up text-sm"></i>
                <span class="text-sm font-semibold">Kegiatan yang sudah dilaksanakan</span>
            </div>
        </div>
        
        <div class="h-2 bg-yellow-500"></div>
    </div>
</div>

<!-- Quick Actions -->
<div class="bg-white rounded-2xl shadow-lg p-8 border-2 border-gray-100">
    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-3">
        <div class="w-10 h-10 bg-tosca-600 rounded-lg flex items-center justify-center text-white">
            <i class="fa-solid fa-bolt"></i>
        </div>
        Quick Actions
    </h3>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <a href="{{ route('admin.artikel.create') }}" 
           class="group p-6 border-2 border-gray-200 rounded-xl hover:border-tosca-500 hover:bg-tosca-50 transition-all duration-300">
            <div class="w-12 h-12 bg-tosca-600 rounded-xl flex items-center justify-center text-white mb-4 group-hover:scale-110 group-hover:bg-tosca-700 transition-all duration-300 shadow-lg">
                <i class="fa-solid fa-plus text-xl"></i>
            </div>
            <h4 class="font-bold text-gray-800 mb-1">Buat Artikel Baru</h4>
            <p class="text-sm text-gray-500">Tambah berita atau kegiatan baru</p>
        </a>

        <a href="{{ route('admin.artikel.index') }}" 
           class="group p-6 border-2 border-gray-200 rounded-xl hover:border-yellow-500 hover:bg-yellow-50 transition-all duration-300">
            <div class="w-12 h-12 bg-yellow-500 rounded-xl flex items-center justify-center text-white mb-4 group-hover:scale-110 group-hover:bg-yellow-600 transition-all duration-300 shadow-lg">
                <i class="fa-solid fa-list text-xl"></i>
            </div>
            <h4 class="font-bold text-gray-800 mb-1">Kelola Artikel</h4>
            <p class="text-sm text-gray-500">Edit atau hapus artikel yang ada</p>
        </a>

        <a href="/" target="_blank"
           class="group p-6 border-2 border-gray-200 rounded-xl hover:border-gray-400 hover:bg-gray-50 transition-all duration-300">
            <div class="w-12 h-12 bg-gray-600 rounded-xl flex items-center justify-center text-white mb-4 group-hover:scale-110 group-hover:bg-gray-700 transition-all duration-300 shadow-lg">
                <i class="fa-solid fa-globe text-xl"></i>
            </div>
            <h4 class="font-bold text-gray-800 mb-1">Lihat Website</h4>
            <p class="text-sm text-gray-500">Preview website publik</p>
        </a>
    </div>
</div>

<!-- Recent Activity (Optional) -->
<div class="mt-8 bg-tosca-50 rounded-2xl p-8 border-2 border-tosca-100">
    <div class="flex items-center gap-3 mb-4">
        <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center text-tosca-600 shadow-sm">
            <i class="fa-solid fa-info-circle"></i>
        </div>
        <h3 class="text-lg font-bold text-gray-800">Tips & Informasi</h3>
    </div>
    <ul class="space-y-3 text-gray-600">
        <li class="flex items-start gap-3">
            <i class="fa-solid fa-check-circle text-tosca-600 mt-1"></i>
            <span>Pastikan thumbnail artikel memiliki resolusi minimal 1200x630 px untuk tampilan optimal</span>
        </li>
        <li class="flex items-start gap-3">
            <i class="fa-solid fa-check-circle text-tosca-600 mt-1"></i>
            <span>Gunakan editor teks untuk format konten yang menarik dan mudah dibaca</span>
        </li>
        <li class="flex items-start gap-3">
            <i class="fa-solid fa-check-circle text-tosca-600 mt-1"></i>
            <span>Selalu preview artikel sebelum dipublikasikan ke website utama</span>
        </li>
    </ul>
</div>
@endsection