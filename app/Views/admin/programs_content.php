<div class="card">

    <div class="section-header">

        <h2>
            Program Beasiswa Pending
        </h2>

        <p>
            Daftar beasiswa yang menunggu persetujuan admin.
        </p>

    </div>

    <?php if (empty($programs)): ?>

        <div class="empty">

            Tidak ada program pending.

        </div>

    <?php else: ?>

        <div class="table-wrapper">

            <table>

                <thead>

                    <tr>

                        <th>
                            Judul
                        </th>

                        <th>
                            Deadline
                        </th>

                        <th>
                            Aksi
                        </th>

                    </tr>

                </thead>

                <tbody>

                    <?php foreach ($programs as $p): ?>

                        <tr>

                            <td>
                                <?= esc($p['title']); ?>
                            </td>

                            <td>
                                <?= esc($p['deadline']); ?>
                            </td>

                            <td>

                                <a class="btn approve-btn" href="/admin/approve-program/<?= $p['id']; ?>">

                                    Approve

                                </a>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    <?php endif; ?>

</div>

<style>
    .card {
        margin-top: 25px;

        background: rgba(15, 26, 49, .6);

        border: 1px solid rgba(255, 255, 255, .12);

        border-radius: 18px;

        padding: 20px;
    }

    .section-header {
        margin-bottom: 20px;
    }

    .section-header h2 {
        margin: 0;
        font-size: 24px;
    }

    .section-header p {
        margin-top: 8px;
        color: #a8b3cf;
    }

    .table-wrapper {
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    thead {
        background: rgba(255, 255, 255, .04);
    }

    th {
        text-align: left;

        padding: 16px;

        font-size: 14px;

        color: #a8b3cf;

        border-bottom: 1px solid rgba(255, 255, 255, .1);
    }

    td {
        padding: 16px;

        border-bottom: 1px solid rgba(255, 255, 255, .06);
    }

    tr:hover {
        background: rgba(255, 255, 255, .03);
    }

    .btn {
        display: inline-flex;

        align-items: center;

        justify-content: center;

        padding: 10px 14px;

        border-radius: 12px;

        text-decoration: none;

        font-weight: 700;
    }

    .approve-btn {
        background: linear-gradient(180deg,
                rgba(34, 197, 94, .9),
                rgba(22, 163, 74, .9));

        color: white;
    }

    .approve-btn:hover {
        filter: brightness(1.08);
    }

    .empty {
        padding: 20px;

        border: 1px dashed rgba(255, 255, 255, .15);

        border-radius: 14px;

        color: #a8b3cf;
    }
</style>