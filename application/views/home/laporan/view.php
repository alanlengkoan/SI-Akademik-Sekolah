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
                <table align="center">
                    <td>
                        <img src="<?= assets_url() ?>admin/images/sulsel.png" alt="logo" title="logo" width="70px" />
                    </td>
                    <td align="center">
                        <h3>PEMERINTAH SULAWESI SELATAN</h3>
                        <h4>DINAS PENDIDIKAN</h4>
                        <h5>CABANG DINAS PENDIDIKAN WILAYAH X</h5>
                        <h3>UPT SMA NEGERI 12 TANA TORAJA</h3>
                        <p><i>Kondodewata, Kec. Mappak, Kab. Tana Toraja, Sulawesi Selatan, Indonesia.</i></p>
                    </td>
                    <td>
                        <img src="<?= assets_url() ?>admin/images/logo.png" alt="logo" title="logo" width="70px" />
                    </td>
                </table>
                <br>
                <h2 class="text-center">Laporan Pertanggung Jawaban Dana <?= $jenis['nama'] ?> <br> Triwulan Tahun Anggaran <?= date('Y') ?></h2>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered display no-wrap" style="width:100%">
                        <thead>
                            <tr>
                                <th rowspan="2">No.</th>
                                <th rowspan="2">Uraian</th>
                                <th rowspan="2">Masuk (Debit)</th>
                                <th colspan="<?= count($jarak_bulan) ?>">Bulan</th>
                                <th rowspan="2">Keluar (Kredit)</th>
                                <th rowspan="2">Sisa</th>
                                <th rowspan="2">Keterangan</th>
                            </tr>
                            <tr>
                                <?php foreach ($jarak_bulan as $key => $value) { ?>
                                    <th><?= $bulan[$key] ?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $saldo_m = 0;
                            $saldo_k = 0;
                            $debit   = 0;
                            $kredit  = 0;
                            foreach ($keuangan as $row) {
                            ?>
                                <tr>
                                    <td><?= $row['no'] ?></td>
                                    <td><?= $row['uraian'] ?></td>
                                    <td><?= $row['debit'] ?></td>
                                    <?php foreach ($row['bulan'] as $key => $value) { ?>
                                        <td><?= ($value === null ? 0 : create_separator($value)) ?></td>
                                    <?php } ?>
                                    <td><?= $row['kredit'] ?></td>
                                    <td><?= $row['sisa'] ?></td>
                                    <td><?= $row['keterangan'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <br /><br />
                <br /><br />
                <table>
                    <tr>
                        <td align="center">
                            <p>TANA TORAJA, <?= tgl_indo(date('Y-m-d')) ?></p>
                            <p>Kepala Sekolah</p>
                            <br />
                            <br />
                            <br />
                            <br />
                            <p class="nama">Drs. Sinai</p>
                            <p>NIP : 196401081989031019</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- end:: content -->