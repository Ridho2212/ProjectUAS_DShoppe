<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>D'Shoppe - UMKM Dark Web</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/logo_edit.png') ?>" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/LineIcons.css') ?>">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css') ?>">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/slick.css') ?>">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css') ?>">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/default.css') ?>">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">


</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== NAVBAR PART START ======-->

    <section class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#">
                                <img src="<?php echo base_url('assets/images/logo1.png') ?>" alt="Logo">
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarEight" aria-controls="navbarEight" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarEight">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#portfolio">Produk</a>
                                    </li>
                                    <?php if ($this->session->userdata('role') != 'admin') : ?>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="<?= base_url('index.php/pesanan'); ?>">Pesanan</a>
                                        </li>
                                    <?php endif; ?>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#client">Suplier</a>
                                    </li>
                                    <?php if ($this->session->userdata('email')) : ?>
                                        <?php if ($this->session->userdata('role') == 'admin') : ?>
                                            <li class="nav-item">
                                                <a class="page-scroll" href="<?= base_url('index.php/admin'); ?>">Admin</a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if (!$this->session->userdata('email')) : ?>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="<?= base_url('index.php/auth/'); ?>">Login</a>
                                        </li>
                                    <?php else : ?>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="<?= base_url('index.php/auth/logout'); ?>">Logout</a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>

                            <div class="navbar-btn d-none mt-15 d-lg-inline-block">
                                <a class="menu-bar" href="#side-menu-right"><i class="lni-menu"></i></a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->

        <div id="home" class="slider-area">
            <div class="bd-example">
                <div id="carouselOne" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselOne" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselOne" data-slide-to="1"></li>
                        <li data-target="#carouselOne" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item bg_cover active">
                            <img src="<?php echo base_url('assets/images/home2.jpg') ?>">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                    </div> <!-- row -->
                                </div> <!-- container -->
                            </div> <!-- carousel caption -->
                        </div> <!-- carousel-item -->

                        <div class="carousel-item bg_cover">
                            <img src="<?php echo base_url('assets/images/home.jpg') ?>">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6 col-lg-7 col-sm-10">
                                        </div>
                                    </div> <!-- row -->
                                </div> <!-- container -->
                            </div> <!-- carousel caption -->
                        </div> <!-- carousel-item -->

                        <div class="carousel-item bg_cover">
                            <img src="<?php echo base_url('assets/images/home3.jpg') ?>">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                    </div> <!-- row -->
                                </div> <!-- container -->
                            </div> <!-- carousel caption -->
                        </div> <!-- carousel-item -->
                    </div> <!-- carousel-inner -->

                    <a class="carousel-control-prev" href="#carouselOne" role="button" data-slide="prev">
                        <i class="lni-arrow-left-circle"></i>
                    </a>

                    <a class="carousel-control-next" href="#carouselOne" role="button" data-slide="next">
                        <i class="lni-arrow-right-circle"></i>
                    </a>
                </div> <!-- carousel -->
            </div> <!-- bd-example -->
        </div>

    </section>

    <!--====== NAVBAR PART ENDS ======-->

    <!--====== SAIDEBAR PART START ======-->

    <div class="sidebar-right">
        <div class="sidebar-close">
            <a class="close" href="#close"><i class="lni-close"></i></a>
        </div>
        <div class="sidebar-content">
            <div class="sidebar-logo text-center">
                <a href="#"><img src="<?php echo base_url('assets/images/logo1.png') ?>" alt="Logo"></a>
            </div> <!-- logo -->
            <div class="sidebar-menu">
                <ul>
                    <li><a href="<?= base_url('index.php/home') ?>">Home</a></li>
                    <?php if ($this->session->userdata('role') != 'admin') : ?>
                        <li><a href="<?= base_url('index.php/pesanan') ?>">Pesanan</a></li>
                    <?php endif; ?>
                    <!-- Jika role = 1, muncul navbar admin page -->
                    <?php if ($this->session->userdata('role') == 'admin') : ?>
                        <li><a href="<?= base_url('index.php/produk/index') ?>">Produk</a></li>
                        <li><a href="<?= base_url('index.php/suplier/index') ?>">Suplier</a></li>
                        <li><a href="<?= base_url('index.php/admin') ?>">Admin</a></li>
                    <?php endif; ?>
                    <li><a href="<?= base_url('index.php/auth/logout') ?>">Logout</a></li>
                </ul>
            </div> <!-- menu -->
            <div class="sidebar-social d-flex align-items-center justify-content-center">
                <span>FOLLOW US</span>
                <ul>
                    <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                </ul>
            </div> <!-- sidebar social -->
        </div> <!-- content -->
    </div>
    <div class="overlay-right"></div>

    <!--====== SAIDEBAR PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="about-image text-center wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="100">
                        <img src="<?php echo base_url('assets/images/square.png" al') ?>" alt="services">
                    </div>
                    <div class="section-title text-center mt-30 pb-40">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.6s">D'Shoppe</h4>
                        <p class="text wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s">Anda telah memilih yang tepat, D'Shoppe menyediakan fashion anda seperti sepatu, perhiasan, busana muslim, dan banyak lagi dari para desainer dan brand lokal dan internasional. </p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== portfolio PART START ======-->

    <section id="portfolio" class="portfolio-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Produk kami</h3>
                        <p class="text">Produk unggul dan berkualitas</p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-menu pt-30 text-center">
                        <ul>
                            <li data-filter="*" class="active">Semua produk</li>
                            <li data-filter=".branding-3">Tas</li>
                            <li data-filter=".marketing-3">Sepatu</li>
                            <li data-filter=".planning-3">Perhiasan</li>
                            <li data-filter=".research-3">Busana Muslimah</li>
                        </ul>
                    </div> <!-- portfolio menu -->
                </div>
            </div> <!-- row -->
            <div class="row grid">
                <!-- Tampilkan seluruh data dari table produk -->
                <?php foreach ($produk as $pr) : ?>
                    <div class="col-lg-4 col-sm-6 <?= ($pr->jenis_id == 1) ? 'branding-3' : (($pr->jenis_id == 2) ? 'marketing-3' : (($pr->jenis_id == 3) ? 'planning-3' : 'research-3')) ?>">
                        <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <div class="portfolio-image">
                                <img src="<?php echo base_url('assets/images/' . $pr->foto) ?>" alt="">
                                <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                    <div class="portfolio-content">
                                        <div class="portfolio-icon">
                                            <a class="image-popup" href="<?php echo base_url('assets/images/' . $pr->foto) ?>"><i class="lni-zoom-in"></i></a>
                                        </div>
                                        <div class="portfolio-icon">
                                            <a href="<?php echo base_url('index.php/produk/detail/' . $pr->id) ?>"><i class="lni-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-text">
                                <form action="<?= base_url('index.php/pesanan/form') ?>" method="post">
                                    <input type="hidden" name="id" value="<?= $pr->id ?>">
                                    <div class="d-flex justify-content-between">
                                        <a href="<?php echo base_url("index.php/pesanan/form") ?>"><input type="submit" class="btn btn-primary active" value="Checkout"></a>
                                        <p>IDR&nbsp;<b style="color: blue; font-size: large;"><?= number_format($pr->harga_jual) ?></b></p>
                                    </div>
                                </form>
                                <h4 class="portfolio-title"><a href="#"><?= $pr->nama ?></a></h4>
                                <p class="text"><?= $pr->deskripsi ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- <div class="col-lg-4 col-sm-6 branding-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="portfolio-image">
                            <img src="<?php echo base_url('assets/images/tas1.jpg') ?>" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="<?php echo base_url('assets/images/tas1.jpg') ?>"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="#"><i class="lni-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text"><a href=<?php echo base_url("index.php/pesanan/form") ?> class="btn btn-primary active">checkout</a>
                            <h4 class="portfolio-title"><a href="#">Backpack</a></h4>
                            <p class="text">Tas punggung unisex</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 marketing-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="portfolio-image">
                            <img src="<?php echo base_url('assets/images/sepatu1.jpg') ?>" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="<?php echo base_url('assets/images/sepatu1.jpg') ?>"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="#"><i class="lni-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-text"><a href=<?php echo base_url("index.php/pesanan/form") ?> class="btn btn-primary active">checkout</a>
                            <h4 class="portfolio-title"><a href="#">Flat Shoes</a></h4>
                            <p class="text">Sepatu wanita</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 branding-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.7s">
                        <div class="portfolio-image">
                            <img src="<?php echo base_url('assets/images/tas4.jpg') ?>" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="<?php echo base_url('assets/images/tas4.jpg') ?>"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="#"><i class="lni-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text"><a href=<?php echo base_url("index.php/pesanan/form") ?> class="btn btn-primary active">checkout</a>
                            <h4 class="portfolio-title"><a href="#">Sling Bag</a></h4>
                            <p class="text">Tas pundak unisex</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 planning-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="portfolio-image">
                            <img src="<?php echo base_url('assets/images/perhiasan1.jpg') ?>" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="<?php echo base_url('assets/images/perhiasan1.jpg') ?>"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="#"><i class="lni-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text"><a href=<?php echo base_url("index.php/pesanan/form") ?> class="btn btn-primary active">checkout</a>
                            <h4 class="portfolio-title"><a href="#">Anting</a></h4>
                            <p class="text">Anting berlian</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 research-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="portfolio-image">
                            <img src="<?php echo base_url('assets/images/busana3.jpg') ?>" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="<?php echo base_url('assets/images/busana3.jpg') ?>"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="#"><i class="lni-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text"><a href=<?php echo base_url("index.php/pesanan/form") ?> class="btn btn-primary active">checkout</a>
                            <h4 class="portfolio-title"><a href="#">Gamis</a></h4>
                            <p class="text">Gamis manik-manik</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 planning-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.7s">
                        <div class="portfolio-image">
                            <img src="<?php echo base_url('assets/images/perhiasan2.jpg') ?>" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="<?php echo base_url('assets/images/perhiasan2.jpg') ?>"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="#"><i class="lni-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text"><a href=<?php echo base_url("index.php/pesanan/form") ?> class="btn btn-primary active">checkout</a>
                            <h4 class="portfolio-title"><a href="#">Gelang</a></h4>
                            <p class="text">Gelang emas wanita</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 marketing-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="portfolio-image">
                            <img src="<?php echo base_url('assets/images/sepatu3.jpg') ?>" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="<?php echo base_url('assets/images/sepatu3.jpg') ?>"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="#"><i class="lni-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text"><a href=<?php echo base_url("index.php/pesanan/form") ?> class="btn btn-primary active">checkout</a>
                            <h4 class="portfolio-title"><a href="#">Sneakers</a></h4>
                            <p class="text">Sepatu putih unisex</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 research-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="portfolio-image">
                            <img src="<?php echo base_url('assets/images/busana2.jpg') ?>" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="<?php echo base_url('assets/images/busana2.jpg') ?>"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="#"><i class="lni-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text"><a href=<?php echo base_url("index.php/pesanan/form") ?> class="btn btn-primary active">checkout</a>
                            <h4 class="portfolio-title"><a href="#">Baju Koko</a></h4>
                            <p class="text">Baju koko putih</p>
                        </div>
                    </div>
                </div> -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== portfolio PART ENDS ======-->

    <!--====== CLIENT LOGO PART START ======-->

    <section id="client" class="client-logo-area">
        <div class="container">
            <div class="row client-active">
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="<?php echo base_url('assets/images/partner.png') ?>" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="<?php echo base_url('assets/images/partner2.png') ?>" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="<?php echo base_url('assets/images/partner3.png') ?>" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="<?php echo base_url('assets/images/partner4.png') ?>" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="<?php echo base_url('assets/images/partner5.png') ?>" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="<?php echo base_url('assets/images/partner6.png') ?>" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="<?php echo base_url('assets/images/partner7.png') ?>" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="<?php echo base_url('assets/images/partner8.png') ?>" alt="Logo">
                    </div> <!-- single client -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CLIENT LOGO PART ENDS ======-->

    <!--====== FOOTER FOUR PART START ======-->

    <footer id="footer" class="footer-area">
        <footer id="footer" class="footer-area">
            <div class="footer-copyright">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="copyright text-center text-lg-left mt-10">
                                <p class="text">Crafted by <a style="color: #38f9d7" rel="nofollow" href="<?php echo base_url('https://uideck.con') ?>">D'Shoppe</a></p>
                            </div> <!--  copyright -->
                        </div>
                        <div class="col-lg-2">
                            <div class="footer-logo text-center mt-10">
                                <a href="<?php echo base_url('index.html') ?>"><img src="<?php echo base_url('assets/images/logo1.png') ?>" alt="Logo"></a>
                            </div> <!-- footer logo -->
                        </div>
                        <div class="col-lg-5">
                            <ul class="social text-center text-lg-right mt-10">
                                <li><a href="https://www.facebook.com/sttterpadunf/"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="https://www.twitter.com/sttterpadunf/"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="https://www.instagram.com/sttterpadunf/"><i class="lni-instagram-original"></i></a></li>
                                <li><a href="https://www.linkedin.com/sttterpadunf/"><i class="lni-linkedin-original"></i></a></li>
                            </ul> <!-- social -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- footer copyright -->
        </footer>
    </footer>

    <!--====== FOOTER FOUR PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->



    <!--====== PART ENDS ======-->










    <!--====== jquery js ======-->
    <script src="<?php echo base_url('assets/js/vendor/modernizr-3.6.0.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/vendor/jquery-1.12.4.min.js') ?>"></script>

    <!--====== Bootstrap js ======-->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>

    <!--====== Slick js ======-->
    <script src="<?php echo base_url('assets/js/slick.min.js') ?>"></script>

    <!--====== Isotope js ======-->
    <script src="<?php echo base_url('assets/js/isotope.pkgd.min.js') ?>"></script>

    <!--====== Images Loaded js ======-->
    <script src="<?php echo base_url('assets/js/imagesloaded.pkgd.min.js') ?>"></script>

    <!--====== Magnific Popup js ======-->
    <script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>

    <!--====== Scrolling js ======-->
    <script src="<?php echo base_url('assets/js/scrolling-nav.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.easing.min.js') ?>"></script>

    <!--====== wow js ======-->
    <script src="<?php echo base_url('assets/js/wow.min.js') ?>"></script>

    <!--====== Main js ======-->
    <script src="<?php echo base_url('assets/js/main.js') ?>"></script>

</body>

</html>