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
        <?php if ($kuisioner_check > 0) { ?>
            <div class="pt-3">
                <div class="alert alert-info" role="alert">
                    Terima Kasih Telah Mengisi Kuisioner.
                </div>
            </div>
        <?php } else { ?>
            <div class="row">
                <div class="col-lg-12">
                    <form id="form-kuisioner" action="<?= base_url() ?>kuisioner_simpan" method="post">
                        <?php if ($siswa->nis === null) { ?>
                            <div class="form-group">
                                <label>Nis&nbsp;*</label>
                                <input type="text" class="form-control form-control-sm" name="inpnis" id="inpnis" placeholder="Masukkan nis" />
                            </div>
                            <div class="form-group">
                                <label>Nama&nbsp;*</label>
                                <input type="text" class="form-control form-control-sm" name="inpnama" id="inpnama" placeholder="Masukkan nama" />
                            </div>
                            <div class="form-group">
                                <label>Agama&nbsp;*</label>
                                <select class="form-control form-control-sm" id="inpidagama" name="inpidagama">
                                    <option value="">- Pilih -</option>
                                    <?php foreach ($agama as $key => $value) { ?>
                                        <option value="<?= $value->id_agama ?>"><?= $value->nama ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin&nbsp;*</label>
                                <select class="form-control form-control-sm" name="inpkelamin" id="inpkelamin">
                                    <option value="">- Pilih -</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir&nbsp;*</label>
                                <input type="text" class="form-control form-control-sm" name="inptmplahir" id="inptmplahir" placeholder="Masukkan tempat lahir" />
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir&nbsp;*</label>
                                <input type="date" class="form-control form-control-sm" name="inptgllahir" id="inptgllahir" />
                            </div>
                            <div class="form-group">
                                <label>Alamat&nbsp;*</label>
                                <textarea class="form-control form-control-sm" name="inpalamat" id="inpalamat" cols="30" rows="10" placeholder="Masukkan alamat"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Orang Tua Wali&nbsp;*</label>
                                <input type="text" class="form-control form-control-sm" name="inportuwali" id="inportuwali" placeholder="Masukkan orang tua wali" />
                            </div>
                            <div class="form-group">
                                <label>Status&nbsp;*</label>
                                <select class="form-control form-control-sm" name="inpstatus" id="inpstatus">
                                    <option value="">- Pilih -</option>
                                    <option value="0">Aktif</option>
                                    <option value="1">Alumni</option>
                                </select>
                            </div>
                            <div class="form-group" id="tahun_lulus" style="display: none">
                                <label>Tahun Lulus&nbsp;*</label>
                                <input type="text" class="form-control form-control-sm" name="inptahunlulus" id="inptahunlulus" placeholder="Masukkan tahun lulus" />
                            </div>
                            <hr>
                        <?php } ?>
                        <!-- begin:: kuisioner -->
                        <?php foreach ($data->result() as $key => $row) { ?>
                            <input type="hidden" name="inpidkusionersoal[]" id="inpidkusionersoal" value="<?= $row->id_kuisioner_soal ?>">
                            <div class="form-group">
                                <label><?= $row->soal ?>&nbsp;*</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="<?= $key ?>_a" name="<?= $key ?>_inpjawaban" value="1" />
                                    <label class="form-check-label" for="<?= $key ?>_a">
                                        A. <?= $row->pil_a ?>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="<?= $key ?>_b" name="<?= $key ?>_inpjawaban" value="2" />
                                    <label class="form-check-label" for="<?= $key ?>_b">
                                        B. <?= $row->pil_b ?>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="<?= $key ?>_c" name="<?= $key ?>_inpjawaban" value="3" />
                                    <label class="form-check-label" for="<?= $key ?>_c">
                                        C. <?= $row->pil_c ?>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="<?= $key ?>_d" name="<?= $key ?>_inpjawaban" value="4" />
                                    <label class="form-check-label" for="<?= $key ?>_d">
                                        D. <?= $row->pil_d ?>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="<?= $key ?>_e" name="<?= $key ?>_inpjawaban" value="5" />
                                    <label class="form-check-label" for="<?= $key ?>_e">
                                        E. <?= $row->pil_e ?>
                                    </label>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- end:: kuisioner -->
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" id="save" class="btn btn-primary btn-sm">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <?php }
        ?>
    </div>
</section>
<!-- end:: body -->