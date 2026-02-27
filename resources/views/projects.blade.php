@extends('portfolio')

@section('title', 'Proyek - Fariz')

@section('content')
<section class="space-y-4">
    <div>
        <p class="text-xs uppercase tracking-[0.25em] text-zinc-400 mb-1">PROYEK</p>
        <h1 class="text-2xl md:text-3xl font-semibold text-zinc-100">Proyek Terpilih</h1>
        <p class="text-sm text-zinc-400 max-w-2xl mt-2">
            Beberapa pekerjaan yang pernah saya kerjakan terkait otomasi industri, SCADA, dan IoT.
        </p>
    </div>

    <div class="grid md:grid-cols-2 gap-4">
        @foreach ([
            [
                'title' => 'SC-MANURI (Sistem Cerdar Manajemen Nutrusi)',
                'period' => '2025',
                'desc' => 'Integrasi Internet of Things (IoT) dan model prediktif machine learning untuk manajemen nutrisi dinamis pada budidaya pakcoy hidroponik',
                'tags' => ['IoT', 'Rest API', 'Laravel', 'Dashboard'],
            ],
            [
                'title' => 'Reverse Osmosis Water Treatment System',
                'period' => '2023',
                'desc' => 'Sistem pemurnian air tingkat lanjut yang menggunakan tekanan tinggi untuk memaksa air melewati membran semipermeabel dengan pori-pori sangat kecil',
                'tags' => ['PLC', 'HMI'],
            ],
            [
                'title' => 'Coming Soon',
                'period' => 'XXXX',
                'desc' => 'XXXXX',
                'tags' => ['XXX', 'XXX'],
            ],
            [
                'title' => 'Coming Soon',
                'period' => 'XXXX',
                'desc' => 'XXXXX',
                'tags' => ['XXX', 'XXX'],
            ],
        ] as $project)
            <article
                class="border border-zinc-800 bg-zinc-950/70 rounded-2xl p-4 group hover:border-accent/80 transition-colors">
                <div class="flex items-start justify-between gap-3 mb-2">
                    <h3 class="text-sm font-semibold text-zinc-100">
                        {{ $project['title'] }}
                    </h3>
                    <span class="text-[11px] text-zinc-500">
                        {{ $project['period'] }}
                    </span>
                </div>
                <p class="text-xs text-zinc-400 mb-3">
                    {{ $project['desc'] }}
                </p>
                <div class="flex flex-wrap gap-1.5 text-[11px]">
                    @foreach ($project['tags'] as $tag)
                        <span
                            class="px-2 py-1 rounded-full bg-zinc-900 border border-zinc-800 text-zinc-300">
                            {{ $tag }}
                        </span>
                    @endforeach
                </div>
            </article>
        @endforeach
    </div>
</section>
@endsection