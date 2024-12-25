<?= $this->extend('admin/template') ?>  
<?= $this->section('main') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Update Data HP</h4>
                </div>
                <div class="card-body">
                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('admin/daftar-hp/update/' . $hp['id']) ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama HP</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $hp['nama'] ?? '' ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="merek" class="form-label">Merek</label>
                            <input type="text" class="form-control" id="merek" name="merek" value="<?= $hp['merek'] ?? '' ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="spesifikasi" class="form-label">Spesifikasi</label>
                            <textarea class="form-control" id="spesifikasi" name="spesifikasi" rows="4" required><?= $hp['spesifikasi'] ?? '' ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="tahun_rilis" class="form-label">Tahun Rilis</label>
                            <input type="number" class="form-control" id="tahun_rilis" name="tahun_rilis" value="<?= $hp['tahun_rilis'] ?? '' ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <?php if (!empty($hp['gambar'])) : ?>
                                <div class="mb-2">
                                    <img src="<?= base_url('images/' . $hp['gambar']) ?>" class="img-thumbnail" width="200px">
                                </div>
                            <?php endif; ?>
                            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                            <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar</small>
                        </div>

                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" value="<?= $hp['harga'] ?? '' ?>" required>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update Data</button>
                            <a href="<?= base_url('admin/daftar-hp') ?>" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>