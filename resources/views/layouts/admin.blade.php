<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | WPI</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        tosca: {
                            50: '#f0fdfa',
                            100: '#ccfbf1',
                            200: '#99f6e4',
                            300: '#5eead4',
                            400: '#2dd4bf',
                            500: '#14b8a6',
                            600: '#0d9488',
                            700: '#0f766e',
                            800: '#115e59',
                            900: '#134e4a',
                        },
                        sunshine: {
                            50: '#fffbeb',
                            100: '#fef3c7',
                            200: '#fde68a',
                            300: '#fcd34d',
                            400: '#fbbf24',
                            500: '#f59e0b',
                            600: '#d97706',
                            700: '#b45309',
                            800: '#92400e',
                            900: '#78350f',
                        }
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .sidebar-link.active { 
            background: #f0fdfa;
            border-left: 4px solid #14b8a6;
            color: #0f766e;
            font-weight: 600;
        }
    </style>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50" x-data="{ sidebarOpen: false }">
    <div class="flex min-h-screen">
        <!-- Overlay -->
        <div
            x-show="sidebarOpen"
            x-transition.opacity
            @click="sidebarOpen = false"
            class="fixed inset-0 bg-black/40 z-30 lg:hidden">
        </div>
        <aside class="fixed inset-y-0 left-0 z-40 w-72 bg-white shadow-xl border-r border-gray-100 transform transition-transform duration-300 -translate-x-full lg:translate-x-0 lg:static lg:flex flex-col"
            :class="{ 'translate-x-0': sidebarOpen }">
            <!-- Logo Section -->
            <div class="p-6 border-b border-gray-100">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-xl bg-tosca-600 flex items-center justify-center text-white font-bold text-lg shadow-lg">
                        WPI
                    </div>
                    <div>
                        <h1 class="text-lg font-bold text-gray-800">Admin Panel</h1>
                        <p class="text-xs text-gray-500">Wirausaha Pelajar</p>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">
                <p class="px-3 text-xs font-bold text-gray-400 uppercase tracking-wider mb-3">Menu Utama</p>
                
                <a href="{{ route('admin.dashboard') }}" 
                   class="sidebar-link flex items-center gap-3 px-4 py-3.5 rounded-xl hover:bg-gray-50 transition-all group {{ request()->routeIs('admin.dashboard') ? 'active' : 'text-gray-600' }}">
                    <div class="w-10 h-10 rounded-lg bg-tosca-100 flex items-center justify-center text-tosca-600 group-hover:bg-tosca-600 group-hover:text-white transition-all">
                        <i class="fa-solid fa-gauge-high"></i>
                    </div>
                    <span class="font-medium">Dashboard</span>
                </a>

                <a href="{{ route('admin.artikel.index') }}" 
                   class="sidebar-link flex items-center gap-3 px-4 py-3.5 rounded-xl hover:bg-gray-50 transition-all group {{ request()->routeIs('admin.artikel.*') ? 'active' : 'text-gray-600' }}">
                    <div class="w-10 h-10 rounded-lg bg-yellow-100 flex items-center justify-center text-yellow-600 group-hover:bg-yellow-500 group-hover:text-white transition-all">
                        <i class="fa-solid fa-newspaper"></i>
                    </div>
                    <span class="font-medium">Kelola Artikel</span>
                </a>

                <div class="pt-6 pb-3">
                    <p class="px-3 text-xs font-bold text-gray-400 uppercase tracking-wider mb-3">Sistem</p>
                </div>

                <a href="/" target="_blank" class="flex items-center gap-3 px-4 py-3.5 rounded-xl hover:bg-gray-50 transition-all text-gray-600 group">
                    <div class="w-10 h-10 rounded-lg bg-gray-100 flex items-center justify-center text-gray-500 group-hover:bg-gray-600 group-hover:text-white transition-all">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <span class="font-medium">Lihat Website</span>
                </a>

                <form action="{{ route('logout') }}" method="POST" class="w-full">
                    @csrf
                    <button type="submit" class="flex items-center gap-3 px-4 py-3.5 rounded-xl hover:bg-red-50 transition-all text-red-600 w-full group">
                        <div class="w-10 h-10 rounded-lg bg-red-50 flex items-center justify-center text-red-500 group-hover:bg-red-500 group-hover:text-white transition-all">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </div>
                        <span class="font-medium">Logout</span>
                    </button>
                </form>
            </nav>

            <!-- Footer -->
            <div class="p-5 border-t border-gray-100">
                <div class="text-center">
                    <p class="text-xs text-gray-400">&copy; {{ date('Y') }} WPI</p>
                    <p class="text-xs text-gray-500 font-medium mt-1">Wirausaha Pelajar Indonesia</p>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 flex flex-col min-w-0 overflow-hidden">
            <!-- Header -->
            <header class="h-20 bg-white border-b border-gray-100 flex items-center justify-between px-8 sticky top-0 z-10 shadow-sm">
                <div class="lg:hidden">
                    <button
                        @click="sidebarOpen = !sidebarOpen"
                        class="p-2 rounded-lg hover:bg-gray-100">
                        <i class="fa-solid fa-bars text-gray-700"></i>
                    </button>
                </div>

                <div class="hidden lg:block">
                    <h2 class="text-lg font-bold text-tosca-700">
                        @yield('header_title', 'Dashboard')
                    </h2>
                </div>

                <div class="flex items-center gap-4">
                    <div class="text-right hidden sm:block">
                        <p class="text-sm font-bold text-gray-800">{{ auth()->user()->name }}</p>
                        <p class="text-xs text-gray-500">Administrator</p>
                    </div>
                    <div class="w-12 h-12 bg-tosca-600 rounded-xl flex items-center justify-center text-white font-bold text-lg shadow-lg">
                        {{ substr(auth()->user()->name, 0, 1) }}
                    </div>
                </div>
            </header>

            <!-- Content Area -->
            <div class="flex-1 overflow-x-hidden overflow-y-auto p-6 lg:p-10">
                @if(session('success'))
                <div class="mb-6 p-5 bg-tosca-50 border-l-4 border-tosca-600 rounded-xl shadow-sm flex justify-between items-center">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-tosca-600 flex items-center justify-center text-white">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-700">{{ session('success') }}</span>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-gray-400 hover:text-gray-600 text-2xl leading-none">&times;</button>
                </div>
                @endif

                @yield('content')
            </div>
        </main>
    </div>

    @stack('scripts')
</body>
</html>