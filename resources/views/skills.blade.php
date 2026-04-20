@extends('portfolio')

@section('title', 'FARIZ_ALFADH // SYS_CAPABILITIES')

@section('content')

{{-- Header --}}
<div class="fade-in-up">
    <p class="section-label mb-3">SYS_CAPABILITIES // REGISTERED_MODULES</p>
    <h1 class="font-mono font-black text-2xl md:text-3xl tracking-tight mb-1" style="color:#e0e0e0;">
        SYSTEM<span class="neon-text">_</span>CAPABILITIES
        <span class="cursor"></span>
    </h1>
    <p class="font-mono text-xs" style="color:#444;">
        &gt; Kombinasi otomasi industri dan software engineering untuk sistem yang andal dan scalable.
    </p>
</div>

{{-- Primary skill cards --}}
<div class="grid md:grid-cols-3 gap-3">

    {{-- PLC Card --}}
    <div class="t-panel t-panel-hover fade-in-up fade-in-up-delay-1 group">
        <div class="t-titlebar">
            <span class="t-titlebar-dot" style="background:var(--neon)"></span>
            <span class="t-titlebar-label">MODULE_01</span>
        </div>
        <div class="p-4">
            <div class="flex items-center gap-2 mb-3">
                <svg class="w-4 h-4 neon-text-dim flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/>
                </svg>
                <h3 class="font-mono font-bold text-sm tracking-widest uppercase" style="color:#c0c0c0;">PLC &amp; AUTOMATION</h3>
            </div>
            <p class="font-mono text-[11px] leading-relaxed mb-3" style="color:#7a8098;">
                Desain logic dan pemrograman PLC untuk line produksi, safety interlock, dan proses kontinyu industri.
            </p>
            <div class="flex flex-wrap gap-1.5">
                @foreach (['Siemens TIA', 'Omron CX', 'Schneider', 'Ladder Logic'] as $t)
                <span class="tag">{{ $t }}</span>
                @endforeach
            </div>
        </div>
    </div>

    {{-- SCADA Card --}}
    <div class="t-panel t-panel-hover fade-in-up fade-in-up-delay-2 group">
        <div class="t-titlebar">
            <span class="t-titlebar-dot" style="background:#8b5cf6"></span>
            <span class="t-titlebar-label">MODULE_02</span>
        </div>
        <div class="p-4">
            <div class="flex items-center gap-2 mb-3">
                <svg class="w-4 h-4 flex-shrink-0" style="color:#8b5cf6;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 0v10m0-10a2 2 0 012 2h2a2 2 0 012-2"/>
                </svg>
                <h3 class="font-mono font-bold text-sm tracking-widest uppercase" style="color:#c0c0c0;">SCADA &amp; HMI</h3>
            </div>
            <p class="font-mono text-[11px] leading-relaxed mb-3" style="color:#7a8098;">
                Pembuatan dashboard monitoring, sistem alarm, dan histori data dengan tampilan yang bersih dan intuitif.
            </p>
            <div class="flex flex-wrap gap-1.5">
                @foreach (['WinCC', 'Ignition', 'Weintek', 'FactoryTalk', 'Modbus', 'OPC-UA'] as $t)
                <span class="tag-neutral">{{ $t }}</span>
                @endforeach
            </div>
        </div>
    </div>

    {{-- IoT Card --}}
    <div class="t-panel t-panel-hover fade-in-up fade-in-up-delay-3 group">
        <div class="t-titlebar">
            <span class="t-titlebar-dot" style="background:#38bdf8"></span>
            <span class="t-titlebar-label">MODULE_03</span>
        </div>
        <div class="p-4">
            <div class="flex items-center gap-2 mb-3">
                <svg class="w-4 h-4 flex-shrink-0" style="color:#38bdf8;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
                </svg>
                <h3 class="font-mono font-bold text-sm tracking-widest uppercase" style="color:#c0c0c0;">IOT &amp; WEB</h3>
            </div>
            <p class="font-mono text-[11px] leading-relaxed mb-3" style="color:#7a8098;">
                Integrasi sensor ke cloud, pembuatan API, dan dashboard web untuk analitik dan real-time reporting.
            </p>
            <div class="flex flex-wrap gap-1.5">
                @foreach (['MQTT', 'REST API', 'LoRa', 'Webhook', 'Laravel', 'Node-RED', 'HTTP'] as $t)
                <span class="tag-neutral">{{ $t }}</span>
                @endforeach
            </div>
        </div>
    </div>
</div>

{{-- Secondary skills --}}
<div class="grid md:grid-cols-2 gap-3">
    {{-- Software Dev --}}
    <div class="t-panel t-panel-hover fade-in-up fade-in-up-delay-2">
        <div class="t-titlebar">
            <span class="t-titlebar-dot" style="background:#34d399"></span>
            <span class="t-titlebar-label">SOFTWARE_DEVELOPMENT</span>
        </div>
        <div class="p-4">
            <div class="flex flex-wrap gap-1.5">
                @foreach (['Laravel', 'PHP', 'Python', 'JavaScript', 'MySQL', 'Git', 'SQL'] as $t)
                <span class="tag">{{ $t }}</span>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Networking --}}
    <div class="t-panel t-panel-hover fade-in-up fade-in-up-delay-3">
        <div class="t-titlebar">
            <span class="t-titlebar-dot" style="background:#fbbf24"></span>
            <span class="t-titlebar-label">NETWORKING_PROTOCOLS</span>
        </div>
        <div class="p-4">
            <div class="flex flex-wrap gap-1.5">
                @foreach (['Ethernet/IP', 'Profibus', 'Profinet', 'RS-485', 'Modbus TCP', 'TCP/IP'] as $t)
                <span class="tag-neutral">{{ $t }}</span>
                @endforeach
            </div>
        </div>
    </div>
</div>

{{-- Proficiency bars --}}
<div class="t-panel fade-in-up fade-in-up-delay-4">
    <div class="t-titlebar">
        <span class="t-titlebar-label">PROFICIENCY_MATRIX // BENCHMARK_RESULTS</span>
    </div>
    <div class="p-4 space-y-4">
        @foreach ([
            ['label' => 'PLC_PROGRAMMING  // Siemens / Omron', 'color' => '#00FF41'],
            ['label' => 'SCADA_HMI        // WinCC / Ignition', 'color' => '#8b5cf6'],
            ['label' => 'IOT_INTEGRATION  // MQTT / Cloud',     'color' => '#38bdf8'],
            ['label' => 'WEB_BACKEND      // Laravel / PHP',    'color' => '#34d399'],
        ] as $skill)
        <div>
            <div class="mb-1.5">
                <span class="font-mono text-[10px] tracking-wider uppercase" style="color:{{ $skill['color'] }}; text-shadow: 0 0 6px {{ $skill['color'] }}80;">
                    &gt; {{ $skill['label'] }}
                </span>
            </div>
            <div class="progress-bar">
                <div class="progress-bar-fill"
                     style="width: 100%; background: linear-gradient(90deg, {{ $skill['color'] }}44, {{ $skill['color'] }}); box-shadow: 0 0 8px {{ $skill['color'] }}80;"></div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection