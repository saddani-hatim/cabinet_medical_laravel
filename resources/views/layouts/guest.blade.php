<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('APP_NAME', 'Système de Gestion de Cabinet') }}</title>

        
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Inter', 'sans-serif'],
                        },
                    }
                }
            }
        </script>
        <style>
            .medical-gradient {
                background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
            }
            .text-gradient {
                background: linear-gradient(135deg, #1d4ed8 0%, #7c3aed 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
            .premium-card {
                background: white;
                border-radius: 1rem;
                box-shadow: 0 6px 24px -10px rgba(15, 23, 42, 0.12), 0 2px 10px -6px rgba(15, 23, 42, 0.08);
            }
            .btn-premium {
                padding: 0.75rem 1.5rem;
                border-radius: 0.9rem;
                font-weight: 700;
                transition: all 0.2s;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#f8fafc] relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-full -z-10 bg-[#f8fafc]">
                <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-blue-100/60 rounded-full blur-[120px]"></div>
                <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-purple-100/70 rounded-full blur-[120px]"></div>
            </div>
            
            <div class="absolute top-6 right-6 flex items-center gap-2 z-10">
                <a href="{{ route('locale.switch', 'fr') }}" class="text-sm font-semibold text-slate-700 hover:text-blue-600 transition-colors">🇫🇷 FR</a>
                <span class="text-slate-400">|</span>
                <a href="{{ route('locale.switch', 'en') }}" class="text-sm font-semibold text-slate-700 hover:text-blue-600 transition-colors">🇺🇸 EN</a>
            </div>
            
            <div class="mb-8">
                <a href="/">
                    <div class="w-20 h-20 medical-gradient rounded-2xl flex items-center justify-center text-white shadow-lg shadow-blue-200/60">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                    </div>
                </a>
            </div>

            <div class="w-full sm:max-w-5xl mt-6 px-6 py-4 premium-card overflow-hidden">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
