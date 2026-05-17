<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - Student Hub</title>
    
    <!-- Tailwind CSS via CDN -->
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
                radial-gradient(at 50% 0%, rgba(99, 102, 241, 0.1) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(139, 92, 246, 0.05) 0px, transparent 50%);
            background-attachment: fixed;
        }
    </style>
</head>
<body class="text-slate-300 antialiased min-h-screen flex flex-col selection:bg-primary selection:text-white">

    <!-- NAVBAR (Konsisten dengan halaman lain) -->
    <nav class="sticky top-0 z-50 bg-background/80 backdrop-blur-md border-b border-borderColor">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="/" class="flex-shrink-0 flex items-center gap-2 cursor-pointer group">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center shadow-lg shadow-indigo-500/20 group-hover:scale-105 transition-transform">
                        <i data-lucide="graduation-cap" class="text-white w-6 h-6"></i>
                    </div>
                    <span class="font-bold text-xl text-white tracking-tight">Student<span class="text-primary">Hub</span></span>
                </a>

                <!-- Info User Kanan -->
                <div class="flex items-center gap-3">
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg border border-white/5 bg-white/5">
                        <div class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></div>
                        <span class="text-xs font-medium text-emerald-400 hidden sm:block">Online</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="flex-grow flex items-center justify-center px-4 py-12 w-full">
        <div class="w-full max-w-2xl">
            
            <!-- Header Halaman -->
            <div class="text-center mb-10">
                <h1 class="text-3xl sm:text-4xl font-bold text-white mb-3">Akun Saya</h1>
                <p class="text-slate-400">Kelola informasi profil dan pengaturan akun Anda.</p>
            </div>

            <!-- PROFILE CARD -->
            <div class="bg-surface border border-borderColor rounded-3xl p-6 sm:p-10 shadow-2xl relative overflow-hidden">
                
                <!-- Ornamen Latar (Murni untuk Estetika) -->
                <div class="absolute top-0 right-0 -mt-16 -mr-16 w-48 h-48 bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>

                <!-- Avatar Section -->
                <div class="flex flex-col items-center mb-10 relative z-10">
                    <div class="w-28 h-28 rounded-full bg-gradient-to-br from-indigo-500 via-purple-500 to-rose-500 p-1 shadow-xl shadow-indigo-500/20 mb-4">
                        <div class="w-full h-full bg-surface rounded-full flex items-center justify-center">
                            <span class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-br from-indigo-400 to-purple-400">
                                <?= strtoupper(substr(session()->get('username') ?? 'U', 0, 2)) ?>
                            </span>
                        </div>
                    </div>
                    <h2 class="text-2xl font-bold text-white"><?= esc(session()->get('username') ?? 'Pengguna') ?></h2>
                    <p class="text-slate-400 text-sm mt-1">Terdaftar di Student Hub</p>
                </div>

                <!-- Detail Info -->
                <div class="space-y-6 relative z-10">
                    
                    <!-- Username / Email Item -->
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Username</label>
                        <div class="flex items-center justify-between px-5 py-4 bg-background border border-borderColor rounded-xl">
                            <div class="flex items-center gap-3">
                                <i data-lucide="user" class="w-5 h-5 text-slate-400"></i>
                                <span class="font-medium text-white"><?= esc(session()->get('username') ?? 'N/A') ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Role Item -->
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Peran (Role)</label>
                        <div class="flex items-center justify-between px-5 py-4 bg-background border border-borderColor rounded-xl">
                            <div class="flex items-center gap-3">
                                <i data-lucide="shield-check" class="w-5 h-5 text-slate-400"></i>
                                <span class="font-medium text-white">Akses Akun</span>
                            </div>
                            
                            <!-- Logika Pewarnaan Badge Berdasarkan Role -->
                            <?php 
                                $role = strtolower(session()->get('role') ?? 'user'); 
                                $is_admin = ($role === 'admin' || $role === 'administrator');
                            ?>
                            
                            <span class="inline-flex items-center px-3 py-1 rounded-lg text-sm font-bold border 
                                <?= $is_admin 
                                    ? 'bg-purple-500/10 text-purple-400 border-purple-500/20' 
                                    : 'bg-emerald-500/10 text-emerald-400 border-emerald-500/20' 
                                ?>">
                                <?= ucfirst($role) ?>
                            </span>
                        </div>
                    </div>

                    <!-- Status Item -->
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Status Login</label>
                        <div class="flex items-center justify-between px-5 py-4 bg-background border border-borderColor rounded-xl">
                            <div class="flex items-center gap-3">
                                <i data-lucide="activity" class="w-5 h-5 text-slate-400"></i>
                                <span class="font-medium text-white">Status Saat Ini</span>
                            </div>
                            <div class="flex items-center gap-1.5 text-emerald-400 font-semibold text-sm">
                                <i data-lucide="check-circle-2" class="w-4 h-4"></i>
                                Aktif
                            </div>
                        </div>
                    </div>

                </div>

                <!-- ACTION BUTTONS -->
                <div class="mt-10 pt-8 border-t border-borderColor flex flex-col sm:flex-row gap-4 relative z-10">
                    <a href="<?= esc($back_url ?? '/') ?>" class="flex-1 inline-flex justify-center items-center px-6 py-3.5 text-sm font-semibold rounded-xl text-white bg-white/5 border border-white/10 hover:bg-white/10 transition-all duration-200">
                        <i data-lucide="arrow-left" class="w-4 h-4 mr-2"></i>
                        Kembali ke Home
                    </a>
                    <a href="/logout" onclick="return confirm('Apakah Anda yakin ingin keluar?')" class="flex-1 inline-flex justify-center items-center px-6 py-3.5 text-sm font-semibold rounded-xl text-rose-400 bg-rose-500/10 border border-rose-500/20 hover:bg-rose-500 hover:text-white transition-all duration-200">
                        <i data-lucide="log-out" class="w-4 h-4 mr-2"></i>
                        Logout
                    </a>
                </div>

            </div>
            
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="mt-auto border-t border-borderColor bg-surface/50 py-6">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-slate-500 text-sm">
                &copy; 2024 Student Hub. All rights reserved.
            </p>
        </div>
    </footer>

    <!-- Inisialisasi Ikon Lucide -->
    <script>
        lucide.createIcons();
    </script>
</body>
</html>