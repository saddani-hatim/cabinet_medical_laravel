<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Cabinet Médical') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

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
                background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            }
            .text-gradient {
                background: linear-gradient(135deg, #059669 0%, #047857 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
            .premium-card {
                background: white;
                border-radius: 1rem;
                box-shadow: 0 6px 24px -10px rgba(16, 185, 129, 0.15), 0 2px 10px -6px rgba(16, 185, 129, 0.1);
            }
            .btn-premium {
                padding: 0.75rem 1.5rem;
                border-radius: 0.8rem;
                font-weight: 700;
                transition: all 0.2s;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased bg-[#f0fdf4]">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#f0fdf4] relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-full -z-10">
                <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-emerald-100/60 rounded-full blur-[120px]"></div>
                <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-teal-100/70 rounded-full blur-[120px]"></div>
            </div>
            
            <!-- Language and Home Button -->
            <div class="absolute top-6 left-6 right-6 flex items-center justify-between z-10 px-4">
                <a href="/" class="flex items-center gap-2 text-emerald-800 font-extrabold hover:text-emerald-900 transition-colors group bg-white/50 backdrop-blur-sm pr-4 rounded-xl">
                    <div class="w-10 h-10 rounded-xl medical-gradient flex items-center justify-center text-white shadow-sm group-hover:rotate-12 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    </div>
                    <span>{{ __('Back to Home') }}</span>
                </a>

                <div class="flex items-center gap-2 bg-white/50 backdrop-blur-sm px-3 py-1 pb-1.5 rounded-xl border border-emerald-100">
                    <a href="{{ route('locale.switch', 'fr') }}" class="text-sm font-bold text-emerald-800 hover:text-teal-600 transition-colors uppercase">FR</a>
                    <span class="text-emerald-200">|</span>
                    <a href="{{ route('locale.switch', 'en') }}" class="text-sm font-bold text-emerald-800 hover:text-teal-600 transition-colors uppercase">EN</a>
                </div>
            </div>
            
            <div class="mb-4 mt-20 sm:mt-0">
                <a href="/">
                    <div class="w-16 h-16 medical-gradient rounded-2xl flex items-center justify-center text-white shadow-lg shadow-emerald-200/60 transition-transform hover:scale-105">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                    </div>
                </a>
            </div>

            <div class="w-full sm:max-w-5xl mt-6 px-6 py-4">
                <div class="premium-card overflow-hidden bg-white shadow-2xl">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
