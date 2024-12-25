<?= $this->extend('admin/template')?>

<?= $this->section('main')?>
<h2 class="mb-5">Tambah HP</h2>

<div class="w-50">
    <form action="<?= base_url('admin/daftar-hp/tambah') ?>" method="POST">
        <div class="mb-3">
            <label for="nama">Nama Pelanggan</label>
            <input type="text" class="form-control" name="nama" id="nama">
        </div>
        <div class="mb-3">
            <label for="merek">Tanggal</label>
            <input type="text" class="form-control" name="merek" id="merek">
        </div>
        <div class="mb-3">
            <label for="spesifikasi">Total</label>
            <input type="text" class="form-control" name="spesifikasi" id="spesifikasi">
        </div>
        <div class="mb-3">
            <label for="tahun_rilis">Status</label>
            <input type="text" class="form-control" name="tahun_rilis" id="tahun_rilis">
        </div>
        <div class="mb-3">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" id="gambar">
        </div>
        <div class="mb-3">
            <label for="harga">Aksi</label>
            <input type="text" class="form-control" name="harga" id="harga">
        </div>
        <div class="mb-3">
            <a href="<?= base_url('admin/daftar-hp') ?>" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection()?>
