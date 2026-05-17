<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beasiswa Tersimpan - Student Hub</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['"Plus Jakarta Sans"', 'sans-serif'] },
                    colors: {
                        background: '#070B14',
                        surface: '#0F1523',
                        surface2: '#161E31',
                        borderCol: '#1E293B',
                        primary: '#6366F1',
                        primaryHover: '#4F46E5',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #070B14;
            background-image:
                radial-gradient(at 0% 0%, rgba(99,102,241,0.1) 0px, transparent 50%),
                radial-gradient(at 100% 0%, rgba(139,92,246,0.1) 0px, transparent 50%);
            background-attachment: fixed;
        }
    </style>
</head>
<body class="text-slate-300 antialiased min-h-screen flex flex-col">

    <!-- NAVBAR -->
    <nav class="sticky top-0 z-50 bg-background/80 backdrop-blur-md border-b border-borderCol">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="/" class="flex items-center gap-2">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center shadow-lg shadow-indigo-500/20">
                        <i data-lucide="graduation-cap" class="text-white w-6 h-6"></i>
                    </div>
                    <span class="font-bold text-xl text-white tracking-tight">Student<span class="text-primary">Hub</span></span>
                </a>

                <!-- Menu Tengah -->
                <div class="hidden md:flex space-x-1">
                    <a href="/" class="px-4 py-2 rounded-lg text-sm font-medium text-slate-400 hover:text-white hover:bg-white/5 transition">Home</a>
                    <a href="/#about" class="px-4 py-2 rounded-lg text-sm font-medium text-slate-400 hover:text-white hover:bg-white/5 transition">About</a>
                    <a href="/#beasiswa" class="px-4 py-2 rounded-lg text-sm font-medium text-slate-400 hover:text-white hover:bg-white/5 transition">Beasiswa</a>
                </div>

                <!-- Menu Kanan -->
                <div class="flex items-center gap-3">
                    <a href="/saved" class="flex items-center gap-2 bg-indigo-500/10 border border-indigo-500/30 px-4 py-2 rounded-lg">
                        <i data-lucide="bookmark" class="w-4 h-4 text-indigo-400"></i>
                        <span class="text-sm font-semibold text-indigo-300 hidden sm:block">Tersimpan</span>
                    </a>
                    <a href="/account" class="flex items-center gap-2 bg-white/5 border border-white/10 hover:bg-white/10 px-4 py-2 rounded-lg transition">
                        <div class="w-6 h-6 rounded-full bg-indigo-500/20 flex items-center justify-center text-indigo-400">
                            <i data-lucide="user" class="w-3.5 h-3.5"></i>
                        </div>
                        <span class="text-sm font-medium text-white hidden sm:block">Account</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- PAGE HEADER -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-8 w-full">
        <div class="flex items-start justify-between gap-4 flex-wrap">
            <div>
                <div class="mb-3">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-400 text-xs font-semibold uppercase tracking-wider">
                        <i data-lucide="bookmark" class="w-3 h-3"></i>
                        Koleksi Saya
                    </span>
                </div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-white mb-2">Beasiswa Tersimpan</h1>
                <p class="text-slate-400">Daftar beasiswa yang kamu tandai untuk dilihat nanti.</p>
            </div>
            <a href="/" class="flex items-center gap-2 mt-1 px-5 py-2.5 rounded-xl bg-surface border border-borderCol hover:bg-surface2 text-white text-sm font-semibold transition">
                <i data-lucide="arrow-left" class="w-4 h-4"></i>
                Cari Beasiswa
            </a>
        </div>
    </div>

    <!-- MAIN -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20 w-full flex-1">

        <?php if (empty($programs)): ?>
            <!-- EMPTY STATE -->
            <div class="flex flex-col items-center justify-center py-24 bg-surface border border-borderCol rounded-2xl text-center">
                <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-indigo-500/20 to-purple-500/20 border border-indigo-500/20 flex items-center justify-center mb-6">
                    <i data-lucide="bookmark-x" class="w-10 h-10 text-indigo-400"></i>
                </div>
                <h2 class="text-2xl font-bold text-white mb-3">Belum ada bookmark</h2>
                <p class="text-slate-400 mb-2 max-w-sm">Kamu belum menyimpan beasiswa apapun. Mulai jelajahi dan klik ikon bookmark untuk menyimpannya.</p>
                <p class="text-slate-500 text-sm mb-8">Semua beasiswa tersimpan akan muncul di halaman ini.</p>
                <a href="/" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-primary hover:bg-primaryHover text-white font-semibold text-sm transition shadow-lg shadow-indigo-500/20">
                    <i data-lucide="search" class="w-4 h-4"></i>
                    Jelajahi Beasiswa
                </a>
            </div>

        <?php else: ?>

            <!-- COUNT BADGE -->
            <div class="flex items-center gap-3 mb-6 px-4 py-3 bg-indigo-500/10 border border-indigo-500/20 rounded-xl w-fit">
                <i data-lucide="bookmark-check" class="w-4 h-4 text-indigo-400 shrink-0"></i>
                <p class="text-sm text-indigo-300">
                    <strong class="text-white"><?= count($programs) ?> beasiswa</strong> tersimpan di koleksi kamu
                </p>
            </div>

            <!-- GRID -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($programs as $p): ?>
                    <div class="group flex flex-col bg-surface border border-borderCol rounded-2xl p-6 hover:border-indigo-500/50 hover:shadow-[0_0_30px_-5px_rgba(99,102,241,0.15)] transition-all duration-300">

                        <!-- Card Header -->
                        <div class="flex justify-between items-start gap-4 mb-4">
                            <div class="h-12 w-12 rounded-xl bg-gradient-to-br from-indigo-500/20 to-purple-500/20 flex items-center justify-center border border-indigo-500/20 text-indigo-400 shrink-0">
                                <i data-lucide="award" class="w-6 h-6"></i>
                            </div>
                            <!-- Remove bookmark -->
                            <a href="/bookmark/remove/<?= $p['id'] ?? '' ?>" class="text-indigo-400 hover:text-rose-400 transition p-1" title="Hapus dari simpanan">
                                <i data-lucide="bookmark-minus" class="w-5 h-5"></i>
                            </a>
                        </div>

                        <!-- Title -->
                        <h3 class="text-base font-bold text-white mb-3 line-clamp-2 leading-snug group-hover:text-indigo-400 transition-colors flex-grow">
                            <?= esc($p['title']) ?>
                        </h3>

                        <!-- Meta -->
                        <div class="space-y-2.5 mb-5 text-sm">
                            <?php if (!empty($p['source'])): ?>
                                <div class="flex items-start text-slate-400 gap-2.5">
                                    <i data-lucide="building-2" class="w-4 h-4 mt-0.5 shrink-0 text-slate-500"></i>
                                    <span><?= esc($p['source']) ?></span>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($p['deadline'])): ?>
                                <div class="flex items-center text-rose-400 font-medium gap-2.5">
                                    <i data-lucide="clock" class="w-4 h-4 shrink-0"></i>
                                    <span>Berakhir: <?= esc($p['deadline']) ?></span>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Badges -->
                        <?php if (!empty($p['jenjang']) || !empty($p['tipe']) || !empty($p['negara'])): ?>
                            <div class="flex flex-wrap gap-2 mb-5">
                                <?php if (!empty($p['jenjang'])): ?>
                                    <span class="px-2.5 py-1 rounded-md text-xs font-semibold bg-white/5 text-slate-300 border border-white/10">
                                        <?= esc($p['jenjang']) ?>
                                    </span>
                                <?php endif; ?>
                                <?php if (!empty($p['tipe'])): ?>
                                    <span class="px-2.5 py-1 rounded-md text-xs font-semibold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                                        <?= esc($p['tipe']) ?>
                                    </span>
                                <?php endif; ?>
                                <?php if (!empty($p['negara'])): ?>
                                    <span class="px-2.5 py-1 rounded-md text-xs font-semibold bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                        <?= esc($p['negara']) ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <!-- CTA -->
                        <a href="<?= esc($p['link']) ?>" target="_blank"
                            class="mt-auto w-full inline-flex justify-center items-center gap-2 px-4 py-2.5 text-sm font-semibold rounded-xl text-white bg-white/5 border border-white/10 hover:bg-primary hover:border-primary transition-all duration-200">
                            Lihat Detail
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

        <?php endif; ?>
    </main>

    <!-- FOOTER -->
    <footer class="mt-auto border-t border-borderCol bg-surface/50 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-2">
                <div class="w-7 h-7 rounded-lg bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center">
                    <i data-lucide="graduation-cap" class="text-white w-4 h-4"></i>
                </div>
                <span class="text-sm font-semibold text-white">Student<span class="text-primary">Hub</span></span>
            </div>
            <p class="text-slate-500 text-sm">&copy; <?= date('Y') ?> StudentHub. All rights reserved.</p>
            <div class="flex gap-4 text-sm text-slate-500">
                <a href="#" class="hover:text-slate-300 transition">Privasi</a>
                <a href="#" class="hover:text-slate-300 transition">Syarat</a>
                <a href="#" class="hover:text-slate-300 transition">Kontak</a>
            </div>
        </div>
    </footer>

    <script>lucide.createIcons();</script>
</body>
</html>