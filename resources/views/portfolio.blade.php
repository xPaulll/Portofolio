<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'FARIZ_ALFADH // PORTFOLIO')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portofolio Fariz Al-Fadh – Software & Automation Engineer, Industrial IoT Specialist dari Bandung.">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">

    {{-- Google Fonts: JetBrains Mono + Space Grotesk --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- Tailwind via CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary:   '#00FF41',
                        secondary: '#0BBA20',
                        tertiary:  '#FFD6AE',
                        neutral:   '#F5F5F5',
                        term:      '#080c08',
                        panel:     '#0c120c',
                        border:    '#182018',
                        muted:     '#9ab09a',
                        dim:       '#1e281e',
                    },
                    fontFamily: {
                        mono:    ['"JetBrains Mono"', 'monospace'],
                        sans:    ['"Space Grotesk"', 'system-ui', 'sans-serif'],
                    },
                    animation: {
                        'scan':        'scan 8s linear infinite',
                        'blink':       'blink 1s step-end infinite',
                        'flicker':     'flicker 5s ease-in-out infinite',
                        'pulse-neon':  'pulseNeon 2s ease-in-out infinite',
                        'glitch':      'glitch 4s ease-in-out infinite',
                    },
                    keyframes: {
                        scan: {
                            '0%':   { transform: 'translateY(-100vh)' },
                            '100%': { transform: 'translateY(100vh)' },
                        },
                        blink: {
                            '0%, 100%': { opacity: '1' },
                            '50%':      { opacity: '0' },
                        },
                        flicker: {
                            '0%, 98%, 100%': { opacity: '1' },
                            '99%':           { opacity: '0.95' },
                        },
                        pulseNeon: {
                            '0%, 100%': { boxShadow: '0 0 5px #00FF41, 0 0 10px #00FF41' },
                            '50%':      { boxShadow: '0 0 20px #00FF41, 0 0 40px #00FF41, 0 0 60px #00FF41' },
                        },
                        glitch: {
                            '0%, 90%, 100%': { transform: 'translate(0)' },
                            '91%': { transform: 'translate(-2px, 1px)' },
                            '92%': { transform: 'translate(2px, -1px)' },
                            '93%': { transform: 'translate(0)' },
                        },
                    },
                },
            },
        }
    </script>

    <style>
        :root {
            --neon:      #00FF41;
            --neon-sec:  #0BBA20;
            --tertiary:  #FFD6AE;
            --neutral:   #F5F5F5;
            --neon-glow: rgba(0,255,65,0.35);
            --term:      #080c08;
            --panel:     #0c120c;
            --border:    #1a241a;
            --muted:     #9ab09a;
            --dim:       #1e281e;
        }

        *, *::before, *::after { box-sizing: border-box; }

        html { scroll-behavior: smooth; }

        body {
            background: #080c08;
            overflow-x: hidden;
            font-family: 'Space Grotesk', system-ui, sans-serif;
            color: #dce8dc;
        }

        /* ─── Scrollbar ─── */
        ::-webkit-scrollbar { width: 4px; height: 4px; }
        ::-webkit-scrollbar-track { background: #080c08; }
        ::-webkit-scrollbar-thumb { background: var(--neon-sec); }
        ::-webkit-scrollbar-thumb:hover { background: var(--neon); }

        /* ─── CRT Scan line overlay ─── */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            z-index: 9999;
            pointer-events: none;
            background: repeating-linear-gradient(
                0deg,
                transparent,
                transparent 2px,
                rgba(0,0,0,0.06) 2px,
                rgba(0,0,0,0.06) 4px
            );
        }

        /* ─── Moving scan line ─── */
        .scan-line {
            position: fixed;
            top: 0; left: 0; right: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(0,255,65,0.25), transparent);
            z-index: 9998;
            pointer-events: none;
            animation: scan 8s linear infinite;
        }

        /* ─── Grid dot background ─── */
        .grid-bg {
            position: fixed;
            inset: 0;
            z-index: -1;
            background-image:
                linear-gradient(rgba(0,255,65,0.04) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0,255,65,0.04) 1px, transparent 1px);
            background-size: 36px 36px;
        }

        /* ─── Corner accent ─── */
        .corner-accent {
            position: fixed;
            z-index: -1;
            pointer-events: none;
        }
        .corner-accent-tl {
            top: 0; left: 0;
            width: 400px; height: 400px;
            background: radial-gradient(circle at top left, rgba(0,255,65,0.07) 0%, transparent 60%);
        }
        .corner-accent-br {
            bottom: 0; right: 0;
            width: 300px; height: 300px;
            background: radial-gradient(circle at bottom right, rgba(11,186,32,0.05) 0%, transparent 60%);
        }

        /* ─── Terminal Panel ─── */
        .t-panel {
            background: var(--panel);
            border: 1px solid var(--border);
            position: relative;
        }

        .t-panel::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(0,255,65,0.3), transparent);
        }

        .t-panel-hover {
            transition: border-color 0.25s ease, box-shadow 0.25s ease, transform 0.25s ease;
        }
        .t-panel-hover:hover {
            border-color: rgba(0,255,65,0.4);
            box-shadow: 0 0 24px rgba(0,255,65,0.08), 0 8px 32px rgba(0,0,0,0.6);
            transform: translateY(-1px);
        }

        /* ─── Terminal title bar ─── */
        .t-titlebar {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 14px;
            border-bottom: 1px solid var(--border);
            background: rgba(4,8,4,0.7);
        }
        .t-titlebar-dot {
            width: 8px; height: 8px;
            border-radius: 50%;
        }
        .t-titlebar-label {
            font-size: 10px;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: #4a7050;
            margin-left: 4px;
            font-family: 'JetBrains Mono', monospace;
        }

        /* ─── Neon text ─── */
        .neon-text {
            color: var(--neon);
            text-shadow: 0 0 10px rgba(0,255,65,0.7), 0 0 20px rgba(0,255,65,0.3);
        }

        .neon-text-dim {
            color: var(--neon-sec);
        }

        /* ─── Tertiary accent ─── */
        .tertiary-text {
            color: var(--tertiary);
        }

        /* ─── Glitch heading ─── */
        .glitch-text {
            position: relative;
            animation: glitch 4s ease-in-out infinite;
        }

        /* ─── Nav link ─── */
        .nav-link {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 8px 12px;
            font-size: 0.75rem;
            font-weight: 500;
            color: #5a7a5a;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            transition: all 0.2s ease;
            border: 1px solid transparent;
            border-left: 2px solid transparent;
        }
        .nav-link:hover {
            color: var(--neon);
            border-left-color: var(--neon-sec);
            background: rgba(0,255,65,0.05);
        }
        .nav-link.active {
            color: var(--neon);
            border-left-color: var(--neon);
            background: rgba(0,255,65,0.07);
            text-shadow: 0 0 8px rgba(0,255,65,0.4);
        }
        .nav-link .nav-prefix {
            color: #2a4030;
            font-size: 0.65rem;
            font-family: 'JetBrains Mono', monospace;
            letter-spacing: 0;
            font-weight: 400;
        }
        .nav-link.active .nav-prefix {
            color: var(--neon-sec);
        }

        /* ─── Tags ─── */
        .tag {
            display: inline-flex;
            align-items: center;
            padding: 2px 9px;
            font-size: 0.68rem;
            font-family: 'JetBrains Mono', monospace;
            background: rgba(0,255,65,0.07);
            border: 1px solid rgba(0,255,65,0.22);
            color: var(--neon);
            letter-spacing: 0.05em;
            text-transform: uppercase;
            transition: all 0.2s ease;
        }
        .tag:hover {
            background: rgba(0,255,65,0.13);
            border-color: rgba(0,255,65,0.5);
            color: var(--neon);
        }

        /* ─── Tag Tertiary (peach) ─── */
        .tag-tertiary {
            display: inline-flex;
            align-items: center;
            padding: 2px 9px;
            font-size: 0.68rem;
            font-family: 'JetBrains Mono', monospace;
            background: rgba(255,214,174,0.08);
            border: 1px solid rgba(255,214,174,0.25);
            color: #FFD6AE;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            transition: all 0.2s ease;
        }

        .tag-neutral {
            display: inline-flex;
            align-items: center;
            padding: 2px 9px;
            font-size: 0.68rem;
            font-family: 'JetBrains Mono', monospace;
            background: rgba(255,255,255,0.03);
            border: 1px solid #253025;
            color: #7a9a7a;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            transition: all 0.2s ease;
        }
        .tag-neutral:hover {
            border-color: rgba(0,255,65,0.3);
            color: var(--neon);
        }

        /* ─── Btn Primary ─── */
        .btn-neon {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 22px;
            font-family: 'Space Grotesk', sans-serif;
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #000;
            background: var(--neon);
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .btn-neon:hover {
            background: #fff;
            box-shadow: 0 0 20px rgba(0,255,65,0.5);
        }

        .btn-outline {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 22px;
            font-family: 'Space Grotesk', sans-serif;
            font-size: 0.78rem;
            font-weight: 600;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--neon);
            background: transparent;
            border: 1px solid rgba(0,255,65,0.4);
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .btn-outline:hover {
            border-color: var(--neon);
            color: var(--neon);
            background: rgba(0,255,65,0.07);
            box-shadow: 0 0 14px rgba(0,255,65,0.15);
        }

        /* ─── Btn Tertiary (peach) ─── */
        .btn-tertiary {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 22px;
            font-family: 'Space Grotesk', sans-serif;
            font-size: 0.78rem;
            font-weight: 600;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #1a1a1a;
            background: var(--tertiary);
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .btn-tertiary:hover {
            background: #ffe0c0;
            box-shadow: 0 0 16px rgba(255,214,174,0.4);
        }

        /* ─── Prompt prefix ─── */
        .prompt::before {
            content: '> ';
            color: var(--neon-sec);
            opacity: 0.8;
            font-family: 'JetBrains Mono', monospace;
        }

        /* ─── Section label ─── */
        .section-label {
            font-size: 0.65rem;
            letter-spacing: 0.22em;
            text-transform: uppercase;
            color: #3a6040;
            display: flex;
            align-items: center;
            gap: 10px;
            font-family: 'JetBrains Mono', monospace;
        }
        .section-label::after {
            content: '';
            flex: 1;
            height: 1px;
            background: linear-gradient(90deg, var(--border), transparent);
        }

        /* ─── Status indicator ─── */
        .status-online {
            width: 7px; height: 7px;
            border-radius: 50%;
            background: var(--neon);
            box-shadow: 0 0 6px var(--neon), 0 0 12px rgba(0,255,65,0.5);
            animation: pulse-neon 2s ease-in-out infinite;
        }

        /* ─── Divider ─── */
        .t-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, #1a241a, transparent);
            margin: 14px 0;
        }

        /* ─── Fade in ─── */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(16px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .fade-in-up              { animation: fadeInUp 0.5s ease forwards; }
        .fade-in-up-delay-1      { animation-delay: 0.08s; opacity: 0; }
        .fade-in-up-delay-2      { animation-delay: 0.16s; opacity: 0; }
        .fade-in-up-delay-3      { animation-delay: 0.24s; opacity: 0; }
        .fade-in-up-delay-4      { animation-delay: 0.32s; opacity: 0; }

        /* ─── Blink cursor ─── */
        .cursor::after {
            content: '█';
            color: var(--neon);
            animation: blink 1s step-end infinite;
            font-size: 0.8em;
        }

        /* ─── Social btn ─── */
        .social-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 32px; height: 32px;
            border: 1px solid #1a2a1a;
            background: #0c120c;
            color: #4a6050;
            transition: all 0.2s ease;
        }
        .social-btn:hover {
            border-color: rgba(0,255,65,0.4);
            color: var(--neon);
            box-shadow: 0 0 10px rgba(0,255,65,0.2);
        }

        /* ─── Mobile top nav ─── */
        @media (max-width: 767px) {
            .mobile-nav {
                position: fixed;
                top: 0; left: 0; right: 0;
                z-index: 100;
                background: rgba(8,12,8,0.97);
                border-bottom: 1px solid #1a241a;
                display: flex;
                align-items: center;
                padding: 0 12px;
                height: 52px;
                backdrop-filter: blur(20px);
                gap: 4px;
            }
            /* branding di kiri */
            .mobile-nav-brand {
                font-family: 'JetBrains Mono', monospace;
                font-size: 10px;
                font-weight: 700;
                letter-spacing: 0.12em;
                text-transform: uppercase;
                color: var(--neon);
                text-shadow: 0 0 8px rgba(0,255,65,0.6);
                flex: 1;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
            .mobile-nav-brand span {
                color: var(--muted);
                font-weight: 400;
            }
            /* nav items di kanan */
            .mobile-nav-items {
                display: flex;
                align-items: center;
                gap: 2px;
            }
            .mobile-nav-item {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 2px;
                font-size: 7px;
                font-weight: 600;
                color: #4a6050;
                padding: 6px 9px;
                letter-spacing: 0.06em;
                text-transform: uppercase;
                transition: color 0.2s;
                font-family: 'JetBrains Mono', monospace;
                border-bottom: 2px solid transparent;
            }
            .mobile-nav-item.active {
                color: var(--neon);
                border-bottom-color: var(--neon);
                text-shadow: 0 0 6px rgba(0,255,65,0.5);
            }
            .mobile-nav-item svg { width: 15px; height: 15px; }
        }

        /* ─── Sidebar sticky ─── */
        @media (min-width: 768px) {
            .sidebar-sticky {
                position: sticky;
                top: 28px;
                max-height: calc(100vh - 56px);
                overflow-y: auto;
            }
            .sidebar-sticky::-webkit-scrollbar { display: none; }
        }

        /* ─── Typewriter ─── */
        @keyframes typewriter {
            from { width: 0; }
            to   { width: 100%; }
        }

        /* ─── Progress bar ─── */
        .progress-bar {
            height: 2px;
            background: #152015;
            position: relative;
            overflow: hidden;
        }
        .progress-bar-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--neon-sec), var(--neon));
            box-shadow: 0 0 6px var(--neon);
            transition: width 1s ease;
        }

        /* ─── Shimmer ─── */
        .shimmer-border {
            position: relative;
            overflow: hidden;
        }
        .shimmer-border::after {
            content: '';
            position: absolute;
            top: 0; left: -100%;
            width: 60%; height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0,255,65,0.04), transparent);
            animation: shimmer 5s ease infinite;
        }
        @keyframes shimmer {
            0%   { left: -100%; }
            100% { left: 200%; }
        }

        /* flicker */
        .animate-flicker { animation: flicker 5s ease-in-out infinite; }
    </style>
</head>

<body class="min-h-screen antialiased">

    <!-- CRT scan line -->
    <div class="scan-line"></div>

    <!-- Background grid -->
    <div class="grid-bg"></div>

    <!-- Corner accents -->
    <div class="corner-accent corner-accent-tl"></div>
    <div class="corner-accent corner-accent-br"></div>

    {{-- Main wrapper --}}
    <div class="relative z-10 max-w-[1200px] mx-auto px-4 md:px-6 py-6 md:py-8 flex flex-col md:flex-row gap-5 pt-[68px] md:pt-8">

        {{-- ═══ SIDEBAR ═══ --}}
        <aside class="hidden md:block md:w-[250px] lg:w-[270px] flex-shrink-0">
            <div class="sidebar-sticky">
                <div class="t-panel shimmer-border">

                    {{-- Title bar --}}
                    <div class="t-titlebar">
                        <span class="t-titlebar-dot bg-red-600"></span>
                        <span class="t-titlebar-dot bg-yellow-500"></span>
                        <span class="t-titlebar-dot" style="background:var(--neon)"></span>
                        <span class="t-titlebar-label">SYSTEM_INFO</span>
                    </div>

                    <div class="p-4">
                        {{-- Profile --}}
                        <div class="flex flex-col items-center text-center mb-4">
                            <div class="relative mb-3">
                                <div class="w-16 h-16 overflow-hidden" style="border: 1px solid rgba(0,255,65,0.4); box-shadow: 0 0 15px rgba(0,255,65,0.15);">
                                    <img src="{{ asset('img/profile-fariz.jpg') }}"
                                         alt="Fariz Al-Fadh"
                                         class="w-full h-full object-cover animate-flicker">
                                </div>
                                <span class="absolute -bottom-1 -right-1 flex items-center gap-1 px-1.5 py-0.5 text-[8px] font-bold tracking-widest uppercase"
                                      style="background:#080c08; border:1px solid rgba(0,255,65,0.5); color:var(--neon);">
                                    ONLINE
                                </span>
                            </div>

                            <h2 class="font-sans font-bold text-sm tracking-wider uppercase mb-0.5" style="color:#d0e8d0;">
                                FARIZ_ALFADH
                            </h2>
                            <p class="text-xs" style="color:#5a7a5a;">
                                Software &amp; Automation Eng.<br>Industrial IoT Specialist
                            </p>
                        </div>

                        <div class="t-divider"></div>

                        {{-- System info --}}
                        <div class="space-y-2 mb-4 text-[10px] font-mono">
                            <div class="flex items-center gap-2">
                                <span class="neon-text-dim">▸</span>
                                <span style="color:#2a4030;">LOC:</span>
                                <span style="color:#7a9a7a;">Bandung // Jawa Barat</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="neon-text-dim">▸</span>
                                <span style="color:#2a4030;">MODE:</span>
                                <span style="color:#7a9a7a;">Remote / Hybrid</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="neon-text-dim">▸</span>
                                <span style="color:#2a4030;">STATUS:</span>
                                <span class="neon-text font-bold">[ AVAILABLE ]</span>
                            </div>
                        </div>

                        <div class="t-divider"></div>

                        {{-- Navigation --}}
                        <nav class="space-y-0.5 mb-4">
                            <a href="{{ route('about') }}"
                               class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                                <span class="nav-prefix">01</span>
                                <svg class="w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                ABOUT_ME
                            </a>
                            <a href="{{ route('skills') }}"
                               class="nav-link {{ request()->routeIs('skills') ? 'active' : '' }}">
                                <span class="nav-prefix">02</span>
                                <svg class="w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/>
                                </svg>
                                SYS_CAPABILITIES
                            </a>
                            <a href="{{ route('projects') }}"
                               class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}">
                                <span class="nav-prefix">03</span>
                                <svg class="w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                </svg>
                                DEPLOYMENT_LOGS
                            </a>
                            <a href="{{ route('contact') }}"
                               class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                                <span class="nav-prefix">04</span>
                                <svg class="w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                INIT_HANDSHAKE
                            </a>

                        </nav>

                        <div class="t-divider"></div>

                        {{-- Social + footer --}}
                        <div class="flex items-center gap-2">
                            <a href="https://www.instagram.com/alfadh2" target="_blank" rel="noopener" class="social-btn" title="Instagram">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                                </svg>
                            </a>
                            <span class="text-[9px] font-mono ml-auto" style="color:#2a2a2a;">© {{ date('Y') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        {{-- ═══ MAIN CONTENT ═══ --}}
        <main class="flex-1 min-w-0 space-y-4">
            @yield('content')
        </main>
    </div>

    {{-- ─── Mobile Top Nav ─── --}}
    <nav class="mobile-nav md:hidden">
        {{-- Branding --}}
        <div class="mobile-nav-brand">
            FARIZ<span>_</span>ALFADH
        </div>

        {{-- Nav items --}}
        <div class="mobile-nav-items">
            <a href="{{ route('about') }}" class="mobile-nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                ABOUT
            </a>
            <a href="{{ route('skills') }}" class="mobile-nav-item {{ request()->routeIs('skills') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/></svg>
                SKILLS
            </a>
            <a href="{{ route('projects') }}" class="mobile-nav-item {{ request()->routeIs('projects') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                PROJECTS
            </a>
            <a href="{{ route('contact') }}" class="mobile-nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                CONTACT
            </a>

        </div>
    </nav>

</body>
</html>