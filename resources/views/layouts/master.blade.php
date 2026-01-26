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

    {{-- Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1a9b8a',
                        'primary-dark': '#157d71',
                        'primary-darker': '#0f7d73',
                        secondary: '#FFD54F',
                        'secondary-light': '#FFEB99',
                        accent: '#2DBFB8',
                        'accent-dark': '#25A8A2',
                        navy: '#1434A4',
                        'navy-dark': '#0d1b4d',
                        gold: '#F3C43D',
                    }
                }
            }
        }
    </script>
    <style>
        @layer utilities {
            .bg-gradient-visi {
                background: linear-gradient(135deg, #1a9b8a 0%, #157d71 100%);
            }
            .bg-gradient-footer {
                background: linear-gradient(135deg, #0d1b4d 0%, #1434A4 50%, #0a2d5c 100%);
            }
            .bg-gradient-benefits {
                background: linear-gradient(135deg, #1434A4 0%, #2DBFB8 100%);
            }
            .bg-gradient-testimonial {
                background: linear-gradient(135deg, rgba(20, 52, 164, 0.05) 0%, rgba(45, 191, 184, 0.08) 50%, rgba(243, 196, 61, 0.05) 100%);
            }
            .text-gradient {
                background: linear-gradient(135deg, #1434A4 0%, #2DBFB8 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="font-sans text-gray-800 leading-relaxed">

    {{-- NAVBAR --}}
    <header class="bg-primary shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-3">
                <div class="flex items-center gap-4">
                    <a href="/" class="flex items-center gap-4">
                        <img src="{{ asset('images/logo.png') }}" alt="WPI" class="h-14 w-auto">
                        <span class="hidden lg:block text-white text-xs font-bold uppercase leading-tight max-w-[150px]">
                            WIRAUSAHA PELAJAR INDONESIA
                        </span>
                    </a>
                </div>

                <button class="lg:hidden flex flex-col p-1 gap-1" id="hamburger">
                    <span class="w-6 h-0.5 bg-white rounded transition-all duration-300"></span>
                    <span class="w-6 h-0.5 bg-white rounded transition-all duration-300"></span>
                    <span class="w-6 h-0.5 bg-white rounded transition-all duration-300"></span>
                </button>

                <nav class="hidden lg:flex flex-1 items-center justify-center gap-8 mx-8" id="navMenu">
                    <div class="relative group dropdown">
                        <a href="#" class="flex items-center gap-2 text-white font-medium text-sm hover:text-secondary transition-colors dropdown-toggle">
                            Tentang Kami
                            <span class="text-xs group-hover:rotate-180 transition-transform duration-300">▼</span>
                        </a>
                        <div class="absolute top-full left-0 mt-2 min-w-[200px] bg-primary-dark rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 dropdown-menu">
                            <a href="#" class="block px-5 py-3 text-white text-sm hover:bg-primary hover:pl-6 transition-all border-l-3 border-transparent hover:border-secondary first:rounded-t-lg last:rounded-b-lg">Sejarah</a>
                            <a href="#" class="block px-5 py-3 text-white text-sm hover:bg-primary hover:pl-6 transition-all border-l-3 border-transparent hover:border-secondary">Struktur Organisasi</a>
                            <a href="#" class="block px-5 py-3 text-white text-sm hover:bg-primary hover:pl-6 transition-all border-l-3 border-transparent hover:border-secondary">Visi dan Misi</a>
                            <a href="#" class="block px-5 py-3 text-white text-sm hover:bg-primary hover:pl-6 transition-all border-l-3 border-transparent hover:border-secondary">Tugas dan Fungsi</a>
                            <a href="#" class="block px-5 py-3 text-white text-sm hover:bg-primary hover:pl-6 transition-all border-l-3 border-transparent hover:border-secondary">Program WPI</a>
                            <a href="#" class="block px-5 py-3 text-white text-sm hover:bg-primary hover:pl-6 transition-all border-l-3 border-transparent hover:border-secondary last:rounded-b-lg">Tujuan WPI</a>
                        </div>
                    </div>
                    <a href="#" class="text-white font-medium text-sm hover:text-secondary transition-colors">Berita dan Kegiatan</a>
                    <a href="#" class="text-white font-medium text-sm hover:text-secondary transition-colors">Kontak</a>
                </nav>

                <div class="hidden lg:flex items-center gap-4">
                    <div class="flex items-center gap-3 mr-2">
                        <a href="https://instagram.com" target="_blank" class="text-white w-7 h-7 flex items-center justify-center hover:bg-secondary/20 hover:text-secondary rounded transition-all hover:-translate-y-0.5">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12c0-3.403 2.759-6.162 6.162-6.162 3.403 0 6.162 2.759 6.162 6.162 0 3.403-2.759 6.162-6.162 6.162-3.403 0-6.162-2.759-6.162-6.162zm2.988 0c0 1.775 1.447 3.224 3.224 3.224 1.775 0 3.224-1.447 3.224-3.224 0-1.773-1.449-3.224-3.224-3.224-1.774 0-3.224 1.451-3.224 3.224zm9.776-6.341c0 .795.645 1.44 1.44 1.44.795 0 1.44-.645 1.44-1.44 0-.795-.645-1.44-1.44-1.44-.795 0-1.44.645-1.44 1.44z"/>
                            </svg>
                        </a>
                        <a href="https://youtube.com" target="_blank" class="text-white w-7 h-7 flex items-center justify-center hover:bg-secondary/20 hover:text-secondary rounded transition-all hover:-translate-y-0.5">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                    </div>

                    <a href="#" class="bg-secondary text-primary px-7 py-2.5 rounded-md font-bold text-xs uppercase transition-all hover:bg-transparent hover:text-secondary border-2 border-secondary hover:shadow-lg hover:shadow-secondary/30">Join Now</a>
                </div>
            </div>

            {{-- Mobile Menu --}}
            <nav class="lg:hidden fixed left-[-100%] top-20 w-full bg-primary-dark shadow-2xl transition-all duration-300 z-40" id="mobileMenu">
                <div class="py-5">
                    <div class="dropdown-mobile">
                        <a href="#" class="block px-6 py-4 text-white font-medium text-sm border-b border-white/10 dropdown-toggle-mobile">
                            Tentang Kami <span class="float-right">▼</span>
                        </a>
                        <div class="dropdown-content-mobile max-h-0 overflow-hidden transition-all duration-300 bg-[#0f8178]">
                            <a href="#" class="block px-8 py-3 text-white text-xs hover:bg-primary">Sejarah</a>
                            <a href="#" class="block px-8 py-3 text-white text-xs hover:bg-primary">Struktur Organisasi</a>
                            <a href="#" class="block px-8 py-3 text-white text-xs hover:bg-primary">Visi dan Misi</a>
                            <a href="#" class="block px-8 py-3 text-white text-xs hover:bg-primary">Tugas dan Fungsi</a>
                            <a href="#" class="block px-8 py-3 text-white text-xs hover:bg-primary">Program WPI</a>
                            <a href="#" class="block px-8 py-3 text-white text-xs hover:bg-primary">Tujuan WPI</a>
                        </div>
                    </div>
                    <a href="#" class="block px-6 py-4 text-white font-medium text-sm border-b border-white/10">Berita dan Kegiatan</a>
                    <a href="#" class="block px-6 py-4 text-white font-medium text-sm border-b border-white/10">Kontak</a>
                    
                    <div class="flex items-center justify-center gap-3 py-4 border-y border-white/10 my-4">
                        <a href="https://instagram.com" class="text-white w-7 h-7 flex items-center justify-center">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12c0-3.403 2.759-6.162 6.162-6.162 3.403 0 6.162 2.759 6.162 6.162 0 3.403-2.759 6.162-6.162 6.162-3.403 0-6.162-2.759-6.162-6.162zm2.988 0c0 1.775 1.447 3.224 3.224 3.224 1.775 0 3.224-1.447 3.224-3.224 0-1.773-1.449-3.224-3.224-3.224-1.774 0-3.224 1.451-3.224 3.224zm9.776-6.341c0 .795.645 1.44 1.44 1.44.795 0 1.44-.645 1.44-1.44 0-.795-.645-1.44-1.44-1.44-.795 0-1.44.645-1.44 1.44z"/>
                            </svg>
                        </a>
                        <a href="https://youtube.com" class="text-white w-7 h-7 flex items-center justify-center">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                    </div>

                    <div class="px-6">
                        <a href="#" class="block text-center bg-secondary text-primary px-7 py-2.5 rounded-md font-bold text-xs uppercase">Join Now</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <script>
        // Mobile menu toggle
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');

        hamburger.addEventListener('click', function() {
            const spans = this.querySelectorAll('span');
            
            if (mobileMenu.style.left === '0px') {
                mobileMenu.style.left = '-100%';
                spans[0].style.transform = 'none';
                spans[1].style.opacity = '1';
                spans[2].style.transform = 'none';
            } else {
                mobileMenu.style.left = '0';
                spans[0].style.transform = 'rotate(-45deg) translate(-5px, 6px)';
                spans[1].style.opacity = '0';
                spans[2].style.transform = 'rotate(45deg) translate(-5px, -6px)';
            }
        });

        // Dropdown menu on mobile
        const dropdownToggleMobile = document.querySelector('.dropdown-toggle-mobile');
        const dropdownContentMobile = document.querySelector('.dropdown-content-mobile');
        
        if (dropdownToggleMobile) {
            dropdownToggleMobile.addEventListener('click', function(e) {
                e.preventDefault();
                if (dropdownContentMobile.style.maxHeight) {
                    dropdownContentMobile.style.maxHeight = null;
                } else {
                    dropdownContentMobile.style.maxHeight = dropdownContentMobile.scrollHeight + 'px';
                }
            });
        }

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            const isClickInsideNav = mobileMenu.contains(event.target);
            const isClickOnHamburger = hamburger.contains(event.target);

            if (!isClickInsideNav && !isClickOnHamburger && mobileMenu.style.left === '0px') {
                mobileMenu.style.left = '-100%';
                const spans = hamburger.querySelectorAll('span');
                spans[0].style.transform = 'none';
                spans[1].style.opacity = '1';
                spans[2].style.transform = 'none';
            }
        });
    </script>

</body>
</html>