<?= $this->extend('config/template'); ?>

<?= $this->section('main'); ?>


<!-- Slider area starts -->
<section id="slider" class="slider-area">

    <div id="carousel-example-generic" class="carousel slide carousel-fade">

        <div class="carousel-inner" role="listbox">

            <!-- Item 1 -->
            <div class="item active">
                <div class="table">
                    <div class="table-cell">
                        <div class="intro-text">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- <h1>“Ondoma Dangge Inia Hanggia Dua Dia”</h1><br>
                                        <h1>"Melihat, Berpikir dan Bekerja Untuk Semua"</h1> -->
                                        <h1><?= $visi->isi_artikel; ?></h1>
                                        <a href="#informasi" class="btn"> Informasi Penting</a>

                                    </div>
                                    <div class="col-sm-6">
                                        <img src="assets/img/slider/pns.png" alt="integrasi erp" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="table">
                    <div class="table-cell">
                        <div class="intro-text">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h1>Layanan Cloud VPS Server</h1>
                                        <p>Kami berikan penawaran terbaik Cloud VPS Server. Fitur terlengkap, harga terjangkau, dan dukungan teknis 24/7 telah tersedia untuk Anda. Promo spesial segera berakhir. Order sekarang!</p>
                                        <div class="as-counter">
                                            <div class="as-counter__wrapper">
                                                <p id="daysv" class="as-counter__item">00</p>
                                                <p class="as-counter__time">Hari</p>
                                            </div>
                                            <div class="as-counter__colon">:</div>
                                            <div class="as-counter__wrapper">
                                                <p id="hoursv" class="as-counter__item">08</p>
                                                <p class="as-counter__time">Jam</p>
                                            </div>
                                            <div class="as-counter__colon">:</div>
                                            <div class="as-counter__wrapper">
                                                <p id="minutesv" class="as-counter__item">07</p>
                                                <p class="as-counter__time">Menit</p>
                                            </div>
                                            <div class="as-counter__colon">:</div>
                                            <div class="as-counter__wrapper">
                                                <p id="secondsv" class="as-counter__item">20</p>
                                                <p class="as-counter__time">Detik</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="assets/img/slider/pngegg.png" alt="integrasi erp" class="img-fluid" width="100%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="item">
                <div class="table">
                    <div class="table-cell">
                        <div class="intro-text">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h1>Menuju Dunia Digatal
                                            dengan Unlimited Hosting</h1>
                                        <p>Kami berikan penawaran terbaik unlimited web hosting. Fitur terlengkap, harga terjangkau, dan dukungan teknis 24/7 telah tersedia untuk Anda. Promo spesial segera berakhir. Order sekarang!</p>
                                        <div class="as-counter">
                                            <div class="as-counter__wrapper">
                                                <p id="days" class="as-counter__item">00</p>
                                                <p class="as-counter__time">Hari</p>
                                            </div>
                                            <div class="as-counter__colon">:</div>
                                            <div class="as-counter__wrapper">
                                                <p id="hours" class="as-counter__item">08</p>
                                                <p class="as-counter__time">Jam</p>
                                            </div>
                                            <div class="as-counter__colon">:</div>
                                            <div class="as-counter__wrapper">
                                                <p id="minutes" class="as-counter__item">07</p>
                                                <p class="as-counter__time">Menit</p>
                                            </div>
                                            <div class="as-counter__colon">:</div>
                                            <div class="as-counter__wrapper">
                                                <p id="seconds" class="as-counter__item">20</p>
                                                <p class="as-counter__time">Detik</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="assets/img/slider/pngegg1.png" alt="integrasi erp" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->


        </div>
        <!-- End Wrapper for slides-->


        <!-- Carousel Pagination -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <!-- <li data-target="#carousel-example-generic" data-slide-to="2"></li> -->
        </ol>


        <!-- Slider left right button -->
        <!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="oi oi-arrow-thick-right"></span>
        </a>

        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <img src="assets/img/right-arrow.png" alt="">
        </a> -->

    </div>

    <!-- bootstrap carousel -->
</section>

<!-- Features area start -->
<section id="service" class="service-area section-big">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2>BERITA TERKAIT</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach ($artikel as $value) : ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-box card">
                        <img src="https://intanjayakab.go.id/templet/img-opd-post/1636361720_9dfd27bf82972d6dd69a.jpg" alt="" width="100%">
                        <h5><?= $value->judul; ?></h5>
                        <a href="detail_berita/<?= $value->slug; ?>" class="btn">Lihat Detail</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Features area end -->

<!-- Search area start -->
<section id="search" class="search-area section-big">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2>LINK APLIKASI</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-box" style="background-color: orangered;">
                    <h1>LPSE</h1>
                    <a href="http://103.100.247.141/eproc4" class="btn" target="_blank">Klik</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-box" style="background-color: orangered;">
                    <h1>OSS</h1>
                    <a href="https://oss.go.id/" class="btn" target="_blank">Klik</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-box" style="background-color: orangered;">
                    <h1>SIKAP LKPP</h1>
                    <a href="https://sikap.lkpp.go.id/" class="btn" target="_blank">Klik</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Search area end -->


<!-- price area start -->
<section class="price-area section-big" id="informasi">
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2>INFORMASI</h2>
                </div>
                <ul class="nav-tab">
                    <li class="active"><a href="#pengumuman" data-toggle="tab">Pengumuman</a></li>
                    <li><a href="#pemberitahuan" data-toggle="tab">Pemberitahuan</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container" id="tab-container">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="pengumuman">
                    <div class="row">

                        <!-- Price Table -->
                        <div class="col-md-12">
                            <div class="price-item card" data-connectors="2">
                                <div class="price-info">
                                    <h3>Pengumuman</h3>

                                </div>
                                <div class="features container">
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- Tab one end-->
                <div class="tab-pane fade" id="pemberitahuan">
                    <!-- Price Table -->
                    <div class="col-md-12">
                        <div class="price-item card" data-connectors="2">
                            <div class="price-info">
                                <h3>Pemberitahuan</h3>
                            </div>
                            <div class="features container">

                            </div>

                        </div>
                    </div>




                </div><!-- Tab Two end-->

            </div>
        </div>
    </div>


</section>
<!-- price area end -->
<!-- price area start -->
<section class="price-area section-big" id="pricing">
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2>GALERY PEMDA</h2>
                    <p>Layanan web hosting Indonesia terbaik dengan fitur hosting terlengkap dan dukungan support 24 jam untuk kemudahan Anda meraih kesuksesan online!</p>
                </div>
                <ul class="nav-tab">
                    <li class="active"><a href="#galeri" data-toggle="tab">GALERY</a></li>
                    <li><a href="#video" data-toggle="tab">VIDEO</a></li>

                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container" id="tab-container">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="galeri">
                    <div class="row">

                        <!-- Price Table -->
                        <div class="col-md-12">
                            <div class="price-item card" data-connectors="2">
                                <div class="price-info">
                                    <h3>Galeri Album Kegiatan</h3>

                                </div>
                                <div class="features container">
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- Tab one end-->
                <div class="tab-pane fade" id="video">
                    <!-- Price Table -->
                    <div class="col-md-12">
                        <div class="price-item card" data-connectors="2">
                            <div class="price-info">
                                <h3>Video Kegiatan</h3>
                            </div>
                            <div class="features container">

                            </div>

                        </div>
                    </div>




                </div><!-- Tab Two end-->

            </div>
        </div>
    </div>


</section>




<?= $this->endSection(); ?>