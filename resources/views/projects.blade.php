@extends('portfolio')

@section('title', 'FARIZ_ALFADH // DEPLOYMENT_LOGS')

@section('content')

{{-- Header --}}
<div class="fade-in-up">
    <p class="section-label mb-3">DEPLOYMENT_LOGS // SELECTED_BUILDS</p>
    <h1 class="font-mono font-black text-2xl md:text-3xl tracking-tight mb-1" style="color:#e0e0e0;">
        DEPLOYMENT<span class="neon-text">_</span>LOGS
        <span class="cursor"></span>
    </h1>
    <p class="font-mono text-xs" style="color:#444;">
        &gt; Beberapa pekerjaan nyata dari sistem otomasi industri, SCADA, hingga platform IoT.
    </p>
</div>

{{-- Projects grid --}}
<div class="grid md:grid-cols-2 gap-3">
    @foreach ([
        [
            'title'  => 'SC-MANURI',
            'sub'    => 'Sistem Cerdas Manajemen Nutrisi',
            'period' => '2025',
            'desc'   => 'Integrasi IoT dan model prediktif machine learning untuk manajemen nutrisi dinamis pada budidaya pakcoy hidroponik secara otomatis.',
            'tags'   => ['IoT', 'REST_API', 'Laravel', 'ML', 'Dashboard'],
            'color'  => '#34d399',
            'url'    => route('projects.sc-manuri'),
            'icon'   => 'M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z',
            'module' => 'MOD_001',
            'status' => 'DEPLOYED',
            'docs'   => [
                ['img' => 'img/tampilan website.png',         'label' => 'Dashboard Web'],
                ['img' => 'img/panel-scmanuri.jpeg',          'label' => 'Panel Kendali'],
                ['img' => 'img/Desain CAD SC-Manuri.jpg',     'label' => 'Desain CAD'],
                ['img' => 'img/hasil-panen-scmanuri.jpeg',    'label' => 'Hasil Lapangan'],
                ['img' => 'img/Diagramblok scmanuri.jpg',     'label' => 'Diagram Blok'],
                ['img' => 'img/Desain Elektrikal SC-Manuri.jpg','label' => 'Skema Elektrikal'],
            ],
        ],
        [
            'title'  => 'REVERSE_OSMOSIS',
            'sub'    => 'Water Treatment System',
            'period' => '2023',
            'desc'   => 'Sistem pemurnian air tingkat lanjut menggunakan tekanan tinggi untuk memaksa air melewati membran semipermeabel dengan monitoring PLC dan HMI.',
            'tags'   => ['PLC', 'HMI', 'Siemens', 'SCADA'],
            'color'  => '#38bdf8',
            'url'    => route('projects.reverse-osmosis'),
            'icon'   => 'M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18',
            'module' => 'MOD_002',
            'status' => 'DEPLOYED',
            'docs'   => [
                ['img' => null, 'label' => 'P&ID Diagram'],
                ['img' => null, 'label' => 'HMI Interface'],
                ['img' => null, 'label' => 'Panel PLC'],
                ['img' => null, 'label' => 'Instalasi Lapangan'],
            ],
        ],
        [
            'title'  => 'COMING_SOON',
            'sub'    => 'Proyek Berikutnya',
            'period' => '2025—',
            'desc'   => 'Proyek baru sedang dalam tahap perencanaan dan pengembangan. Stay tuned untuk update terbaru.',
            'tags'   => [],
            'color'  => '#333',
            'url'    => null,
            'icon'   => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
            'module' => 'MOD_003',
            'status' => 'PENDING',
            'docs'   => [],
        ],
        [
            'title'  => 'COMING_SOON',
            'sub'    => 'Proyek Berikutnya',
            'period' => '2025—',
            'desc'   => 'Proyek baru sedang dalam tahap perencanaan dan pengembangan. Stay tuned untuk update terbaru.',
            'tags'   => [],
            'color'  => '#333',
            'url'    => null,
            'icon'   => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
            'module' => 'MOD_004',
            'status' => 'PENDING',
            'docs'   => [],
        ],
    ] as $i => $project)

    @php $isClickable = !empty($project['url']); @endphp

    @if ($isClickable)
    <a href="{{ $project['url'] }}"
       class="t-panel t-panel-hover shimmer-border fade-in-up group block"
       style="animation-delay: {{ $i * 0.08 }}s;">
    @else
    <div class="t-panel fade-in-up opacity-40 cursor-not-allowed"
         style="animation-delay: {{ $i * 0.08 }}s;">
    @endif

        {{-- Terminal titlebar --}}
        <div class="t-titlebar">
            <span class="t-titlebar-dot" style="background: {{ $project['color'] }};"></span>
            <span class="t-titlebar-label font-mono">{{ $project['module'] }}</span>
            <span class="ml-auto font-mono text-[9px] tracking-widest px-2 py-0.5"
                  style="border: 1px solid {{ $project['color'] }}33; color: {{ $project['color'] }}; background: {{ $project['color'] }}0d;">
                {{ $project['status'] }}
            </span>
        </div>

        {{-- Top color bar --}}
        <div class="h-px w-full" style="background: linear-gradient(90deg, transparent, {{ $project['color'] }}60, transparent);"></div>

        <div class="p-4">
            {{-- Header --}}
            <div class="flex items-start justify-between gap-3 mb-3">
                <div class="flex items-start gap-3">
                    <div class="w-9 h-9 flex items-center justify-center flex-shrink-0"
                         style="border: 1px solid {{ $project['color'] }}30; background: {{ $project['color'] }}0d;">
                        <svg class="w-4 h-4" fill="none" stroke="{{ $project['color'] }}" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $project['icon'] }}"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-mono font-bold text-sm tracking-[0.1em] uppercase group-hover:text-white transition-colors" style="color:#d0d0d0;">
                            {{ $project['title'] }}
                        </h3>
                        <p class="font-mono text-[10px] tracking-wider uppercase mt-0.5" style="color:#444;">{{ $project['sub'] }}</p>
                    </div>
                </div>
                <span class="font-mono text-[10px] tracking-wider flex-shrink-0 mt-0.5" style="color:#333;">
                    {{ $project['period'] }}
                </span>
            </div>

            <p class="font-mono text-[11px] leading-relaxed mb-3 prompt" style="color:#7a8098;">{{ $project['desc'] }}</p>

            @if (!empty($project['tags']))
            <div class="flex flex-wrap gap-1.5 mb-3">
                @foreach ($project['tags'] as $tag)
                <span class="tag">{{ $tag }}</span>
                @endforeach
            </div>
            @else
            <div class="flex items-center gap-2 font-mono text-[10px] tracking-wider mb-3" style="color:#333;">
                <span class="w-1.5 h-1.5 rounded-full animate-pulse" style="background:#333;"></span>
                &gt; IN_PLANNING_PHASE...
            </div>
            @endif

            {{-- Documentation Slider --}}
            @if (!empty($project['docs']))
            @php $sliderKey = 'slider-' . $project['module']; $docsCount = count($project['docs']); @endphp
            <div class="doc-slider-wrap" style="border-top:1px solid #151f15; padding-top:10px;">
                <p class="font-mono text-[8px] tracking-[0.2em] uppercase mb-2" style="color:{{ $project['color'] }}60;"
                >&gt; DOCS_PREVIEW // AUTO_SLIDE</p>

                {{-- Slider container --}}
                <div class="doc-slider relative overflow-hidden" style="height:160px;" data-slider="{{ $sliderKey }}" data-count="{{ $docsCount }}" data-color="{{ $project['color'] }}">
                    @foreach ($project['docs'] as $di => $doc)
                    <div class="doc-slide absolute inset-0 transition-opacity duration-700"
                         style="opacity:{{ $di === 0 ? '1' : '0' }}; z-index:{{ $di === 0 ? '1' : '0' }};">
                        @if (!empty($doc['img']))
                        <img src="{{ asset($doc['img']) }}" alt="{{ $doc['label'] }}"
                             class="w-full h-full object-cover"
                             style="filter:brightness(0.55) saturate(0.8);">
                        @else
                        <div class="w-full h-full flex items-center justify-center"
                             style="background: linear-gradient(135deg, #0a120a, #0d1a1d); border:1px dashed {{ $project['color'] }}25;">
                            <div class="text-center">
                                <div class="font-mono text-[9px] tracking-widest mb-2" style="color:{{ $project['color'] }}40;">[NO_VISUAL]</div>
                                <div class="font-mono text-[11px] tracking-wider" style="color:{{ $project['color'] }}60;">{{ $doc['label'] }}</div>
                            </div>
                        </div>
                        @endif
                        <div class="absolute inset-0" style="background:linear-gradient(to top, rgba(0,0,0,0.85) 0%, transparent 60%);"></div>
                        <div class="absolute bottom-0 left-0 right-0 flex items-center justify-between px-3 py-2">
                            <span class="font-mono text-[9px] tracking-wider" style="color:{{ $project['color'] }}CC;">&gt; {{ $doc['label'] }}</span>
                            <span class="font-mono text-[8px]" style="color:{{ $project['color'] }}50;">{{ str_pad($di+1,'2','0',STR_PAD_LEFT) }}/{{ str_pad($docsCount,'2','0',STR_PAD_LEFT) }}</span>
                        </div>
                    </div>
                    @endforeach

                    {{-- Scan-line overlay --}}
                    <div class="absolute inset-0 pointer-events-none" style="background:repeating-linear-gradient(0deg,transparent,transparent 2px,rgba(0,0,0,0.07) 2px,rgba(0,0,0,0.07) 4px); z-index:10;"></div>
                </div>

                {{-- Dot indicators --}}
                <div class="flex items-center justify-center gap-1.5 mt-2" data-dots="{{ $sliderKey }}">
                    @for ($di = 0; $di < $docsCount; $di++)
                    <button onclick="sliderGoTo('{{ $sliderKey }}', {{ $di }}); event.preventDefault();"
                            class="doc-dot transition-all duration-300 rounded-sm"
                            style="width:{{ $di === 0 ? '16px' : '5px' }};height:3px;background:{{ $di === 0 ? $project['color'] : $project['color'].'40' }};"
                            data-dot-for="{{ $sliderKey }}" data-index="{{ $di }}"
                    ></button>
                    @endfor
                </div>
            </div>
            @endif
        </div>

    @if ($isClickable)
    </a>
    @else
    </div>
    @endif

    @endforeach
</div>

{{-- Bottom CTA --}}
<div class="t-panel p-5 flex items-center justify-between fade-in-up fade-in-up-delay-4">
    <div>
        <p class="font-mono font-bold text-sm tracking-widest uppercase mb-1" style="color:#c0c0c0;">
            &gt; READY_TO_COLLABORATE.exe
        </p>
        <p class="font-mono text-[11px]" style="color:#7a8098;">
            Terbuka untuk project freelance dan konsultasi otomasi industri.
        </p>
    </div>
    <a href="{{ route('contact') }}" class="btn-neon flex-shrink-0">
        INIT_HANDSHAKE
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
    </a>
</div>

{{-- Slider JS --}}
<script>
(function() {
    const sliders   = {};  // key => { slides, dots, current, color, timer }
    const INTERVAL  = 5000;

    function initSliders() {
        document.querySelectorAll('[data-slider]').forEach(function(el) {
            const key    = el.dataset.slider;
            const color  = el.dataset.color;
            const slides = Array.from(el.querySelectorAll('.doc-slide'));
            const dotWrap= document.querySelector('[data-dots="' + key + '"]');
            const dots   = dotWrap ? Array.from(dotWrap.querySelectorAll('.doc-dot')) : [];

            if (slides.length <= 1) return;

            sliders[key] = { slides, dots, current: 0, color };
            // Start auto-slide
            sliders[key].timer = setInterval(function() {
                const s = sliders[key];
                sliderGoTo(key, (s.current + 1) % s.slides.length);
            }, INTERVAL);

            // Pause on hover
            el.addEventListener('mouseenter', function() {
                clearInterval(sliders[key].timer);
            });
            el.addEventListener('mouseleave', function() {
                const s = sliders[key];
                s.timer = setInterval(function() {
                    sliderGoTo(key, (s.current + 1) % s.slides.length);
                }, INTERVAL);
            });
        });
    }

    window.sliderGoTo = function(key, index) {
        const s = sliders[key];
        if (!s) return;
        // Out
        s.slides[s.current].style.opacity = '0';
        s.slides[s.current].style.zIndex  = '0';
        // In
        s.slides[index].style.opacity = '1';
        s.slides[index].style.zIndex  = '1';
        // Update dots
        s.dots.forEach(function(dot, i) {
            if (i === index) {
                dot.style.width      = '16px';
                dot.style.background = s.color;
            } else {
                dot.style.width      = '5px';
                dot.style.background = s.color + '40';
            }
        });
        s.current = index;
    };

    document.addEventListener('DOMContentLoaded', initSliders);
})();
</script>

@endsection