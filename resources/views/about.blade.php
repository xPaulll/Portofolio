@extends('portfolio')

@section('title', 'Tentang - Fariz')

@section('content')
<section class="border border-zinc-800/80 bg-zinc-950/70 rounded-2xl p-6 md:p-8 backdrop-blur-sm">
    <p class="text-xs uppercase tracking-[0.25em] text-zinc-400 mb-3">
        HALO, SAYA
    </p>
    <h1 class="font-display text-3xl md:text-4xl lg:text-5xl font-semibold leading-tight mb-4">
        <span class="text-zinc-100">Fariz Al-Fadh</span>
        <span class="block text-zinc-400 text-xl md:text-2xl mt-1">
            Software & Automation Engineer | Industrial IoT Engineer
        </span>
    </h1>

    <p class="text-sm md:text-base text-zinc-300 mb-5 max-w-3xl">
        Seorang Software/Automation Engineer yang berdedikasi dalam membangun jembatan antara sistem fisik dan ekosistem digital. Saya spesialis dalam merancang solusi otomasi terintegrasi menggunakan teknologi
        <span class="font-semibold text-zinc-100">PLC</span>,
        <span class="font-semibold text-zinc-100">SCADA</span>, dan
        <span class="font-semibold text-zinc-100">Internet of Things</span>.
        untuk menciptakan sistem industri yang modern dan efisien. 
    </p>
    <p class="text-sm md:text-base text-zinc-300 mb-5 max-w-3xl">
    Fokus utama saya adalah menghadirkan arsitektur sistem yang tidak hanya stabil dan scalable, 
    tetapi juga memberikan transparansi data yang mudah dipantau secara real-time. Dengan memadukan keahlian kontrol industri konvensional dan tren teknologi masa kini, saya berkomitmen untuk memastikan setiap proyek memberikan kejelasan operasional serta dampak nyata bagi produktivitas perusahaan.
    </p>
    
    <div
        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-zinc-900 border border-zinc-700 text-[11px] text-zinc-300 mb-5">
        <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
        Terbuka untuk kolaborasi & project freelance
    </div>

    <div class="flex flex-wrap gap-3 text-xs">
        <a href="{{ route('projects') }}"
           class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-accent text-black font-semibold uppercase tracking-wide text-[11px] hover:bg-white transition-colors">
            Lihat Proyek
        </a>
        <a href="{{ route('contact') }}"
           class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-zinc-700 text-zinc-200 hover:border-accent hover:text-accent transition-colors">
            Hubungi Saya
        </a>
    </div>
</section>
@endsection