@extends('portfolio')

@section('title', 'FARIZ_ALFADH // LIVE_COMMS')

@section('content')

{{-- Header --}}
<div class="fade-in-up">
    <p class="section-label mb-3">LIVE_COMMS // DATA_STREAM</p>
    <h1 class="font-mono font-black text-2xl md:text-3xl tracking-tight mb-1" style="color:#e0e0e0;">
        LIVE<span class="neon-text">_</span>COMMS
        <span class="cursor"></span>
    </h1>
    <p class="font-mono text-xs" style="color:#7a8098;">
        &gt; Transmisi pesan aktif. Silakan masukkan packet data di bawah.
    </p>
</div>

@if (session('status'))
    <div class="t-panel mb-4 mt-4 p-3 fade-in-up" style="border-color: rgba(0,255,65,0.4); background: rgba(0,255,65,0.05);">
        <p class="font-mono text-xs font-bold text-green-400">>> {{ session('status') }}</p>
    </div>
@endif

{{-- Wrapper grid --}}
<div class="grid lg:grid-cols-2 gap-4 lg:gap-6 mt-4 fade-in-up fade-in-up-delay-1">

    {{-- Form kirim pesan --}}
    <div class="t-panel">
        <div class="t-titlebar">
            <span class="t-titlebar-dot" style="background:var(--neon)"></span>
            <span class="t-titlebar-label">SEND_TRANSMISSION</span>
        </div>
        <div class="p-4">
            <form action="{{ route('chat.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block font-mono text-[10px] tracking-widest text-[#4a6050] mb-1.5 uppercase">IDENTIFIER [OPSIONAL]</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                           class="w-full px-3 py-2 bg-[#0a0f0a] border border-[#1a241a] text-sm text-[#c0c0c0] font-mono focus:outline-none focus:border-[var(--neon)] focus:shadow-[0_0_8px_rgba(0,255,65,0.2)]"
                           placeholder="Guest_User">
                </div>
                <div>
                    <label for="content" class="block font-mono text-[10px] tracking-widest text-[#4a6050] mb-1.5 uppercase">PACKET_DATA *</label>
                    <textarea name="content" id="content" rows="4" required
                              class="w-full px-3 py-2 bg-[#0a0f0a] border border-[#1a241a] text-sm text-[#c0c0c0] font-mono focus:outline-none focus:border-[var(--neon)] focus:shadow-[0_0_8px_rgba(0,255,65,0.2)] resize-none"
                              placeholder="Tulis pesanmu di sini..."></textarea>
                    @error('content')
                        <p class="mt-1 font-mono text-[10px] text-red-500">>> ERROR: {{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn-neon w-full justify-center mt-2">
                    EXECUTE // SEND
                </button>
            </form>
        </div>
    </div>

    {{-- Daftar pesan --}}
    <div class="t-panel flex flex-col h-[400px] lg:h-auto lg:max-h-[500px]">
        <div class="t-titlebar">
            <span class="t-titlebar-dot" style="background:var(--neon-sec)"></span>
            <span class="t-titlebar-label">INCOMING_PACKETS // LOGS</span>
        </div>
        
        <div class="p-3 flex-1 overflow-y-auto scrollbar-thin">
            @if ($messages->isEmpty())
                <div class="flex items-center justify-center p-6 border border-dashed border-[#1a241a] bg-[#0a0f0a]/50">
                    <p class="font-mono text-xs text-[#4a6050]">>> NO_DATA_AVAILABLE</p>
                </div>
            @else
                <div class="space-y-3">
                    @foreach ($messages as $message)
                    <div class="border border-[#1a241a] bg-[#0a0f0a] p-3 hover:border-[var(--neon)]/30 transition-colors group">
                        <div class="flex justify-between items-start mb-2 border-b border-[#1a241a] pb-2">
                            <div>
                                <h4 class="font-mono text-xs font-bold text-[#e0e0e0]">{{ $message->name ?: 'Guest_User' }}</h4>
                                <p class="font-mono text-[9px] text-[#4a6050] mt-0.5">{{ \Carbon\Carbon::parse($message->created_at)->format('Y-M-d H:i:s') }}</p>
                            </div>
                            <form method="POST" action="{{ route('chat.destroy', $message->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-mono text-[9px] tracking-widest text-[#8a3333] hover:text-red-500 hover:scale-105 transition-all">
                                    [X] DELETE
                                </button>
                            </form>
                        </div>
                        <p class="font-sans text-xs text-[#a0a8a0] leading-relaxed break-words whitespace-pre-wrap">{{ $message->content }}</p>
                    </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

</div>
@endsection