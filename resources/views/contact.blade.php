@extends('portfolio')

@section('title', 'Kontak - Fariz')

@section('content')
<section class="border border-zinc-800 bg-zinc-950/70 rounded-2xl p-6 md:p-7 space-y-4">
    <div>
        <p class="text-xs uppercase tracking-[0.25em] text-zinc-400 mb-1">KONTAK</p>
        <h1 class="text-2xl md:text-3xl font-semibold text-zinc-100">Kontak & Kolaborasi</h1>
        <p class="text-sm text-zinc-300 max-w-2xl mt-2">
            Tertarik berkolaborasi, membutuhkan konsultasi otomasi industri, atau ingin membahas project baru?
            Kamu bisa menghubungi saya melalui kanal di bawah atau kirim pesan cepat lewat kolom chat di pojok kanan bawah.
        </p>
    </div>

    <div class="flex flex-wrap items-center gap-3 text-sm">
        <div class="px-3 py-2 rounded-xl bg-zinc-900 border border-zinc-800">
            <span class="text-zinc-500 text-xs">Instagram</span>
            <p class="text-zinc-100 text-sm font-medium">
                @alfadh2
            </p>
        </div>
        <div class="px-3 py-2 rounded-xl bg-zinc-900 border border-zinc-800">
            <span class="text-zinc-500 text-xs">WhatsApp</span>
            <p class="text-zinc-100 text-sm font-medium">
                +62 xxx xxxx xxxx
            </p>
        </div>
    </div>
</section>
@endsection