<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman <?php echo $data['judul']; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo BASEURL; ?>">DPW Lanjutan</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="<?php echo BASEURL; ?>">
                    Home <span class="sr-only">(current)</span>
                </a>

                <a class="nav-item nav-link" href="<?php echo BASEURL; ?>/mahasiswa">
                    Mahasiswa</span>
                </a>

                <a class="nav-item nav-link" href="<?php echo BASEURL; ?>/about">
                    About
                </a>
            </div>
        </div>
    </div>
</nav>

</body>
</html>