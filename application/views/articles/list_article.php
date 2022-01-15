<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php $this->load->view('_partials/head.php'); ?>
</head>

<body>

    <?php $this->load->view('_partials/navbar.php'); ?>

    <h1>List Artikel</h1>
    <ul>
        <?php foreach ($articles as $article) : ?>
            <li>
                <a href="<?= site_url('article/' . $article->slug) ?>">
                    <?= $article->title ? html_escape($article->title) : "No Title" ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
    <?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>