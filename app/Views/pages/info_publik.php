<?= $this->extend('config/template'); ?>

<?= $this->section('main'); ?>


<section class="page-title section-big text-center">
    <div class="container">
        <h2>INFORMASI PUBLIK</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
</section>

<!-- Features area start -->
<section id="service" class="service-area section-big">
    <div class="container">
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



<?= $this->endSection(); ?>