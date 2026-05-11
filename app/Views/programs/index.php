<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Student Hub - Beasiswa</title>

    <style>
        :root {
            --bg: #0b1220;
            --card: #0f1a31;
            --text: #e6eefc;
            --muted: #a8b3cf;
            --border: rgba(255, 255, 255, .12);
            --primary: #6d28d9;
            --primary-2: #8b5cf6;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(180deg, #0b1220 0%, #0a1020 50%, #070c17 100%);
            color: var(--text);
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 22px 16px 40px;
        }

        /* ================= NAVBAR ================= */

        .navbar {

            position: sticky;

            top: 0;

            z-index: 999;

            display: flex;

            justify-content: space-between;

            align-items: center;

            padding: 18px;

            border-radius: 16px;

            border: 1px solid var(--border);

            background: rgba(15, 26, 49, .9);

            backdrop-filter: blur(10px);

            margin-bottom: 40px;

            flex-wrap: wrap;

            gap: 14px;
        }

        .nav-brand {

            font-size: 24px;

            font-weight: 800;
        }

        .nav-menu {

            display: flex;

            gap: 12px;

            flex-wrap: wrap;
        }

        .nav-menu a {

            text-decoration: none;

            color: var(--text);

            padding: 10px 16px;

            border-radius: 12px;

            border: 1px solid var(--border);

            background: rgba(255, 255, 255, .03);

            font-weight: 700;

            transition: .2s;
        }

        .nav-menu a:hover {

            background: rgba(255, 255, 255, .08);

            transform: translateY(-2px);
        }

        /* ================= HERO ================= */

        .hero {

            min-height: 85vh;

            display: flex;

            align-items: center;

            justify-content: center;

            text-align: center;

            padding: 40px 20px;
        }

        .hero-content {

            max-width: 850px;
        }

        .hero h1 {

            font-size: 64px;

            line-height: 1.2;

            margin-bottom: 24px;
        }

        .hero p {

            color: var(--muted);

            font-size: 20px;

            line-height: 1.8;

            margin-bottom: 30px;
        }

        .hero-btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 15px 24px;

            border-radius: 14px;

            text-decoration: none;

            color: white;

            font-weight: 800;

            background: linear-gradient(180deg,
                    rgba(139, 92, 246, .95),
                    rgba(109, 40, 217, .95));
        }

        /* ================= SECTION ================= */

        .section {

            padding: 90px 0;
        }

        .section-box {

            background: rgba(15, 26, 49, .6);

            border: 1px solid var(--border);

            border-radius: 20px;

            padding: 40px;
        }

        .section-box h2 {

            margin-top: 0;

            font-size: 42px;

            margin-bottom: 20px;
        }

        .section-box p {

            color: var(--muted);

            line-height: 1.9;

            font-size: 17px;
        }

        .section-box ul {

            color: var(--muted);

            line-height: 2;
        }

        /* ================= LAYOUT ================= */

        .layout {

            display: grid;

            grid-template-columns: 280px 1fr;

            gap: 20px;
        }

        /* ================= SIDEBAR ================= */

        .sidebar {

            background: rgba(15, 26, 49, .6);

            border: 1px solid var(--border);

            border-radius: 16px;

            padding: 18px;

            height: fit-content;

            position: sticky;

            top: 100px;
        }

        .sidebar h3 {

            margin-top: 0;

            margin-bottom: 18px;
        }

        .sidebar form {

            display: flex;

            flex-direction: column;

            gap: 14px;
        }

        /* ================= INPUT ================= */

        input,
        select {

            width: 100%;

            padding: 11px 12px;

            border-radius: 12px;

            border: 1px solid var(--border);

            background: rgba(255, 255, 255, .03);

            color: var(--text);
        }

        input:focus,
        select:focus {

            outline: none;

            border-color: rgba(139, 92, 246, .6);
        }

        .filter-btn {

            border: none;

            padding: 12px;

            border-radius: 12px;

            font-weight: 800;

            cursor: pointer;

            color: white;

            background: linear-gradient(180deg,
                    rgba(139, 92, 246, .95),
                    rgba(109, 40, 217, .95));
        }

        /* ================= HEADER ================= */

        .header {

            margin-bottom: 24px;
        }

        .header h1 {

            margin: 0;

            font-size: 34px;
        }

        .header p {

            color: var(--muted);
        }

        /* ================= GRID ================= */

        .grid {

            display: grid;

            grid-template-columns: repeat(3, minmax(0, 1fr));

            gap: 14px;
        }

        /* ================= CARD ================= */

        .card {

            background: rgba(15, 26, 49, .6);

            border: 1px solid var(--border);

            border-radius: 16px;

            padding: 16px;

            box-shadow: 0 10px 30px rgba(0, 0, 0, .25);

            display: flex;

            flex-direction: column;

            gap: 10px;

            min-height: 280px;
        }

        .title {

            font-weight: 800;

            font-size: 18px;

            line-height: 1.4;
        }

        .meta {

            color: var(--muted);

            font-size: 14px;

            line-height: 1.6;
        }

        .deadline {

            color: #fca5a5;

            font-weight: 700;
        }

        .bottom {

            margin-top: auto;

            display: flex;

            gap: 10px;

            flex-wrap: wrap;
        }

        /* ================= BUTTON ================= */

        .btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 10px 14px;

            border-radius: 12px;

            text-decoration: none;

            border: 1px solid var(--border);

            color: var(--text);

            background: rgba(255, 255, 255, .03);

            font-weight: 800;

            font-size: 13px;
        }

        .btn:hover {

            background: rgba(255, 255, 255, .06);
        }

        /* ================= RESPONSIVE ================= */

        @media(max-width:1100px) {

            .grid {

                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

        }

        @media(max-width:900px) {

            .layout {

                grid-template-columns: 1fr;
            }

            .sidebar {

                position: static;
            }

            .hero h1 {

                font-size: 48px;
            }

        }

        @media(max-width:640px) {

            .grid {

                grid-template-columns: 1fr;
            }

            .hero h1 {

                font-size: 38px;
            }

        }
    </style>
</head>

<body>

    <div class="container">

        <!-- ================= NAVBAR ================= -->

        <nav class="navbar">

            <div class="nav-brand">
                🎓 Student Hub
            </div>

            <div class="nav-menu">

                <a href="#home">Home</a>

                <a href="#about">About</a>

                <a href="#visi">Visi Misi</a>

                <a href="#beasiswa">Beasiswa</a>

                <a href="/login">Login</a>

            </div>

        </nav>

        <!-- ================= HOME ================= -->

        <section id="home" class="hero">

            <div class="hero-content">

                <h1>
                    Temukan Beasiswa Terbaik Untuk Masa Depanmu
                </h1>

                <p>
                    Student Hub membantu siswa dan mahasiswa menemukan
                    peluang beasiswa dari berbagai negara dan institusi terpercaya.
                </p>

                <a href="#beasiswa" class="hero-btn">
                    Jelajahi Beasiswa
                </a>

            </div>

        </section>

        <!-- ================= ABOUT + VISI MISI ================= -->

        <section id="about" class="section">

            <div class="section-box">

                <h2>
                    About Student Hub
                </h2>

                <p>
                    Student Hub adalah platform pencarian beasiswa modern
                    yang membantu pelajar dan mahasiswa menemukan
                    peluang pendidikan terbaik dari dalam maupun luar negeri.
                    Platform ini dibuat untuk mempermudah akses informasi
                    beasiswa agar generasi muda dapat memperoleh
                    pendidikan yang lebih luas dan berkualitas.
                </p>

                <br>

                <h2 id="visi">
                    Visi & Misi
                </h2>

                <p>
                    Menjadi platform informasi beasiswa terbaik
                    yang membantu generasi muda mendapatkan
                    akses pendidikan lebih luas.
                </p>

                <ul>

                    <li>
                        Menyediakan informasi beasiswa terpercaya
                    </li>

                    <li>
                        Membantu siswa menemukan peluang pendidikan
                    </li>

                    <li>
                        Membangun komunitas pendidikan positif
                    </li>

                    <li>
                        Memberikan akses informasi beasiswa
                        secara mudah dan cepat
                    </li>

                </ul>

            </div>

        </section>

        <!-- ================= BEASISWA ================= -->

        <section id="beasiswa" class="section">

            <div class="layout">

                <!-- ================= SIDEBAR ================= -->

                <aside class="sidebar">

                    <h3>Filter Beasiswa</h3>

                    <form method="GET">

                        <div>

                            <label>Search</label>

                            <input type="text" name="search" placeholder="Cari beasiswa...">

                        </div>

                        <div>

                            <label>Jenjang</label>

                            <select name="jenjang">

                                <option value="">Semua</option>

                                <option value="SMA">SMA</option>

                                <option value="D3">D3</option>

                                <option value="S1">S1</option>

                                <option value="S2">S2</option>

                                <option value="S3">S3</option>

                            </select>

                        </div>

                        <div>

                            <label>Tipe</label>

                            <select name="tipe">

                                <option value="">Semua</option>

                                <option value="Full Scholarship">
                                    Full Scholarship
                                </option>

                                <option value="Partial Scholarship">
                                    Partial Scholarship
                                </option>

                            </select>

                        </div>

                        <div>

                            <label>Negara</label>

                            <input type="text" name="negara" placeholder="Indonesia, Jepang...">

                        </div>

                        <button class="filter-btn" type="submit">
                            Cari Beasiswa
                        </button>

                    </form>

                </aside>

                <!-- ================= CONTENT ================= -->

                <main>



                    <?php if (empty($programs)): ?>

                        <div class="empty">

                            Belum ada beasiswa.

                        </div>

                    <?php else: ?>

                        <div class="grid">

                            <?php foreach ($programs as $p): ?>

                                <article class="card">

                                    <div class="title">

                                        <?= esc($p['title']); ?>

                                    </div>

                                    <div class="meta">

                                        Deadline:

                                        <span class="deadline">

                                            <?= esc($p['deadline']); ?>

                                        </span>

                                    </div>

                                    <div class="meta">

                                        Sumber:
                                        <?= esc($p['source']); ?>

                                    </div>

                                    <div class="meta">

                                        Jenjang:
                                        <?= esc($p['jenjang']); ?>

                                    </div>

                                    <div class="meta">

                                        Tipe:
                                        <?= esc($p['tipe']); ?>

                                    </div>

                                    <div class="meta">

                                        Negara:
                                        <?= esc($p['negara']); ?>

                                    </div>

                                    <div class="bottom">

                                        <a class="btn" href="<?= esc($p['link']); ?>" target="_blank">

                                            Lihat Detail

                                        </a>

                                    </div>

                                </article>

                            <?php endforeach; ?>

                        </div>

                    <?php endif; ?>

                </main>

            </div>

        </section>

    </div>

</body>

</html>