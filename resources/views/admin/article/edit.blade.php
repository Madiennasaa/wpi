@extends('layouts.admin')

@section('header_title', 'Edit Artikel')

@section('content')
<div class="max-w-4xl">
    <!-- Page Header -->
    <div class="mb-8">
        <a href="{{ route('admin.artikel.index') }}" class="inline-flex items-center gap-2 text-gray-600 hover:text-tosca-600 font-medium mb-4 transition-colors">
            <i class="fa-solid fa-arrow-left"></i>
            Kembali ke Daftar Artikel
        </a>
        <h2 class="text-3xl font-bold text-gray-800 mb-2">Edit Artikel</h2>
        <p class="text-gray-600">Perbarui konten artikel yang sudah ada</p>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
        <div class="h-2 bg-gradient-to-r from-tosca-500 to-sunshine-500"></div>
        
        @if ($errors->any())
            <div style="background: #fee2e2; color: #b91c1c; padding: 1rem; border-radius: 0.5rem; margin-bottom: 1rem;">
                <strong>Update Gagal!</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.artikel.update', $article->id) }}" method="POST" enctype="multipart/form-data" class="p-8 space-y-6">
            @csrf 
            @method('PUT')

            <!-- Title Field -->
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-3">
                    <i class="fa-solid fa-heading text-tosca-500 mr-2"></i>Judul Artikel
                </label>
                <input 
                    type="text" 
                    name="title" 
                    value="{{ $article->title }}"
                    class="w-full px-4 py-3.5 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-tosca-500 focus:ring-4 focus:ring-tosca-100 transition-all"
                    required
                >
            </div>

            <!-- Type Field -->
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-3">
                    <i class="fa-solid fa-tag text-sunshine-500 mr-2"></i>Tipe Konten
                </label>
                <div class="grid grid-cols-2 gap-4">
                    <label class="relative cursor-pointer">
                        <input type="radio" name="type" value="berita" class="peer sr-only" {{ $article->type == 'berita' ? 'checked' : '' }}>
                        <div class="p-5 border-2 border-gray-200 rounded-xl peer-checked:border-tosca-500 peer-checked:bg-tosca-50 transition-all hover:border-tosca-300">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 bg-tosca-100 rounded-lg flex items-center justify-center text-tosca-600">
                                    <i class="fa-solid fa-newspaper"></i>
                                </div>
                                <span class="font-bold text-gray-800">Berita</span>
                            </div>
                            <p class="text-sm text-gray-600">Informasi dan update terkini</p>
                        </div>
                    </label>

                    <label class="relative cursor-pointer">
                        <input type="radio" name="type" value="kegiatan" class="peer sr-only" {{ $article->type == 'kegiatan' ? 'checked' : '' }}>
                        <div class="p-5 border-2 border-gray-200 rounded-xl peer-checked:border-sunshine-500 peer-checked:bg-sunshine-50 transition-all hover:border-sunshine-300">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 bg-sunshine-100 rounded-lg flex items-center justify-center text-sunshine-600">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <span class="font-bold text-gray-800">Kegiatan</span>
                            </div>
                            <p class="text-sm text-gray-600">Event dan program WPI</p>
                        </div>
                    </label>
                </div>
            </div>

            <!-- Thumbnail Field -->
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-3">
                    <i class="fa-solid fa-image text-sunshine-500 mr-2"></i>Thumbnail Artikel
                </label>
                
                @if($article->thumbnail)
                <div class="mb-4">
                    <p class="text-sm text-gray-600 mb-2 font-medium">Thumbnail saat ini:</p>
                    <div class="relative inline-block">
                        <img src="{{ asset('storage/'.$article->thumbnail) }}" class="w-64 rounded-xl shadow-md border-2 border-gray-200">
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-tosca-500 rounded-full flex items-center justify-center text-white shadow-lg">
                            <i class="fa-solid fa-check text-sm"></i>
                        </div>
                    </div>
                </div>
                @endif

                <div class="border-2 border-dashed border-gray-300 rounded-xl p-8 text-center hover:border-tosca-500 transition-colors">
                    <input 
                        type="file" 
                        name="thumbnail" 
                        id="thumbnail"
                        class="hidden"
                        accept="image/*"
                        onchange="previewImage(event)"
                    >
                    <label for="thumbnail" class="cursor-pointer">
                        <div id="preview-container" class="hidden mb-4">
                            <img id="preview" class="max-h-64 mx-auto rounded-lg shadow-md">
                        </div>
                        <div id="upload-prompt">
                            <div class="w-16 h-16 bg-gradient-to-br from-tosca-100 to-sunshine-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="fa-solid fa-cloud-arrow-up text-3xl text-tosca-600"></i>
                            </div>
                            <p class="text-gray-700 font-semibold mb-1">Klik untuk upload gambar baru</p>
                            <p class="text-sm text-gray-500">PNG, JPG maksimal 5MB (opsional)</p>
                        </div>
                    </label>
                </div>
                <p class="mt-2 text-sm text-gray-500">Kosongkan jika tidak ingin mengganti thumbnail</p>
            </div>

            <!-- Content Field with CKEditor -->
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-3">
                    <i class="fa-solid fa-align-left text-tosca-500 mr-2"></i>Konten Artikel
                </label>
                <div class="border-2 border-gray-200 rounded-xl overflow-hidden focus-within:border-tosca-500 focus-within:ring-4 focus-within:ring-tosca-100 transition-all">
                    <textarea 
                        name="content" 
                        id="editor" 
                        rows="12" 
                        class="w-full px-4 py-3.5 focus:outline-none"
                    >{{ $article->content }}</textarea>
                </div>
                <p class="mt-2 text-sm text-gray-500">Gunakan editor untuk format teks yang lebih menarik</p>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-gray-200">
                <button 
                    type="submit" 
                    class="flex-1 bg-gradient-to-r from-tosca-600 to-tosca-500 text-white px-8 py-4 rounded-xl font-bold text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                    <i class="fa-solid fa-check mr-2"></i>Update Artikel
                </button>
                <a 
                    href="{{ route('admin.artikel.index') }}" 
                    class="flex-1 bg-gray-100 text-gray-700 px-8 py-4 rounded-xl font-bold text-lg text-center hover:bg-gray-200 transition-all">
                    <i class="fa-solid fa-xmark mr-2"></i>Batal
                </a>
            </div>
        </form>
    </div>

    <!-- Info Card -->
    <div class="mt-6 bg-gradient-to-br from-sunshine-50 to-tosca-50 rounded-2xl p-6 border border-sunshine-100">
        <div class="flex items-start gap-4">
            <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center text-sunshine-600 shadow-sm flex-shrink-0">
                <i class="fa-solid fa-info-circle"></i>
            </div>
            <div>
                <h4 class="font-bold text-gray-800 mb-2">Informasi Editing</h4>
                <p class="text-sm text-gray-600">Perubahan akan langsung tersimpan setelah Anda klik tombol "Update Artikel". Pastikan semua data sudah benar sebelum menyimpan.</p>
            </div>
        </div>
    </div>
</div>

<!-- CKEditor Script -->
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor', {
        height: 400,
        toolbar: [
            { name: 'document', items: [ 'Source' ] },
            { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike' ] },
            { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Blockquote' ] },
            { name: 'links', items: [ 'Link', 'Unlink' ] },
            { name: 'styles', items: [ 'Format' ] }
        ]
    });

    document.querySelector('form').onsubmit = function() {
        for (var instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
    };
</script>

<script>
function previewImage(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('preview').src = e.target.result;
            document.getElementById('preview-container').classList.remove('hidden');
            document.getElementById('upload-prompt').classList.add('hidden');
        }
        reader.readAsDataURL(file);
    }
}
</script>
@endsection