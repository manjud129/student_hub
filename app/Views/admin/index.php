<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <style>
        :root {
            --bg: #0b1220;
            --card: #0f1a31;
            --text: #e6eefc;
            --muted: #a8b3cf;
            --border: rgba(255, 255, 255, .12);
            --primary: #6d28d9;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial;
            background: linear-gradient(180deg, #0b1220, #070c17);
            color: var(--text);
        }

        .layout {
            display: grid;
            grid-template-columns: 260px 1fr;
            min-height: 100vh;
        }

        /*
        ================= SIDEBAR
        =================
        */

        .sidebar {
            background: rgba(15, 26, 49, .7);
            border-right: 1px solid var(--border);
            padding: 20px;
        }

        .logo {
            font-size: 24px;
            font-weight: 800;
            margin-bottom: 30px;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .menu a {
            text-decoration: none;
            color: var(--text);
            padding: 12px;
            border-radius: 12px;
            border: 1px solid var(--border);
            background: rgba(255, 255, 255, .03);
            font-weight: 700;
        }

        .menu a:hover {
            background: rgba(255, 255, 255, .06);
        }

        /*
        ================= CONTENT
        =================
        */

        .content {
            padding: 30px;
        }

        .top h1 {
            margin: 0;
            font-size: 28px;
        }

        .top p {
            color: var(--muted);
            margin-top: 8px;
        }

        /*
        ================= DYNAMIC CONTENT
        =================
        */

        #admin-content {
            margin-top: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 14px;
            border-bottom: 1px solid var(--border);
            text-align: left;
        }

        .btn {
            display: inline-block;
            padding: 10px 14px;
            border-radius: 10px;
            text-decoration: none;
            color: white;
            background: var(--primary);
            font-weight: 700;
        }
    </style>
</head>

<body>

    <div class="layout">

        <!-- SIDEBAR -->

        <aside class="sidebar">

            <div class="logo">
                🎓 Admin Panel
            </div>

            <div class="menu">

                <a href="#" onclick="loadUsers()">
                    Approve Users
                </a>

                <a href="#" onclick="loadPrograms()">
                    Approve Beasiswa
                </a>

                <a href="/logout">
                    Logout
                </a>

            </div>

        </aside>

        <!-- CONTENT -->

        <main class="content">

            <div class="top">

                <h1>
                    Admin Dashboard
                </h1>

                <p>
                    Kelola persetujuan user dan beasiswa yang masuk.
                </p>

            </div>

            <!-- CONTENT DINAMIS -->

            <div id="admin-content">

            </div>

        </main>

    </div>

    <script>

        function loadUsers() {
            fetch('/admin/users')
                .then(response => response.text())
                .then(data => {

                    document.getElementById('admin-content').innerHTML = data;

                });
        }

        function loadPrograms() {
            fetch('/admin/programs')
                .then(response => response.text())
                .then(data => {

                    document.getElementById('admin-content').innerHTML = data;

                });
        }

    </script>

</body>

</html>