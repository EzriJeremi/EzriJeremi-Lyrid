<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lyrid Prima Indonesia</title>
    <link rel="shortcut icon" href="<?= base_url('img/logolyrid.jpeg'); ?>" type="image/x-icon">
    <!-- Include Bootstrap CSS atau CSS lainnya -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="<?= base_url('/pages/index'); ?>"><b>Lyrid Prima </b>Indonesia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/users'); ?>">Daftar Pengguna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/users/create'); ?>">Tambah Pengguna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/pages/about'); ?>">About Us</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>

    <!-- Include jQuery dan Bootstrap JS atau JS lainnya -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>