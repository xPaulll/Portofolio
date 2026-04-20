@extends('portfolio')

@section('title', 'FARIZ_ALFADH // ABOUT_ME')

@section('content')

{{-- Boot log strip --}}
<div class="t-panel fade-in-up">
    <div class="t-titlebar">
        <span class="t-titlebar-dot bg-red-600"></span>
        <span class="t-titlebar-dot bg-yellow-500"></span>
        <span class="t-titlebar-dot" style="background:var(--neon)"></span>
        <span class="t-titlebar-label">SYSTEM_BOOT // v2.5.1</span>
        <span class="ml-auto text-[9px] font-mono" style="color:#333;">{{ now()->format('Y-m-d H:i:s') }} WIB</span>
    </div>
    <div class="px-4 py-3 font-mono text-[10px] space-y-1" style="color:#4a5570;">
        <p><span class="neon-text-dim">✓</span> Loading kernel modules... <span style="color:#6a7090">OK</span></p>
        <p><span class="neon-text-dim">✓</span> Mounting industrial I/O drivers... <span style="color:#6a7090">OK</span></p>
        <p><span class="neon-text-dim">✓</span> SCADA bridge initialized... <span style="color:#6a7090">OK</span></p>
        <p class="neon-text-dim">▸ READY. Welcome to FARIZ_ALFADH portfolio system.</p>
    </div>
</div>

{{-- Hero card --}}
<article class="t-panel shimmer-border fade-in-up fade-in-up-delay-1">
    <div class="t-titlebar">
        <span class="t-titlebar-label">OPERATOR_PROFILE</span>
        <span class="ml-auto flex items-center gap-2">
            <span class="status-online"></span>
            <span class="text-[9px] font-mono neon-text-dim">ONLINE</span>
        </span>
    </div>

    <div class="p-6 md:p-8">
        {{-- Eyebrow --}}
        <p class="section-label mb-4">IDENTIFICATION</p>

        {{-- Name --}}
        <h1 class="font-mono font-black leading-none mb-3 glitch-text">
            <span class="block text-4xl md:text-5xl lg:text-6xl tracking-tight" style="color:#e8e8e8;">
                FARIZ<span class="neon-text">_</span>AL-FADH
            </span>
            <span class="block text-sm md:text-base tracking-[0.2em] mt-2" style="color:#555;">
                SOFTWARE &amp; AUTOMATION ENGINEER · INDUSTRIAL IOT SPECIALIST
            </span>
        </h1>

        <div class="t-divider"></div>

        {{-- Bio --}}
        <div class="space-y-3 mb-5 max-w-3xl">
            <p class="prompt text-sm leading-relaxed font-mono" style="color:#99a0b8;">
                Seorang Software &amp; Automation Engineer yang berdedikasi membangun jembatan antara
                sistem fisik dan ekosistem digital. Spesialis dalam merancang solusi otomasi terintegrasi
                menggunakan teknologi
                <span class="neon-text font-bold">PLC</span>,
                <span class="neon-text font-bold">SCADA</span>, dan
                <span class="neon-text font-bold">Internet of Things</span>
                untuk menciptakan sistem industri yang modern dan efisien.
            </p>
            <p class="prompt text-sm leading-relaxed font-mono" style="color:#7a8098;">
                Fokus utama adalah menghadirkan arsitektur sistem yang stabil, scalable,
                dan memberikan transparansi data real-time. Memadukan keahlian kontrol
                industri konvensional dengan tren teknologi masa kini.
            </p>
        </div>

        {{-- Status badge --}}
        <div class="inline-flex items-center gap-2 px-3 py-1.5 font-mono text-[10px] font-bold tracking-widest mb-6"
             style="border:1px solid rgba(57,255,20,0.4);background:rgba(57,255,20,0.05);color:var(--neon);">
            <span class="status-online" style="animation-duration:2s;"></span>
            [ OPEN FOR COLLABORATION &amp; FREELANCE PROJECTS ]
        </div>

        {{-- CTA --}}
        <div class="flex flex-wrap gap-3">
            <a href="{{ route('projects') }}" class="btn-neon">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                </svg>
                VIEW_DEPLOYMENTS
            </a>
            <a href="{{ route('contact') }}" class="btn-outline">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                INIT_HANDSHAKE
            </a>
            <a href="{{ route('skills') }}" class="btn-outline">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
                SYS_CAPABILITIES
            </a>
        </div>
    </div>
</article>

{{-- Quick Stats --}}
<div class="grid grid-cols-3 gap-3 fade-in-up fade-in-up-delay-2">
    @foreach ([
        ['num' => '2+',  'label' => 'YEARS_EXP',    'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2'],
        ['num' => '5+',  'label' => 'PROJ_DONE',    'icon' => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z'],
        ['num' => '3+',  'label' => 'PLC_BRANDS',   'icon' => 'M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18'],
    ] as $stat)
    <div class="t-panel t-panel-hover text-center py-5 px-3">
        <svg class="w-4 h-4 mx-auto mb-2 neon-text-dim" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $stat['icon'] }}"/>
        </svg>
        <p class="font-mono font-black text-2xl neon-text mb-1">{{ $stat['num'] }}</p>
        <p class="font-mono text-[9px] tracking-widest uppercase mt-0.5" style="color:#5a6080;">{{ $stat['label'] }}</p>
    </div>
    @endforeach
</div>

{{-- Tech stack --}}
<div class="t-panel fade-in-up fade-in-up-delay-3">
    <div class="t-titlebar">
        <span class="t-titlebar-label">TECH_STACK // REGISTERED_MODULES</span>
    </div>
    <div class="p-4">
        <div class="flex flex-wrap gap-2">
            @foreach (['PLC', 'SCADA', 'HMI', 'IoT', 'MQTT', 'REST_API', 'Laravel', 'Python', 'Siemens', 'Omron', 'Schneider', 'WinCC', 'Ignition', 'Node-RED'] as $tech)
            <span class="tag">{{ $tech }}</span>
            @endforeach
        </div>
    </div>
</div>

@endsection