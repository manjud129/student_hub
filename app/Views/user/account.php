<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - Student Hub</title>
    <style>
        :root {
            --bg: #0b1220; --card: #0f1a31; --text: #e6eefc;
            --muted: #a8b3cf; --border: rgba(255,255,255,.12);
            --primary: #6d28d9; --danger: #ef4444; --success: #22c55e;
        }
        * { box-sizing: border-box; margin: 0; }
        body { 
            font-family: Arial, sans-serif; 
            background: linear-gradient(180deg, #0b1220 0%, #0a1020 50%, #070c17 100%);
            color: var(--text); min-height: 100vh; padding: 40px 20px;
        }
        .container { max-width: 600px; margin: auto; }
        .header { 
            text-align: center; margin-bottom: 40px; 
            background: rgba(15,26,49,.6); padding: 30px; 
            border-radius: 20px; border: 1px solid var(--border);
        }
        .header h1 { font-size: 36px; margin-bottom: 10px; }
        .back-btn { 
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(255,255,255,.1); color: var(--text);
            padding: 12px 20px; border-radius: 12px; text-decoration: none;
            border: 1px solid var(--border); font-weight: bold; margin-bottom: 20px;
            transition: .3s;
        }
        .back-btn:hover { background: rgba(255,255,255,.2); transform: translateX(-4px); }
        .profile-card { 
            background: rgba(15,26,49,.8); border: 1px solid var(--border);
            border-radius: 20px; padding: 40px; text-align: center;
            box-shadow: 0 20px 40px rgba(0,0,0,.3);
        }
        .avatar { 
            width: 100px; height: 100px; background: linear-gradient(45deg, var(--primary), #8b5cf6);
            border-radius: 50%; margin: 0 auto 24px; display: flex; align-items: center;
            justify-content: center; font-size: 36px; color: white; font-weight: bold;
        }
        .item { margin-bottom: 24px; }
        .label { 
            display: block; color: var(--muted); font-size: 14px; 
            text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;
        }
        .value { 
            font-size: 24px; font-weight: bold; color: var(--text);
            background: rgba(255,255,255,.05); padding: 12px 20px;
            border-radius: 12px; border: 1px solid var(--border);
        }
        .role-badge { 
            display: inline-block; padding: 8px 20px; border-radius: 999px;
            font-size: 14px; font-weight: bold; margin-top: 12px;
        }
        .role-user { background: rgba(34,197,94,.2); color: #86efac; border: 1px solid #22c55e; }
        .role-admin { background: rgba(109,40,217,.3); color: #c4b5fd; border: 1px solid var(--primary); }
        .action-buttons { 
            display: flex; gap: 16px; justify-content: center; 
            margin-top: 40px; flex-wrap: wrap;
        }
        .btn { 
            padding: 14px 28px; border-radius: 14px; text-decoration: none;
            font-weight: bold; font-size: 16px; display: inline-flex;
            align-items: center; gap: 8px; transition: .3s; border: none;
            cursor: pointer;
        }
        .btn-back { 
            background: rgba(255,255,255,.15); color: var(--text);
            border: 1px solid var(--border);
        }
        .btn-logout { 
            background: linear-gradient(180deg, var(--danger), #dc2626);
            color: white;
        }
        .btn:hover { transform: translateY(-2px); box-shadow: 0 10px 25px rgba(0,0,0,.3); }
        @media (max-width: 768px) {
            .action-buttons { flex-direction: column; }
            .profile-card { padding: 24px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- HEADER WITH BACK BUTTON -->
        <div class="header">
            <h1>👤 Akun Saya</h1>
        </div>

        <!-- PROFILE CARD -->
        <div class="profile-card">
            <div class="avatar">
                <?= strtoupper(substr(session()->get('username') ?? 'U', 0, 2)) ?>
            </div>
            
            <div class="item">
                <span class="label">Username</span>
                <div class="value"><?= esc(session()->get('username') ?? 'N/A') ?></div>
            </div>
            
            <div class="item">
                <span class="label">Role</span>
                <div class="value">
                    <span class="role-badge role-<?= strtolower(session()->get('role') ?? 'user') ?>">
                        <?= ucfirst(session()->get('role') ?? 'User') ?>
                    </span>
                </div>
            </div>
            
            <div class="item">
                <span class="label">Status Login</span>
                <div class="value" style="color: var(--success);">✅ Aktif</div>
            </div>

            <!-- ACTION BUTTONS -->
            <div class="action-buttons">
                <a href="<?= esc($back_url ?? '/') ?>" class="btn btn-back">
                    ← Kembali
                </a>
                <a href="/logout" class="btn btn-logout" 
                   onclick="return confirm('Yakin logout?')">
                    🚪 Logout
                </a>
            </div>
        </div>
    </div>
</body>
</html>