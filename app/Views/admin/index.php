<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - StudentHub</title>

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
                radial-gradient(at 0% 0%, rgba(99, 102, 241, 0.08) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(139, 92, 246, 0.08) 0px, transparent 50%);
            background-attachment: fixed;
        }

        /* Scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #0F1523; }
        ::-webkit-scrollbar-thumb { background: #1E293B; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #334155; }

        /* Loading shimmer */
        #admin-content:empty::after {
            content: '';
            display: block;
            height: 300px;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 11px 14px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 14px;
            color: #94a3b8;
            text-decoration: none;
            transition: all 0.2s;
            border: 1px solid transparent;
        }

        .sidebar-link:hover {
            background: rgba(255, 255, 255, 0.05);
            color: #fff;
            border-color: rgba(255, 255, 255, 0.08);
        }

        .sidebar-link.active {
            background: rgba(99, 102, 241, 0.12);
            color: #a5b4fc;
            border-color: rgba(99, 102, 241, 0.25);
        }

        .sidebar-link.danger {
            color: #f87171;
        }

        .sidebar-link.danger:hover {
            background: rgba(239, 68, 68, 0.1);
            border-color: rgba(239, 68, 68, 0.2);
            color: #fca5a5;
        }
    </style>
</head>

<body class="text-slate-300 antialiased min-h-screen">

    <div class="flex min-h-screen">

        <!-- =========== SIDEBAR =========== -->
        <aside class="w-64 shrink-0 flex flex-col bg-surface border-r border-borderCol">

            <!-- Logo -->
            <div class="px-5 py-6 border-b border-borderCol">
                <a href="/" class="flex items-center gap-2.5">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center shadow-lg shadow-indigo-500/20">
                        <i data-lucide="graduation-cap" class="text-white w-5 h-5"></i>
                    </div>
                    <span class="font-extrabold text-lg text-white tracking-tight">
                        Student<span class="text-primary">Hub</span>
                    </span>
                </a>
            </div>

            <!-- Label -->
            <div class="px-5 pt-6 pb-2">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-500">Menu Admin</p>
            </div>

            <!-- Nav -->
            <nav class="flex-1 px-3 flex flex-col gap-1">

                <a href="#" onclick="loadUsers(); setActive(this)" class="sidebar-link">
                    <i data-lucide="user-check" class="w-4 h-4 shrink-0"></i>
                    Approve Users
                </a>

                <a href="#" onclick="loadPrograms(); setActive(this)" class="sidebar-link">
                    <i data-lucide="badge-check" class="w-4 h-4 shrink-0"></i>
                    Approve Beasiswa
                </a>

            </nav>

            <!-- Bottom -->
            <div class="px-3 py-4 border-t border-borderCol">
                <a href="/logout" class="sidebar-link danger">
                    <i data-lucide="log-out" class="w-4 h-4 shrink-0"></i>
                    Logout
                </a>
            </div>

        </aside>

        <!-- =========== MAIN CONTENT =========== -->
        <div class="flex-1 flex flex-col min-w-0">

            <!-- Top Bar -->
            <header class="h-16 border-b border-borderCol bg-surface/60 backdrop-blur-md flex items-center px-8 gap-4 shrink-0">
                <div class="flex-1">
                    <h1 class="text-base font-bold text-white">Admin Dashboard</h1>
                    <p class="text-xs text-slate-500 mt-0.5">Kelola persetujuan user dan beasiswa yang masuk.</p>
                </div>
                <!-- Avatar placeholder -->
                <div class="flex items-center gap-2 bg-white/5 border border-borderCol rounded-xl px-3 py-1.5">
                    <div class="w-6 h-6 rounded-full bg-indigo-500/20 flex items-center justify-center">
                        <i data-lucide="shield" class="w-3.5 h-3.5 text-indigo-400"></i>
                    </div>
                    <span class="text-xs font-semibold text-white">Admin</span>
                </div>
            </header>

            <!-- Page -->
            <main class="flex-1 p-8 overflow-auto">

                <!-- Welcome (shown by default) -->
                <div id="welcome-state" class="flex flex-col items-center justify-center py-24 text-center">
                    <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-indigo-500/20 to-purple-500/20 border border-indigo-500/20 flex items-center justify-center mb-6">
                        <i data-lucide="layout-dashboard" class="w-9 h-9 text-indigo-400"></i>
                    </div>
                    <h2 class="text-2xl font-extrabold text-white mb-2">Selamat Datang!</h2>
                    <p class="text-slate-400 max-w-xs text-sm">Pilih menu di sidebar untuk mulai mengelola data.</p>
                </div>

                <!-- Dynamic Content -->
                <div id="admin-content"></div>

            </main>
        </div>

    </div>

    <script>
        lucide.createIcons();

        function setActive(el) {
            document.querySelectorAll('.sidebar-link').forEach(a => a.classList.remove('active'));
            el.classList.add('active');
        }

        function loadUsers() {
            document.getElementById('welcome-state').style.display = 'none';
            fetch('/admin/users')
                .then(r => r.text())
                .then(data => {
                    document.getElementById('admin-content').innerHTML = data;
                    lucide.createIcons();
                });
        }

        function loadPrograms() {
            document.getElementById('welcome-state').style.display = 'none';
            fetch('/admin/programs')
                .then(r => r.text())
                .then(data => {
                    document.getElementById('admin-content').innerHTML = data;
                    lucide.createIcons();
                });
        }
    </script>

</body>
</html>