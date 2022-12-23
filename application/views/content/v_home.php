<div id="pop" class="pop">
    <div id="popup" class="popup panel panel-primary">
        <img src="https://admin103.skapandha.com/upload/<?= $pop_up->image; ?>" alt="popup" class="img-fluid"
            title="<?= $pop_up->nama; ?>" s>
        <div class="panel-footer">
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
    </div>
</div>

<!-- About Start -->
<div class="container-xxl mitra-pendidikan" id="">
    <div class="container py-5 px-lg-5">
        <div class="header-title text-center wow fadeInUp" data-wow-delay="0.1s">
            <h2>Mitra Pendidikan <span class="txt-green">SMK Panca Dharma</span> Balikpapan</h2>
        </div>
        <div class="slider-container mt-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="swiper-container mitra-slider ">
                <div class="swiper-wrapper align-items-center">
                    <?php foreach ($mitra as $m) { ?>
                    <div class="swiper-slide">
                        <div class="box-img">
                            <img src="https://admin103.skapandha.com/upload/mitra/<?= $m->image; ?>" class="img-fluid"
                                alt="<?= $m->nama; ?>" title="<?= $m->nama; ?>">
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </div>
</div>
<!-- About End -->

<div class="container-xxl tentang-kami" id="tentang-kami">
    <div class="container py-5 px-lg-5">
        <div class="row">
            <div class="col-lg-7">
                <div class="header-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2>Tentang Kami</h2>
                </div>
                <div class="desk mt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <?= $website->description; ?>
                </div>
            </div>
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="slider-container">
                    <div class="swiper-container tentang-kami-slider ">
                        <div class="swiper-wrapper align-items-center">
                            <?php foreach ($slider_tentang_kami as $tk) { ?>
                            <div class="swiper-slide">
                                <div class="box-img">
                                    <a href="https://admin103.skapandha.com/upload/tentang_kami/<?= $tk->image; ?>"
                                        data-gallery="portfolioGallery" class="gallery-lightbox" title="">
                                        <img src="https://admin103.skapandha.com/upload/tentang_kami/<?= $tk->image; ?>"
                                            class="img-fluid" alt="">
                                    </a>

                                </div>
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


<div class="container-xxl visi_misi px-0" id="visi-misi">
    <div class="container px-lg-5">
        <div class="header-title text-center wow fadeInUp" data-wow-delay="0.1s">
            <h2>Visi & Misi <br><span class="txt-green">SMK Panca Dharma</span> Balikpapan</h2>
        </div>
    </div>
    <div class="grn-left my-5">
        <div class="container py-4 px-lg-5 container-visi">
            <div class="visi">
                <div class="slider-container d-block d-lg-none">
                    <div class="swiper-container visi-slider">
                        <div class="swiper-wrapper">
                            <?php foreach ($s_visi as $v) { ?>
                            <div class="swiper-slide">
                                <div class="img">
                                    <a>
                                        <img src="https://admin103.skapandha.com/upload/visi_misi/<?= $v->image; ?>"
                                            class="img-fluid" alt="<?= $v->nama; ?>" title="<?= $v->nama; ?>">
                                    </a>
                                </div>
                            </div>
                            <?php } ?>
                            <!-- <div class="swiper-slide">
                                <div class="img">
                                    <a>
                                        <img src="assets/img/visi3.png" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img">
                                    <a>
                                        <img src="assets/img/visi4.png" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>

            </div>
            <div class="row align-items-center mt-4 mt-lg-0">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="img img-tab">
                        <?php $vs = $this->db->query("SELECT * FROM tbl_slider_visi_misi WHERE posisi = 'Visi' ORDER BY id ASC LIMIT 1")->row(); ?>
                        <img src="https://admin103.skapandha.com/upload/visi_misi/<?= $vs->image; ?>" class="img-fluid"
                            id="img-visi" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="visi wow fadeInUp" data-wow-delay="0.1s">

                        <div class="header-title d-flex align-items-center mt-4 mt-lg-0 position-relative">
                            <img src="assets/img/icon_visi.svg" class="img-fluid ic me-3" alt="">
                            <h2 class="txt-green f"><?= $visi->title; ?></h2>
                        </div>
                        <div class="desk py-5">
                            <?= $visi->deskripsi1; ?>
                        </div>
                        <div class="slider-container d-none d-lg-block">
                            <div class="swiper-container visi-slider">
                                <div class="swiper-wrapper">
                                    <?php foreach ($s_visi as $v) { ?>
                                    <div class="swiper-slide">
                                        <div class="img">
                                            <a>
                                                <img src="https://admin103.skapandha.com/upload/visi_misi/<?= $v->image; ?>"
                                                    class="img-fluid" alt="<?= $v->nama; ?>" title="<?= $v->nama; ?>">
                                            </a>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <!-- <div class="swiper-slide">
                                        <div class="img">
                                            <a>
                                                <img src="assets/img/visi3.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img">
                                            <a>
                                                <img src="assets/img/visi4.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grn-right my-5">
        <div class="container px-lg-5">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="misi">
                        <div class="header-title d-flex align-items-center">
                            <img src="assets/img/icon_misi.svg" class="img-fluid ic me-3" alt="">
                            <h2 class="txt-green"><?= $misi->title; ?></h2>
                        </div>
                        <div class="desk py-5">
                            <div class="row align-items-center">
                                <div class="col-2 col-no mt-4">
                                    <h1>1.</h1>
                                </div>
                                <div class="col-10 mt-4">
                                    <?= $misi->deskripsi1; ?>
                                </div>
                                <div class="col-2 col-no mt-4">
                                    <h1>2.</h1>
                                </div>
                                <div class="col-10 mt-4">
                                    <?= $misi->deskripsi2; ?>
                                </div>
                                <div class="col-2 col-no mt-4">
                                    <h1>3.</h1>
                                </div>
                                <div class="col-10 mt-4">
                                    <?= $misi->deskripsi3; ?>
                                </div>
                            </div>
                        </div>
                        <div class="slider-container">
                            <div class="swiper-container misi-slider">
                                <div class="swiper-wrapper">
                                    <?php foreach ($s_misi as $m) { ?>
                                    <div class="swiper-slide">
                                        <div class="img">
                                            <a>
                                                <img src="https://admin103.skapandha.com/upload/visi_misi/<?= $m->image; ?>"
                                                    class="img-fluid" alt="<?= $m->nama; ?>" title="<?= $m->nama; ?>">
                                            </a>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mt-4 mt-lg-0">
                    <div class="img img-tab">
                        <?php $ms = $this->db->query("SELECT * FROM tbl_slider_visi_misi WHERE posisi = 'Misi' ORDER BY id ASC LIMIT 1")->row(); ?>
                        <img src="https://admin103.skapandha.com/upload/visi_misi/<?= $ms->image; ?>" class="img-fluid"
                            id="img-misi" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl keunggulan" id="why-us">
    <div class="container py-5 px-lg-5">
        <div class="header-title text-center">
            <h2>Mengapa Memilih <br><span class="txt-green">SMK Panca Dharma</span> Balikpapan</h2>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 pe-lg-5">
                <div class="box-keunggulan">
                    <div class="no">
                        <h1>1.</h1>
                    </div>
                    <p><?= $k1->nama; ?></p>
                    <img src="assets/img/k1.svg" class="img-fluid img-ik" alt="">
                </div>
                <div class="box-keunggulan">
                    <div class="no">
                        <h1>2.</h1>
                    </div>
                    <p><?= $k2->nama; ?></p>
                    <img src="assets/img/k2.svg" class="img-fluid img-ik" alt="">
                </div>
                <div class="box-keunggulan">
                    <div class="no">
                        <h1>3.</h1>
                    </div>
                    <p><?= $k3->nama; ?></p>
                    <img src="assets/img/k3.svg" class="img-fluid img-ik" alt="">
                </div>
                <div class="box-keunggulan">
                    <div class="no">
                        <h1>4.</h1>
                    </div>
                    <p><?= $k4->nama; ?></p>
                    <img src="assets/img/k4.svg" class="img-fluid img-ik" alt="">
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="box-keunggulan">
                    <div class="no">
                        <h1>5.</h1>
                    </div>
                    <p><?= $k5->nama; ?></p>
                    <img src="assets/img/k5.svg" class="img-fluid img-ik" alt="">
                </div>
                <div class="box-keunggulan">
                    <div class="no">
                        <h1>6.</h1>
                    </div>
                    <p><?= $k6->nama; ?></p>
                    <img src="assets/img/k6.svg" class="img-fluid img-ik" alt="">
                </div>
                <div class="box-keunggulan">
                    <div class="no">
                        <h1>7.</h1>
                    </div>
                    <p><?= $k7->nama; ?></p>
                    <img src="assets/img/k7.svg" class="img-fluid img-ik" alt="">
                </div>
                <div class="box-keunggulan">
                    <div class="no">
                        <h1>8.</h1>
                    </div>
                    <p><?= $k8->nama; ?></p>
                    <img src="assets/img/k8.svg" class="img-fluid img-ik" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl kompetensi-keahlian px-0">
    <div class="container py-5 px-lg-5">
        <div class="header-title text-center">
            <h3>Kompetensi Keahlian di <br><span class="txt-green">SMK Panca Dharma</span> Balikpapan</h3>
        </div>
    </div>

    <div class="d-none d-lg-block">
        <?php
        $i = 1;
        foreach ($kompetensi as $k) {

        ?>
        <?php if ($i % 2 == 0) { ?>
        <div class="grn-left mt-5">
            <div class="container py-3 px-lg-5" id="kompetensi<?= $k->id; ?>">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="box-img">
                            <a href="https://admin103.skapandha.com/upload/kompetensi/<?= $k->image; ?>"
                                data-gallery="portfolioGallery" class="gallery-lightbox" title="">
                                <img src="https://admin103.skapandha.com/upload/kompetensi/<?= $k->image; ?>"
                                    class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="content">
                            <div class="title">
                                <h3><?= $k->title; ?></h3>
                            </div>
                            <div class="desk my-4">
                                <div class="comment">
                                    <?= $k->deskripsi; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php } else { ?>
        <div class="grn-right mt-5">
            <div class="container py-3 px-lg-5" id="kompetensi<?= $k->id; ?>">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="content">
                            <div class="title">
                                <h3><?= $k->title; ?></h3>
                            </div>
                            <div class="desk my-4">
                                <div class="comment">
                                    <?= $k->deskripsi; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="box-img">
                            <a href="https://admin103.skapandha.com/upload/kompetensi/<?= $k->image; ?>"
                                data-gallery="portfolioGallery" class="gallery-lightbox" title="">
                                <img src="https://admin103.skapandha.com/upload/kompetensi/<?= $k->image; ?>"
                                    class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php
            $i++;
        }
        ?>


    </div>
    <div class="bdr d-block d-lg-none">
        <div class="container py-3 px-lg-5">
            <div class="row">
                <?php foreach ($this->db->query("SELECT * FROM tbl_kompetensi")->result() as $km) { ?>
                <div class="col-lg-5" id="kompetensis<?= $km->id; ?>">
                    <div class="box-img">
                        <a href="https://admin103.skapandha.com/upload/kompetensi/<?= $km->image; ?>"
                            data-gallery="portfolioGallery" class="gallery-lightbox" title="">
                            <img src="https://admin103.skapandha.com/upload/kompetensi/<?= $km->image; ?>"
                                class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0">
                    <div class="content">
                        <div class="title">
                            <h3><?= $km->title; ?></h3>
                        </div>
                        <div class="desk my-4">
                            <div class="comment">
                                <?= $km->deskripsi; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid ekskul position-relative px-0" id="">
    <div class="container py-5 px-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="header-title text-center">
                    <h2>Kegiatan Ekstrakulikuler</h2>
                    <p><?= $dc1->deskripsi; ?></p>
                </div>
            </div>
        </div>
        <div class="slider-container">
            <div class="swiper-container ekskul-slider ">
                <div class="swiper-wrapper">
                    <?php foreach ($ekskul as $e) { ?>
                    <div class="swiper-slide">
                        <div class="box-img">
                            <a href="https://admin103.skapandha.com/upload/ekskul/<?= $e->image; ?>"
                                data-gallery="portfolioGallery" class="gallery-lightbox" title="">
                                <img src="https://admin103.skapandha.com/upload/ekskul/<?= $e->image; ?>"
                                    class="img-fluid" alt="">
                            </a>
                            <div class="title text-center mt-3 px-3">
                                <p><?= $e->title; ?></p>
                            </div>
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
<div class="container-fluid prestasi position-relative px-0" id="prestasi">
    <div class="container py-5 px-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="header-title text-center">
                    <h2>Prestasi Sekolah <br><span class="txt-green">SMK Panca Dharma</span> Balikpapan</h2>
                    <div class="title mt-3">
                        <p><?= $dc2->deskripsi; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-container">
            <div class="swiper-container prestasi-slider ">
                <div class="swiper-wrapper align-items-center">
                    <?php foreach ($prestasi as $p) { ?>
                    <div class="swiper-slide">
                        <div class="box-img">
                            <a href="https://admin103.skapandha.com/upload/prestasi/<?= $p->image; ?>"
                                data-gallery="portfolioGallery" class="gallery-lightbox" title="">
                                <img src="https://admin103.skapandha.com/upload/prestasi/<?= $p->image; ?>"
                                    class="img-fluid" alt="">
                            </a>
                            <div class="title text-center mt-3 px-3">
                                <p><?= $p->nama; ?></p>
                            </div>
                            <div class="desk">
                                <h4><?= $p->prestasi; ?></h4>
                                <p><?= $p->deskripsi; ?></p>
                            </div>
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
<div class="container-xxl gallery px-0" id="">
    <div class="container py-5 px-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="header-title text-center">
                    <h2>Galeri Sekolah <br><span class="txt-green">SMK Panca Dharma</span> Balikpapan</h2>
                </div>
            </div>
        </div>
        <div class="slider-container mt-3">
            <div class="swiper-container gallery-slider ">
                <div class="swiper-wrapper">
                    <?php
                    $i = 1;
                    foreach ($gallery as $g) {
                    ?>
                    <div class="swiper-slide">
                        <div class="box-img">
                            <a href="https://admin103.skapandha.com/upload/gallery/<?= $g->image; ?>"
                                data-gallery="portfolioGallery" class="gallery-lightbox" title="">
                                <img src="https://admin103.skapandha.com/upload/gallery/<?= $g->image; ?>"
                                    class="img-fluid" alt="">
                            </a>
                        </div>
                        <!-- <div class="box-img <?= $g->id; ?> mt-4">
                                <a href="https://admin103.skapandha.com/upload/gallery/<?= $g->image; ?>" data-gallery="portfolioGallery" class="gallery-lightbox" title="">
                                    <img src="https://admin103.skapandha.com/upload/gallery/<?= $g->image; ?>" class="img-fluid" alt="">
                                </a>
                            </div> -->
                    </div>
                    <?php
                        $i++;
                    }
                    ?>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid kesan-pesan  px-0" id="">
    <div class="container pb-3 pt-5 px-lg-5">
        <div class="header-title text-center">
            <h2>Kesan dan Pesan</h2>
        </div>
    </div>
    <div class="bg-kesan-pesan position-relative">
        <div class="container py-5 px-lg-5">
            <div class="slider-container py-5 py-lg-0">
                <div class="swiper-container kesan-pesan-slider ">
                    <div class="swiper-wrapper">
                        <?php foreach ($kesan_pesan as $kp) { ?>
                        <div class="swiper-slide">
                            <div class="box-img">
                                <a href="https://admin103.skapandha.com/upload/kesan_pesan/<?= $kp->image; ?>"
                                    data-gallery="portfolioGallery" class="gallery-lightbox" title="">
                                    <img src="https://admin103.skapandha.com/upload/kesan_pesan/<?= $kp->image; ?>"
                                        class="img-fluid" alt="">
                                </a>
                                <div class="title text-center mt-2 px-3">
                                    <p><?= $kp->nama; ?></p>
                                    <p class="p"><?= $kp->posisi; ?></p>
                                </div>
                                <div class="desk mt-4 mt-lg-0">
                                    <p><?= $kp->deskripsi; ?></p>
                                </div>
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
<div class="container-xxl mitra-pendukung" id="about">
    <div class="container py-5 px-lg-5">
        <div class="header-title text-center">
            <h2>Mitra Pendukung Pendidikan <br><span class="txt-green">SMK Panca Dharma</span> Balikpapan</h2>
        </div>
        <div class="slider-container mt-3">
            <div class="swiper-container mitra-pendukung-slider ">
                <div class="swiper-wrapper align-items-center">
                    <?php foreach ($mitra as $m) { ?>
                    <div class="swiper-slide">
                        <div class="box-img">
                            <img src="https://admin103.skapandha.com/upload/mitra/<?= $m->image; ?>" class="img-fluid"
                                alt="<?= $m->nama; ?>" title="<?= $m->nama; ?>">
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

<div class="container-fluid note px-0" id="about">
    <div class="container py-5 px-lg-5">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="smk text-center">
                    <img src="assets/img/GIF_SMK.gif" class="img-fluid gif" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text text-center px-0 px-xl-4">
                    <p><?= $note->deskripsi; ?> <br>
                        <span class="txt-green">SMK Panca Dharma Balikpapan</span>
                    </p>
                </div>
            </div>
            <div class="col-lg-3">
                <a href="<?= $link1->link; ?>" target="_blank">
                    <div class="ppdb text-center">
                        <img src="assets/img/img_ppdb.png" class="img-fluid" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>