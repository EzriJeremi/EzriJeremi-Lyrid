<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1>Edit Pengguna</h1>

    <?php if (!empty($validation) && is_object($validation)) : ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach ($validation->getErrors() as $error) : ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('/users/update'); ?>" method="post">
        <input type="hidden" name="id" value="<?= $user['id']; ?>">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" value="<?= old('username', $user['username']); ?>">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= old('email', $user['email']); ?>">
        </div>
        <div class="form-group">
            <label for="password">Password (kosongkan jika tidak ingin mengubah):</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?= $this->endSection(); ?>
