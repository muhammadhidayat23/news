<!doctype html>
<html lang="en">

<head>
    <?php $this->load->view('client/head.php'); ?>
</head>

<body>

    <!-- Header -->

    <?php $this->load->view('client/navbar.php'); ?>

    <!-- Detail Page -->

    <section class="detail-page">
        <div class="container">
            <div class="header">
                <div class="row">
                    <h5 data-aos="fade-right">
                        <a href="<?= site_url('') ?>">Home > News > <span>Latest Post</span></a>
                    </h5>
                </div>
            </div>
            <div class="card-detail">
                <div class="card-group">
                    <div class="row">
                        <div class="col-md-8" data-aos="fade-up">
                            <div class="card">
                                <p><?= $article->created_at ?></p>
                                <h5 class="card-title"><?= $article->title ? html_escape($article->title) : "No Title" ?></h5>
                                <img src="<?= base_url() ?>assets/images/image-card.png" alt="image-card" class="card-img-top">
                                <div class="card-body">

                                    <p class="card-text"><?= $article->content ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-left">
                            <?php foreach ($articles as $article) : ?>
                                <div class="card">
                                    <div class="time">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="<?= base_url() ?>assets/images/icon-clock.png" alt="time-icon">
                                            </div>
                                            <div class="col-md ms-2">
                                                3 MINS
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $article->title ? html_escape($article->title) : "No Title" ?></h5>
                                        <p class="card-text">Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat.</p>
                                    </div>
                                    <div class="btn-read">
                                        <a href="<?= site_url('article/' . $article->slug) ?>">Read More
                                            <img class="read-icon ms-2" src="<?= base_url() ?>assets/images/arrow-right-circle.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach ?>
                            <!-- <div class="card">
                                <div class="time">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img src="<?= base_url() ?>assets/images/icon-clock.png" alt="time-icon">
                                        </div>
                                        <div class="col-md ms-2">
                                            3 MINS
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing.</h5>
                                    <p class="card-text">Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat.</p>
                                </div>
                                <div class="btn-read">
                                    <a href="#">Read More
                                        <img class="read-icon ms-2" src="<?= base_url() ?>assets/images/arrow-right-circle.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="time">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img src="<?= base_url() ?>assets/images/icon-clock.png" alt="time-icon">
                                        </div>
                                        <div class="col-md ms-2">
                                            3 MINS
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing.</h5>
                                    <p class="card-text">Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat.</p>
                                </div>
                                <div class="btn-read">
                                    <a href="#">Read More
                                        <img class="read-icon ms-2" src="<?= base_url() ?>assets/images/arrow-right-circle.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="time">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img src="<?= base_url() ?>assets/images/icon-clock.png" alt="time-icon">
                                        </div>
                                        <div class="col-md ms-2">
                                            3 MINS
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing.</h5>
                                    <p class="card-text">Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat.</p>
                                </div>
                                <div class="btn-read">
                                    <a href="#">Read More
                                        <img class="read-icon ms-2" src="<?= base_url() ?>assets/images/arrow-right-circle.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="time">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img src="<?= base_url() ?>assets/images/icon-clock.png" alt="time-icon">
                                        </div>
                                        <div class="col-md ms-2">
                                            3 MINS
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing.</h5>
                                    <p class="card-text">Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat.</p>
                                </div>
                                <div class="btn-read">
                                    <a href="#">Read More
                                        <img class="read-icon ms-2" src="<?= base_url() ?>assets/images/arrow-right-circle.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="time">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img src="<?= base_url() ?>assets/images/icon-clock.png" alt="time-icon">
                                        </div>
                                        <div class="col-md ms-2">
                                            3 MINS
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing.</h5>
                                    <p class="card-text">Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat.</p>
                                </div>
                                <div class="btn-read">
                                    <a href="#">Read More
                                        <img class="read-icon ms-2" src="<?= base_url() ?>assets/images/arrow-right-circle.png" alt="">
                                    </a>
                                </div>
                            </div> -->
                        </div>
                    </div>
    </section>

    <!-- Latest Article -->

    <section class="latest-article">
        <div class="container">
            <div class="header">
                <div class="row">
                    <h1 data-aos="fade-right">
                        Recommendation for you
                    </h1>
                </div>
            </div>
            <div class="card-article">
                <div class="card-group" data-aos="fade-up">
                    <div class="card">
                        <img src="<?= base_url() ?>assets/images/image-card.png" alt="image-card" class="card-img-top">

                        <div class="card-body">
                            <div class="time">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="<?= base_url() ?>assets/images/icon-clock.png" alt="time-icon">
                                    </div>
                                    <div class="col-md ms-2">
                                        3 MINS
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus consequat.</h5>
                            <p class="card-text">Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat. onsectetur adipiscing elit. onsectetur adipiscing elit.</p>

                            <div class="btn-read">
                                <a href="#">Read More
                                    <img class="read-icon ms-2" src="<?= base_url() ?>assets/images/arrow-right-circle.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="<?= base_url() ?>assets/images/image-card.png" alt="image-card" class="card-img-top">

                        <div class="card-body">
                            <div class="time">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="<?= base_url() ?>assets/images/icon-clock.png" alt="time-icon">
                                    </div>
                                    <div class="col-md ms-2">
                                        3 MINS
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus consequat.</h5>
                            <p class="card-text">Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat. onsectetur adipiscing elit. onsectetur adipiscing elit.</p>

                            <div class="btn-read">
                                <a href="#">Read More
                                    <img class="read-icon ms-2" src="<?= base_url() ?>assets/images/arrow-right-circle.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="<?= base_url() ?>assets/images/image-card.png" alt="image-card" class="card-img-top">

                        <div class="card-body">
                            <div class="time">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="<?= base_url() ?>assets/images/icon-clock.png" alt="time-icon">
                                    </div>
                                    <div class="col-md ms-2">
                                        3 MINS
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus consequat.</h5>
                            <p class="card-text">Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat. onsectetur adipiscing elit. onsectetur adipiscing elit.</p>

                            <div class="btn-read">
                                <a href="#">Read More
                                    <img class="read-icon ms-2" src="<?= base_url() ?>assets/images/arrow-right-circle.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SignUp -->

    <section class="signup">
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
    </section>

    <!-- footer -->
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