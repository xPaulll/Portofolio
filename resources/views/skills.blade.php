@extends('portfolio')

@section('title', 'Keahlian - Fariz')

@section('content')
<section class="space-y-4">
    <div>
        <p class="text-xs uppercase tracking-[0.25em] text-zinc-400 mb-1">KEAHLIAN</p>
        <h1 class="text-2xl md:text-3xl font-semibold text-zinc-100">Keahlian Utama</h1>
        <p class="text-sm text-zinc-400 max-w-2xl mt-2">
            Kombinasi otomasi industri dan pengembangan software untuk membuat sistem yang andal dan mudah di-maintain.
        </p>
    </div>

    <div class="grid md:grid-cols-3 gap-4">
        {{-- PLC --}}
        <div class="border border-zinc-800 bg-zinc-950/70 rounded-2xl p-4">
            <h3 class="text-sm font-semibold mb-2">PLC & Otomasi</h3>
            <p class="text-xs text-zinc-400 mb-3">
                Desain logic dan pemrograman PLC untuk line produksi, safety interlock, dan proses kontinyu.
            </p>
            <div class="flex flex-wrap gap-1.5 text-[11px] text-zinc-300">
                <span class="px-2 py-1 rounded-full bg-zinc-900 border border-zinc-800">Siemens</span>
                <span class="px-2 py-1 rounded-full bg-zinc-900 border border-zinc-800">Omron</span>
                <span class="px-2 py-1 rounded-full bg-zinc-900 border border-zinc-800">Schneider</span>
            </div>
        </div>

        {{-- SCADA --}}
        <div class="border border-zinc-800 bg-zinc-950/70 rounded-2xl p-4">
            <h3 class="text-sm font-semibold mb-2">SCADA & HMI</h3>
            <p class="text-xs text-zinc-400 mb-3">
                Pembuatan dashboard monitoring, alarm, dan histori data dengan tampilan yang bersih dan jelas.
            </p>
            <div class="flex flex-wrap gap-1.5 text-[11px] text-zinc-300">
                <span class="px-2 py-1 rounded-full bg-zinc-900 border border-zinc-800">WinCC</span>
                <span class="px-2 py-1 rounded-full bg-zinc-900 border border-zinc-800">Ignition</span>
                <span class="px-2 py-1 rounded-full bg-zinc-900 border border-zinc-800">Weintek</span>
            </div>
        </div>

        {{-- IoT & Web --}}
        <div class="border border-zinc-800 bg-zinc-950/70 rounded-2xl p-4">
            <h3 class="text-sm font-semibold mb-2">IoT & Web</h3>
            <p class="text-xs text-zinc-400 mb-3">
                Integrasi sensor ke cloud, API, dan dashboard web untuk analitik dan reporting.
            </p>
            <div class="flex flex-wrap gap-1.5 text-[11px] text-zinc-300">
                <span class="px-2 py-1 rounded-full bg-zinc-900 border border-zinc-800">MQTT</span>
                <span class="px-2 py-1 rounded-full bg-zinc-900 border border-zinc-800">REST API</span>
                <span class="px-2 py-1 rounded-full bg-zinc-900 border border-zinc-800">Lora</span>
                <span class="px-2 py-1 rounded-full bg-zinc-900 border border-zinc-800">Webhook</span>
                <span class="px-2 py-1 rounded-full bg-zinc-900 border border-zinc-800">Laravel</span>
            </div>
        </div>
    </div>
</section>
@endsection