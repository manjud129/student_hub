<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Student Hub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['"Plus Jakarta Sans"', 'sans-serif'] },
                    colors: {
                        background: '#070B14',
                        surface: '#0F1523',
                        borderColor: '#1E293B',
                        primary: '#6366F1',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #070B14;
            background-image: radial-gradient(at 0% 0%, rgba(99, 102, 241, 0.1) 0px, transparent 50%);
        }
    </style>
</head>
<body class="text-slate-300 antialiased min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-md">
        <!-- Logo -->
        <div class="flex flex-col items-center mb-8">
            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center shadow-lg shadow-indigo-500/20 mb-4">
                <i data-lucide="graduation-cap" class="text-white w-7 h-7"></i>
            </div>
            <h1 class="text-2xl font-bold text-white">Selamat Datang</h1>
            <p class="text-slate-400 mt-2 text-center text-sm">Masuk untuk mengelola beasiswa dan akun Anda.</p>
        </div>

        <div class="bg-surface border border-borderColor p-8 rounded-3xl shadow-xl">
            <?php if(session()->getFlashdata('error')) : ?>
                <div class="mb-6 p-4 bg-red-500/10 border border-red-500/20 rounded-xl flex items-center gap-3 text-red-400 text-sm">
                    <i data-lucide="alert-circle" class="w-5 h-5"></i>
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <form action="/process-login" method="post" class="space-y-5">
                <div>
                    <label class="block text-sm font-medium text-slate-400 mb-2">Email</label>
                    <div class="relative">
                        <i data-lucide="mail" class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-500"></i>
                        <input type="email" name="email" required placeholder="nama@email.com" 
                            class="w-full pl-10 pr-4 py-3 bg-background border border-borderColor rounded-xl text-white focus:outline-none focus:border-primary transition-all">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-400 mb-2">Password</label>
                    <div class="relative">
                        <i data-lucide="lock" class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-500"></i>
                        <input type="password" name="password" required placeholder="••••••••" 
                            class="w-full pl-10 pr-4 py-3 bg-background border border-borderColor rounded-xl text-white focus:outline-none focus:border-primary transition-all">
                    </div>
                </div>

                <button type="submit" class="w-full py-3.5 bg-primary hover:bg-indigo-600 text-white font-bold rounded-xl shadow-lg shadow-indigo-500/20 transition-all active:scale-95">
                    Masuk Sekarang
                </button>
            </form>

            <div class="mt-8 pt-6 border-t border-borderColor flex flex-col gap-4 items-center">
                <a href="/register" class="text-sm font-medium text-indigo-400 hover:text-indigo-300">Belum punya akun? Daftar gratis</a>
                <a href="/" class="text-xs text-slate-500 hover:text-white transition-colors flex items-center gap-1">
                    <i data-lucide="arrow-left" class="w-3 h-3"></i> Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>

    <script>lucide.createIcons();</script>
</body>
</html>