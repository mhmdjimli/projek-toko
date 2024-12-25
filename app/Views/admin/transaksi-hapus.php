<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Transaksi</title>
    <link rel="stylesheet" href="/path/to/your/css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Konfirmasi Hapus Transaksi</h1>
        
        <?php if (isset($transaksi)): ?>
            <p>Apakah Anda yakin ingin menghapus transaksi dengan data berikut?</p>
            <ul>
                <li><strong>ID Transaksi:</strong> <?= htmlspecialchars($transaksi['id']); ?></li>
                <li><strong>Tanggal:</strong> <?= htmlspecialchars($transaksi['tanggal']); ?></li>
                <li><strong>Nama Pembeli:</strong> <?= htmlspecialchars($transaksi['nama_pembeli']); ?></li>
                <li><strong>HP:</strong> <?= htmlspecialchars($transaksi['nama_hp']); ?></li>
                <li><strong>Jumlah:</strong> <?= htmlspecialchars($transaksi['jumlah']); ?></li>
                <li><strong>Total Harga:</strong> Rp <?= number_format($transaksi['total_harga'], 2, ',', '.'); ?></li>
            </ul>
            
            <form action="/admin/transaksi/hapus/<?= $transaksi['id']; ?>" method="post">
                <?= csrf_field(); ?>
                
                <button type="submit" class="btn btn-danger">Hapus</button>
                <a href="/admin/transaksi" class="btn btn-secondary">Batal</a>
            </form>
        <?php else: ?>
            <p>Data transaksi tidak ditemukan.</p>
            <a href="/admin/transaksi" class="btn btn-secondary">Kembali ke Daftar Transaksi</a>
        <?php endif; ?>
    </div>
</body>
</html>