<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar - Student Hub</title>
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
            background-image: radial-gradient(at 100% 0%, rgba(139, 92, 246, 0.1) 0px, transparent 50%);
        }
    </style>
</head>
<body class="text-slate-300 antialiased min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-md">
        <div class="flex flex-col items-center mb-8">
            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center shadow-lg shadow-purple-500/20 mb-4">
                <i data-lucide="user-plus" class="text-white w-7 h-7"></i>
            </div>
            <h1 class="text-2xl font-bold text-white">Buat Akun Baru</h1>
            <p class="text-slate-400 mt-2 text-center text-sm">Daftar untuk mulai menemukan peluang beasiswa.</p>
        </div>

        <div class="bg-surface border border-borderColor p-8 rounded-3xl shadow-xl">
            <form action="/save-register" method="post" class="space-y-5">
                <div>
                    <label class="block text-sm font-medium text-slate-400 mb-2">Username</label>
                    <div class="relative">
                        <i data-lucide="user" class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-500"></i>
                        <input type="text" name="username" required placeholder="Username Anda" 
                            class="w-full pl-10 pr-4 py-3 bg-background border border-borderColor rounded-xl text-white focus:outline-none focus:border-primary transition-all">
                    </div>
                </div>

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
                        <input type="password" name="password" required placeholder="Minimal 8 karakter" 
                            class="w-full pl-10 pr-4 py-3 bg-background border border-borderColor rounded-xl text-white focus:outline-none focus:border-primary transition-all">
                    </div>
                </div>

                <button type="submit" class="w-full py-3.5 bg-indigo-500 hover:bg-indigo-600 text-white font-bold rounded-xl shadow-lg transition-all active:scale-95">
                    Daftar Akun
                </button>
            </form>

            <div class="mt-8 pt-6 border-t border-borderColor text-center">
                <a href="/login" class="text-sm font-medium text-indigo-400 hover:text-indigo-300">Sudah punya akun? Login di sini</a>
            </div>
        </div>
    </div>

    <script>lucide.createIcons();</script>
</body>
</html>