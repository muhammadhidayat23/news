<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
    <?php $this->load->view('client/head.php'); ?>
</head>

<body>
    <?php $this->load->view('client/navbar.php'); ?>
    <!-- hero -->

    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade-right">
                    <label for="recently">Recently Post</label>
                    <h1>Two Houses Were Fire Short Electric</h1>
                    <p>Two houses were devoured by fire, cause a short electric, Two houses were devoured by fire, cause a short electric Two houses were devoured by fire, cause a short electric</p>
                    <a href="./pages/detailpage.html"><button type="button" class="btn btn-primary">Read Article</button></a>
                </div>
                <div class="col-md-6" data-aos="fade-right">
                    <img src="<?= base_url() ?>assets/images/Image.png" alt="image-hero">
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News -->

    <section class="latest-news" id="latest-news">
        <div class="container-fluid">
            <div class="container">
                <div class="header">
                    <div class="row">
                        <div class="col-9">
                            <h1 data-aos="fade-right">
                                Latest News
                            </h1>
                        </div>
                        <div class="col-3" data-aos="fade-right">
                            <a href="#">See All</a>
                        </div>
                    </div>
                </div>
                <div class="card-latest">
                    <div class="card-group">
                        <div class="row">
                            <?php foreach ($articles as $article) : ?>
                                <div class="col-md-4">
                                    <div class="card" data-aos="fade-up">
                                        <div class="time">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img src="<?= base_url() ?>assets/images/icon-clock.png" alt="time-icon">
                                                </div>
                                                <div class="col-md ms-2">
                                                    <?= $article->created_at ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $article->title ? html_escape($article->title) : "No Title" ?></h5>
                                            <p class="card-text"><?= word_limiter($article->content, 15, '...') ?></p>
                                        </div>
                                        <div class="btn-read">
                                            <a href="<?= site_url('article/' . $article->slug) ?>" target="_blank">Read More
                                                <img class="read-icon ms-2" src="<?= base_url() ?>assets/images/arrow-right-circle.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Article -->

    <section class="latest-article" id="latest-article">
        <div class="container-fluid">
            <div class="container">
                <div class="header">
                    <div class="row">
                        <h1 data-aos="fade-right">
                            Latest Article
                        </h1>
                    </div>
                </div>
                <div class="card-article">
                    <div class="card-group" data-aos="fade-up">
                        <div class="row">
                            <?php foreach ($articles as $article) : ?>
                                <div class="col-md-4">
                                    <div class="card" style="overflow: hidden; object-fit: cover;">
                                        <div class="image-header">
                                            <img src="https://images.pexels.com/photos/6335/man-coffee-cup-pen.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="image-card" class="card-img-top">
                                        </div>
                                        <div class="card-body">
                                            <div class="time">
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <img src="<?= base_url() ?>assets/images/icon-clock.png" alt="time-icon">
                                                    </div>
                                                    <div class="col-md ms-2">
                                                        <?= $article->created_at ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="card-title"><?= $article->title ? html_escape($article->title) : "No Title" ?></h5>
                                            <p class="card-text">Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat. onsectetur adipiscing elit. onsectetur adipiscing elit.</p>

                                            <div class="btn-read">
                                                <a href="#">Read More
                                                    <img class="read-icon ms-2" src="<?= base_url() ?>assets/images/arrow-right-circle.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trending Topic -->

    <section class="trending-topic" id="trending-topic">
        <div class="container-fluid">
            <div class="container">
                <div class="header">
                    <div class="row">
                        <h1 data-aos="fade-right">
                            Trending Topic
                        </h1>
                    </div>
                </div>
                <div class="card-trending">
                    <div class="card-group">
                        <div class="row">
                            <div class="col-md-8" data-aos="fade-up">
                                <div class="card" style="overflow: hidden; object-fit: cover;">
                                    <div class="image-header">
                                        <img src="<?= base_url() ?>assets/images/image-card.png" alt="image-card" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <p><?= $article->created_at ?></p>
                                        <h5 class="card-title"><?= $article->title ? html_escape($article->title) : "No Title" ?></h5>
                                        <p class="card-text"><?= word_limiter($article->content, 212, '...') ?></p>

                                        <div class="btn-read">
                                            <a href="<?= site_url('article/' . $article->slug) ?>" target="_blank">Read More
                                                <img class="read-icon ms-2" src="<?= base_url() ?>assets/images/arrow-right-circle.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" data-aos="fade-right">
                                <?php foreach ($articles as $article) : ?>
                                    <div class="card">
                                        <div class="time">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img src="<?= base_url() ?>assets/images/icon-clock.png" alt="time-icon">
                                                </div>
                                                <div class="col-md ms-2">
                                                    <?= $article->created_at ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $article->title ? html_escape($article->title) : "No Title" ?> </h5>
                                            <p class="card-text"><?= word_limiter($article->content, 15, '...') ?></p>
                                        </div>
                                        <div class="btn-read">
                                            <a href="<?= site_url('article/' . $article->slug) ?>" target="_blank" ">Read More
                                            <img class=" read-icon ms-2" src="<?= base_url() ?>assets/images/arrow-right-circle.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SignUp -->

    <section class="signup" id="signup">
        <div class="container-fluid">

            <div class="container">
                <div class="box" data-aos="fade-up">
                    <div class="row">
                        <div class="col-md-6">
                            <h1>Sign up For Newsletter To Stay Up To Date</h1>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="email" class="form-control" id="inputemail" placeholder="Your email address">
                                <button type="submit" class="btn btn-primary">SignUp</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $this->load->view('client/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
        });
    </script>
</body>

</html>