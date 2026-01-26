@extends('layouts.master')

@section('title', 'Wirausaha Pelajar Indonesia | Komunitas Wirausaha Pelajar Nasional')
@section('meta_description', 'Wirausaha Pelajar Indonesia adalah komunitas nasional pelajar dan mahasiswa untuk membangun jiwa wirausaha sejak dini.')
@section('meta_keywords', 'wirausaha pelajar, komunitas wirausaha, entrepreneur muda, wpi indonesia')
@section('og_title', 'Wirausaha Pelajar Indonesia')
@section('og_description', 'Jadilah bagian dari jaringan wirausaha pelajar terbesar di Indonesia')
@section('og_image', asset('images/hero.jpg'))

@section('content')

{{-- HERO SECTION --}}
<section class="hero" style="background-image:url('{{ asset('images/hero.jpg') }}')">
    <div class="hero-overlay">
        <div class="hero-content">
            <h1>Jadilah Bagian dari Jaringan Wirausaha Pelajar Terbesar melalui WPI dan Raih Kesuksesan Bersama!</h1>
            <p>Gabung Sekarang untuk Kolaborasi, Peluang, dan Pertumbuhan Bisnis Anda</p>
            <a href="#" class="btn-hero">Bergabung Sekarang</a>
        </div>
    </div>
    
    {{-- Navigation Dots --}}
    <div class="hero-dots">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</section>

{{-- STATS SECTION --}}
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-number">10+</div>
                <div class="stat-label">Tahun</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">15</div>
                <div class="stat-label">Cabang</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">5000+</div>
                <div class="stat-label">Anggota</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">200</div>
                <div class="stat-label">Pengurus Inti</div>
            </div>
        </div>
    </div>
</section>

{{-- ABOUT SECTION --}}
<section class="about-section">
    <div class="container">
        <div class="about-grid">
            <div class="about-image">
                <img src="{{ asset('images/about.jpg') }}" alt="WPI">
            </div>
            <div class="about-content">
                <h2>Menginspirasi & Menjadi Penggerak Masa Depan Wirausaha Pelajar Indonesia</h2>
                <p>Wirausaha Pelajar Indonesia (WPI) adalah wadah dinamis bagi para pelajar dan mahasiswa yang ingin berkembang, berinovasi, hingga berkontribusi dalam membangun perekonomian bangsa. Dengan semangat kolaborasi, WPI tidak hanya membangun jaringan bisnis, tetapi juga menciptakan ruang bagi pertumbuhan wirausaha baru yang berdaya saing tinggi.</p>
                <p>Sebagai komunitas yang solid, WPI menyediakan berbagai program dan jaringan strategis untuk membantu anggotanya mencapai kesuksesan. Mulai dari pelatihan, akses ke pasar, hingga kolaborasi dengan pemerintah dan sektor swasta, kami berkomitmen untuk menciptakan ekosistem bisnis yang mendukung pertumbuhan dan keberlanjutan usaha. Gabung bersama kami dan jadilah bagian dari perubahan!</p>
            </div>
        </div>
    </div>
</section>

{{-- NEWS SECTION --}}
<section class="news-section">
    <div class="container">
        <div class="section-header">
            <h2>Berita, Cerita, Semua tentang WPI</h2>
            <a href="#" class="link-more">Selengkapnya >></a>
        </div>
        
        <div class="news-grid">
            <div class="news-card">
                <div class="news-image">
                    <img src="{{ asset('images/news1.jpg') }}" alt="Berita 1">
                </div>
                <div class="news-content">
                    <span class="news-category">Berita</span>
                    <h3>WPI Gelar Pelatihan Kewirausahaan untuk Pelajar Se-Indonesia</h3>
                    <p class="news-author">Administrator</p>
                    <p class="news-excerpt">Wirausaha Pelajar Indonesia menggelar pelatihan kewirausahaan yang diikuti oleh ratusan pelajar dari berbagai daerah...</p>
                    <a href="#" class="news-link">Lihat</a>
                </div>
            </div>

            <div class="news-card">
                <div class="news-image">
                    <img src="{{ asset('images/news2.jpg') }}" alt="Berita 2">
                </div>
                <div class="news-content">
                    <span class="news-category">Berita</span>
                    <h3>Kolaborasi WPI dengan Kementerian Pendidikan untuk Program Inkubasi Bisnis</h3>
                    <p class="news-author">Administrator</p>
                    <p class="news-excerpt">WPI menjalin kerja sama strategis dengan Kementerian Pendidikan dalam mengembangkan program inkubasi bisnis...</p>
                    <a href="#" class="news-link">Lihat</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- BENEFITS SECTION --}}
<section class="benefits-section">
    <div class="container">
        <div class="benefits-header">
            <h2>Temukan beragam manfaat</h2>
            <p>untuk akselerasi langkahmu</p>
        </div>
        
        <div class="benefits-grid">
            <div class="benefit-card">
                <h3>Jaringan Bisnis</h3>
                <p>Akses ke komunitas wirausaha pelajar yang luas di seluruh Indonesia.</p>
            </div>
            
            <div class="benefit-card">
                <h3>Mentoring</h3>
                <p>Bimbingan dari pengusaha dan mentor berpengalaman.</p>
            </div>
            
            <div class="benefit-card">
                <h3>Akses ke Acara & Pelatihan</h3>
                <p>Kesempatan mengikuti seminar dan workshop bisnis eksklusif.</p>
            </div>
            
            <div class="benefit-card">
                <h3>Advokasi & Dukungan</h3>
                <p>Representasi bisnis di forum lokal dan nasional.</p>
            </div>
        </div>
    </div>
</section>

{{-- TESTIMONIAL SECTION --}}
<section class="testimonial-section">
    <div class="container">
        <div class="testimonial-grid">
            <div class="testimonial-image">
                <img src="{{ asset('images/testimonial.jpg') }}" alt="Testimonial">
            </div>
            <div class="testimonial-content">
                <img src="https://md-aqil.github.io/images/quote.png" alt="Quote" class="quote-icon">
                <p class="testimonial-text">"Bergabung dengan WPI telah memberikan akselerasi yang signifikan bagi bisnis saya. Melalui program mentoring dan networking, saya mendapatkan akses ke mitra baru dan peluang pasar yang lebih luas. Selain itu, kolaborasi yang terjalin dengan anggota lain memberikan insight berharga dalam mengembangkan strategi bisnis yang lebih efektif. WPI benar-benar menjadi wadah yang tepat bagi para pelajar yang ingin mengembangkan jiwa kewirausahaan."</p>
                <p class="testimonial-author">Ahmad Rizki Pratama</p>
            </div>
        </div>
    </div>
</section>

{{-- FOOTER --}}
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-about">
                <h3>WPI</h3>
                <p>Wirausaha Pelajar Indonesia adalah komunitas pelajar dan mahasiswa yang berfokus pada pemberdayaan ekonomi, menciptakan kolaborasi antar anggota, dan mendorong inovasi untuk mencapai kesuksesan bersama.</p>
            </div>
            
            <div class="footer-contact">
                <p><strong>Alamat:</strong><br>Jl. Contoh No. 123, Jakarta Pusat</p>
                <p><strong>Phone:</strong> +62 812-3456-7890</p>
                <p><strong>Email:</strong> info@wirausahapelajar.id</p>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2025 Wirausaha Pelajar Indonesia. All Rights Reserved.</p>
        </div>
    </div>
</footer>

@endsection