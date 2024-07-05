<!-- views/pegawai/create.php -->

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1>Tambah Pegawai</h1>

    <?= \Config\Services::validation()->listErrors(); ?>

    <form action="<?= base_url('/pegawai/store'); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama'); ?>">
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= old('jabatan'); ?>">
        </div>
        <div class="form-group">
            <label for="foto">Foto:</label>
            <input type="file" class="form-control-file" id="foto" name="foto">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?= $this->endSection(); ?>