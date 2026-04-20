@extends('portfolio')

@section('title', 'SC-MANURI // DEPLOYMENT_DETAIL')

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
        <span class="t-titlebar-dot" style="background:#34d399;"></span>
        <span class="t-titlebar-label">MOD_001 // SC-MANURI.exe</span>
        <span class="ml-auto font-mono text-[9px] tracking-widest px-2 py-0.5"
              style="border:1px solid rgba(52,211,153,0.3);color:#34d399;background:rgba(52,211,153,0.07);">
            DEPLOYED // 2025
        </span>
    </div>

    <div class="h-px w-full" style="background:linear-gradient(90deg,transparent,rgba(52,211,153,0.5),transparent);"></div>

    <div class="p-6 md:p-8">
        <p class="section-label mb-4">PROJECT_IDENTIFICATION</p>
        <h1 class="font-mono font-black text-2xl md:text-4xl tracking-tight mb-2" style="color:#e0e0e0;">
            SC<span style="color:#34d399;">-</span>MANURI
            <span class="cursor"></span>
        </h1>
        <p class="font-mono text-sm mb-4" style="color:#555;">
            &gt; Sistem Cerdas Manajemen Nutrisi // Hydroponic ML-IoT Integration
        </p>

        <p class="font-mono text-[12px] leading-relaxed mb-5 max-w-3xl" style="color:#777;">
            Integrasi Internet of Things (IoT) dan model prediktif machine learning untuk
            manajemen nutrisi dinamis pada budidaya pakcoy hidroponik. Sistem ini dirancang
            untuk membantu pelaku budidaya menjaga konsistensi kualitas nutrisi secara realtime
            dan terdokumentasi.
        </p>

        <div class="flex flex-wrap gap-2">
            @foreach (['IoT','Native', 'ML', 'Dashboard', 'HTTP', 'Python'] as $tag)
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
                    SC-MANURI menggabungkan sensor lingkungan, modul IoT, dan backend untuk
                    mengumpulkan data pH, EC, suhu, dan parameter lain secara berkala. Data kemudian
                    diproses oleh model machine learning untuk memberikan rekomendasi penyesuaian nutrisi
                    yang lebih presisi serta histori yang mudah ditelusuri.
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
                    'Arsitektur sistem berbasis IoT dengan node sensor yang mengirim data melalui protokol HTTP ke server Laravel.',
                    'Dashboard web responsif untuk melihat tren parameter nutrisi, log peristiwa, dan rekomendasi tindakan.',
                ] as $i => $doc)
                <div class="flex gap-3 font-mono text-[11px]" style="color:#666;">
                    <span class="neon-text-dim flex-shrink-0">{{ str_pad($i+1, 2, '0', STR_PAD_LEFT) }}.</span>
                    <p>{{ $doc }}</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Timeline --}}
        <div class="t-panel">
            <div class="t-titlebar">
                <span class="t-titlebar-label">BUILD_TIMELINE</span>
            </div>
            <div class="p-4 space-y-0">
                @foreach ([
                    ['phase' => 'PHASE_01', 'name' => 'RESEARCH_&_DESIGN', 'desc' => 'Pemodelan kebutuhan sistem, pemilihan sensor, studi literatur nutrisi hidroponik, dan desain arsitektur.'],
                    ['phase' => 'PHASE_02', 'name' => 'HARDWARE_&_BACKEND', 'desc' => 'Perakitan node IoT, koneksi ke server, perancangan database, dan pengembangan.'],
                    ['phase' => 'PHASE_03', 'name' => 'DASHBOARD_&_ML', 'desc' => 'Pengembangan antarmuka dashboard, integrasi model machine learning, dan penyesuaian berdasarkan uji coba lapangan.'],
                ] as $phase)
                <div class="flex gap-4 pb-4">
                    <div class="flex flex-col items-center">
                        <div class="w-2 h-2 flex-shrink-0 mt-1" style="background:var(--neon);box-shadow:0 0 6px var(--neon);"></div>
                        <div class="w-px flex-1 mt-1" style="background:#1a1a1a;min-height:30px;"></div>
                    </div>
                    <div class="pb-2">
                        <p class="font-mono text-[9px] tracking-widest uppercase mb-0.5" style="color:#333;">{{ $phase['phase'] }}</p>
                        <p class="font-mono text-[11px] font-bold tracking-wider mb-1 neon-text-dim">{{ $phase['name'] }}</p>
                        <p class="font-mono text-[11px] leading-relaxed" style="color:#555;">{{ $phase['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>

    <div class="space-y-3">
        {{-- Product Identity --}}
        <div class="t-panel">
            <div class="t-titlebar">
                <span class="t-titlebar-label">PRODUCT_IDENTITY</span>
            </div>
            <div class="p-4">
                 <img src="{{ asset('img/Logo Produk SC-Manuri.jpg') }}" alt="Logo Produk SC-Manuri" class="w-full h-auto border border-[#1a241a] opacity-80 hover:opacity-100 hover:border-[var(--neon)] transition-all duration-300">
            </div>
        </div>

        {{-- Achievements --}}
        <div class="t-panel">
            <div class="t-titlebar">
                <span class="t-titlebar-label">BENCHMARK_RESULTS</span>
            </div>
            <div class="p-4 space-y-2">
                @foreach ([
                    'Konsistensi kualitas larutan nutrisi meningkat selama budidaya.',
                    'Histori lengkap perubahan nutrisi + konteks kondisi lingkungan.',
                    'Remote monitoring via dashboard web terintegrasi.',
                    'Dasar pengembangan sistem otomasi nutrisi lanjutan.',
                ] as $item)
                <div class="flex items-start gap-2 font-mono text-[11px]" style="color:#555;">
                    <span class="neon-text flex-shrink-0 mt-0.5">✓</span>
                    <p>{{ $item }}</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Role --}}
        <div class="t-panel">
            <div class="t-titlebar">
                <span class="t-titlebar-label">OPERATOR_ROLE</span>
            </div>
            <div class="p-4">
                <p class="font-mono text-[11px] leading-relaxed prompt" style="color:#555;">
                    Perancangan arsitektur sistem, pengembangan backend Laravel &amp; API, integrasi IoT,
                    serta desain dan implementasi dashboard monitoring.
                </p>
            </div>
        </div>
    </div>
</div>

{{-- Full Width Documentation Carousel --}}
<div class="t-panel mt-3 fade-in-up fade-in-up-delay-3">
    <div class="t-titlebar">
        <span class="t-titlebar-dot" style="background:#34d399; box-shadow:0 0 6px #34d399;"></span>
        <span class="t-titlebar-label">VISUAL_DOCS // DOCUMENTATION_CAROUSEL</span>
        <span class="ml-auto font-mono text-[8px] tracking-widest" style="color:#34d399;40;">
            AUTO_SLIDE &bull; 5s
        </span>
    </div>

    {{-- Progress bar --}}
    <div style="height:2px;background:#0a0f0a;position:relative;overflow:hidden;">
        <div id="sc-progress-bar"
             style="height:100%;width:0;background:linear-gradient(90deg,#34d399,#0BBA20);transition:none;"></div>
    </div>

    {{-- Main Carousel Stage --}}
    @php
    $scDocs = [
        ['img' => 'img/tampilan website.png',          'label' => 'Dashboard Web',         'cat' => 'SOFTWARE'],
        ['img' => 'img/panel-scmanuri.jpeg',           'label' => 'Panel Kendali',          'cat' => 'HARDWARE'],
        ['img' => 'img/Desain CAD SC-Manuri.jpg',      'label' => 'Desain CAD 3D',          'cat' => 'ENGINEERING'],
        ['img' => 'img/hasil-panen-scmanuri.jpeg',     'label' => 'Implementasi Lapangan',  'cat' => 'FIELD_RESULT'],
        ['img' => 'img/Diagramblok scmanuri.jpg',      'label' => 'Diagram Blok Sistem',    'cat' => 'ARCHITECTURE'],
        ['img' => 'img/Desain Elektrikal SC-Manuri.jpg','label' => 'Skema Elektrikal',      'cat' => 'ELECTRICAL'],
    ];
    @endphp

    <div id="sc-carousel" class="relative overflow-hidden" style="height:420px;">

        @foreach($scDocs as $ci => $cdoc)
        <div class="sc-slide absolute inset-0 flex items-stretch"
             style="opacity:{{ $ci === 0 ? '1' : '0' }}; z-index:{{ $ci === 0 ? '2' : '0' }}; transition: opacity 0.8s cubic-bezier(0.4,0,0.2,1);">

            {{-- Image --}}
            <div class="flex-1 relative overflow-hidden">
                <img src="{{ asset($cdoc['img']) }}" alt="{{ $cdoc['label'] }}"
                     class="w-full h-full object-cover sc-slide-img"
                     style="filter:brightness(0.65) saturate(0.85); transform:scale({{ $ci === 0 ? '1.03' : '1' }}); transition:transform 6s ease-out;">
                {{-- CRT Scan Lines --}}
                <div class="absolute inset-0 pointer-events-none"
                     style="background:repeating-linear-gradient(0deg,transparent,transparent 2px,rgba(0,0,0,0.09) 2px,rgba(0,0,0,0.09) 4px);"></div>
                {{-- Vignette --}}
                <div class="absolute inset-0 pointer-events-none"
                     style="background:radial-gradient(ellipse at center,transparent 40%,rgba(0,0,0,0.6) 100%);"></div>
            </div>

            {{-- Meta overlay bottom --}}
            <div class="absolute bottom-0 left-0 right-0 px-6 py-5"
                 style="background:linear-gradient(to top, rgba(0,0,0,0.92) 0%, rgba(0,0,0,0.6) 60%, transparent 100%);">
                <div class="flex items-end justify-between">
                    <div>
                        <span class="inline-block font-mono text-[8px] tracking-[0.25em] uppercase px-2 py-0.5 mb-2"
                              style="background:rgba(52,211,153,0.12); border:1px solid rgba(52,211,153,0.3); color:#34d399;">
                            {{ $cdoc['cat'] }}
                        </span>
                        <p class="font-mono font-bold text-lg tracking-wider" style="color:#e0e0e0;">&gt; {{ $cdoc['label'] }}</p>
                        <p class="font-mono text-[10px] mt-1" style="color:#34d39970;">
                            SC-MANURI // DEPLOYMENT_DOC_{{ str_pad($ci+1,'2','0',STR_PAD_LEFT) }} of {{ str_pad(count($scDocs),'2','0',STR_PAD_LEFT) }}
                        </p>
                    </div>
                    {{-- Thumbnail strip --}}
                    <div class="flex gap-2 ml-4">
                        @foreach($scDocs as $ti => $tdoc)
                        <button onclick="scGoTo({{ $ti }})"
                                class="sc-thumb relative overflow-hidden flex-shrink-0 transition-all duration-300"
                                id="sc-thumb-{{ $ti }}"
                                style="width:52px;height:36px;opacity:{{ $ti === 0 ? '1' : '0.3' }};border:1px solid {{ $ti === 0 ? '#34d399' : '#1a1a1a' }};">
                            <img src="{{ asset($tdoc['img']) }}" alt="{{ $tdoc['label'] }}"
                                 class="w-full h-full object-cover" style="filter:brightness(0.7) saturate(0.7);">
                        </button>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
        @endforeach

        {{-- Arrow buttons --}}
        <button onclick="scGoTo((scCurrent - 1 + {{ count($scDocs) }}) % {{ count($scDocs) }})"
                class="absolute left-3 top-1/2 -translate-y-1/2 w-8 h-8 flex items-center justify-center transition-all duration-200 z-20"
                style="background:rgba(0,0,0,0.6);border:1px solid #34d39930;color:#34d39990;"
                onmouseover="this.style.borderColor='#34d399';this.style.color='#34d399'"
                onmouseout="this.style.borderColor='#34d39930';this.style.color='#34d39990'">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>
        <button onclick="scGoTo((scCurrent + 1) % {{ count($scDocs) }})"
                class="absolute right-3 top-1/2 -translate-y-1/2 w-8 h-8 flex items-center justify-center transition-all duration-200 z-20"
                style="background:rgba(0,0,0,0.6);border:1px solid #34d39930;color:#34d39990;"
                onmouseover="this.style.borderColor='#34d399';this.style.color='#34d399'"
                onmouseout="this.style.borderColor='#34d39930';this.style.color='#34d39990'">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
        </button>

    </div>

    {{-- Dot navigation --}}
    <div class="flex items-center justify-center gap-2 p-3" id="sc-dots">
        @foreach($scDocs as $di => $ddoc)
        <button onclick="scGoTo({{ $di }})"
                class="sc-dot-btn transition-all duration-300 rounded-sm"
                id="sc-dot-{{ $di }}"
                style="height:3px;width:{{ $di === 0 ? '24px' : '6px' }};background:{{ $di === 0 ? '#34d399' : '#34d39935' }};"></button>
        @endforeach
    </div>
</div>

{{-- SC-MANURI Carousel JS --}}
<script>
(function() {
    const TOTAL    = {{ count($scDocs) }};
    const INTERVAL = 5000;
    let scCurrent  = 0;
    let scTimer    = null;
    let scProgress = null;
    let startTime  = null;

    window.scCurrent = 0;

    function getEls() {
        return {
            slides: document.querySelectorAll('.sc-slide'),
            thumbs: (i) => document.getElementById('sc-thumb-' + i),
            dots  : (i) => document.getElementById('sc-dot-' + i),
            bar   : document.getElementById('sc-progress-bar'),
        };
    }

    function startProgress() {
        const { bar } = getEls();
        if (!bar) return;
        cancelAnimationFrame(scProgress);
        startTime = performance.now();
        bar.style.transition = 'none';
        bar.style.width = '0';
        function animate(now) {
            const elapsed = now - startTime;
            const pct = Math.min((elapsed / INTERVAL) * 100, 100);
            bar.style.width = pct + '%';
            if (pct < 100) scProgress = requestAnimationFrame(animate);
        }
        scProgress = requestAnimationFrame(animate);
    }

    window.scGoTo = function(index) {
        const { slides, thumbs, dots } = getEls();
        const imgs = document.querySelectorAll('.sc-slide-img');

        // Deactivate current
        slides[scCurrent].style.opacity = '0';
        slides[scCurrent].style.zIndex  = '0';
        imgs[scCurrent].style.transform = 'scale(1)';
        if (thumbs(scCurrent)) { thumbs(scCurrent).style.opacity='0.3'; thumbs(scCurrent).style.borderColor='#1a1a1a'; }
        if (dots(scCurrent))   { dots(scCurrent).style.width='6px'; dots(scCurrent).style.background='#34d39935'; }

        // Activate target
        scCurrent = index;
        window.scCurrent = scCurrent;
        slides[scCurrent].style.opacity = '1';
        slides[scCurrent].style.zIndex  = '2';
        imgs[scCurrent].style.transform = 'scale(1.03)';
        if (thumbs(scCurrent)) { thumbs(scCurrent).style.opacity='1'; thumbs(scCurrent).style.borderColor='#34d399'; }
        if (dots(scCurrent))   { dots(scCurrent).style.width='24px'; dots(scCurrent).style.background='#34d399'; }

        // Reset timer & progress
        clearInterval(scTimer);
        startProgress();
        scTimer = setInterval(function() {
            window.scGoTo((scCurrent + 1) % TOTAL);
        }, INTERVAL);
    };

    document.addEventListener('DOMContentLoaded', function() {
        // Ken Burns on first image
        const firstImg = document.querySelector('.sc-slide-img');
        if (firstImg) firstImg.style.transform = 'scale(1.03)';

        // Pause on hover
        const carousel = document.getElementById('sc-carousel');
        if (carousel) {
            carousel.addEventListener('mouseenter', function() {
                clearInterval(scTimer);
                cancelAnimationFrame(scProgress);
            });
            carousel.addEventListener('mouseleave', function() {
                startProgress();
                scTimer = setInterval(function() {
                    window.scGoTo((scCurrent + 1) % TOTAL);
                }, INTERVAL);
            });
        }

        startProgress();
        scTimer = setInterval(function() {
            window.scGoTo((scCurrent + 1) % TOTAL);
        }, INTERVAL);
    });
})();
</script>

@endsection

