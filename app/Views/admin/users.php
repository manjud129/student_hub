<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Approve Users</title>
    <style>
        :root{
            --bg:#0b1220;
            --card:#0f1a31;
            --text:#e6eefc;
            --muted:#a8b3cf;
            --border:rgba(255,255,255,.12);
            --success:#22c55e;
        }
        *{box-sizing:border-box}
        body{margin:0; font-family: Arial, Helvetica, sans-serif; background: #070c17; color:var(--text)}
        .wrap{padding:24px; max-width:1100px; margin:0 auto;}
        .top{display:flex; align-items:flex-start; justify-content:space-between; gap:12px; margin-bottom:16px;}
        .top h2{margin:0; font-size:20px}
        .top p{margin:6px 0 0; color:var(--muted); font-size:13px}
        .top a.back{color:var(--text); text-decoration:none; border:1px solid var(--border); padding:10px 12px; border-radius:12px; background: rgba(255,255,255,.03)}
        .top a.back:hover{background: rgba(255,255,255,.06)}
        .card{border:1px solid var(--border); background: rgba(15,26,49,.6); border-radius:16px; overflow:hidden;}
        table{width:100%; border-collapse:collapse;}
        thead th{
            text-align:left;
            font-size:12px;
            color:var(--muted);
            padding:14px 14px;
            border-bottom:1px solid var(--border);
            background: rgba(255,255,255,.03);
        }
        tbody td{
            padding:14px 14px;
            border-bottom:1px solid rgba(255,255,255,.06);
            vertical-align:top;
            font-size:13px;
        }
        tbody tr:hover{background: rgba(255,255,255,.03)}
        .approve-btn{
            display:inline-flex; align-items:center; justify-content:center;
            padding:9px 12px;
            border-radius:12px;
            border:1px solid rgba(34,197,94,.45);
            background: rgba(34,197,94,.15);
            color: #d1fae5;
            text-decoration:none;
            font-weight:700;
            cursor:pointer;
            white-space:nowrap;
        }
        .approve-btn:hover{background: rgba(34,197,94,.25)}
        .empty{padding:22px 14px; color:var(--muted)}
        @media (max-width: 860px){
            .top{flex-direction:column; align-items:flex-start}
            thead{display:none}
            table, tbody, tr, td{display:block; width:100%}
            tbody td{border-bottom:none; padding:10px 14px}
            tbody tr{border-bottom:1px solid rgba(255,255,255,.06)}
        }
    </style>
</head>
<body>
    <div class="wrap">
        <div class="top">
            <div>
                <h2>User Pending Approval</h2>
                <p>Daftar user yang menunggu persetujuan admin.</p>
            </div>
            <a class="back" href="/admin">← Kembali ke Dashboard</a>
        </div>

        <div class="card">
            <?php if(empty($users)): ?>
                <div class="empty">Tidak ada user pending.</div>
            <?php else: ?>
                <table>
                    <caption style="caption-side:bottom; display:none;">Daftar user pending</caption>
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $u): ?>
                            <tr>
                                <td style="font-weight:700;"><?= $u['username']; ?></td>
                                <td class="muted"><?= $u['email']; ?></td>
                                <td>
                                    <a class="approve-btn" href="/admin/approve-user/<?= $u['id']; ?>">Approve User</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
