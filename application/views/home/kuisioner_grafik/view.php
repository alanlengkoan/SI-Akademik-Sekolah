<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    <?= $halaman ?>
                </h1>
                <p class="text-white link-nav"><a href="<?= base_url() ?>">Beranda </a> <span class="lnr lnr-arrow-right"></span> <a href="<?= base_url() ?>kontak"><?= $halaman ?></a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- begin:: body -->
<section class="section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <?php foreach ($kuisional_soal->result() as $value) { ?>
                    <figure class="highcharts-figure">
                        <div id="<?= $value->id_kuisioner_soal ?>"></div>
                    </figure>
                    <br>
                <?php } ?>

            </div>
        </div>
    </div>
</section>
<!-- end:: body -->