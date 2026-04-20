@extends('portfolio')

@section('title', 'REVERSE_OSMOSIS // DEPLOYMENT_DETAIL')

@section('content')

{{-- Back nav --}}
<a href="{{ route('projects') }}"
   class="inline-flex items-center gap-2 font-mono text-[10px] tracking-widest uppercase transition-colors mb-2 fade-in-up"
   style="color:#444;" onmouseover="this.style.color='var(--neon)'" onmouseout="this.style.color='#444'">
    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
    </svg>
    CD ../DEPLOYMENT_LOGS
</a>

{{-- Header panel --}}
<div class="t-panel shimmer-border fade-in-up fade-in-up-delay-1">
    <div class="t-titlebar">
        <span class="t-titlebar-dot" style="background:#38bdf8;"></span>
        <span class="t-titlebar-label">MOD_002 // REVERSE_OSMOSIS.sys</span>
        <span class="ml-auto font-mono text-[9px] tracking-widest px-2 py-0.5"
              style="border:1px solid rgba(56,189,248,0.3);color:#38bdf8;background:rgba(56,189,248,0.07);">
            DEPLOYED // 2023
        </span>
    </div>

    <div class="h-px w-full" style="background:linear-gradient(90deg,transparent,rgba(56,189,248,0.5),transparent);"></div>

    <div class="p-6 md:p-8">
        <p class="section-label mb-4">PROJECT_IDENTIFICATION</p>
        <h1 class="font-mono font-black text-2xl md:text-4xl tracking-tight mb-2" style="color:#e0e0e0;">
            REVERSE<span style="color:#38bdf8;">_</span>OSMOSIS
            <span class="cursor"></span>
        </h1>
        <p class="font-mono text-sm mb-4" style="color:#555;">
            &gt; Water Treatment System // PLC &amp; HMI Automation Control
        </p>

        <p class="font-mono text-[12px] leading-relaxed mb-5 max-w-3xl" style="color:#777;">
            Sistem pemurnian air berbasis Reverse Osmosis (RO) dengan kontrol otomasi menggunakan PLC
            dan antarmuka HMI untuk memonitor tekanan, aliran, dan kualitas air hasil. Dirancang untuk
            operasi industri yang stabil dan efisien.
        </p>

        <div class="flex flex-wrap gap-2">
            @foreach (['PLC', 'HMI', 'Siemens', 'SCADA', 'Modbus', 'Ladder_Logic'] as $tag)
            <span class="tag">{{ $tag }}</span>
            @endforeach
        </div>
    </div>
</div>

{{-- Main content grid --}}
<div class="grid md:grid-cols-3 gap-3 fade-in-up fade-in-up-delay-2">
    <div class="md:col-span-2 space-y-3">

        {{-- Summary --}}
        <div class="t-panel">
            <div class="t-titlebar">
                <span class="t-titlebar-label">EXEC_SUMMARY</span>
            </div>
            <div class="p-4">
                <p class="font-mono text-[12px] leading-relaxed prompt" style="color:#666;">
                    Sistem RO ini mengintegrasikan kontrol PLC untuk mengatur pompa tekanan tinggi,
                    katup solenoida, dan sensor multi-parameter. HMI digunakan sebagai interface
                    operator untuk monitoring parameter proses (tekanan, flowrate, TDS) secara
                    real-time serta manajemen alarm dan historical data.
                </p>
            </div>
        </div>

        {{-- Technical Docs --}}
        <div class="t-panel">
            <div class="t-titlebar">
                <span class="t-titlebar-label">TECHNICAL_DOCUMENTATION</span>
            </div>
            <div class="p-4 space-y-2">
                @foreach ([
                    'Diagram P&ID dan skema alir sistem untuk dokumentasi engineering.',
                    'Tampilan HMI: monitoring tekanan, alarm, status pompa, dan kondisi membran.',
                    'Catatan setting parameter proses dan SOP pengoperasian sistem.',
                    'Program PLC dengan mode manual, semi-auto, dan full-auto untuk operasi fleksibel.',
                ] as $i => $doc)
                <div class="flex gap-3 font-mono text-[11px]" style="color:#666;">
                    <span style="color:rgba(56,189,248,0.6);" class="flex-shrink-0">{{ str_pad($i+1, 2, '0', STR_PAD_LEFT) }}.</span>
                    <p>{{ $doc }}</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Achievements --}}
        <div class="t-panel">
            <div class="t-titlebar">
                <span class="t-titlebar-label">BENCHMARK_RESULTS</span>
            </div>
            <div class="p-4 space-y-2">
                @foreach ([
                    'Stabilitas kualitas air output sesuai parameter target (TDS, pH).',
                    'Efisiensi operasi meningkat dengan mode otomasi penuh.',
                    'Sistem alarm yang responsif meminimalkan downtime.',
                    'Operator dapat memantau seluruh parameter dari satu layar HMI.',
                ] as $item)
                <div class="flex items-start gap-2 font-mono text-[11px]" style="color:#555;">
                    <span style="color:#38bdf8;" class="flex-shrink-0 mt-0.5">✓</span>
                    <p>{{ $item }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="space-y-3">
        {{-- Visual Docs --}}
        <div class="t-panel">
            <div class="t-titlebar">
                <span class="t-titlebar-label">VISUAL_DOCS</span>
            </div>
            <div class="p-4">
                <p class="font-mono text-[10px] tracking-wider mb-3" style="color:#444;">
                    &gt; Tambahkan dokumentasi visual:
                </p>
                <div class="space-y-2 font-mono text-[10px]" style="color:#444;">
                    <p class="prompt">Foto instalasi sistem RO</p>
                    <p class="prompt">Screenshot tampilan HMI</p>
                    <p class="prompt">Diagram P&ID / skema alir</p>
                </div>
            </div>
        </div>

        {{-- Role --}}
        <div class="t-panel">
            <div class="t-titlebar">
                <span class="t-titlebar-label">OPERATOR_ROLE</span>
            </div>
            <div class="p-4">
                <p class="font-mono text-[11px] leading-relaxed prompt" style="color:#555;">
                    Pemrograman PLC, desain HMI, perancangan logika kontrol otomasi,
                    dan commissioning di lapangan.
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
