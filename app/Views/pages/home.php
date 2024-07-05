<!-- File: app/Views/welcome_message.php -->

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <h1><b>Lyrid Prima</b> Indonesia</h1>
        </div>
        <div class="card-body">
            <div style="text-align: center;">
                <h2>Selamat Datang di Halaman Utama</h2>
                <!-- Menampilkan gambar -->
                <img src="<?= base_url('img/lyrid.png'); ?>" alt="Lyrid Logo" width="400">
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->

<?= $this->endSection(); ?>