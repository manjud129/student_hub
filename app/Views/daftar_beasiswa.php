<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Beasiswa Aggregator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h2 class="mb-4 text-center">🎓 Rekomendasi Beasiswa Terbaru</h2>
        <p class="text-center text-muted">Data diambil otomatis dari Luarkampus melalui n8n</p>
        
        <div class="row mt-4">
            <?php if (!empty($programs)) : ?>
                <?php foreach ($programs as $item) : ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <span class="badge bg-info mb-2"><?= $item['category']; ?></span>
                                <h5 class="card-title"><?= $item['title']; ?></h5>
                                <p class="card-text text-secondary">Tersedia untuk mahasiswa aktif.</p>
                            </div>
                            <div class="card-footer bg-white border-top-0">
                               <a href="https://luarkampus.id/beasiswa/rekomendasi" target="_blank" class="btn btn-primary w-100">Daftar Sekarang</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="alert alert-warning text-center">Belum ada data beasiswa di database.</div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>