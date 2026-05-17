<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Hub - Temukan Beasiswa Terbaik</title>
    
    <!-- Menggunakan Tailwind CSS via CDN untuk kemudahan referensi -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Ikon dari Lucide -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Font Modern: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Konfigurasi Tema Tailwind Kustom -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        background: '#070B14',
                        surface: '#0F1523',
                        surface2: '#161E31',
                        borderColor: '#1E293B',
                        primary: '#6366F1', // Indigo-500
                        primaryHover: '#4F46E5', // Indigo-600
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #070B14;
            background-image: 
                radial-gradient(at 0% 0%, rgba(99, 102, 241, 0.1) 0px, transparent 50%),
                radial-gradient(at 100% 0%, rgba(139, 92, 246, 0.1) 0px, transparent 50%);
            background-attachment: fixed;
        }
    </style>
</head>
<body class="text-slate-300 antialiased min-h-screen flex flex-col selection:bg-primary selection:text-white">

    <!-- NAVBAR -->
    <nav class="sticky top-0 z-50 bg-background/80 backdrop-blur-md border-b border-borderColor">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-2 cursor-pointer">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center shadow-lg shadow-indigo-500/20">
                        <i data-lucide="graduation-cap" class="text-white w-6 h-6"></i>
                    </div>
                    <span class="font-bold text-xl text-white tracking-tight">Student<span class="text-primary">Hub</span></span>
                </div>
                
                <!-- Menu Tengah (Desktop) -->
                <div class="hidden md:flex space-x-1">
                    <a href="#home" class="px-4 py-2 rounded-lg text-sm font-medium text-white bg-white/5 hover:bg-white/10 transition">Home</a>
                    <a href="#about" class="px-4 py-2 rounded-lg text-sm font-medium text-slate-400 hover:text-white hover:bg-white/5 transition">About</a>
                    <a href="#beasiswa" class="px-4 py-2 rounded-lg text-sm font-medium text-slate-400 hover:text-white hover:bg-white/5 transition">Beasiswa</a>
                </div>

                <!-- Menu Kanan -->
                <div class="flex items-center gap-3">
                    <a href="/login" class="flex items-center gap-2 bg-white/5 border border-white/10 hover:bg-white/10 px-4 py-2 rounded-lg transition">
                        <div class="w-6 h-6 rounded-full bg-indigo-500/20 flex items-center justify-center text-indigo-400">
                            <i data-lucide="log-in" class="w-3.5 h-3.5"></i>
                        </div>
                        <span class="text-sm font-medium text-white hidden sm:block">Login</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section id="home" class="relative pt-24 pb-16 sm:pt-32 sm:pb-24 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-400 text-xs font-semibold uppercase tracking-wider mb-6">
                <span class="relative flex h-2 w-2">
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-500"></span>
                </span>
                Platform Beasiswa #1
            </div>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold text-white tracking-tight mb-6 leading-tight">
                Temukan Beasiswa <br class="hidden sm:block">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-500">Masa Depanmu</span>
            </h1>
            <p class="mt-4 max-w-2xl mx-auto text-lg md:text-xl text-slate-400 leading-relaxed mb-10">
                Student Hub membantu jutaan pelajar dan mahasiswa menemukan peluang pendidikan terbaik dari berbagai negara dan institusi terpercaya.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#beasiswa" class="inline-flex items-center justify-center px-8 py-3.5 text-base font-semibold text-white bg-primary hover:bg-primaryHover rounded-xl shadow-lg shadow-indigo-500/25 transition-all hover:-translate-y-0.5">
                    Mulai Eksplorasi
                    <i data-lucide="arrow-down" class="ml-2 w-4 h-4"></i>
                </a>
                <a href="#about" class="inline-flex items-center justify-center px-8 py-3.5 text-base font-semibold text-white bg-surface border border-borderColor hover:bg-surface2 rounded-xl transition-all">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 w-full">
        <div class="bg-surface border border-borderColor rounded-2xl p-8 md:p-12">
            <h2 class="text-3xl font-bold text-white mb-4">About Student Hub</h2>
            <p class="text-slate-400 leading-relaxed mb-8">
                Student Hub adalah platform pencarian beasiswa modern yang membantu pelajar dan mahasiswa menemukan peluang pendidikan terbaik dari dalam maupun luar negeri. Platform ini dibuat untuk mempermudah akses informasi beasiswa agar generasi muda dapat memperoleh pendidikan yang lebih luas dan berkualitas.
            </p>

            <h3 class="text-2xl font-bold text-white mb-4" id="visi">Visi & Misi</h3>
            <p class="text-slate-400 leading-relaxed mb-4">
                Menjadi platform informasi beasiswa terbaik yang membantu generasi muda mendapatkan akses pendidikan lebih luas.
            </p>
            <ul class="list-disc list-inside text-slate-400 space-y-2 marker:text-primary">
                <li>Menyediakan informasi beasiswa terpercaya</li>
                <li>Membantu siswa menemukan peluang pendidikan</li>
                <li>Membangun komunitas pendidikan positif</li>
                <li>Memberikan akses informasi beasiswa secara mudah dan cepat</li>
            </ul>
        </div>
    </section>

    <!-- MAIN CONTENT (LAYOUT GRID) -->
    <main id="beasiswa" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 w-full">
        
        <div class="flex items-end justify-between mb-8">
            <div>
                <h2 class="text-3xl font-bold text-white mb-2">Eksplorasi Beasiswa</h2>
                <p class="text-slate-400">Temukan program yang sesuai dengan kriteria Anda.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            
            <!-- SIDEBAR FILTER -->
            <aside class="col-span-1">
                <div class="sticky top-28 bg-surface border border-borderColor rounded-2xl p-6 shadow-sm">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="font-bold text-white text-lg flex items-center gap-2">
                            <i data-lucide="sliders-horizontal" class="w-5 h-5 text-primary"></i>
                            Filter
                        </h3>
                        <?php if (!empty($_GET)): ?>
                            <a href="?" class="text-xs font-medium text-slate-400 hover:text-indigo-400 transition">Reset</a>
                        <?php endif; ?>
                    </div>

                    <form action="" method="GET" class="space-y-5">
                        <!-- Pencarian -->
                        <div>
                            <label class="block text-sm font-medium text-slate-400 mb-1.5">Pencarian</label>
                            <div class="relative">
                                <i data-lucide="search" class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-500"></i>
                                <input type="text" name="search" value="<?= isset($_GET['search']) ? esc($_GET['search']) : '' ?>" placeholder="Cari judul/sumber..." class="w-full pl-9 pr-4 py-2.5 bg-background border border-borderColor rounded-xl text-sm text-white focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors placeholder:text-slate-600">
                            </div>
                        </div>

                        <!-- Jenjang -->
                        <div>
                            <label class="block text-sm font-medium text-slate-400 mb-1.5">Jenjang Pendidikan</label>
                            <div class="relative">
                                <select name="jenjang" class="w-full pl-4 pr-10 py-2.5 bg-background border border-borderColor rounded-xl text-sm text-white appearance-none focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors cursor-pointer">
                                    <option value="">Semua Jenjang</option>
                                    <option value="SMA" <?= (isset($_GET['jenjang']) && $_GET['jenjang'] == 'SMA') ? 'selected' : '' ?>>SMA/Sederajat</option>
                                    <option value="D3" <?= (isset($_GET['jenjang']) && $_GET['jenjang'] == 'D3') ? 'selected' : '' ?>>Diploma (D3/D4)</option>
                                    <option value="S1" <?= (isset($_GET['jenjang']) && $_GET['jenjang'] == 'S1') ? 'selected' : '' ?>>Sarjana (S1)</option>
                                    <option value="S2" <?= (isset($_GET['jenjang']) && $_GET['jenjang'] == 'S2') ? 'selected' : '' ?>>Magister (S2)</option>
                                    <option value="S3" <?= (isset($_GET['jenjang']) && $_GET['jenjang'] == 'S3') ? 'selected' : '' ?>>Doktoral (S3)</option>
                                </select>
                                <i data-lucide="chevron-down" class="absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-500 pointer-events-none"></i>
                            </div>
                        </div>

                        <!-- Tipe Beasiswa -->
                        <div>
                            <label class="block text-sm font-medium text-slate-400 mb-1.5">Tipe Pembiayaan</label>
                            <div class="relative">
                                <select name="tipe" class="w-full pl-4 pr-10 py-2.5 bg-background border border-borderColor rounded-xl text-sm text-white appearance-none focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors cursor-pointer">
                                    <option value="">Semua Tipe</option>
                                    <option value="Full Scholarship" <?= (isset($_GET['tipe']) && $_GET['tipe'] == 'Full Scholarship') ? 'selected' : '' ?>>Full Scholarship</option>
                                    <option value="Partial Scholarship" <?= (isset($_GET['tipe']) && $_GET['tipe'] == 'Partial Scholarship') ? 'selected' : '' ?>>Partial Scholarship</option>
                                </select>
                                <i data-lucide="chevron-down" class="absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-500 pointer-events-none"></i>
                            </div>
                        </div>
                        
                        <!-- Negara -->
                        <div>
                            <label class="block text-sm font-medium text-slate-400 mb-1.5">Negara</label>
                            <div class="relative">
                                <i data-lucide="globe" class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-500"></i>
                                <input type="text" name="negara" value="<?= isset($_GET['negara']) ? esc($_GET['negara']) : '' ?>" placeholder="Indonesia, Jepang..." class="w-full pl-9 pr-4 py-2.5 bg-background border border-borderColor rounded-xl text-sm text-white focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors placeholder:text-slate-600">
                            </div>
                        </div>

                        <button type="submit" class="w-full py-3 bg-primary hover:bg-primaryHover text-white font-medium rounded-xl text-sm transition shadow-lg shadow-indigo-500/20">
                            Terapkan Filter
                        </button>
                    </form>
                </div>
            </aside>

            <!-- BEASISWA GRID -->
            <div class="col-span-1 lg:col-span-3 grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
                
                <?php if (empty($programs)): ?>
                    <div class="col-span-1 md:col-span-2 text-center py-20 bg-surface border border-borderColor rounded-2xl flex flex-col items-center justify-center">
                        <div class="text-5xl mb-4">📭</div>
                        <h3 class="text-xl font-bold text-white mb-2">Belum ada beasiswa</h3>
                        <p class="text-slate-400">Beasiswa yang sesuai dengan pencarian Anda tidak ditemukan.</p>
                    </div>
                <?php else: ?>
                
                    <?php foreach ($programs as $p): ?>
                        <div class="group relative flex flex-col bg-surface border border-borderColor rounded-2xl p-6 hover:border-indigo-500/50 hover:shadow-[0_0_30px_-5px_rgba(99,102,241,0.15)] transition-all duration-300">
                            
                            <!-- Header Card -->
                            <div class="flex justify-between items-start gap-4 mb-4">
                                <div class="h-12 w-12 rounded-xl bg-gradient-to-br from-blue-500/20 to-indigo-500/20 flex items-center justify-center border border-blue-500/20 text-blue-400 shrink-0">
                                    <i data-lucide="award" class="w-6 h-6"></i>
                                </div>
                                <a href="/bookmark/<?= isset($p['id']) ? $p['id'] : '' ?>" class="text-slate-500 hover:text-rose-400 transition-colors p-1" title="Simpan Beasiswa">
                                    <i data-lucide="bookmark" class="w-5 h-5"></i>
                                </a>
                            </div>

                            <!-- Judul -->
                            <h3 class="text-lg font-bold text-white mb-2 line-clamp-2 leading-snug group-hover:text-indigo-400 transition-colors">
                                <?= esc($p['title']); ?>
                            </h3>
                            
                            <!-- Badges / Tags -->
                            <div class="flex flex-wrap gap-2 mb-5">
                                <?php if(!empty($p['jenjang'])): ?>
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-semibold bg-white/5 text-slate-300 border border-white/10">
                                        <?= esc($p['jenjang']); ?>
                                    </span>
                                <?php endif; ?>
                                
                                <?php if(!empty($p['tipe'])): ?>
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-semibold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                                        <?= esc($p['tipe']); ?>
                                    </span>
                                <?php endif; ?>

                                <?php if(!empty($p['negara'])): ?>
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-semibold bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                        <?= esc($p['negara']); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                            
                            <!-- Info Meta -->
                            <div class="space-y-3 mb-6 text-sm flex-grow">
                                <div class="flex items-start text-slate-400">
                                    <i data-lucide="building-2" class="w-4 h-4 mr-2.5 mt-0.5 shrink-0 text-slate-500"></i>
                                    <span><?= esc($p['source']); ?></span>
                                </div>
                                <div class="flex items-center text-rose-400 font-medium">
                                    <i data-lucide="clock" class="w-4 h-4 mr-2.5 shrink-0"></i>
                                    <span>Berakhir: <?= esc($p['deadline']); ?></span>
                                </div>
                            </div>
                            
                            <!-- Footer Card (Tombol) -->
                            <a href="<?= esc($p['link']); ?>" target="_blank" class="w-full inline-flex justify-center items-center px-4 py-2.5 text-sm font-semibold rounded-xl text-white bg-white/5 border border-white/10 hover:bg-primary hover:border-primary transition-all duration-200">
                                Lihat Detail
                                <i data-lucide="arrow-right" class="w-4 h-4 ml-2"></i>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="mt-auto border-t border-borderColor bg-surface/50 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-slate-500 text-sm">
                &copy; 2024 Student Hub. Dibangun untuk referensi desain UI.
            </p>
        </div>
    </footer>

    <!-- Inisialisasi Ikon Lucide -->
    <script>
        lucide.createIcons();
    </script>
</body>
</html>