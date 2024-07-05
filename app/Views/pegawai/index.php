<!-- views/pegawai/index.php -->

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1>Daftar Pegawai</h1>
    <a href="<?= base_url('pegawai/create'); ?>" class="btn btn-primary mb-3">Tambah Pegawai</a>

    <?php if (!empty(session()->getFlashdata('success'))) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
    <?php endif; ?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Foto</th>
                <th>Tanggal Dibuat</th>
                <th>Tanggal Diupdate</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pegawai as $pegawai) : ?>
                <tr>
                    <td><?= $pegawai['id']; ?></td>
                    <td><?= $pegawai['nama']; ?></td>
                    <td><?= $pegawai['jabatan']; ?></td>
                    <td>
                        <img src="<?= base_url('uploads/' . $pegawai['foto']); ?>" width="100" class="img-thumbnail">
                    </td>
                    <td><?= date('d-m-Y H:i:s', strtotime($pegawai['created_at'])); ?></td>
                    <td><?= date('d-m-Y H:i:s', strtotime($pegawai['updated_at'])); ?></td>
                    <td>
                        <a href="<?= base_url('/pegawai/edit/' . $pegawai['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?= base_url('/pegawai/delete/' . $pegawai['id']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus pegawai ini?')" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>