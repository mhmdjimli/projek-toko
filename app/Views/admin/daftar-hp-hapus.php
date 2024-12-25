<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus HP</title>
    <link rel="stylesheet" href="/path/to/your/css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Konfirmasi Hapus HP</h1>
        
        <?php if (isset($hp)): ?>
            <p>Apakah Anda yakin ingin menghapus HP dengan data berikut?</p>
            <ul>
                <li><strong>Nama:</strong> <?= htmlspecialchars($hp['nama']); ?></li>
                <li><strong>Merek:</strong> <?= htmlspecialchars($hp['merek']); ?></li>
                <li><strong>Spesifikasi:</strong> <?= htmlspecialchars($hp['spesifikasi']); ?></li>
                <li><strong>Tahun Rilis:</strong> <?= htmlspecialchars($hp['tahun_rilis']); ?></li>
                <li><strong>Gambar:</strong> <?= htmlspecialchars($hp['gambar']); ?></li>
                <li><strong>Harga:</strong> Rp <?= number_format($hp['harga'], 2, ',', '.'); ?></li>
            </ul>
            
            <form action="/admin/daftar-hp/hapus/<?= $hp['id']; ?>" method="post">
                <?= csrf_field(); ?>
                
                <button type="submit" class="btn btn-danger">Hapus</button>
                <a href="/admin/daftar-hp" class="btn btn-secondary">Batal</a>
            </form>
        <?php else: ?>
            <p>Data HP tidak ditemukan.</p>
            <a href="/admin/daftar-hp" class="btn btn-secondary">Kembali ke Daftar HP</a>
        <?php endif; ?>
    </div>
</body>
</html>