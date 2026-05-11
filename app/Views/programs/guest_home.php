<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Hub</title>

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
            background:
                linear-gradient(180deg,
                    #0b1220 0%,
                    #0a1020 50%,
                    #070c17 100%);
            font-family: Arial;
            color: white;
        }

        .container {
            width: 95%;
            max-width: 1400px;
            margin: auto;
        }

        /* NAVBAR */

        .navbar {
            margin-top: 20px;

            display: flex;

            justify-content: space-between;

            align-items: center;

            padding: 20px;

            border-radius: 18px;

            background: rgba(15, 26, 49, .6);

            border: 1px solid var(--border);

            flex-wrap: wrap;
        }

        .logo {
            font-size: 40px;
            font-weight: bold;
        }

        .menu {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
        }

        .menu a {
            text-decoration: none;

            color: white;

            padding: 14px 22px;

            border-radius: 14px;

            border: 1px solid var(--border);

            background: rgba(255, 255, 255, .03);

            font-weight: bold;
        }

        .menu a:hover {
            background: rgba(255, 255, 255, .08);
        }

        /* HERO */

        .hero {
            min-height: 85vh;

            display: flex;

            justify-content: center;

            align-items: center;

            text-align: center;
        }

        .hero h1 {
            font-size: 90px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 26px;
            color: var(--muted);
            line-height: 1.7;
        }

        /* SECTION */

        .section {
            padding: 80px 0;
        }

        .section-box {
            background: rgba(15, 26, 49, .6);

            border: 1px solid var(--border);

            border-radius: 20px;

            padding: 40px;
        }

        .section h2 {
            font-size: 42px;
            margin-top: 0;
        }

        .section p,
        .section li {
            color: var(--muted);
            line-height: 1.9;
            font-size: 18px;
        }

        /* GRID */

        .grid {
            display: grid;

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            gap: 20px;
        }

        .card {
            background: rgba(15, 26, 49, .6);

            border: 1px solid var(--border);

            border-radius: 20px;

            padding: 20px;

            min-height: 260px;

            display: flex;

            flex-direction: column;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 14px;
        }

        .meta {
            color: var(--muted);
            line-height: 1.8;
        }

        .bottom {
            margin-top: auto;
        }

        .btn {
            display: inline-block;

            margin-top: 20px;

            padding: 12px 20px;

            border-radius: 14px;

            text-decoration: none;

            color: white;

            font-weight: bold;

            border: 1px solid var(--border);

            background:
                linear-gradient(180deg,
                    rgba(139, 92, 246, .35),
                    rgba(109, 40, 217, .25));
        }

        @media(max-width:900px) {

            .hero h1 {
                font-size: 50px;
            }

            .grid {
                grid-template-columns: 1fr;
            }

        }
    </style>

</head>

<body>

    <div class="container">

        <!-- NAVBAR -->

        <nav class="navbar">

            <div class="logo">
                🎓 Student Hub
            </div>

            <div class="menu">

                <a href="#home">Home</a>

                <a href="#about">About</a>

                <a href="#about">Visi Misi</a>

                <a href="#beasiswa">Beasiswa</a>

                <a href="/login">Login</a>

            </div>

        </nav>

        <!-- HERO -->

        <section class="hero" id="home">

            <div>

                <h1>
                    Temukan Beasiswa Terbaik
                    Untuk Masa Depanmu
                </h1>

                <p>
                    Student Hub membantu siswa dan mahasiswa
                    menemukan peluang beasiswa dari berbagai
                    negara dan institusi terpercaya.
                </p>

            </div>

        </section>

        <!-- ABOUT + VISI -->

        <section class="section" id="about">

            <div class="section-box">

                <h2>
                    About Student Hub
                </h2>

                <p>
                    Student Hub adalah platform pencarian
                    beasiswa modern yang membantu siswa
                    dan mahasiswa menemukan peluang
                    pendidikan terbaik.
                </p>

                <h2>
                    Visi & Misi
                </h2>

                <ul>

                    <li>
                        Menyediakan informasi terpercaya
                    </li>

                    <li>
                        Membantu siswa mencari beasiswa
                    </li>

                    <li>
                        Membangun komunitas pendidikan
                    </li>

                </ul>

            </div>

        </section>

        <!-- BEASISWA -->

        <section class="section" id="beasiswa">

            <h2>
                Daftar Beasiswa
            </h2>

            <br>

            <div class="grid">

                <?php foreach($programs as $p): ?>

                    <div class="card">

                        <div class="title">

                            <?= esc($p['title']); ?>

                        </div>

                        <div class="meta">

                            Deadline:
                            <?= esc($p['deadline']); ?>

                        </div>

                        <div class="meta">

                            Sumber:
                            <?= esc($p['source']); ?>

                        </div>

                        <div class="bottom">

                            <a class="btn"
                               href="<?= esc($p['link']); ?>"
                               target="_blank">

                                Lihat Detail

                            </a>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </section>

    </div>

</body>

</html>