<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/main.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>SmartNews</title>
</head>

<body>

    <!-- Header -->

    <nav class="navbar sticky-top navbar-expand-lg navbar-light py-3" style="background-color: white;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./assets/images/logo.png" alt="logo-smartnews">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#latest-article">Article</a>
                    <a class="nav-link" href="#trending-topic">Trending</a>
                    <a class="nav-link" href="#signup">Sign In</a>
                    <a class="btn-get" href="#latest-article">Get Started</a>
                </div>
            </div>
        </div>
    </nav>

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
                    <img src="./assets/images/Image.png" alt="image-hero">
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
                        <div class="card" data-aos="fade-up">
                            <div class="time">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="assets/images/icon-clock.png" alt="time-icon">
                                    </div>
                                    <div class="col-md ms-2">
                                        3 MINS
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus consequat.</h5>
                                <p class="card-text">Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat. onsectetur adipiscing elit. onsectetur adipiscing elit.</p>
                            </div>
                            <div class="btn-read">
                                <a href="#">Read More
                                    <img class="read-icon ms-2" src="./assets/images/arrow-right-circle.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="card" data-aos="fade-up">
                            <div class="time">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="./assets/images/icon-clock.png" alt="time-icon">
                                    </div>
                                    <div class="col-md ms-2">
                                        3 MINS
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus consequat.</h5>
                                <p class="card-text">Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat. onsectetur adipiscing elit. onsectetur adipiscing elit.</p>
                            </div>
                            <div class="btn-read">
                                <a href="#">Read More
                                    <img class="read-icon ms-2" src="./assets/images/arrow-right-circle.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="card" data-aos="fade-up">
                            <div class="time">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="./assets/images/icon-clock.png" alt="time-icon">
                                    </div>
                                    <div class="col-md ms-2">
                                        3 MINS
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus consequat.</h5>
                                <p class="card-text">Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat. onsectetur adipiscing elit. onsectetur adipiscing elit.</p>
                            </div>
                            <div class="btn-read">
                                <a href="#">Read More
                                    <img class="read-icon ms-2" src="./assets/images/arrow-right-circle.png" alt="">
                                </a>
                            </div>
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
                        <div class="card" style="overflow: hidden; object-fit: cover;">
                            <div class="image-header">
                                <img src="https://images.pexels.com/photos/6335/man-coffee-cup-pen.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="image-card" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <div class="time">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img src="./assets/images/icon-clock.png" alt="time-icon">
                                        </div>
                                        <div class="col-md ms-2">
                                            3 MINS
                                        </div>
                                    </div>
                                </div>
                                <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing.</h5>
                                <p class="card-text">Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat. onsectetur adipiscing elit. onsectetur adipiscing elit.</p>

                                <div class="btn-read">
                                    <a href="#">Read More
                                        <img class="read-icon ms-2" src="./assets/images/arrow-right-circle.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="overflow: hidden; object-fit: cover;">
                            <img src="./assets/images/image-card.png" alt="image-card" class="card-img-top">

                            <div class="card-body">
                                <div class="time">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img src="./assets/images/icon-clock.png" alt="time-icon">
                                        </div>
                                        <div class="col-md ms-2">
                                            3 MINS
                                        </div>
                                    </div>
                                </div>
                                <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing.</h5>
                                <p class="card-text">Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat. onsectetur adipiscing elit. onsectetur adipiscing elit.</p>

                                <div class="btn-read">
                                    <a href="#">Read More
                                        <img class="read-icon ms-2" src="./assets/images/arrow-right-circle.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="overflow: hidden; object-fit: cover;">
                            <img src="./assets/images/image-card.png" alt="image-card" class="card-img-top">

                            <div class="card-body">
                                <div class="time">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img src="./assets/images/icon-clock.png" alt="time-icon">
                                        </div>
                                        <div class="col-md ms-2">
                                            3 MINS
                                        </div>
                                    </div>
                                </div>
                                <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing.</h5>
                                <p class="card-text">Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat. onsectetur adipiscing elit. onsectetur adipiscing elit.</p>

                                <div class="btn-read">
                                    <a href="#">Read More
                                        <img class="read-icon ms-2" src="./assets/images/arrow-right-circle.png" alt="">
                                    </a>
                                </div>
                            </div>
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
                                        <img src="./assets/images/image-card.png" alt="image-card" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <p>Minggu 28 November 2021 15:04 WIB</p>
                                        <h5 class="card-title">Lorem ipsum dolor sit amet, house consectetur adipiscing.</h5>
                                        <p class="card-text">Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat. Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat. Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat. Lorem
                                            ipsum dolor amet, Consectetur adipiscing elit. Purus consequat. Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat. Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat. Consectetur
                                            adipiscing elit. Consectetur adipiscing elit. Purus consequat. Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat. Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat. Consectetur
                                            adipiscing elit. Purus consequat. Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat. Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat. Purus consequat. Lorem ipsum dolor
                                            amet, Consectetur adipiscing elit. Purus consequat. Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat. Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat. Lorem ipsum dolor
                                            amet, Consectetur adipiscing elit. Purus consequat. Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat. Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat. Lorem ipsum dolor
                                            amet, Consectetur adipiscing .....
                                        </p>

                                        <div class="btn-read">
                                            <a href="#">Read More
                                                <img class="read-icon ms-2" src="./assets/images/arrow-right-circle.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" data-aos="fade-right">
                                <div class="card">
                                    <div class="time">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="./assets/images/icon-clock.png" alt="time-icon">
                                            </div>
                                            <div class="col-md ms-2">
                                                3 MINS
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus consequat.</h5>
                                        <p class="card-text">Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat.</p>
                                    </div>
                                    <div class="btn-read">
                                        <a href="#">Read More
                                            <img class="read-icon ms-2" src="./assets/images/arrow-right-circle.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="time">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="./assets/images/icon-clock.png" alt="time-icon">
                                            </div>
                                            <div class="col-md ms-2">
                                                3 MINS
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus consequat.</h5>
                                        <p class="card-text">Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat.</p>
                                    </div>
                                    <div class="btn-read">
                                        <a href="#">Read More
                                            <img class="read-icon ms-2" src="./assets/images/arrow-right-circle.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="time">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="./assets/images/icon-clock.png" alt="time-icon">
                                            </div>
                                            <div class="col-md ms-2">
                                                3 MINS
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus consequat.</h5>
                                        <p class="card-text">Lorem ipsum dolor amet, Consectetur adipiscing elit. Purus consequat.</p>
                                    </div>
                                    <div class="btn-read">
                                        <a href="#">Read More
                                            <img class="read-icon ms-2" src="./assets/images/arrow-right-circle.png" alt="">
                                        </a>
                                    </div>
                                </div>
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

    <!-- footer -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="logo">
                            <img src="./assets/images/logo.png">
                            <div class="title">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Adipiscing vulputate velit enim pretium. Montes, dictum pellentesque pulvinar orci. </p>
                            </div>

                            <div class="contact">
                                <ul>
                                    <li>
                                        <a href="#"><img src="./assets/images/send.png" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="./assets/images/twitter.png" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="./assets/images/youtube.png" alt=""></a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-2">
                        <h5>Smart News</h5>
                        <div class="list">
                            <ul>
                                <li><a href="#">Fast Update</a></li>
                                <li><a href="#">Free News</a></li>
                                <li><a href="#">Up To Date</a></li>
                                <li><a href="#">Accurate</a></li>
                                <li><a href="#">Real Newsletter</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <h5>Featured</h5>
                        <div class="list">
                            <ul>
                                <li><a href="#">Newsletter</a></li>
                                <li><a href="#">Article</a></li>
                                <li><a href="#">Trending Topic</a></li>
                                <li><a href="#">All</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <h5>Platform</h5>
                        <div class="list">
                            <ul>
                                <li><a href="#">Pear To Pear</a></li>
                                <li><a href="#">Event Registration</a></li>
                                <li><a href="#">Integration</a></li>
                                <li><a href="#">Message</a></li>
                                <li><a href="#">News Framework</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
        });
    </script>
</body>

</html>