<?= $this->extend('config/template'); ?>

<?= $this->section('main'); ?>


<section class="page-title section-big text-center">
    <div class="container">
        <h2>PROFILE PEJABAT</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

    </div>
</section>



<!-- price area start -->
<section class="price-area section-big" id="pricing">
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center">

                <ul class="nav-tab">
                    <!-- <li><a href="#organisasi" data-toggle="tab">STRUKTUR ORGANISASI</a></li> -->
                    <li class="active"><a href="#kadis" data-toggle="tab">KEPALA DINAS</a></li>
                    <li><a href="#bidang" data-toggle="tab">KEPALA BIDANG</a></li>
                    <li><a href="#seksi" data-toggle="tab">KEPALA SEKSI</a></li>
                    <li><a href="#staf" data-toggle="tab">PEGAWAI</a></li>

                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container" id="tab-container">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="kadis">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="section-title">
                                <h4>PROFILE KEPALA DINAS DAN SEKERTARIS</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="cards">
                                <img src="assets/img/kadis.jpg" alt="Avatar" style="width:100%">
                                <div class="container">
                                    <h4><b>John Doe</b></h4>
                                    <p>KEPALA DINAS</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">

                            <div class="cards">
                                <img src="assets/img/kadis.jpg" alt="Avatar" style="width:100%">
                                <div class="container">
                                    <h4><b>Yohanes You, S.IP., M.Si</b></h4>
                                    <p>SEKRETARIS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Tab one end-->
                <div class="tab-pane fade in" id="bidang">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="section-title">
                                <h4>PROFILE KEPALA BIDANG</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="cards">
                                <img src="assets/img/kadis.jpg" alt="Avatar" style="width:100%">
                                <div class="container">
                                    <h4><b>John Doe</b></h4>
                                    <p>KEPALA DINAS</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">

                            <div class="cards">
                                <img src="assets/img/kadis.jpg" alt="Avatar" style="width:100%">
                                <div class="container">
                                    <h4><b>Yohanes You, S.IP., M.Si</b></h4>
                                    <p>SEKRETARIS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Tab one end-->
                <div class="tab-pane fade in" id="seksi">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="section-title">
                                <h4>PROFILE KEPALA SEKSI</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="cards">
                                <img src="assets/img/kadis.jpg" alt="Avatar" style="width:100%">
                                <div class="container">
                                    <h4><b>John Doe</b></h4>
                                    <p>KEPALA DINAS</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">

                            <div class="cards">
                                <img src="assets/img/kadis.jpg" alt="Avatar" style="width:100%">
                                <div class="container">
                                    <h4><b>Yohanes You, S.IP., M.Si</b></h4>
                                    <p>SEKRETARIS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Tab one end-->
                <div class="tab-pane fade in" id="staf">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="section-title">
                                <h4>PROFILE PEGAWAI</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="cards">
                                <img src="assets/img/kadis.jpg" alt="Avatar" style="width:100%">
                                <div class="container">
                                    <h4><b>John Doe</b></h4>
                                    <p>KEPALA DINAS</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">

                            <div class="cards">
                                <img src="assets/img/kadis.jpg" alt="Avatar" style="width:100%">
                                <div class="container">
                                    <h4><b>Yohanes You, S.IP., M.Si</b></h4>
                                    <p>SEKRETARIS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Tab one end-->

            </div>
        </div>


</section>
<!-- price area end -->





<?= $this->endSection(); ?>