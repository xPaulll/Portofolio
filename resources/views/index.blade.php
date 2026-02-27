<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Portofolio - Alfadh</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Tailwind via CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        accent: '#f97316', // aksen oranye mirip referensi
                        accentSoft: '#fed7aa',
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                        display: ['Instrument Sans', 'system-ui', 'sans-serif'],
                    },
                },
            },
        }
    </script>

    <style>
        .scrollbar-thin::-webkit-scrollbar {
            width: 4px;
            height: 4px;
        }
        .scrollbar-thin::-webkit-scrollbar-thumb {
            background-color: #4b5563;
            border-radius: 9999px;
        }
    </style>
</head>
<body class="min-h-screen bg-[#050509] text-zinc-100 font-sans antialiased">

    {{-- Background --}}
    <div class="fixed inset-0 -z-10 bg-gradient-to-br from-black via-[#050509] to-zinc-900"></div>
    <div class="fixed inset-0 -z-10 opacity-30 bg-[radial-gradient(circle_at_top,_#f97316_0,_transparent_55%)]"></div>

    <div class="max-w-6xl mx-auto px-4 md:px-6 py-6 md:py-10 flex flex-col md:flex-row gap-8 md:gap-10">

        {{-- SIDEBAR / HEADER KIRI --}}
        <aside class="md:w-72 flex-shrink-0">
            <div class="border border-zinc-800/80 bg-zinc-950/70 rounded-2xl p-5 md:p-6 backdrop-blur-sm">
                <div class="flex items-center gap-3 mb-4">
                    <div
                        class="w-11 h-11 rounded-2xl bg-gradient-to-tr from-accent to-orange-600 flex items-center justify-center text-sm font-bold text-black">
                        FZ
                    </div>
                    <div>
                        <p class="text-xs uppercase tracking-[0.25em] text-zinc-400">Portfolio</p>
                        <p class="font-semibold text-sm">Fariz Al-Fadh</p>
                    </div>
                </div>

                <p class="text-xs text-zinc-400 mb-4">
                    Software / Automation Engineer yang fokus pada integrasi
                    <span class="text-zinc-100 font-medium">PLC, SCADA, dan IoT</span> untuk sistem industri modern.
                </p>

                <div class="space-y-2 text-xs mb-5">
                    <div class="flex items-center justify-between">
                        <span class="text-zinc-500">Domisili</span>
                        <span class="text-zinc-200 font-medium">Kota Bandung / Jawa Barat</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-zinc-500">Preferensi</span>
                        <span class="text-zinc-200 font-medium">Remot / Hybrid</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-zinc-500">Status</span>
                        <span class="flex items-center gap-1 text-emerald-400 font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                            Available
                        </span>
                    </div>
                </div>

                <nav class="border-t border-zinc-800 pt-4 mt-4 space-y-1 text-sm">
                    <a href="#about" class="block py-1 text-zinc-300 hover:text-accent transition-colors">
                        Tentang
                    </a>
                    <a href="#skills" class="block py-1 text-zinc-300 hover:text-accent transition-colors">
                        Keahlian
                    </a>
                    <a href="#projects" class="block py-1 text-zinc-300 hover:text-accent transition-colors">
                        Proyek
                    </a>
                    <a href="#contact" class="block py-1 text-zinc-300 hover:text-accent transition-colors">
                        Kontak
                    </a>
                </nav>
            </div>
        </aside>

        {{-- KONTEN UTAMA --}}
        <main class="flex-1 space-y-10 md:space-y-14">

            {{-- HERO --}}
            <section id="about"
                     class="border border-zinc-800/80 bg-zinc-950/70 rounded-2xl p-6 md:p-8 backdrop-blur-sm">
                <p class="text-xs uppercase tracking-[0.25em] text-zinc-400 mb-3">
                    HALO, SAYA
                </p>
                <h1 class="font-display text-3xl md:text-4xl lg:text-5xl font-semibold leading-tight mb-4">
                    <span class="text-zinc-100">Fariz Al-Fadh</span>
                    <span class="block text-zinc-400 text-xl md:text-2xl mt-1">
                        Software / Automation Engineer & Industrial IoT Enthusiast
                    </span>
                </h1>

                <p class="text-sm md:text-base text-zinc-300 mb-5 max-w-3xl">
                    Saya membantu perusahaan menghubungkan dunia fisik dan digital melalui solusi
                    <span class="font-semibold text-zinc-100">otomasi industri</span>,
                    <span class="font-semibold text-zinc-100">SCADA</span>, dan
                    <span class="font-semibold text-zinc-100">Internet of Things</span>.
                    Fokus saya adalah merancang sistem yang stabil, mudah dipantau, dan scalable.
                </p>

                <div
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-zinc-900 border border-zinc-700 text-[11px] text-zinc-300 mb-5">
                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                    Terbuka untuk kolaborasi & project freelance
                </div>

                <div class="flex flex-wrap gap-3 text-xs">
                    <a href="#projects"
                       class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-accent text-black font-semibold uppercase tracking-wide text-[11px] hover:bg-white transition-colors">
                        Lihat Proyek
                    </a>
                    <a href="#contact"
                       class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-zinc-700 text-zinc-200 hover:border-accent hover:text-accent transition-colors">
                        Hubungi Saya
                    </a>
                </div>
            </section>

            {{-- SKILLS --}}
            <section id="skills" class="space-y-4">
                <div class="flex items-center justify-between">
                    <h2 class="text-lg md:text-xl font-semibold text-zinc-100">Keahlian Utama</h2>
                    <span class="text-xs uppercase tracking-[0.25em] text-zinc-500">TECH STACK</span>
                </div>

                <div class="grid md:grid-cols-3 gap-4">
                    <div class="border border-zinc-800 bg-zinc-950/70 rounded-2xl p-4">
                        <h3 class="text-sm font-semibold mb-2">PLC & Otomasi</h3>
                        <p class="text-xs text-zinc-400 mb-3">
                            Desain logic dan pemrograman PLC untuk line produksi, safety interlock, dan proses
                            kontinyu.
                        </p>
                        <div class="flex flex-wrap gap-1.5 text-[11px] text-zinc-300">
                            <span class="px-2 py-1 rounded-full bg-zinc-900 border border-zinc-800">Siemens</span>
                            <span class="px-2 py-1 rounded-full bg-zinc-900 border border-zinc-800">Omron</span>
                            <span class="px-2 py-1 rounded-full bg-zinc-900 border border-zinc-800">Allen-Bradley</span>
                        </div>
                    </div>

                    <div class="border border-zinc-800 bg-zinc-950/70 rounded-2xl p-4">
                        <h3 class="text-sm font-semibold mb-2">SCADA & HMI</h3>
                        <p class="text-xs text-zinc-400 mb-3">
                            Pembuatan dashboard monitoring, alarm, dan histori data dengan tampilan yang bersih dan jelas.
                        </p>
                        <div class="flex flex-wrap gap-1.5 text-[11px] text-zinc-300">
                            <span class="px-2 py-1 rounded-full bg-zinc-900 border border-zinc-800">WinCC</span>
                            <span class="px-2 py-1 rounded-full bg-zinc-900 border border-zinc-800">Ignition</span>
                            <span class="px-2 py-1 rounded-full bg-zinc-900 border border-zinc-800">FactoryTalk</span>
                        </div>
                    </div>

                    <div class="border border-zinc-800 bg-zinc-950/70 rounded-2xl p-4">
                        <h3 class="text-sm font-semibold mb-2">IoT & Web</h3>
                        <p class="text-xs text-zinc-400 mb-3">
                            Integrasi sensor ke cloud, API, dan dashboard web untuk analitik dan reporting.
                        </p>
                        <div class="flex flex-wrap gap-1.5 text-[11px] text-zinc-300">
                            <span class="px-2 py-1 rounded-full bg-zinc-900 border border-zinc-800">MQTT</span>
                            <span class="px-2 py-1 rounded-full bg-zinc-900 border border-zinc-800">REST API</span>
                            <span class="px-2 py-1 rounded-full bg-zinc-900 border border-zinc-800">Laravel</span>
                        </div>
                    </div>
                </div>
            </section>

            {{-- PROJECTS --}}
            <section id="projects" class="space-y-4">
                <div class="flex items-center justify-between">
                    <h2 class="text-lg md:text-xl font-semibold text-zinc-100">Proyek Terpilih</h2>
                    <span class="text-xs uppercase tracking-[0.25em] text-zinc-500">PROJECTS</span>
                </div>

                <div class="grid md:grid-cols-2 gap-4">
                    @foreach ([
                        [
                            'title' => 'SCADA Monitoring Plant Manufaktur',
                            'period' => '2024',
                            'desc' => 'Integrasi beberapa PLC ke sistem SCADA dengan dashboard real-time, alarm, dan logging ke database.',
                            'tags' => ['SCADA', 'PLC', 'Historian'],
                        ],
                        [
                            'title' => 'IoT Energy Monitoring',
                            'period' => '2023',
                            'desc' => 'Sistem pemantauan konsumsi energi berbasis IoT dengan visualisasi web dan notifikasi threshold.',
                            'tags' => ['IoT', 'MQTT', 'Laravel'],
                        ],
                        [
                            'title' => 'Line Control Packaging',
                            'period' => '2023',
                            'desc' => 'Pemrograman PLC untuk line packaging dengan mode manual, semi-auto, dan otomatis penuh.',
                            'tags' => ['PLC', 'HMI'],
                        ],
                        [
                            'title' => 'Dashboard OEE Produksi',
                            'period' => '2022',
                            'desc' => 'Perhitungan OEE dan visualisasi performa mesin berbasis data produksi aktual.',
                            'tags' => ['Dashboard', 'OEE'],
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

            {{-- CONTACT --}}
            <section id="contact"
                     class="border border-zinc-800 bg-zinc-950/70 rounded-2xl p-6 md:p-7 space-y-4">
                <h2 class="text-lg md:text-xl font-semibold text-zinc-100">Kontak & Kolaborasi</h2>
                <p class="text-sm text-zinc-300 max-w-2xl">
                    Tertarik berkolaborasi, membutuhkan konsultasi otomasi industri, atau ingin membahas project baru?
                    Kamu bisa menghubungi saya melalui email atau kirim pesan cepat lewat kolom chat di pojok kanan bawah.
                </p>

                <div class="flex flex-wrap items-center gap-3 text-sm">
                    <div class="px-3 py-2 rounded-xl bg-zinc-900 border border-zinc-800">
                        <span class="text-zinc-500 text-xs">Email</span>
                        <p class="text-zinc-100 text-sm font-medium">
                            youremail@example.com
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

        </main>
    </div>

    {{-- LIVE CHAT COLUMN (tetap seperti sebelumnya) --}}
    <div class="fixed bottom-4 right-4 w-full max-w-xs md:max-w-sm text-sm z-50">
        <div
            class="bg-zinc-950/95 border border-zinc-800 rounded-2xl shadow-2xl overflow-hidden backdrop-blur-md flex flex-col max-h-[420px]">
            <div class="flex items-center justify-between px-4 py-3 border-b border-zinc-800">
                <div>
                    <p class="text-xs uppercase tracking-[0.25em] text-zinc-500">
                        LIVE CHAT
                    </p>
                    <p class="text-xs text-zinc-400">
                        Tanyakan apa saja tentang project.
                    </p>
                </div>
                <span class="w-2 h-2 rounded-full bg-green-500"></span>
            </div>

            <div id="chat-messages"
                 class="flex-1 px-4 py-3 space-y-2 overflow-y-auto scrollbar-thin text-xs bg-gradient-to-b from-zinc-950/90 to-black/90">
                <p class="text-zinc-500">
                    Memuat pesan...
                </p>
            </div>

            <form id="chat-form" class="border-t border-zinc-800 bg-zinc-950/90 px-4 py-3">
                <div class="flex flex-col gap-2">
                    <input
                        type="text"
                        name="name"
                        id="chat-name"
                        placeholder="Nama (opsional)"
                        class="w-full px-3 py-2 rounded-lg bg-zinc-900 border border-zinc-800 text-xs text-zinc-200 placeholder:text-zinc-600 focus:outline-none focus:border-accent"
                    >
                    <div class="flex gap-2">
                        <textarea
                            name="content"
                            id="chat-content"
                            rows="2"
                            placeholder="Tulis pesanmu..."
                            class="flex-1 px-3 py-2 rounded-lg bg-zinc-900 border border-zinc-800 text-xs text-zinc-200 placeholder:text-zinc-600 focus:outline-none focus:border-accent resize-none"
                        ></textarea>
                        <button
                            type="submit"
                            class="self-end px-4 py-2 rounded-lg bg-accent text-black font-semibold text-[11px] tracking-wide uppercase hover:bg-white transition-colors">
                            Kirim
                        </button>
                    </div>
                    <p id="chat-error" class="text-[11px] text-red-400 hidden">
                        Pesan tidak boleh kosong.
                    </p>
                </div>
            </form>
        </div>
    </div>

    {{-- AJAX untuk Live Chat (sama seperti sebelumnya) --}}
    <script>
        const messagesContainer = document.getElementById('chat-messages');
        const chatForm = document.getElementById('chat-form');
        const chatContent = document.getElementById('chat-content');
        const chatName = document.getElementById('chat-name');
        const chatError = document.getElementById('chat-error');

        async function fetchMessages() {
            try {
                const response = await fetch(`{{ route('chat.index') }}`);
                if (!response.ok) return;

                const data = await response.json();
                renderMessages(data);
            } catch (e) {}
        }

        function renderMessages(messages) {
            if (!Array.isArray(messages) || messages.length === 0) {
                messagesContainer.innerHTML =
                    '<p class="text-zinc-500 text-xs">Belum ada pesan. Jadilah yang pertama mengirim pesan.</p>';
                return;
            }

            messagesContainer.innerHTML = '';

            messages.forEach(msg => {
                const wrapper = document.createElement('div');
                wrapper.className = 'flex flex-col gap-0.5 text-xs';

                const name = msg.name || 'Pengunjung';
                const time = msg.created_at ? new Date(msg.created_at).toLocaleTimeString('id-ID', {
                    hour: '2-digit',
                    minute: '2-digit'
                }) : '';

                wrapper.innerHTML = `
                    <div class="flex items-baseline justify-between">
                        <span class="font-semibold text-zinc-200">${name}</span>
                        <span class="text-[10px] text-zinc-500">${time}</span>
                    </div>
                    <p class="text-zinc-300">${escapeHtml(msg.content)}</p>
                `;

                messagesContainer.appendChild(wrapper);
            });

            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }

        function escapeHtml(text) {
            if (!text) return '';
            return text
                .replace(/&/g, "&amp;")
                .replace(/</g, "&lt;")
                .replace(/>/g, "&gt;")
                .replace(/"/g, "&quot;")
                .replace(/'/g, "&#039;");
        }

        chatForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            const content = chatContent.value.trim();
            const name = chatName.value.trim();

            if (!content) {
                chatError.classList.remove('hidden');
                return;
            } else {
                chatError.classList.add('hidden');
            }

            try {
                const response = await fetch(`{{ route('chat.store') }}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': `{{ csrf_token() }}`,
                        'Accept': 'application/json',
                    },
                    body: JSON.stringify({ content, name })
                });

                if (response.status === 422) {
                    chatError.textContent = 'Pesan tidak boleh kosong atau terlalu panjang.';
                    chatError.classList.remove('hidden');
                    return;
                }

                if (!response.ok) return;

                chatContent.value = '';
                chatError.classList.add('hidden');
                fetchMessages();
            } catch (e) {}
        });

        fetchMessages();
        setInterval(fetchMessages, 4000);
    </script>
</body>
</html>