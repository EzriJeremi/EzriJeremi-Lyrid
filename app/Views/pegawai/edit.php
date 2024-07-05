<!-- views/pegawai/edit.php -->

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1>Edit Pegawai</h1>

    <?= \Config\Services::validation()->listErrors(); ?>

    <form action="<?= base_url('/pegawai/update'); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $pegawai['id']; ?>">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama', $pegawai['nama']); ?>">
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= old('jabatan', $pegawai['jabatan']); ?>">
        </div>
        <div class="form-group">
            <label for="foto">Foto:</label><br>
            <img src="<?= base_url('uploads/' . $pegawai['foto']); ?>" width="100"><br><br>
            <input type="file" class="form-control-file" id="foto" name="foto">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?= $this->endSection(); ?>