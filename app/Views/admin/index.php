<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <style>
        :root{
            --bg:#0b1220;
            --card:#0f1a31;
            --text:#e6eefc;
            --muted:#a8b3cf;
            --primary:#6d28d9;
            --primary-2:#8b5cf6;
            --border:rgba(255,255,255,.12);
        }
        *{box-sizing:border-box}
        body{
            margin:0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(180deg, #0b1220 0%, #0a1020 50%, #070c17 100%);
            color:var(--text);
        }
        .shell{min-height:100vh; display:flex;}
        .sidebar{
            width:260px;
            padding:20px;
            border-right:1px solid var(--border);
            background: rgba(15,26,49,.7);
        }
        .brand{
            display:flex; align-items:center; gap:10px;
            margin-bottom:22px;
            padding-bottom:16px;
            border-bottom:1px solid var(--border);
        }
        .logo{
            width:42px;height:42px;border-radius:14px;
            background: radial-gradient(circle at 30% 30%, var(--primary-2), var(--primary));
        }
        .brand h1{font-size:16px; margin:0; letter-spacing:.2px}
        .brand p{margin:0; color:var(--muted); font-size:12px}
        .nav{display:flex; flex-direction:column; gap:10px;}
        .nav a{
            color:var(--text);
            text-decoration:none;
            padding:12px 12px;
            border:1px solid var(--border);
            border-radius:12px;
            background: rgba(255,255,255,.03);
            transition: transform .08s ease, background .2s ease, border-color .2s ease;
        }
        .nav a:hover{transform: translateY(-1px); background: rgba(255,255,255,.06); border-color: rgba(255,255,255,.22)}
        .content{flex:1; padding:28px;}
        .topbar{margin-bottom:18px}
        .topbar h2{margin:0; font-size:22px}
        .topbar p{margin:6px 0 0; color:var(--muted)}
        .grid{display:grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap:16px;}
        .card{
            border:1px solid var(--border);
            background: rgba(15,26,49,.6);
            border-radius:16px;
            padding:16px;
            box-shadow: 0 10px 30px rgba(0,0,0,.25);
        }
        .card h3{margin:0 0 8px; font-size:15px}
        .card p{margin:0; color:var(--muted); font-size:13px; line-height:1.4}
        .actions{margin-top:14px; display:flex; gap:10px; flex-wrap:wrap}
        .btn{
            display:inline-flex; align-items:center; justify-content:center;
            padding:10px 14px;
            border-radius:12px;
            text-decoration:none;
            border:1px solid var(--border);
            color:var(--text);
            background: rgba(255,255,255,.03);
            transition: background .2s ease, transform .08s ease, border-color .2s ease;
        }
        .btn:hover{transform: translateY(-1px); background: rgba(255,255,255,.06); border-color: rgba(255,255,255,.22)}
        .btn-primary{
            border-color: rgba(139,92,246,.5);
            background: linear-gradient(180deg, rgba(139,92,246,.35), rgba(109,40,217,.25));
        }
        @media (max-width: 900px){
            .shell{flex-direction:column;}
            .sidebar{width:100%; border-right:none; border-bottom:1px solid var(--border)}
            .grid{grid-template-columns:1fr}
        }
    </style>
</head>
<body>
    <div class="shell">
        <aside class="sidebar">
            <div class="brand">
                <div class="logo"></div>
                <div>
                    <h1>Student Hub</h1>
                    <p>Modul Admin</p>
                </div>
            </div>
            <nav class="nav">
                <a href="/admin/users">Approve Users</a>
                <a href="/admin/programs">Approve Beasiswa</a>
            </nav>
        </aside>

        <main class="content">
            <div class="topbar">
                <h2>Admin Dashboard</h2>
                <p>Kelola persetujuan user dan beasiswa yang masuk.</p>
            </div>

            <div class="grid">
                <section class="card">
                    <h3>Pending User</h3>
                    <p>Review pendaftaran pengguna yang menunggu persetujuan.</p>
                    <div class="actions">
                        <a class="btn btn-primary" href="/admin/users">Buka Approval</a>
                    </div>
                </section>

                <section class="card">
                    <h3>Pending Beasiswa</h3>
                    <p>Verifikasi data beasiswa sebelum dipublikasikan.</p>
                    <div class="actions">
                        <a class="btn btn-primary" href="/admin/programs">Buka Approval</a>
                    </div>
                </section>
            </div>
        </main>
    </div>
</body>
</html>
