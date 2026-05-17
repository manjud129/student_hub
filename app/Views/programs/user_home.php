<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eksplorasi Beasiswa - Student Hub</title>

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

                 <!-- Menu Kanan -->
                <div class="flex items-center gap-3">
                    <a href="/saved" class="flex items-center gap-2 bg-white/5 border border-white/10 hover:bg-white/10 px-4 py-2 rounded-lg transition">
                        <i data-lucide="bookmark" class="w-4 h-4 text-indigo-400"></i>
                        <span class="text-sm font-medium text-white hidden sm:block">Tersimpan</span>
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
        <div class="mb-2">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-400 text-xs font-semibold uppercase tracking-wider">
                <i data-lucide="search" class="w-3 h-3"></i>
                Eksplorasi
            </span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold text-white mb-2">Temukan Beasiswa Impianmu</h1>
        <p class="text-slate-400">Gunakan filter di bawah untuk mempersempit pencarian beasiswa yang sesuai.</p>
    </div>

    <!-- MAIN CONTENT -->
    <main id="beasiswa" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20 w-full flex-1">

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

            <!-- SIDEBAR FILTER -->
            <aside class="col-span-1">
                <div class="sticky top-28 bg-surface border border-borderCol rounded-2xl p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="font-bold text-white text-lg flex items-center gap-2">
                            <i data-lucide="sliders-horizontal" class="w-5 h-5 text-primary"></i>
                            Filter
                        </h3>
                        <?php if (!empty($_GET)): ?>
                            <a href="/" class="text-xs font-medium text-slate-400 hover:text-indigo-400 transition flex items-center gap-1">
                                <i data-lucide="x" class="w-3 h-3"></i> Reset
                            </a>
                        <?php endif; ?>
                    </div>

                    <form method="GET" class="space-y-5">
                        <!-- Search -->
                        <div>
                            <label class="block text-sm font-medium text-slate-400 mb-1.5">Pencarian</label>
                            <div class="relative">
                                <i data-lucide="search" class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-500"></i>
                                <input type="text" name="search" value="<?= esc($filters['search'] ?? '') ?>" placeholder="Cari judul/sumber..."
                                    class="w-full pl-9 pr-4 py-2.5 bg-background border border-borderCol rounded-xl text-sm text-white focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition placeholder:text-slate-600">
                            </div>
                        </div>

                        <!-- Jenjang -->
                        <div>
                            <label class="block text-sm font-medium text-slate-400 mb-1.5">Jenjang Pendidikan</label>
                            <div class="relative">
                                <select name="jenjang" class="w-full pl-4 pr-10 py-2.5 bg-background border border-borderCol rounded-xl text-sm text-white appearance-none focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition cursor-pointer">
                                    <option value="">Semua Jenjang</option>
                                    <option value="SMA">SMA/Sederajat</option>
                                    <option value="D3">Diploma (D3/D4)</option>
                                    <option value="S1">Sarjana (S1)</option>
                                    <option value="S2">Magister (S2)</option>
                                    <option value="S3">Doktoral (S3)</option>
                                </select>
                                <i data-lucide="chevron-down" class="absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-500 pointer-events-none"></i>
                            </div>
                        </div>

                        <!-- Tipe -->
                        <div>
                            <label class="block text-sm font-medium text-slate-400 mb-1.5">Tipe Pembiayaan</label>
                            <div class="relative">
                                <select name="tipe" class="w-full pl-4 pr-10 py-2.5 bg-background border border-borderCol rounded-xl text-sm text-white appearance-none focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition cursor-pointer">
                                    <option value="">Semua Tipe</option>
                                    <option value="Full Scholarship">Full Scholarship</option>
                                    <option value="Partial Scholarship">Partial Scholarship</option>
                                </select>
                                <i data-lucide="chevron-down" class="absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-500 pointer-events-none"></i>
                            </div>
                        </div>

                        <!-- Negara -->
                        <div>
                            <label class="block text-sm font-medium text-slate-400 mb-1.5">Negara</label>
                            <div class="relative">
                                <i data-lucide="globe" class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-500"></i>
                                <input type="text" name="negara" placeholder="Indonesia, Jepang..."
                                    class="w-full pl-9 pr-4 py-2.5 bg-background border border-borderCol rounded-xl text-sm text-white focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition placeholder:text-slate-600">
                            </div>
                        </div>

                        <button type="submit" class="w-full py-3 bg-primary hover:bg-primaryHover text-white font-semibold rounded-xl text-sm transition shadow-lg shadow-indigo-500/20 flex items-center justify-center gap-2">
                            <i data-lucide="search" class="w-4 h-4"></i>
                            Cari (<?= $filters['total'] ?? 0 ?> hasil)
                        </button>
                    </form>
                </div>
            </aside>

            <!-- BEASISWA GRID -->
            <div class="col-span-1 lg:col-span-3">

                <!-- Results info -->
                <?php if (isset($filters) && $filters['total'] > 0): ?>
                    <div class="flex items-center gap-3 mb-6 px-4 py-3 bg-indigo-500/10 border border-indigo-500/20 rounded-xl">
                        <i data-lucide="info" class="w-4 h-4 text-indigo-400 shrink-0"></i>
                        <p class="text-sm text-indigo-300">
                            <strong class="text-white"><?= $filters['total'] ?> beasiswa</strong> ditemukan
                            <?php if (!empty($filters['search'])): ?>
                                &mdash; pencarian: "<em><?= esc($filters['search']) ?></em>"
                            <?php endif; ?>
                        </p>
                    </div>
                <?php endif; ?>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
                    <?php if (empty($programs)): ?>
                        <div class="col-span-2 text-center py-20 bg-surface border border-borderCol rounded-2xl flex flex-col items-center justify-center">
                            <div class="w-16 h-16 rounded-2xl bg-slate-800 flex items-center justify-center mb-4">
                                <i data-lucide="inbox" class="w-8 h-8 text-slate-500"></i>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-2">Tidak ada hasil</h3>
                            <p class="text-slate-400 mb-5 text-sm">Beasiswa yang sesuai kriteria pencarian tidak ditemukan.</p>
                            <a href="/" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-primary hover:bg-primaryHover text-white text-sm font-semibold transition">
                                <i data-lucide="refresh-cw" class="w-4 h-4"></i> Lihat Semua
                            </a>
                        </div>
                    <?php else: ?>
                        <?php foreach ($programs as $p): ?>
                            <div class="group flex flex-col bg-surface border border-borderCol rounded-2xl p-6 hover:border-indigo-500/50 hover:shadow-[0_0_30px_-5px_rgba(99,102,241,0.15)] transition-all duration-300">

                                <!-- Card Header -->
                                <div class="flex justify-between items-start gap-4 mb-4">
                                    <div class="h-12 w-12 rounded-xl bg-gradient-to-br from-blue-500/20 to-indigo-500/20 flex items-center justify-center border border-blue-500/20 text-blue-400 shrink-0">
                                        <i data-lucide="award" class="w-6 h-6"></i>
                                    </div>
                                    <a href="/bookmark/<?= $p['id'] ?>" class="text-slate-500 hover:text-rose-400 transition p-1" title="Simpan">
                                        <i data-lucide="bookmark" class="w-5 h-5"></i>
                                    </a>
                                </div>

                                <!-- Title -->
                                <h3 class="text-base font-bold text-white mb-3 line-clamp-2 leading-snug group-hover:text-indigo-400 transition-colors">
                                    <?= esc($p['title']) ?>
                                </h3>

                                <!-- Badges -->
                                <div class="flex flex-wrap gap-2 mb-4">
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

                                <!-- Meta -->
                                <div class="space-y-2.5 mb-5 flex-grow text-sm">
                                    <div class="flex items-start text-slate-400 gap-2.5">
                                        <i data-lucide="building-2" class="w-4 h-4 mt-0.5 shrink-0 text-slate-500"></i>
                                        <span><?= esc($p['source']) ?></span>
                                    </div>
                                    <div class="flex items-center text-rose-400 font-medium gap-2.5">
                                        <i data-lucide="clock" class="w-4 h-4 shrink-0"></i>
                                        <span>Berakhir: <?= esc($p['deadline']) ?></span>
                                    </div>
                                </div>

                                <!-- CTA -->
                                <a href="<?= esc($p['link']) ?>" target="_blank"
                                    class="w-full inline-flex justify-center items-center gap-2 px-4 py-2.5 text-sm font-semibold rounded-xl text-white bg-white/5 border border-white/10 hover:bg-primary hover:border-primary transition-all duration-200">
                                    Lihat Detail
                                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
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