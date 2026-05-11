<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beasiswa Tersimpan</title>
    <style>
        :root {
            --bg: #0b1220; --card: #0f1a31; --text: #e6eefc;
            --muted: #a8b3cf; --border: rgba(255,255,255,.12);
            --primary: #6d28d9;
        }
        * { box-sizing: border-box; margin: 0; }
        body { 
            font-family: Arial; 
            background: linear-gradient(180deg, #0b1220 0%, #070c17 100%);
            color: var(--text); 
            padding: 30px; 
        }
        .container { max-width: 1200px; margin: auto; }
        .header { text-align: center; margin-bottom: 40px; }
        .header h1 { font-size: 36px; margin-bottom: 10px; }
        .empty { 
            text-align: center; padding: 60px 20px; 
            color: var(--muted); 
            border: 2px dashed var(--border); 
            border-radius: 16px; 
        }
        .grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fill, minmax(380px, 1fr)); 
            gap: 20px; 
        }
        .card { 
            background: rgba(15,26,49,.7); 
            border: 1px solid var(--border); 
            border-radius: 16px; 
            padding: 24px; 
        }
        .title { font-size: 20px; font-weight: bold; margin-bottom: 12px; }
        .meta { color: var(--muted); margin-bottom: 8px; font-size: 14px; }
        .btn { 
            display: inline-block; padding: 10px 18px; 
            background: linear-gradient(45deg, #6d28d9, #8b5cf6); 
            color: white; text-decoration: none; 
            border-radius: 10px; font-weight: bold; 
            margin-top: 12px; 
        }
        @media (max-width: 768px) { 
            .grid { grid-template-columns: 1fr; } 
        }
    </style>
</head>
<body>
    <div class="container">
        <div style="text-align: center; margin-top: 40px;">
            <a href="/" class="btn" style="background: #475569; padding: 12px 24px; font-size: 16px;">← Kembali ke Home</a>
        </div>
        
        <div class="header">
            <h1>📌 Beasiswa Tersimpan</h1>
            <p>Daftar beasiswa yang kamu simpan</p>
        </div>
        
        <?php if (empty($programs)): ?>
            <div class="empty">
                <h2>Belum ada bookmark</h2>
                <p>Klik ikon <strong>🔖</strong> di halaman beasiswa untuk menyimpan</p>
                <a href="/" class="btn" style="background: #22c55e;">Cari Beasiswa</a>
            </div>
        <?php else: ?>
            <div class="grid">
                <?php foreach ($programs as $p): ?>
                    <div class="card">
                        <div class="title"><?= esc($p['title']) ?></div>
                        <div class="meta">📅 <?= esc($p['deadline']) ?></div>
                        <div class="meta">🏢 <?= esc($p['source']) ?></div>
                    
                        <a href="<?= esc($p['link']) ?>" target="_blank" class="btn">Lihat Detail →</a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        
        
    </div>
</body>
</html>