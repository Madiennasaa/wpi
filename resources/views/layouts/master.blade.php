<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Wirausaha Pelajar Indonesia')</title>

    <meta name="description"
        content="@yield('meta_description', 'Wirausaha Pelajar Indonesia adalah organisasi pelajar wirausaha di Indonesia')">

    <meta name="keywords"
        content="@yield('meta_keywords', 'WPI, wirausaha pelajar, pelajar indonesia')">

    {{-- Open Graph --}}
    <meta property="og:title"
        content="@yield('og_title', 'Wirausaha Pelajar Indonesia')">

    <meta property="og:description"
        content="@yield('og_description', 'Organisasi pelajar wirausaha Indonesia')">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    <meta property="og:image"
        content="@yield('og_image', asset('images/og-default.jpg'))">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;800&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'tosca-50': '#f0fdfc',
                        'tosca-100': '#ccfbf6',
                        'tosca-200': '#99f6ea',
                        'tosca-300': '#5eead4',
                        'tosca-400': '#2dd4bf',
                        'tosca-500': '#14b8a6',
                        'tosca-600': '#0d9488',
                        'tosca-700': '#0f766e',
                        'tosca-800': '#115e59',
                        'tosca-900': '#134e4a',
                        
                        'yellow-50': '#fefce8',
                        'yellow-100': '#fef9c3',
                        'yellow-200': '#fef08a',
                        'yellow-300': '#fde047',
                        'yellow-400': '#facc15',
                        'yellow-500': '#eab308',
                        'yellow-600': '#ca8a04',
                    },
                    fontFamily: {
                        'display': ['Playfair Display', 'Georgia', 'serif'],
                        'sans': ['DM Sans', '-apple-system', 'BlinkMacSystemFont', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <style>
        * {
            font-family: 'DM Sans', -apple-system, BlinkMacSystemFont, sans-serif;
        }
        
        .font-display {
            font-family: 'Playfair Display', Georgia, serif;
        }
        
        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }
        
        /* Navbar Backdrop Blur */
        .navbar-blur {
            backdrop-filter: blur(12px);
            background: rgba(15, 118, 110, 0.95);
        }
        
        /* Update pada bagian Dropdown Animation */
        .dropdown-menu {
            display: block;
            pointer-events: none;
            transform: translateY(-10px);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            opacity: 0;
            visibility: hidden;
        }

        .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
            pointer-events: auto;
        }
                
        /* Mobile Menu Slide */
        .mobile-menu {
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            transform: translateX(100%);
        }

        .mobile-menu.active {
            transform: translateX(0) !important;
        }
        
        /* Hamburger Animation */
        .hamburger span {
            transition: all 0.3s ease;
        }
        
        .hamburger.active span:nth-child(1) {
            transform: rotate(-45deg) translate(-5px, 6px);
        }
        
        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }
        
        .hamburger.active span:nth-child(3) {
            transform: rotate(45deg) translate(-5px, -6px);
        }
        
        /* Smooth Link Hover & Active State */
        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: #facc15;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .nav-link.active::after {
            width: 100%;
            background: #facc15;
        }
        
        .nav-link.active {
            color: #fde047;
        }
        
        /* Dropdown Active State */
        .dropdown.active > a {
            color: #fde047;
        }
        
        .dropdown.active > a::after {
            width: 100%;
            background: #facc15;
        }
        
        /* Social Icon Hover */
        .social-icon {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .social-icon:hover {
            transform: translateY(-3px);
        }
        
        /* Join Button Glow */
        .btn-join {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .btn-join::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }
        
        .btn-join:hover::before {
            width: 300px;
            height: 300px;
        }
        
        .btn-join:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(250, 204, 21, 0.4);
        }
        
        /* Dropdown Item Hover */
        .dropdown-item {
            position: relative;
            transition: all 0.3s ease;
        }
        
        .dropdown-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background: #facc15;
            transform: scaleY(0);
            transition: transform 0.3s ease;
        }
        
        .dropdown-item:hover::before {
            transform: scaleY(1);
        }
        
        .dropdown-item:hover {
            padding-left: 1.75rem;
            background: rgba(13, 148, 136, 0.3);
        }
        
        /* Mobile Dropdown */
        .mobile-dropdown-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .mobile-dropdown-content.active {
            max-height: 500px;
        }
        
        .mobile-dropdown-toggle svg {
            transition: transform 0.3s ease;
        }
        
        .mobile-dropdown-toggle.active svg {
            transform: rotate(180deg);
        }

        /* ===== LOADING SPINNER STYLES ===== */
        .page-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(15, 118, 110, 0.98);
            backdrop-filter: blur(10px);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .page-loader.active {
            opacity: 1;
            visibility: visible;
        }

        /* Spinner Container */
        .spinner-container {
            position: relative;
            width: 120px;
            height: 120px;
        }

        /* Outer Ring */
        .spinner-ring {
            position: absolute;
            width: 100%;
            height: 100%;
            border: 4px solid transparent;
            border-top-color: #facc15;
            border-right-color: #facc15;
            border-radius: 50%;
            animation: spin 1.5s cubic-bezier(0.68, -0.55, 0.265, 1.55) infinite;
        }

        /* Middle Ring */
        .spinner-ring-2 {
            position: absolute;
            width: 80%;
            height: 80%;
            top: 10%;
            left: 10%;
            border: 4px solid transparent;
            border-bottom-color: #5eead4;
            border-left-color: #5eead4;
            border-radius: 50%;
            animation: spin 2s cubic-bezier(0.68, -0.55, 0.265, 1.55) infinite reverse;
        }

        /* Inner Ring */
        .spinner-ring-3 {
            position: absolute;
            width: 60%;
            height: 60%;
            top: 20%;
            left: 20%;
            border: 3px solid transparent;
            border-top-color: #fff;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        /* Center Dot */
        .spinner-dot {
            position: absolute;
            width: 20px;
            height: 20px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: linear-gradient(135deg, #facc15, #fde047);
            border-radius: 50%;
            animation: pulse 1.5s ease-in-out infinite;
            box-shadow: 0 0 20px rgba(250, 204, 21, 0.6);
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes pulse {
            0%, 100% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 1;
            }
            50% {
                transform: translate(-50%, -50%) scale(1.3);
                opacity: 0.7;
            }
        }

        /* Loading Text */
        .loading-text {
            margin-top: 40px;
            color: #fff;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            animation: fadeInOut 2s ease-in-out infinite;
        }

        .loading-subtext {
            margin-top: 10px;
            color: #5eead4;
            font-size: 14px;
            font-weight: 400;
            animation: fadeInOut 2s ease-in-out infinite 0.5s;
        }

        @keyframes fadeInOut {
            0%, 100% {
                opacity: 0.5;
            }
            50% {
                opacity: 1;
            }
        }

        /* Logo Animation */
        .loading-logo {
            width: 60px;
            height: 60px;
            margin-bottom: 20px;
            animation: float 3s ease-in-out infinite;
            filter: drop-shadow(0 0 20px rgba(250, 204, 21, 0.5));
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        /* Progress Bar */
        .loading-progress {
            width: 200px;
            height: 3px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            margin-top: 30px;
            overflow: hidden;
            position: relative;
        }

        .loading-progress-bar {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 0;
            background: linear-gradient(90deg, #facc15, #fde047, #facc15);
            background-size: 200% 100%;
            border-radius: 10px;
            animation: progressLoad 2s ease-in-out forwards, shimmer 1.5s linear infinite;
            box-shadow: 0 0 10px rgba(250, 204, 21, 0.5);
        }

        @keyframes progressLoad {
            0% {
                width: 0;
            }
            100% {
                width: 100%;
            }
        }

        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }
            100% {
                background-position: 200% 0;
            }
        }
    </style>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    @stack('styles')
</head>
<body class="font-sans text-gray-800 leading-relaxed antialiased">

    {{-- ===== PAGE LOADER ===== --}}
    <div class="page-loader" id="pageLoader">

        <div class="spinner-container">
            <div class="spinner-ring"></div>
            <div class="spinner-ring-2"></div>
            <div class="spinner-ring-3"></div>
            <div class="spinner-dot"></div>
        </div>
        
        <div class="loading-text">Memuat Halaman</div>
        <div class="loading-subtext">Mohon tunggu sebentar...</div>
        
        <div class="loading-progress">
            <div class="loading-progress-bar"></div>
        </div>
    </div>

    {{-- NAVBAR --}}
    <header class="navbar-blur shadow-lg sticky top-0 z-50 border-b border-white/10">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                {{-- Logo --}}
                <div class="flex items-center gap-4">
                    <a href="/" class="flex items-center gap-3 group nav-link-trigger">
                        <div class="relative">
                            <img src="{{ asset('images/logo.png') }}" alt="WPI" class="h-14 w-auto transition-transform group-hover:scale-105">
                            <div class="absolute -inset-1 bg-yellow-400 rounded-full blur opacity-0 group-hover:opacity-20 transition-opacity"></div>
                        </div>
                        <div class="hidden lg:block">
                            <span class="block text-white text-sm font-bold uppercase tracking-wide">
                                Wirausaha Pelajar
                            </span>
                            <span class="block text-yellow-300 text-xs font-semibold uppercase tracking-wider">
                                Indonesia
                            </span>
                        </div>
                    </a>
                </div>

                {{-- Hamburger Menu (Mobile) --}}
                <button class="lg:hidden hamburger flex flex-col gap-1.5 p-2" id="hamburger">
                    <span class="w-6 h-0.5 bg-white rounded-full"></span>
                    <span class="w-6 h-0.5 bg-white rounded-full"></span>
                    <span class="w-6 h-0.5 bg-white rounded-full"></span>
                </button>

                {{-- Desktop Navigation --}}
                <nav class="hidden lg:flex flex-1 items-center justify-center gap-8 mx-8">
                    {{-- Dropdown: Tentang Kami --}}
                    <div class="relative dropdown group py-4 {{ request()->is('sejarah', 'struktur', 'visi-misi', 'tugas-fungsi', 'program', 'tujuan') ? 'active' : '' }}">
                        <a href="/" class="nav-link flex items-center gap-2 text-white font-semibold text-sm {{ request()->is('sejarah', 'struktur', 'visi-misi', 'tugas-fungsi', 'program', 'tujuan') ? 'active' : '' }}">
                            Tentang Kami
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </a>
                        
                        {{-- Menu Dropdown --}}
                        <div class="dropdown-menu absolute top-full left-0 min-w-[220px] bg-tosca-800 rounded-xl shadow-2xl border border-white/10 overflow-hidden">
                            <a href="/sejarah" class="dropdown-item block px-5 py-3 text-white text-sm first:rounded-t-xl nav-link-trigger">Sejarah</a>
                            <a href="/struktur" class="dropdown-item block px-5 py-3 text-white text-sm nav-link-trigger">Struktur Organisasi</a>
                            <a href="/visi-misi" class="dropdown-item block px-5 py-3 text-white text-sm nav-link-trigger">Visi dan Misi</a>
                            <a href="/tugas-fungsi" class="dropdown-item block px-5 py-3 text-white text-sm nav-link-trigger">Tugas dan Fungsi</a>
                            <a href="/program" class="dropdown-item block px-5 py-3 text-white text-sm nav-link-trigger">Program WPI</a>
                            <a href="/tujuan" class="dropdown-item block px-5 py-3 text-white text-sm last:rounded-b-xl nav-link-trigger">Tujuan WPI</a>
                        </div>
                    </div>
                    
                    {{-- Dropdown: Berita & Kegiatan --}}
                    <div class="relative dropdown group py-4 {{ request()->routeIs('berita.*', 'kegiatan.*', 'artikel.*') ? 'active' : '' }}">
                        <a href="#" class="nav-link flex items-center gap-2 text-white font-semibold text-sm {{ request()->routeIs('berita.*', 'kegiatan.*', 'artikel.*') ? 'active' : '' }}">
                            Berita & Kegiatan
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </a>
                        
                        <div class="dropdown-menu absolute top-full left-0 min-w-[220px] bg-tosca-800 rounded-xl shadow-2xl border border-white/10 overflow-hidden">
                            <a href="{{ route('berita.index') }}" class="dropdown-item block px-5 py-3 text-white text-sm first:rounded-t-xl nav-link-trigger">Berita</a>
                            <a href="{{ route('kegiatan.index') }}" class="dropdown-item block px-5 py-3 text-white text-sm last:rounded-b-xl nav-link-trigger">Kegiatan</a>
                        </div>
                    </div>
                    
                    <a href="/kontak" class="nav-link nav-link-trigger text-white font-semibold text-sm py-2 {{ request()->is('kontak') ? 'active' : '' }}">Kontak</a>
                </nav>

                {{-- Right Side: Social & CTA --}}
                <div class="hidden lg:flex items-center gap-6">
                    {{-- Social Icons --}}
                    <div class="flex items-center gap-3">
                        <a href="https://www.facebook.com/wirausahapelajarindonesia" target="_blank" class="social-icon w-9 h-9 bg-white/10 backdrop-blur-sm rounded-lg flex items-center justify-center text-white hover:bg-yellow-400 hover:text-gray-900 border border-white/20">
                            <i class="fab fa-facebook-f text-sm"></i>
                        </a>
                        <a href="https://www.instagram.com/wirausahapelajar/" target="_blank" class="social-icon w-9 h-9 bg-white/10 backdrop-blur-sm rounded-lg flex items-center justify-center text-white hover:bg-yellow-400 hover:text-gray-900 border border-white/20">
                            <i class="fab fa-instagram text-sm"></i>
                        </a>
                        <a href="https://www.youtube.com/@wirausahapelajarindonesia6565" target="_blank" class="social-icon w-9 h-9 bg-white/10 backdrop-blur-sm rounded-lg flex items-center justify-center text-white hover:bg-yellow-400 hover:text-gray-900 border border-white/20">
                            <i class="fab fa-youtube text-sm"></i>
                        </a>
                    </div>

                    {{-- Join Button --}}
                    <a href="https://wa.me/6285697818910" class="btn-join relative bg-yellow-400 text-gray-900 px-6 py-2.5 rounded-full font-bold text-sm uppercase tracking-wide overflow-hidden">
                        <span class="relative z-10">Join Now</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    {{-- Mobile Menu --}}
    <div class="mobile-menu fixed top-0 right-0 h-full w-full max-w-sm bg-tosca-800 shadow-2xl z-40 transform translate-x-full" id="mobileMenu">
        <div class="flex flex-col h-full">
            {{-- Mobile Menu Header --}}
            <div class="flex items-center justify-between p-6 border-b border-white/10">
                <div>
                    <h3 class="text-white font-bold text-lg">Menu</h3>
                    <p class="text-tosca-200 text-sm">Navigasi WPI</p>
                </div>
                <button class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center text-white hover:bg-white/20 transition-colors" id="closeMenu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            {{-- Mobile Menu Content --}}
            <div class="flex-1 overflow-y-auto py-6">
                {{-- Dropdown: Tentang Kami --}}
                <div class="border-b border-white/10">
                    <button class="mobile-dropdown-toggle w-full flex items-center justify-between px-6 py-4 text-white font-semibold text-sm hover:bg-white/5 transition-colors" data-dropdown="tentang">
                        <span>Tentang Kami</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-content bg-tosca-900/50" id="dropdown-tentang">
                        <a href="/sejarah" class="block px-10 py-3 text-white text-sm hover:bg-white/5 border-l-2 border-transparent hover:border-yellow-400 transition-all nav-link-trigger">Sejarah</a>
                        <a href="/struktur" class="block px-10 py-3 text-white text-sm hover:bg-white/5 border-l-2 border-transparent hover:border-yellow-400 transition-all nav-link-trigger">Struktur Organisasi</a>
                        <a href="/visi-misi" class="block px-10 py-3 text-white text-sm hover:bg-white/5 border-l-2 border-transparent hover:border-yellow-400 transition-all nav-link-trigger">Visi dan Misi</a>
                        <a href="/tugas-fungsi" class="block px-10 py-3 text-white text-sm hover:bg-white/5 border-l-2 border-transparent hover:border-yellow-400 transition-all nav-link-trigger">Tugas dan Fungsi</a>
                        <a href="/program" class="block px-10 py-3 text-white text-sm hover:bg-white/5 border-l-2 border-transparent hover:border-yellow-400 transition-all nav-link-trigger">Program WPI</a>
                        <a href="/tujuan" class="block px-10 py-3 text-white text-sm hover:bg-white/5 border-l-2 border-transparent hover:border-yellow-400 transition-all nav-link-trigger">Tujuan WPI</a>
                    </div>
                </div>

                {{-- Dropdown: Berita & Kegiatan --}}
                <div class="border-b border-white/10">
                    <button class="mobile-dropdown-toggle w-full flex items-center justify-between px-6 py-4 text-white font-semibold text-sm hover:bg-white/5 transition-colors" data-dropdown="berita">
                        <span>Berita & Kegiatan</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-content bg-tosca-900/50" id="dropdown-berita">
                        <a href="{{ route('berita.index') }}" class="block px-10 py-3 text-white text-sm hover:bg-white/5 border-l-2 border-transparent hover:border-yellow-400 transition-all nav-link-trigger">Berita</a>
                        <a href="{{ route('kegiatan.index') }}" class="block px-10 py-3 text-white text-sm hover:bg-white/5 border-l-2 border-transparent hover:border-yellow-400 transition-all nav-link-trigger">Kegiatan</a>
                    </div>
                </div>

                <a href="/kontak" class="block px-6 py-4 text-white font-semibold text-sm hover:bg-white/5 border-b border-white/10 transition-colors nav-link-trigger">Kontak</a>
            </div>

            {{-- Mobile Menu Footer --}}
            <div class="p-6 border-t border-white/10 bg-tosca-900/50">
                {{-- Social Icons --}}
                <div class="flex items-center justify-center gap-3 mb-6">
                    <a href="https://www.facebook.com/wirausahapelajarindonesia" class="w-11 h-11 bg-white/10 rounded-lg flex items-center justify-center text-white hover:bg-yellow-400 hover:text-gray-900 transition-all">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/wirausahapelajar/" class="w-11 h-11 bg-white/10 rounded-lg flex items-center justify-center text-white hover:bg-yellow-400 hover:text-gray-900 transition-all">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.youtube.com/@wirausahapelajarindonesia6565" class="w-11 h-11 bg-white/10 rounded-lg flex items-center justify-center text-white hover:bg-yellow-400 hover:text-gray-900 transition-all">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>

                {{-- Join Button --}}
                <a href="https://wa.me/6285697818910" class="block text-center bg-yellow-400 text-gray-900 px-6 py-3 rounded-full font-bold text-sm uppercase tracking-wide hover:bg-yellow-500 transition-colors">
                    Join Now
                </a>
            </div>
        </div>
    </div>

    {{-- Overlay for Mobile Menu --}}
    <div class="fixed inset-0 bg-black/50 backdrop-blur-sm opacity-0 invisible transition-all duration-300 z-30" id="overlay"></div>

    @yield('content')

    {{-- FOOTER --}}
    <footer class="bg-gray-900 text-white py-16 lg:py-20 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-0 left-0 w-96 h-96 bg-tosca-500 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-yellow-400 rounded-full blur-3xl"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid md:grid-cols-[2fr_1fr_1fr] gap-12 lg:gap-16 mb-12">
                {{-- Column 1 --}}
                <div>
                    <div class="mb-6">
                        <h3 class="font-display text-3xl font-bold text-white mb-2">WPI</h3>
                        <p class="text-tosca-300 font-semibold">Wirausaha Pelajar Indonesia</p>
                    </div>
                    <p class="text-gray-300 leading-relaxed mb-6 text-lg">
                        Komunitas pelajar dan mahasiswa yang berfokus pada pemberdayaan ekonomi, menciptakan kolaborasi antar anggota, dan mendorong inovasi untuk mencapai kesuksesan bersama.
                    </p>
                    <div class="flex gap-4">
                        {{-- Facebook --}}
                        <a href="https://www.facebook.com/wirausahapelajarindonesia"
                        target="_blank"
                        class="social-link w-12 h-12 bg-white/10 backdrop-blur-sm rounded-xl flex items-center justify-center text-white hover:bg-yellow-400 hover:text-gray-900 border border-white/20">
                            <i class="fab fa-facebook-f text-lg"></i>
                        </a>
                        {{-- Instagram --}}
                        <a href="https://www.instagram.com/wirausahapelajar/"
                        target="_blank"
                        class="social-link w-12 h-12 bg-white/10 backdrop-blur-sm rounded-xl flex items-center justify-center text-white hover:bg-yellow-400 hover:text-gray-900 border border-white/20">
                            <i class="fab fa-instagram text-lg"></i>
                        </a>
                        {{-- Twitter / X --}}
                        <a href="https://twitter.com/wirapelajar"
                        target="_blank"
                        class="social-link w-12 h-12 bg-white/10 backdrop-blur-sm rounded-xl flex items-center justify-center text-white hover:bg-yellow-400 hover:text-gray-900 border border-white/20">
                            <i class="fab fa-twitter text-lg"></i>
                        </a>
                        {{-- YouTube --}}
                        <a href="https://www.youtube.com/@wirausahapelajarindonesia6565"
                        target="_blank"
                        class="social-link w-12 h-12 bg-white/10 backdrop-blur-sm rounded-xl flex items-center justify-center text-white hover:bg-yellow-400 hover:text-gray-900 border border-white/20">
                            <i class="fab fa-youtube text-lg"></i>
                        </a>
                        {{-- LinkedIn --}}
                        <a href="https://www.linkedin.com/company/wirausaha-pelajar-indonesia/"
                        target="_blank"
                        class="social-link w-12 h-12 bg-white/10 backdrop-blur-sm rounded-xl flex items-center justify-center text-white hover:bg-yellow-400 hover:text-gray-900 border border-white/20">
                            <i class="fab fa-linkedin-in text-lg"></i>
                        </a>
                    </div>
                </div>
                
                {{-- Column 2 --}}
                <div>
                    <h4 class="text-yellow-400 font-bold text-lg mb-6 uppercase tracking-wider">Kontak</h4>
                    <div class="space-y-4 text-gray-300">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-tosca-400 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <p>Jl. Contoh No. 123,<br>Jakarta Pusat</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-tosca-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <p>+62 856-9781-8910</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-tosca-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <p>Info.wpi.pusat@gmail.com</p>
                        </div>
                    </div>
                </div>
                
                {{-- Column 3 --}}
                <div>
                    <h4 class="text-yellow-400 font-bold text-lg mb-6 uppercase tracking-wider">Quick Links</h4>
                    <ul class="space-y-3 text-gray-300">
                        <li><a href="/" class="hover:text-yellow-400 transition-colors inline-flex items-center gap-2 group nav-link-trigger">
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                            Tentang Kami
                        </a></li>
                        <li><a href="/program" class="hover:text-yellow-400 transition-colors inline-flex items-center gap-2 group nav-link-trigger">
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                            Program
                        </a></li>
                        <li><a href="{{ route('berita.index') }}" class="hover:text-yellow-400 transition-colors inline-flex items-center gap-2 group nav-link-trigger">
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                            Berita
                        </a></li>
                        <li><a href="{{ route('kegiatan.index') }}" class="hover:text-yellow-400 transition-colors inline-flex items-center gap-2 group nav-link-trigger">
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                            Kegiatan
                        </a></li>
                        <li><a href="/kontak" class="hover:text-yellow-400 transition-colors inline-flex items-center gap-2 group nav-link-trigger">
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                            Kontak
                        </a></li>
                    </ul>
                </div>
            </div>
            
            <div class="pt-8 border-t border-white/10 text-center">
                <p class="text-gray-400">
                    &copy; 2026 <span class="text-yellow-400 font-semibold">Wirausaha Pelajar Indonesia</span>. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // ===== LOADING FUNCTIONALITY =====
        const pageLoader = document.getElementById('pageLoader');

        // 1. Sembunyikan loader setelah halaman selesai dimuat
        window.addEventListener('load', function() {
            setTimeout(function() {
                pageLoader.classList.remove('active');
            }, 500);
        });

        // 2. Terapkan loader ke SEMUA link (<a>) secara otomatis
        document.addEventListener('click', function(e) {
            // Cari apakah elemen yang diklik adalah link atau berada di dalam link
            const link = e.target.closest('a');
            
            if (!link) return;

            const href = link.getAttribute('href');
            const target = link.getAttribute('target');

            // Validasi: Jangan munculkan spinner jika:
            // - Link menuju ID internal (contoh: href="#section")
            // - Link adalah tel: atau mailto:
            // - Link dibuka di tab baru (target="_blank")
            // - Link tidak memiliki href
            if (
                !href || 
                href.startsWith('#') || 
                href.startsWith('javascript:void(0)') ||
                href.startsWith('tel:') || 
                href.startsWith('mailto:') ||
                target === '_blank' ||
                e.ctrlKey || 
                e.metaKey
            ) {
                return;
            }

            // Tampilkan loader
            pageLoader.classList.add('active');
        });

        // 3. Pastikan loader hilang jika user menekan tombol "Back" di browser
        window.addEventListener('pageshow', function(event) {
            if (event.persisted) {
                pageLoader.classList.remove('active');
            }
        });

        // ===== MOBILE MENU FUNCTIONALITY =====
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');
        const closeMenu = document.getElementById('closeMenu');
        const overlay = document.getElementById('overlay');

        function openMobileMenu() {
            mobileMenu.classList.add('active');
            overlay.classList.remove('invisible', 'opacity-0');
            overlay.classList.add('visible', 'opacity-100');
            hamburger.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeMobileMenu() {
            mobileMenu.classList.remove('active');
            overlay.classList.add('invisible', 'opacity-0');
            overlay.classList.remove('visible', 'opacity-100');
            hamburger.classList.remove('active');
            document.body.style.overflow = '';
        }

        hamburger.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            if (mobileMenu.classList.contains('active')) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        });

        closeMenu.addEventListener('click', closeMobileMenu);
        overlay.addEventListener('click', closeMobileMenu);

        const mobileLinks = mobileMenu.querySelectorAll('a:not(.mobile-dropdown-toggle)');
        mobileLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                setTimeout(closeMobileMenu, 100);
            });
        });

        const dropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
        dropdownToggles.forEach(toggle => {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation(); 
                
                const dropdownId = this.getAttribute('data-dropdown');
                const dropdownContent = document.getElementById(`dropdown-${dropdownId}`);
                
                this.classList.toggle('active');
                
                if (dropdownContent) {
                    dropdownContent.classList.toggle('active');
                }
            });
        });
    </script>

    @stack('scripts')
</body>
</html>