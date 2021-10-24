<!-- begin:: banner -->
<section class="about-banner relative" id="home">
    <div class="overlay"></div>
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
<!-- end:: banner -->

<!-- begin:: content -->
<section class="section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form id="form-report" action="<?= base_url() ?>laporan_lihat" method="POST">
                    <div class="form-group">
                        <label>Dari Tanggal&nbsp;*</label>
                        <input type="date" class="form-control form-control-sm" name="tgl_awal" id="tgl_awal" />
                    </div>
                    <div class="form-group">
                        <label>Sampai Tanggal&nbsp;*</label>
                        <input type="date" class="form-control form-control-sm" name="tgl_akhir" id="tgl_akhir" />
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light" id="proses"><i class="fa fa-eye"></i>&nbsp;Proses</button>
                </form>
                <br>
                <!-- begin:: untuk tabel -->
                <div id="lihat-tabel"></div>
                <!-- end:: untuk tabel -->
                <br>
            </div>
        </div>
    </div>
</section>
<!-- end:: content -->