<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <style>
        :root{
            --bg:#0b1220;
            --card:#0f1a31;
            --text:#e6eefc;
            --muted:#a8b3cf;
            --primary:#6d28d9;
            --primary-2:#8b5cf6;
            --border:rgba(255,255,255,.12);
            --danger:#ef4444;
        }
        *{box-sizing:border-box}
        body{
            margin:0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(180deg, #0b1220 0%, #0a1020 50%, #070c17 100%);
            color:var(--text);
            min-height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            padding:20px;
        }
        .card{
            width:100%;
            max-width:460px;
            background: rgba(15,26,49,.7);
            border:1px solid var(--border);
            border-radius:16px;
            padding:20px;
            box-shadow: 0 16px 50px rgba(0,0,0,.35);
        }
        .title{margin:0 0 6px; font-size:22px}
        .subtitle{margin:0 0 16px; color:var(--muted); font-size:13px; line-height:1.4}
        .field{margin-bottom:12px}
        label{display:block; font-size:12px; color:var(--muted); margin-bottom:6px}
        input{
            width:100%;
            padding:11px 12px;
            border-radius:12px;
            border:1px solid var(--border);
            background: rgba(255,255,255,.03);
            color:var(--text);
            outline:none;
        }
        input:focus{border-color: rgba(139,92,246,.6); box-shadow: 0 0 0 4px rgba(139,92,246,.15)}
        button{
            width:100%;
            padding:12px;
            border:none;
            border-radius:12px;
            background: linear-gradient(180deg, rgba(139,92,246,.95), rgba(109,40,217,.95));
            color:white;
            font-weight:800;
            cursor:pointer;
        }
        button:hover{filter:brightness(1.05)}
        .row{display:flex; justify-content:space-between; gap:12px; align-items:center; margin-top:14px;}
        .link{color:var(--muted); text-decoration:none; font-size:13px}
        .link:hover{color:var(--text)}
    </style>
</head>
<body>
    <div class="card">
        <h1 class="title">Register</h1>
        <p class="subtitle">Daftarkan akun Anda untuk mulai menggunakan Student Hub.</p>

        <form action="/save-register" method="post">
            <div class="field">
                <label for="username">Username</label>
                <input id="username" type="text" name="username" required placeholder="Username" />
            </div>

            <div class="field">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" required placeholder="nama@email.com" />
            </div>

            <div class="field">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required placeholder="Minimal 8 karakter" />
            </div>

            <button type="submit">Register</button>

            <div class="row">
                <a class="link" href="/login">Sudah punya akun? Login</a>
            </div>
        </form>
    </div>
</body>
</html>
