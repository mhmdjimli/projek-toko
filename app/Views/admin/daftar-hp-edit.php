<?= $this->extend('admin/template') ?>  
<?= $this->section('main') ?>
    <div class="container">
        <h4>Edit Data HP</h4>
        <form action="<?= base_url('admin/daftar-hp/update/' . $hp['id']) ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Nama HP</label>
                <input type="text" class="form-control" name="nama" value="<?= $hp['nama'] ?? '' ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Merek</label>
                <input type="text" class="form-control" name="merek" value="<?= $hp['merek'] ?? '' ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Spesifikasi</label>
                <textarea class="form-control" name="spesifikasi" rows="3"><?= $hp['spesifikasi'] ?? '' ?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Tahun Rilis</label>
                <input type="number" class="form-control" name="tahun_rilis" value="<?= $hp['tahun_rilis'] ?? '' ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar</label>
                <input type="file" class="form-control" name="gambar">
                <?php if (!empty($hp['gambar'])): ?>
                    <small class="text-muted">Gambar saat ini: <?= $hp['gambar'] ?></small>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" class="form-control" name="harga" value="<?= $hp['harga'] ?? '' ?>">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?= base_url('admin/daftar-hp') ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
<?= $this->endSection() ?>