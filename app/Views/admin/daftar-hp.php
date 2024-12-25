<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>

<h2 class="mb-5">Daftar HP</h2>

<div class="mb-3">
    <a href="<?= base_url('admin/daftar-hp/tambah')?>" class="btn btn-primary">Tambah HP</a>
</div>

<div class="mb-5">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama HP</th>
                <th scope="col">Merek</th>
                <th scope="col">Spesifikasi</th>
                <th scope="col">Tahun Rilis</th>
                <th scope="col">Gambar</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mobilephones as $hp):?>
            <tr>
                <th scope="row"><?=$hp['id']?></th>
                <td><?= $hp['nama']?></td>
                <td><?= $hp['merek']?></td>
                <td><?= $hp['spesifikasi']?></td>
                <td><?= $hp['tahun_rilis']?></td>
                <td>
                    <img src="<?= base_url($hp['gambar'])?>" alt="" style="width: 150px; height: auto;">
                </td>
                <td><?= $hp['harga']?></td>
                <td>
                    <a href="<?= base_url('admin/daftar-hp/edit')?>/<?=$hp['id']?>"class="btn btn-success">Edit</a>
                    <a href="<?= base_url('admin/daftar-hp/hapus')?>/<?=$hp['id']?>"class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>

<?= $this->endSection();?>
