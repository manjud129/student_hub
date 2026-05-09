<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Hub - Beasiswa</title>
    <style>
        :root{
            --bg:#0b1220;
            --card:#0f1a31;
            --text:#e6eefc;
            --muted:#a8b3cf;
            --border:rgba(255,255,255,.12);
            --primary:#6d28d9;
            --primary-2:#8b5cf6;
            --danger:#ef4444;
        }
        *{box-sizing:border-box}
        body{
            margin:0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(180deg, #0b1220 0%, #0a1020 50%, #070c17 100%);
            color:var(--text);
            padding:22px 16px 40px;
        }
        .container{max-width:1100px; margin:0 auto;}
        .header{display:flex; justify-content:space-between; align-items:flex-end; gap:14px; margin-bottom:18px}
        .header h1{margin:0; font-size:26px; letter-spacing:.2px}
        .header p{margin:6px 0 0; color:var(--muted); font-size:13px}
        .btn{
            display:inline-flex; align-items:center; justify-content:center;
            padding:11px 14px;
            border-radius:12px;
            text-decoration:none;
            border:1px solid var(--border);
            color:var(--text);
            background: rgba(255,255,255,.03);
            font-weight:800;
        }
        .btn:hover{background: rgba(255,255,255,.06)}
        .btn-primary{
            border-color: rgba(139,92,246,.5);
            background: linear-gradient(180deg, rgba(139,92,246,.35), rgba(109,40,217,.25));
        }
        .grid{display:grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap:14px;}
        @media (max-width: 980px){.grid{grid-template-columns: repeat(2, minmax(0, 1fr));}}
        @media (max-width: 640px){.grid{grid-template-columns: 1fr;}}
        .card{
            background: rgba(15,26,49,.6);
            border:1px solid var(--border);
            border-radius:16px;
            padding:16px;
            box-shadow: 0 10px 30px rgba(0,0,0,.25);
            display:flex; flex-direction:column; gap:10px;
            min-height:170px;
        }
        .card .title{font-weight:800; font-size:16px; line-height:1.35}
        .meta{color:var(--muted); font-size:13px; line-height:1.5}
        .deadline{color: #fca5a5; font-weight:700}
        .card .bottom{margin-top:auto; display:flex; justify-content:space-between; align-items:center; gap:10px; flex-wrap:wrap}
        a.link-btn{
            display:inline-flex; align-items:center; justify-content:center;
            padding:9px 12px;
            border-radius:12px;
            border:1px solid var(--border);
            background: rgba(255,255,255,.03);
            color:var(--text);
            text-decoration:none;
            font-weight:800;
            font-size:12px;
            white-space:nowrap;
        }
        a.link-btn:hover{background: rgba(255,255,255,.06)}
        .empty{
            border:1px dashed var(--border);
            border-radius:16px;
            padding:18px;
            color:var(--muted);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div>
                <h1>🎓 Student Hub - Beasiswa</h1>
                <p>Temukan beasiswa yang tersedia dan ajukan sesuai kebutuhan.</p>
            </div>
            <a class="btn btn-primary" href="/tambah">+ Tambah Beasiswa</a>
        </div>

        <?php if(empty($programs)): ?>
            <div class="empty">Belum ada beasiswa yang tersedia.</div>
        <?php else: ?>
            <div class="grid">
                <?php foreach ($programs as $p): ?>
                    <article class="card">
                        <div class="title"><?= $p['title']; ?></div>
                        <div class="meta">Deadline: <span class="deadline"><?= $p['deadline']; ?></span></div>
                        <div class="meta">Sumber: <?= $p['source']; ?></div>
                        <div class="bottom">
                            <a class="link-btn" href="<?= $p['link']; ?>" target="_blank" rel="noopener">Lihat Detail</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
