<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>
<h2 class="mb-5">Transaksi</h2>

<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pelanggan</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Total</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>James Smith</td>
                <td>9 Des 2024 09.35 WIB</td>
                <td>Rp250.000</td>
                <td>
                    <span class="badge bg-warning">Pending</span>
                </td>
                <td>
                    <a href="<?= base_url('admin/transaksi/ubah-status')?>" class="btn btn-success btn-sm">Ubah Status</a>
                    <a href="<?= base_url('admin/transaksi/hapus')?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <!-- Tambahkan lebih banyak baris di sini jika diperlukan -->
        </tbody>
    </table>
</div>

<!-- Tambahkan tombol untuk menambah transaksi baru -->
<div class="mb-3">
    <a href="<?= base_url('admin/transaksi/tambah') ?>" class="btn btn-primary">Tambah Transaksi</a>
</div>

<?= $this->endSection(); ?>