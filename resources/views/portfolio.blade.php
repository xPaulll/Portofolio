<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Portofolio - Fariz')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Tailwind via CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        accent: '#f97316',
                        accentSoft: '#fed7aa',
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                        display: ['Instrument Sans', 'system-ui', 'sans-serif'],
                    },
                },
            },
        }
    </script>

    <style>
        .scrollbar-thin::-webkit-scrollbar {
            width: 4px;
            height: 4px;
        }
        .scrollbar-thin::-webkit-scrollbar-thumb {
            background-color: #4b5563;
            border-radius: 9999px;
        }
    </style>
</head>
<body class="min-h-screen bg-[#050509] text-zinc-100 font-sans antialiased">

    {{-- Background --}}
    <div class="fixed inset-0 -z-10 bg-gradient-to-br from-black via-[#050509] to-zinc-900"></div>
    <div class="fixed inset-0 -z-10 opacity-30 bg-[radial-gradient(circle_at_top,_#f97316_0,_transparent_55%)]"></div>

    <div class="max-w-6xl mx-auto px-4 md:px-6 py-6 md:py-10 flex flex-col md:flex-row gap-8 md:gap-10">

        {{-- SIDEBAR --}}
        <aside class="md:w-72 flex-shrink-0">
            <div class="border border-zinc-800/80 bg-zinc-950/70 rounded-2xl p-5 md:p-6 backdrop-blur-sm">
                <div class="flex items-center gap-3 mb-4">
                    <div
                        class="w-11 h-11 rounded-2xl bg-gradient-to-tr from-accent to-orange-600 flex items-center justify-center text-sm font-bold text-black">
                        FZ
                    </div>
                    <div>
                        <p class="text-xs uppercase tracking-[0.25em] text-zinc-400">Portfolio</p>
                        <p class="font-semibold text-sm">Fariz Al-Fadh</p>
                    </div>
                </div>

                <p class="text-xs text-zinc-400 mb-4">
                    Software / Automation Engineer yang fokus pada integrasi
                    <span class="text-zinc-100 font-medium">PLC, SCADA, dan IoT</span> untuk sistem industri modern.
                </p>

                <div class="space-y-2 text-xs mb-5">
                    <div class="flex items-center justify-between">
                        <span class="text-zinc-500">Domisili</span>
                        <span class="text-zinc-200 font-medium">Kota Bandung / Jawa Barat</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-zinc-500">Preferensi</span>
                        <span class="text-zinc-200 font-medium">Remote / Hybrid</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-zinc-500">Status</span>
                        <span class="flex items-center gap-1 text-emerald-400 font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                            Available
                        </span>
                    </div>
                </div>

                {{-- NAV antar halaman --}}
                <nav class="border-t border-zinc-800 pt-4 mt-4 space-y-1 text-sm">
                    <a href="{{ route('about') }}"
                       class="block py-1 {{ request()->routeIs('about') ? 'text-accent' : 'text-zinc-300 hover:text-accent' }} transition-colors">
                        Tentang
                    </a>
                    <a href="{{ route('skills') }}"
                       class="block py-1 {{ request()->routeIs('skills') ? 'text-accent' : 'text-zinc-300 hover:text-accent' }} transition-colors">
                        Keahlian
                    </a>
                    <a href="{{ route('projects') }}"
                       class="block py-1 {{ request()->routeIs('projects') ? 'text-accent' : 'text-zinc-300 hover:text-accent' }} transition-colors">
                        Proyek
                    </a>
                    <a href="{{ route('contact') }}"
                       class="block py-1 {{ request()->routeIs('contact') ? 'text-accent' : 'text-zinc-300 hover:text-accent' }} transition-colors">
                        Kontak
                    </a>
                    <a href="{{ route('chat.admin') }}"
                       class="block py-1 {{ request()->routeIs('chat.admin') ? 'text-accent' : 'text-zinc-300 hover:text-accent' }} transition-colors">
                        Obrolan (Beta Testing)
                    </a>
                </nav>
                
                {{-- FOOTER --}}
                <nav class="border-t border-zinc-800 pt-4 mt-4 space-y-1 text-sm">
                  
                        <p class="text-center mb-2">
                            &copy; {{ date('Y') }} Fariz Al-Fadh. All rights reserved.
                        </p>
                    
                </nav>
            </div>
        </aside>
        {{-- KONTEN HALAMAN --}}
        <main class="flex-1 space-y-8 md:space-y-10">
            @yield('content')
        </main>
    </div>

</body>
</html>