<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $website->metaTitle; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="<?= $website->metaKeywords; ?>" name="keywords">
    <meta content="<?= $website->metaDescription; ?>" name="description">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $website->metaTitle; ?>" />
    <meta property="og:description" content="<?= $website->metaDescription; ?>" />
    <meta property="og:url" content="https://skapandha.com/" />
    <meta property="og:image" content="<?= base_url() ?>assets/img/logo_link.png" />

    <!-- Favicon -->
    <link href="<?= base_url() ?>assets/img/logo_url.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900|Ubuntu:400,500,700' rel='stylesheet'>

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() ?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/lib/animasi/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/lib/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/swiper.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/responsive.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/whatsapp_chat.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0 home" id="home">
        <div class="top_menu d-none d-lg-block py-2" style="position: relative;z-index: 1;">
            <div class="top-content d-flex align-items-center">
                <div class="container">
                    <div class="row d-flex justify-content-between align-items-center row-flex">
                        <div class="col-lg-7 col-md-7" data-aos="fade-right" data-aos-duration="1000">
                            <div class="row align-items-center">
                                <div class="col-lg-4 px-0">
                                    <p><i class="fa fa-envelope"></i> <?= $website->email; ?></p>

                                </div>
                                <div class="col-lg-3 px-0">
                                    <?php
                                    $number = $cw->phone;
                                    $n1 = substr($number, 1, 3);
                                    $n2 = substr($number, 4, 4);
                                    $n3 = substr($number, 8, 4);
                                    $wa = $n1 . '-' . $n2 . '-' . $n3;
                                    ?>
                                    <?php
                                    $numberAPI = $cw->phone;
                                    $n1API = substr($numberAPI, 1);
                                    $apiWa = $n1API;

                                    $waLink = "https://api.whatsapp.com/send?phone=62$apiWa&text=Hallo%20Sahabat%20$website->name..%21%0APesan%20anda%20sudah%20kami%20terima%0AKami%20akan%20merespons%20pesan%20anda%20segera%0ATerimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
                                    ?>
                                    <p class="d-flex align-items-center"><img
                                            src="<?= base_url(); ?>assets/img/telp.svg" class="img-fluid me-2" alt=""
                                            style="max-width: 12%;"><a class="text-white" href="<?= $waLink; ?>"
                                            target="_blank"> +62
                                            <?= $wa; ?></a></p>
                                </div>
                                <div class="col-lg-5 px-0">
                                    <a href="<?= base_url(); ?>">
                                        <div class="logo-header">
                                            <img src="https://admin103.skapandha.com/upload/<?= $website->image; ?>"
                                                class="img-fluid"
                                                alt="https://admin103.skapandha.com/upload/<?= $website->image; ?>">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5" data-aos="fade-left" data-aos-duration="1000">
                            <div class="float-right">
                                <div class="d-flex top-social align-items-center">
                                    <?php foreach ($sosmed as $sosmed) { ?>
                                    <a class="btn btn-outline-light btn-social" href="<?= $sosmed->link; ?>"
                                        target="_blank" title="<?= $sosmed->name; ?>"><i
                                            class="fa <?= $sosmed->icon; ?>"></i></a>
                                    <?php } ?>
                                    <!-- <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/smkpancadharma.balikpapan" target="_blank"><i class="fa fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-social" href=""><i class="fa fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-social" href=""><i class="fa fa-linkedin"></i></a> -->
                                    <a href="<?= $link1->link; ?>" target="_blank">
                                        <div class="img-ppbd ms-5">
                                            <img src="assets/img/img_ppdb.png" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <div class="container">
                <a href="" class="navbar-brand p-0">
                    <img class="img-fluid" src="https://admin103.skapandha.com/upload/<?= $website->image; ?>"
                        alt="https://admin103.skapandha.com/upload/<?= $website->image; ?>">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse" data-aos="fade-up" data-aos-duration="1000">
                    <div class="navbar-nav py-0">
                        <a href="#home" class="nav-item nav-link active">HOME</a>
                        <a href="#tentang-kami" class="nav-item nav-link">TENTANG KAMI</a>
                        <a href="#visi-misi" class="nav-item nav-link">VISI-MISI</a>
                        <a href="#why-us" class="nav-item nav-link">MENGAPA MEMILIH KAMI</a>
                        <a href="#prestasi" class="nav-item nav-link">PRESTASI KAMI</a>
                        <a href="#hubungi-kami" class="nav-item nav-link">HUBUNGI KAMI</a>
                    </div>
                    <div class="row align-items-center px-3 mt-3 d-flex d-lg-none">
                        <div class="col-lg-4">
                            <p><i class="fa fa-envelope"></i> <?= $website->email; ?></p>
                        </div>
                        <div class="col-lg-3">
                            <p class="d-flex align-items-center"><img src="<?= base_url(); ?>assets/img/telp.svg"
                                    class="img-fluid me-2" alt=""
                                    style="max-width: 12%; filter: brightness(100%) invert(1);"><a class="text-dark"
                                    href="<?= $waLink; ?>" target="_blank"> +62
                                    <?= $wa; ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container-xxl hero-header position-relative" style="z-index: 1;" id="home">
            <a href="<?= $link1->link; ?>" target="_blank">
                <div class="img-ppbd ms-5">
                    <img src="assets/img/img_ppdb.png" class="img-fluid" alt="">
                </div>
            </a>
            <img src="assets/img/GIF_SMK.gif" class="img-fluid bg position-absolute end-0 top-0" alt="">
            <div class="container">
                <div class="row py-4">
                    <div class="col-lg-6 text-center text-lg-start text-md-start">
                        <div class="header-about pt-5">
                            <h4 class="text-white" data-aos="fade-down" data-aos-duration="1000"><?= $homeweb->title; ?>
                            </h4>
                            <h3 class="text-white display-5" data-aos="fade-right" data-aos-duration="1000">
                                <span class="txt-yellow">SMK Panca Dharma</span> <br>Balikpapan solusinya
                            </h3>
                            <p class="text-white mb-0 pe-0 pe-md-5" data-aos="fade-up" data-aos-duration="1000">
                                <?= $homeweb->deskripsi; ?></p>

                            <div class="mt-4" data-aos="fade-up" data-aos-duration="1000">
                                <a href="<?= $link2->link; ?>" target="_blank"
                                    class="bg-yellow py-2 px-4 px-sm-4 rounded-10 me-3 fw-bolder text-dark">Daftar
                                    Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="arrow-header pt-4" data-aos="fade-up" data-aos-duration="1000">
                            <div class="slider-container px-0 px-lg-5 mt-5">
                                <div class="swiper-container arrow-header-slider">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($slider_home as $sh) { ?>
                                        <div class="swiper-slide">
                                            <div class="arrow-img act">
                                                <a href="https://admin103.skapandha.com/upload/slider_home/<?= $sh->image; ?>"
                                                    data-gallery="portfolioGallery" class="gallery-lightbox" title="">
                                                    <img src="https://admin103.skapandha.com/upload/slider_home/<?= $sh->image; ?>"
                                                        class="img-fluid" alt="<?= $sh->nama; ?>"
                                                        title="<?= $sh->nama; ?>">
                                                </a>
                                            </div>
                                            <div class="arrow-img non">
                                                <img src="https://admin103.skapandha.com/upload/slider_home/<?= $sh->image; ?>"
                                                    class="img-fluid" alt="<?= $sh->nama; ?>" title="<?= $sh->nama; ?>">
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kompetensi pb-md-5 pt-3">
                    <div class="header-title mb-3 wow fadeInUp" data-wow-delay="0.9s">
                        <h6>Kompetensi keahlian di</h6>
                        <h6>SMK Panca Dharma Balikpapan</h6>
                    </div>
                    <div class="slider-container dekstop d-none d-lg-block wow fadeInUp" data-wow-delay="0.9s">
                        <div class="swiper-container kompetensi-slider ">
                            <div class="swiper-wrapper">
                                <?php foreach ($kompetensi as $k) { ?>
                                <div class="swiper-slide">
                                    <a href="#kompetensi<?= $k->id; ?>">
                                        <div class="row bg-white mx-1 rounded-20 align-items-center">
                                            <div class="col-4 px-0">
                                                <div class="box-img">
                                                    <img src="https://admin103.skapandha.com/upload/kompetensi/<?= $k->image; ?>"
                                                        class="img-fluid" alt="<?= $k->title; ?>"
                                                        title="<?= $k->title; ?>">
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="text-center">
                                                    <p class="mb-0 text-dark"><?= $k->title; ?></p>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="swiper-pagination"></div>

                        </div>
                    </div>
                    <div class="slider-container mobile d-block d-lg-none wow fadeInUp" data-wow-delay="0.9s">
                        <div class="swiper-container kompetensi-slider ">
                            <div class="swiper-wrapper">
                                <?php foreach ($kompetensi as $k) { ?>
                                <div class="swiper-slide">
                                    <a href="#kompetensis<?= $k->id; ?>">
                                        <div class="row bg-white mx-1 rounded-20 align-items-center">
                                            <div class="col-4 px-0">
                                                <div class="box-img">
                                                    <img src="https://admin103.skapandha.com/upload/kompetensi/<?= $k->image; ?>"
                                                        class="img-fluid" alt="<?= $k->title; ?>"
                                                        title="<?= $k->title; ?>">
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="text-center">
                                                    <p class="mb-0 text-dark"><?= $k->title; ?></p>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="swiper-pagination"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>