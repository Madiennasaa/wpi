<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Wirausaha Pelajar Indonesia')</title>

    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('og_title')">
    <meta property="og:description" content="@yield('og_description')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image')">

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>

    {{-- NAVBAR --}}
    <header class="navbar">
        <div class="container nav-wrapper">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="WPI">
                </a>
            </div>

            <button class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <nav class="nav-menu" id="navMenu">
                <a href="/">Beranda</a>
                <a href="#">Tentang Kami</a>
                <a href="#">Berita & Kegiatan</a>
                <a href="#">Anggota</a>
                <a href="#">Galeri</a>
                <a href="#">Kontak</a>
                <a href="#" class="btn-join">Gabung</a>
            </nav>
        </div>
    </header>

    @yield('content')

    <script>
        // Mobile menu toggle
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('navMenu');

        hamburger.addEventListener('click', function() {
            this.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            const isClickInsideNav = navMenu.contains(event.target);
            const isClickOnHamburger = hamburger.contains(event.target);

            if (!isClickInsideNav && !isClickOnHamburger && navMenu.classList.contains('active')) {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            }
        });
    </script>

</body>
</html>