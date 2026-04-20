@extends('portfolio')

@section('title', 'FARIZ_ALFADH // INIT_HANDSHAKE')

@section('content')

{{-- Header --}}
<div class="fade-in-up">
    <p class="section-label mb-3">INIT_HANDSHAKE // OPEN_CHANNEL</p>
    <h1 class="font-mono font-black text-2xl md:text-3xl tracking-tight mb-1" style="color:#e0e0e0;">
        INITIATE<span class="neon-text">_</span>HANDSHAKE
        <span class="cursor"></span>
    </h1>
    <p class="font-mono text-xs" style="color:#444;">
        &gt; Tertarik berkolaborasi atau butuh konsultasi otomasi industri? Open channel was established.
    </p>
</div>

{{-- Contact channels --}}
<div class="grid sm:grid-cols-2 gap-3 fade-in-up fade-in-up-delay-1">

    {{-- Instagram --}}
    <a href="https://www.instagram.com/alfadh2" target="_blank" rel="noopener noreferrer"
       class="t-panel t-panel-hover group flex items-center gap-4 p-4">
        <div class="w-12 h-12 flex items-center justify-center flex-shrink-0"
             style="border: 1px solid rgba(168,85,247,0.3); background: rgba(168,85,247,0.06);">
            <svg class="w-6 h-6" style="color:#c084fc;" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
            </svg>
        </div>
        <div class="min-w-0 flex-1">
            <p class="font-mono text-[9px] tracking-[0.2em] uppercase mb-0.5" style="color:#444;">CHANNEL // INSTAGRAM</p>
            <p class="font-mono text-sm font-bold group-hover:text-white transition-colors" style="color:#c0c0c0;">@alfadh2</p>
            <p class="font-mono text-[9px] mt-1 tracking-wider" style="color:#333;">&gt; VISIT_PROFILE →</p>
        </div>
    </a>

    {{-- LinkedIn --}}
    <a href="https://www.linkedin.com/in/fariz-al-fadh-434728323/?locale=en" target="_blank" rel="noopener noreferrer"
       class="t-panel t-panel-hover group flex items-center gap-4 p-4">
        <div class="w-12 h-12 flex items-center justify-center flex-shrink-0"
             style="border: 1px solid rgba(10,102,194,0.3); background: rgba(10,102,194,0.06);">
            <svg class="w-6 h-6" style="color:#0a66c2;" fill="currentColor" viewBox="0 0 24 24">
                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
            </svg>
        </div>
        <div class="min-w-0 flex-1">
            <p class="font-mono text-[9px] tracking-[0.2em] uppercase mb-0.5" style="color:#444;">CHANNEL // LINKEDIN</p>
            <p class="font-mono text-sm font-bold group-hover:text-white transition-colors" style="color:#c0c0c0;">Fariz Al-Fadh</p>
            <p class="font-mono text-[9px] mt-1 tracking-wider" style="color:#333;">&gt; CONNECT_NETWORK →</p>
        </div>
    </a>

    {{-- Email --}}
    <a href="mailto:alpeedd@gmail.com" target="_blank" rel="noopener noreferrer"
       class="t-panel t-panel-hover group flex items-center gap-4 p-4">
        <div class="w-12 h-12 flex items-center justify-center flex-shrink-0"
             style="border: 1px solid rgba(234,67,53,0.3); background: rgba(234,67,53,0.06);">
            <svg class="w-6 h-6" style="color:#ea4335;" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z"/>
            </svg>
        </div>
        <div class="min-w-0 flex-1">
            <p class="font-mono text-[9px] tracking-[0.2em] uppercase mb-0.5" style="color:#444;">CHANNEL // EMAIL</p>
            <p class="font-mono text-sm font-bold group-hover:text-white transition-colors" style="color:#c0c0c0;">alpeedd@gmail.com</p>
            <p class="font-mono text-[9px] mt-1 tracking-wider" style="color:#333;">&gt; SEND_TRANSMISSION →</p>
        </div>
    </a>

    {{-- TikTok --}}
    <a href="https://www.tiktok.com/@alpeedd2?is_from_webapp=1&sender_device=pc" target="_blank" rel="noopener noreferrer"
       class="t-panel t-panel-hover group flex items-center gap-4 p-4">
        <div class="w-12 h-12 flex items-center justify-center flex-shrink-0"
             style="border: 1px solid rgba(255,0,80,0.25); background: rgba(255,0,80,0.05);">
            <svg class="w-6 h-6" style="color:#ff2d55;" fill="currentColor" viewBox="0 0 24 24">
                <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.94a8.17 8.17 0 004.78 1.53V7.02a4.85 4.85 0 01-1.01-.33z"/>
            </svg>
        </div>
        <div class="min-w-0 flex-1">
            <p class="font-mono text-[9px] tracking-[0.2em] uppercase mb-0.5" style="color:#444;">CHANNEL // TIKTOK</p>
            <p class="font-mono text-sm font-bold group-hover:text-white transition-colors" style="color:#c0c0c0;">@alpeedd2</p>
            <p class="font-mono text-[9px] mt-1 tracking-wider" style="color:#333;">&gt; VIEW_CONTENT →</p>
        </div>
    </a>
</div>

{{-- System status --}}
<div class="t-panel fade-in-up fade-in-up-delay-3">
    <div class="t-titlebar">
        <span class="status-online" style="animation-duration:3s;"></span>
        <span class="t-titlebar-label ml-2">SYSTEM_STATUS // AVAILABILITY_REPORT</span>
    </div>
    <div class="p-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
            @foreach ([
                ['label' => 'RESPONSE_TIME',  'val' => '< 24_JAM'],
                ['label' => 'WORK_MODE',      'val' => 'REMOTE/HYBRID'],
                ['label' => 'LANG_SUPPORT',   'val' => 'ID // EN'],
                ['label' => 'TIMEZONE',       'val' => 'WIB_UTC+7'],
            ] as $info)
            <div class="text-center p-3" style="border: 1px solid #1a1a1a; background: rgba(0,0,0,0.3);">
                <p class="font-mono text-[9px] tracking-[0.15em] uppercase mb-1.5" style="color:#333;">{{ $info['label'] }}</p>
                <p class="font-mono text-xs font-bold neon-text-dim">{{ $info['val'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection