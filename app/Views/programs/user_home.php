<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - Student Hub</title>
    <style>
        :root {
            --bg: #0b1220; --card: #0f1a31; --text: #e6eefc;
            --muted: #a8b3cf; --border: rgba(255,255,255,.12);
            --primary: #6d28d9; --success: #22c55e;
        }
        * { box-sizing: border-box; }
        body { 
            margin: 0; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; 
            background: linear-gradient(180deg, #0b1220 0%, #0a1020 50%, #070c17 100%);
            color: white; 
            min-height: 100vh;
        }
        .container { width: 95%; max-width: 1400px; margin: auto; padding: 20px 0; }
        .navbar { 
            display: flex; justify-content: space-between; align-items: center;
            padding: 20px; border-radius: 18px; background: rgba(15,26,49,.6);
            border: 1px solid var(--border); margin-bottom: 24px; gap: 16px;
        }
        .logo { font-size: 28px; font-weight: bold; }
        .menu { display: flex; gap: 12px; }
        .menu a { 
            color: white; padding: 10px 16px; border-radius: 12px; 
            border: 1px solid var(--border); background: rgba(255,255,255,.03);
            text-decoration: none; font-weight: bold; font-size: 14px;
        }
        .menu a:hover { background: rgba(255,255,255,.08); }
        
        .layout { display: grid; grid-template-columns: 280px 1fr; gap: 24px; }
        .sidebar { 
            background: rgba(15,26,49,.6); border: 1px solid var(--border);
            border-radius: 20px; padding: 20px; height: fit-content; position: sticky; top: 20px;
        }
        .sidebar h3 { margin-top: 0; font-size: 18px; margin-bottom: 20px; }
        .sidebar form { display: flex; flex-direction: column; gap: 16px; }
        label { display: block; margin-bottom: 8px; color: var(--muted); font-size: 13px; }
        input { 
            width: 100%; padding: 12px; border-radius: 12px; border: 1px solid var(--border);
            background: rgba(255,255,255,.03); color: white;
        }
        .filter-btn { 
            border: none; padding: 14px; border-radius: 12px; font-weight: bold;
            cursor: pointer; color: white; background: linear-gradient(180deg, var(--primary), #8b5cf6);
        }
        .clear-filter { 
            text-align: center; padding: 12px; color: var(--primary); text-decoration: none;
            border: 1px solid var(--border); border-radius: 12px; background: rgba(109,40,217,.1);
            font-weight: bold; font-size: 14px;
        }

        .results-info { 
            background: rgba(15,26,49,.6); padding: 16px; border-radius: 12px;
            margin-bottom: 24px; border-left: 4px solid var(--primary); font-size: 14px;
        }

        /* GRID & CARD STYLING */
        .grid { display: grid; grid-template-columns: repeat(3, minmax(0,1fr)); gap: 20px; }
        .card { 
            background: rgba(15,26,49, 0.7); 
            border: 1px solid var(--border);
            border-radius: 24px; 
            padding: 24px; 
            display: flex; 
            flex-direction: column;
            transition: all .3s ease;
            backdrop-filter: blur(10px);
        }
        .card:hover { 
            transform: translateY(-6px); 
            border-color: rgba(109,40,217, 0.5); 
            box-shadow: 0 20px 40px rgba(0,0,0,0.4); 
        }
        
        .card-title { 
            font-size: 18px; 
            font-weight: 700; 
            margin-bottom: 20px; 
            line-height: 1.5; 
            color: #ffffff;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .card-info-group {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-bottom: 24px;
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--muted);
            font-size: 14px;
        }

        .deadline-badge {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.2);
            padding: 8px 12px;
            border-radius: 10px;
            width: fit-content;
        }

        .deadline-text {
            color: #f87171;
            font-weight: 600;
        }

        .card-footer { 
            margin-top: auto; 
            display: flex; 
            gap: 12px; 
            padding-top: 20px; 
            border-top: 1px solid rgba(255,255,255, 0.08); 
        }

        .btn { 
            flex: 1; padding: 12px; border-radius: 12px; text-decoration: none;
            color: white; border: 1px solid var(--border); background: rgba(255,255,255,.05);
            font-weight: bold; text-align: center; transition: .3s; font-size: 14px;
        }
        .btn:hover { background: rgba(255,255,255,.1); }
        .btn-primary { 
            background: linear-gradient(180deg, #7c3aed, #6d28d9);
            border: none;
        }
        .btn-primary:hover { opacity: 0.9; transform: translateY(-1px); }

        @media(max-width:1100px) { .grid { grid-template-columns: repeat(2,1fr); } }
        @media(max-width:900px) { .layout { grid-template-columns: 1fr; } .sidebar { position: static; } }
        @media(max-width:700px) { .grid { grid-template-columns: 1fr; } }
    </style>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">🎓 Student Hub</div>
            <div class="menu">
                <a href="/">Home</a>
                <a href="/saved">Beasiswa Tersimpan</a>
                <a href="/account">Account</a>
            </div>
        </div>

        <div class="layout">
            <aside class="sidebar">
                <h3>🔍 Filter Beasiswa</h3>
                <form method="GET">
                    <div>
                        <label>Search</label>
                        <input type="text" name="search" value="<?= esc($filters['search'] ?? '') ?>" placeholder="Cari judul/sumber...">
                    </div>
                    
                    <button class="filter-btn" type="submit">🔍 Cari (<?= $filters['total'] ?? 0 ?> hasil)</button>
                    
                    <?php if (!empty($_GET)): ?>
                        <a href="/" class="clear-filter">🗑️ Clear Filter</a>
                    <?php endif; ?>
                </form>
            </aside>

            <main>
                <?php if (isset($filters) && $filters['total'] > 0): ?>
                    <div class="results-info">
                        <strong><?= $filters['total'] ?> beasiswa ditemukan</strong>
                        <?php if (!empty($filters['search'])): ?> | Search: "<?= esc($filters['search']) ?>"<?php endif; ?>
                    </div>
                <?php endif; ?>
                
                <div class="grid">
                    <?php if (empty($programs)): ?>
                        <div style="grid-column: 1/-1; text-align: center; padding: 80px 20px; color: var(--muted); border: 2px dashed var(--border); border-radius: 20px;">
                            <h2 style="font-size: 40px; margin: 0 0 10px 0;">📭</h2>
                            <p>Tidak ada beasiswa yang sesuai kriteria pencarian.</p>
                            <a href="/" class="clear-filter" style="display: inline-block; margin-top: 15px;">Lihat Semua Beasiswa</a>
                        </div>
                    <?php else: ?>
                        <?php foreach ($programs as $p): ?>
                            <div class="card">
                                <div class="card-title">
                                    <?= esc($p['title']) ?>
                                </div>
                                
                                <div class="card-info-group">
                                    <div class="info-item">
                                        <span style="font-size: 18px;">🏢</span>
                                        <span><?= esc($p['source']) ?></span>
                                    </div>
                                    
                                    <div class="deadline-badge">
                                        <div class="info-item" style="margin-bottom: 0;">
                                            <span style="font-size: 18px;">📅</span>
                                            <span class="deadline-text">Deadline: <?= esc($p['deadline']) ?></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card-footer">
                                    <a class="btn" href="<?= esc($p['link']) ?>" target="_blank">Detail</a>
                                    <a class="btn btn-primary" href="/bookmark/<?= $p['id'] ?>">
                                        🔖 Simpan
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </main>
        </div>
    </div>
</body>
</html>