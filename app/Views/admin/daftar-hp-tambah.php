<?= $this->extend('admin/template')?>

<?= $this->section('main')?>
<h2 class="mb-5">Tambah HP</h2>

<div class="w-50">
    <form action="<?= base_url('admin/daftar-hp/tambah')?>" enctype="multipart/form-data" method="POST">
        <div class="mb-3">
            <label for="nama">Nama HP</label>
            <input type="text" class="form-control" name="nama" id="nama">
        </div>
        <div class="mb-3">
            <label for="merek">Merek</label>
            <input type="text" class="form-control" name="merek" id="merek">
        </div>
        <div class="mb-3">
            <label for="spesifikasi">Spesifikasi</label>
            <input type="text" class="form-control" name="spesifikasi" id="spesifikasi">
        </div>
        <div class="mb-3">
            <label for="tahun_rilis">Tahun Rilis</label>
            <input type="text" class="form-control" name="tahun_rilis" id="tahun_rilis">
        </div>
        <div class="mb-3">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>
        <div class="mb-3">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga">
        </div>
        <div class="mb-3">
            <a href="<?= base_url('admin/daftar-hp')?>" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection()?>
