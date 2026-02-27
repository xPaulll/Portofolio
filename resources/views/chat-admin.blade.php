@extends('portfolio')

@section('title', 'Obrolan - Fariz')

@section('content')
<section class="space-y-6">
    <div>
        <p class="text-xs uppercase tracking-[0.25em] text-zinc-400 mb-1">OBROLAN</p>
        <h1 class="text-2xl md:text-3xl font-semibold text-zinc-100">Ruang Obrolan</h1>
        <p class="text-sm text-zinc-400 max-w-2xl mt-2">
            Kirim pesan, saran, atau pertanyaan di bawah. Kamu juga bisa melihat dan menghapus pesan di daftar riwayat.
        </p>
    </div>

    @if (session('status'))
        <div class="px-3 py-2 rounded-xl bg-emerald-900/40 border border-emerald-600 text-sm text-emerald-200">
            {{ session('status') }}
        </div>
    @endif

    {{-- Form kirim pesan --}}
    <div class="border border-zinc-800 bg-zinc-950/70 rounded-2xl p-4 md:p-5">
        <h2 class="text-sm font-semibold text-zinc-100 mb-3">Kirim pesan</h2>
        <form action="{{ route('chat.store') }}" method="POST" class="space-y-3">
            @csrf
            <div>
                <label for="name" class="block text-xs text-zinc-400 mb-1">Nama (opsional)</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}"
                       class="w-full px-3 py-2 rounded-lg bg-zinc-900 border border-zinc-800 text-sm text-zinc-200 placeholder:text-zinc-500 focus:outline-none focus:border-accent"
                       placeholder="Nama kamu">
            </div>
            <div>
                <label for="content" class="block text-xs text-zinc-400 mb-1">Pesan <span class="text-red-400">*</span></label>
                <textarea name="content" id="content" rows="3" required
                          class="w-full px-3 py-2 rounded-lg bg-zinc-900 border border-zinc-800 text-sm text-zinc-200 placeholder:text-zinc-500 focus:outline-none focus:border-accent resize-none"
                          placeholder="Tulis pesanmu...">{{ old('content') }}</textarea>
                @error('content')
                    <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit"
                    class="px-4 py-2 rounded-full bg-accent text-black font-semibold text-sm hover:bg-white transition-colors">
                Kirim
            </button>
        </form>
    </div>

    {{-- Daftar pesan --}}
    <div>
        <h2 class="text-sm font-semibold text-zinc-100 mb-3">Riwayat pesan</h2>
        @if ($messages->isEmpty())
            <div class="border border-zinc-800 bg-zinc-950/70 rounded-2xl p-5 text-sm text-zinc-400">
                Belum ada pesan.
            </div>
        @else
        <div class="border border-zinc-800 bg-zinc-950/70 rounded-2xl overflow-hidden">
            <div class="max-h-[380px] overflow-y-auto scrollbar-thin divide-y divide-zinc-800 text-sm">
                @foreach ($messages as $message)
                    <div class="px-4 py-3 flex items-start justify-between gap-4">
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <span class="font-semibold text-zinc-100">
                                    {{ $message->name ?: 'Pengunjung' }}
                                </span>
                                <span class="text-[11px] text-zinc-500">
                                    {{ \Carbon\Carbon::parse($message->created_at)->format('d M Y, H:i') }}
                                </span>
                            </div>
                            <p class="text-xs text-zinc-300">
                                {{ $message->content }}
                            </p>
                        </div>

                        <form method="POST"
                              action="{{ route('chat.destroy', $message->id) }}"
                              onsubmit="return confirm('Yakin mau menghapus pesan ini?');">
                            @csrf
                            @method('DELETE')
                            <button
                                type="submit"
                                class="px-3 py-1.5 rounded-full border border-red-700 text-[11px] text-red-300 hover:bg-red-700/20 transition-colors">
                                Hapus
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>
@endsection