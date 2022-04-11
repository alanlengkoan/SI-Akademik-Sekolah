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
                <form id="form-login" action="<?= base_url() ?>auth/check_validation" method="post">
                    <div class="form-group">
                        <label>Nis&nbsp;*</label>
                        <input type="text" class="form-control form-control-sm" name="username" id="username" placeholder="Masukkan nis Anda" />
                    </div>
                    <div class="form-group">
                        <label>Password&nbsp;*</label>
                        <input type="password" class="form-control form-control-sm" name="password" id="password" placeholder="Masukkan password Anda" />
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" id="login" class="btn btn-primary btn-sm">Login</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-12">
                <!-- begin:: filter -->
                <form id="form-filter" action="<?= base_url() ?>kuisioner_chart/<?= $id_kuisioner ?>" method="post">
                    <div class="form-group">
                        <label>Tahun&nbsp;*</label>
                        <select name="tahun" id="tahun" class="form-control">
                            <option value="">- Pilih -</option>
                            <?php foreach ($tahun->result() as $key => $row) { ?>
                                <option value="<?= $row->tahun ?>"><?= $row->tahun ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Siswa&nbsp;*</label>
                        <select name="siswa" id="siswa" class="form-control">
                            <option value="">- Pilih -</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" id="lihat" value="Lihat" class="btn btn-success btn-sm">
                    </div>
                </form>
                <!-- end:: filter -->
                <!-- begin:: chart -->
                <?php foreach ($kuisional_soal->result() as $value) { ?>
                    <figure class="highcharts-figure">
                        <div id="<?= $value->id_kuisioner_soal ?>"></div>
                    </figure>
                    <br>
                <?php } ?>
                <!-- end:: chart -->
            </div>
        </div>
    </div>
</section>
<!-- end:: content -->