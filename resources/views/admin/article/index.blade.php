@extends('layouts.admin')

@section('header_title', 'Kelola Artikel')

@section('content')
<div>
    <!-- Page Header -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
        <div>
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Kelola Artikel</h2>
            <p class="text-gray-600">Daftar semua berita dan kegiatan WPI</p>
        </div>
        <a href="{{ route('admin.artikel.create') }}" 
           class="inline-flex items-center gap-2 bg-gradient-to-r from-tosca-600 to-tosca-500 text-white px-6 py-3.5 rounded-xl font-bold shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
            <i class="fa-solid fa-plus"></i>
            Tambah Artikel
        </a>
    </div>

    <!-- Stats Overview -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
        <div class="bg-white rounded-xl p-5 border-l-4 border-tosca-500 shadow-sm">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 bg-tosca-100 rounded-lg flex items-center justify-center text-tosca-600">
                    <i class="fa-solid fa-file-lines"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-500 font-semibold">Total Artikel</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $articles->count() }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl p-5 border-l-4 border-blue-500 shadow-sm">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-blue-600">
                    <i class="fa-solid fa-newspaper"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-500 font-semibold">Berita</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $articles->where('type', 'berita')->count() }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl p-5 border-l-4 border-sunshine-500 shadow-sm">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 bg-sunshine-100 rounded-lg flex items-center justify-center text-sunshine-600">
                    <i class="fa-solid fa-calendar-days"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-500 font-semibold">Kegiatan</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $articles->where('type', 'kegiatan')->count() }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Articles Table -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
        <div class="h-2 bg-gradient-to-r from-tosca-500 to-sunshine-500"></div>
        
        @if($articles->count() > 0)
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b-2 border-gray-200">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                            Artikel
                        </th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                            Tipe
                        </th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                            Tanggal
                        </th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-gray-600 uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($articles as $art)
                    <tr class="hover:bg-gray-50 transition-colors group">
                        <!-- Article Info -->
                        <td class="px-6 py-5">
                            <div class="flex items-center gap-4">
                                @if($art->thumbnail)
                                <div class="w-16 h-16 flex-shrink-0 rounded-lg overflow-hidden bg-gray-100 border-2 border-gray-200">
                                    <img src="{{ asset('storage/'.$art->thumbnail) }}" class="w-full h-full object-cover">
                                </div>
                                @else
                                <div class="w-16 h-16 flex-shrink-0 rounded-lg bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center border-2 border-gray-200">
                                    <i class="fa-solid fa-image text-gray-400 text-xl"></i>
                                </div>
                                @endif
                                <div class="flex-1 min-w-0">
                                    <h3 class="font-bold text-gray-800 mb-1 group-hover:text-tosca-600 transition-colors line-clamp-1">
                                        {{ $art->title }}
                                    </h3>
                                    <p class="text-sm text-gray-500 line-clamp-1">
                                        {{ Str::limit(strip_tags($art->content), 80) }}
                                    </p>
                                </div>
                            </div>
                        </td>

                        <!-- Type Badge -->
                        <td class="px-6 py-5">
                            @if($art->type == 'berita')
                            <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-tosca-100 text-tosca-700 rounded-lg text-xs font-bold uppercase">
                                <i class="fa-solid fa-newspaper"></i>
                                Berita
                            </span>
                            @else
                            <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-sunshine-100 text-sunshine-700 rounded-lg text-xs font-bold uppercase">
                                <i class="fa-solid fa-calendar-days"></i>
                                Kegiatan
                            </span>
                            @endif
                        </td>

                        <!-- Date -->
                        <td class="px-6 py-5">
                            <div class="flex items-center gap-2 text-gray-600">
                                <i class="fa-solid fa-clock text-gray-400"></i>
                                <span class="text-sm font-medium">{{ $art->created_at->format('d M Y') }}</span>
                            </div>
                        </td>

                        <!-- Actions -->
                        <td class="px-6 py-5">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('admin.artikel.edit', $art->id) }}" 
                                   class="inline-flex items-center gap-2 px-4 py-2 bg-tosca-100 text-tosca-700 rounded-lg font-bold text-sm hover:bg-tosca-500 hover:text-white transition-all">
                                    <i class="fa-solid fa-pen"></i>
                                    Edit
                                </a>
                                
                                <form action="{{ route('admin.artikel.destroy', $art->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="inline-flex items-center gap-2 px-4 py-2 bg-red-100 text-red-700 rounded-lg font-bold text-sm hover:bg-red-500 hover:text-white transition-all">
                                        <i class="fa-solid fa-trash"></i>
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <!-- Empty State -->
        <div class="p-16 text-center">
            <div class="w-24 h-24 bg-gradient-to-br from-gray-100 to-gray-200 rounded-3xl flex items-center justify-center mx-auto mb-6">
                <i class="fa-solid fa-inbox text-gray-400 text-4xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2">Belum Ada Artikel</h3>
            <p class="text-gray-600 mb-6">Mulai tambahkan artikel pertama Anda</p>
            <a href="{{ route('admin.artikel.create') }}" 
               class="inline-flex items-center gap-2 bg-gradient-to-r from-tosca-600 to-tosca-500 text-white px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                <i class="fa-solid fa-plus"></i>
                Tambah Artikel Baru
            </a>
        </div>
        @endif
    </div>

    <!-- Help Card -->
    @if($articles->count() > 0)
    <div class="mt-6 bg-gradient-to-br from-tosca-50 to-sunshine-50 rounded-2xl p-6 border border-tosca-100">
        <div class="flex items-start gap-4">
            <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center text-tosca-600 shadow-sm flex-shrink-0">
                <i class="fa-solid fa-question-circle"></i>
            </div>
            <div>
                <h4 class="font-bold text-gray-800 mb-2">Butuh Bantuan?</h4>
                <ul class="space-y-1 text-sm text-gray-600">
                    <li class="flex items-center gap-2">
                        <i class="fa-solid fa-circle text-tosca-500" style="font-size: 4px;"></i>
                        <span>Klik tombol <strong>Edit</strong> untuk mengubah artikel</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fa-solid fa-circle text-tosca-500" style="font-size: 4px;"></i>
                        <span>Klik tombol <strong>Hapus</strong> untuk menghapus artikel (tidak dapat dikembalikan)</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fa-solid fa-circle text-tosca-500" style="font-size: 4px;"></i>
                        <span>Artikel yang dihapus akan langsung hilang dari website</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection