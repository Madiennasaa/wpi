<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | WPI</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
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
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(135deg, #f0fdfa 0%, #fffbeb 100%);
        }
        .gradient-bg {
            background: linear-gradient(135deg, #14b8a6 0%, #f59e0b 100%);
        }
        .input-focus:focus {
            border-color: #14b8a6;
            box-shadow: 0 0 0 3px rgba(20, 184, 166, 0.1);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
    
    <!-- Floating Decorations -->
    <div class="fixed top-10 left-10 w-20 h-20 bg-tosca-200/30 rounded-full blur-3xl"></div>
    <div class="fixed bottom-10 right-10 w-32 h-32 bg-sunshine-200/30 rounded-full blur-3xl"></div>
    <div class="fixed top-1/2 right-1/4 w-24 h-24 bg-tosca-300/20 rounded-full blur-2xl"></div>

    <div class="w-full max-w-md relative z-10">
        <!-- Logo & Welcome -->
        <div class="text-center mb-8">
            <div class="inline-block w-20 h-20 gradient-bg rounded-2xl flex items-center justify-center text-white font-bold text-2xl mb-4 shadow-2xl transform hover:scale-110 transition-transform duration-300">
                WPI
            </div>
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Admin Panel</h1>
            <p class="text-gray-600">Wirausaha Pelajar Indonesia</p>
        </div>

        <!-- Login Card -->
        <div class="bg-white rounded-2xl shadow-2xl p-8 backdrop-blur-sm border border-gray-100">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Login ke Dashboard</h2>
            
            <form action="{{ url('login') }}" method="POST" class="space-y-5">
                @csrf
                
                <!-- Email Field -->
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">
                        <i class="fa-solid fa-envelope text-tosca-500 mr-2"></i>Email
                    </label>
                    <input 
                        type="email" 
                        name="email" 
                        class="input-focus w-full px-4 py-3.5 border-2 border-gray-200 rounded-xl focus:outline-none transition-all duration-200"
                        placeholder="admin@wpi.com"
                        required
                    >
                </div>

                <!-- Password Field -->
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">
                        <i class="fa-solid fa-lock text-tosca-500 mr-2"></i>Password
                    </label>
                    <input 
                        type="password" 
                        name="password" 
                        class="input-focus w-full px-4 py-3.5 border-2 border-gray-200 rounded-xl focus:outline-none transition-all duration-200"
                        placeholder="••••••••"
                        required
                    >
                </div>

                <!-- Error Message -->
                @if($errors->any())
                <div class="p-4 bg-red-50 border-l-4 border-red-500 rounded-lg">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-exclamation-circle text-red-500"></i>
                        <p class="text-sm text-red-700 font-medium">{{ $errors->first() }}</p>
                    </div>
                </div>
                @endif

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="w-full gradient-bg text-white py-4 rounded-xl font-bold text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                    <i class="fa-solid fa-right-to-bracket mr-2"></i>Masuk ke Dashboard
                </button>
            </form>

            <!-- Additional Info -->
            <div class="mt-6 pt-6 border-t border-gray-100">
                <p class="text-center text-sm text-gray-500">
                    <i class="fa-solid fa-shield-halved text-tosca-500"></i>
                    Area khusus administrator
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center mt-8 text-gray-600">
            <p class="text-sm">&copy; {{ date('Y') }} Wirausaha Pelajar Indonesia</p>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</body>
</html>