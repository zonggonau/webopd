<?= $this->extend('config/template'); ?>

<?= $this->section('main'); ?>


<section class="page-title section-big text-center">
    <div class="container">
        <h2><?= $berita->judul; ?></h2>
        <p><?= $berita->created_date; ?></p>
    </div>
</section>

<!-- price area start -->
<section class="price-area section-big" id="informasi">

    <div class="row">
        <div class="container" id="tab-container">
            <div class="tab-content">

                <!-- Price Table -->
                <div class="col-md-12">
                    <div class="features container">
                        <img src="https://intanjayakab.go.id/templet/img-opd-post/1636361720_9dfd27bf82972d6dd69a.jpg" alt="" width="100%">
                        <hr>
                        <?= $berita->isi_artikel; ?>
                        <?= $berita->file_gambar; ?>
                    </div>
                </div>
            </div>
        </div>


</section>






<?= $this->endSection(); ?>