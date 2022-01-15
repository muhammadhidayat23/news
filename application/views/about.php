<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>" />
    <?php $this->load->view('_partials/head.php'); ?>
</head>

<body>

<?php $this->load->view('_partials/navbar.php'); ?>
    <h1>About Us</h1>
    <p>Ini adalah halaman about</p>

    <?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>