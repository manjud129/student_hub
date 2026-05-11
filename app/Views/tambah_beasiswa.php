<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Beasiswa</title>
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
            box-sizing: border-box
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(180deg, #0b1220 0%, #0a1020 50%, #070c17 100%);
            color: var(--text);
            min-height: 100vh;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            padding: 28px 16px 40px;
        }

        .wrap {
            width: 100%;
            max-width: 620px;
        }

        .top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 16px;
        }

        .top h2 {
            margin: 0;
            font-size: 22px
        }

        .top p {
            margin: 6px 0 0;
            color: var(--muted);
            font-size: 13px
        }

        .back {
            color: var(--text);
            text-decoration: none;
            border: 1px solid var(--border);
            background: rgba(255, 255, 255, .03);
            padding: 10px 12px;
            border-radius: 12px;
        }

        .back:hover {
            background: rgba(255, 255, 255, .06)
        }

        .card {
            border: 1px solid var(--border);
            background: rgba(15, 26, 49, .7);
            border-radius: 16px;
            padding: 18px;
            box-shadow: 0 16px 50px rgba(0, 0, 0, .35);
        }

        .field {
            margin-bottom: 12px
        }

        label {
            display: block;
            font-size: 12px;
            color: var(--muted);
            margin-bottom: 6px
        }

        input {
            width: 100%;
            padding: 11px 12px;
            border-radius: 12px;
            border: 1px solid var(--border);
            background: rgba(255, 255, 255, .03);
            color: var(--text);
            outline: none;
        }

        input:focus {
            border-color: rgba(139, 92, 246, .6);
            box-shadow: 0 0 0 4px rgba(139, 92, 246, .15)
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(180deg, rgba(139, 92, 246, .95), rgba(109, 40, 217, .95));
            color: white;
            font-weight: 900;
            cursor: pointer;
            margin-top: 8px;
        }

        button:hover {
            filter: brightness(1.05)
        }
    </style>
</head>

<body>
    <div class="wrap">
        <div class="top">
            <div>
                <h2>Tambah Program Beasiswa</h2>
                <p>Lengkapi data beasiswa agar dapat diproses oleh admin.</p>
            </div>
            <a class="back" href="/programs">← Kembali</a>
        </div>

        <div class="card">
            <form action="/simpan" method="post">
                <div class="field">

                    <label>Jenjang</label>

                    <select name="jenjang">

                        <option value="SMA">SMA</option>

                        <option value="D3">D3</option>

                        <option value="S1">S1</option>

                        <option value="S2">S2</option>

                        <option value="S3">S3</option>

                    </select>

                </div>

                <div class="field">

                    <label>Tipe</label>

                    <select name="tipe">

                        <option value="Full Scholarship">
                            Full Scholarship
                        </option>

                        <option value="Partial Scholarship">
                            Partial Scholarship
                        </option>

                    </select>

                </div>

                <div class="field">

                    <label>Negara</label>

                    <input type="text" name="negara">

                </div>

                <button type="submit">Simpan</button>
            </form>
        </div>
    </div>
</body>

</html>