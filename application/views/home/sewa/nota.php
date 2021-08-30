<main id="main">
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single"><?= $halaman ?></h1>
                        <span class="color-text-a">Bukti penyewaan Anda.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <form>
                <div class="col-md-12 col-lg-12">
                    <h3>Detail Pelanggan</h3>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" id="inpnama" placeholder="<?= $data_user->nama ?>" readonly="readonly" />
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" id="inpemail" placeholder="<?= $data_user->email ?>" readonly="readonly" />
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>No. Telepon</label>
                                <input type="text" class="form-control" id="inptelepon" placeholder="<?= $data_user->telepon ?>" readonly="readonly" />
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <input type="text" class="form-control" id="inptelepon" placeholder="<?= ($data_user->kelamin == 'L') ? 'Laki - laki' : 'Perempuan' ?>" readonly="readonly" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="inpalamat" id="inpalamat" cols="45" rows="8" readonly="readonly"><?= $data_user->alamat ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <h3>Tabel</h3>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jenis</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Alamat</th>
                                    <th>Gambar</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $data_penyewa->nama ?></td>
                                    <td><?= $data_penyewa->jenis ?></td>
                                    <td><?= $data_penyewa->kategori ?></td>
                                    <td><?= create_separator($data_penyewa->harga) ?></td>
                                    <td><?= $data_penyewa->alamat ?></td>
                                    <td><img src="<?= upload_url() ?>gambar/<?= $data_penyewa->gambar ?>" alt="<?= $data_penyewa->nama ?>" width="200" height="200"></td>
                                    <td><?= $data_penyewa->keterangan ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <h3>Pembayaran</h3>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Metode Pembayaran</label>
                                <input type="text" class="form-control" id="inpmetodepembayaran" placeholder="<?= ($data_penyewa->metode_pembayaran === 'c' ? 'COD' : 'Transfer') ?>" readonly="readonly">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Bank</label>
                                <input type="text" class="form-control" id="inobank" placeholder="<?= $data_pembayaran->nama ?>" readonly="readonly">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Rekening</label>
                                <input type="text" class="form-control" id="inprekening" placeholder="<?= $data_pembayaran->rekening ?>" readonly="readonly">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Atas Nama</label>
                                <input type="text" class="form-control" id="inobank" placeholder="<?= $data_pembayaran->atas_nama ?>" readonly="readonly">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Nama Penyetor</label>
                                <input type="text" class="form-control" id="inprekening" placeholder="<?= ($data_pembayaran->nama_penyetor === null ? '-' : $data_pembayaran->nama_penyetor) ?>" readonly="readonly">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Tanggal Transfer</label>
                                <input type="text" class="form-control" id="inobank" placeholder="<?= ($data_pembayaran->tgl_transfer === null ? '-' : $data_pembayaran->tgl_transfer) ?>" readonly="readonly">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Jam Transfer</label>
                                <input type="text" class="form-control" id="inprekening" placeholder="<?= ($data_pembayaran->jam_transfer === null ? '-' : $data_pembayaran->jam_transfer) ?>" readonly="readonly">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Bukti Pembayaran</label>
                                <?= ($data_pembayaran->bukti === null ? '-' : '<img src="' . upload_url('gambar') . '' . $data_pembayaran->bukti  . '" width="100" heigth="100" />') ?>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Jumlah Transfer</label>
                                <input type="text" class="form-control" id="inprekening" placeholder="<?= ($data_pembayaran->jumlah_transfer === null ? '-' : rupiah($data_pembayaran->jumlah_transfer)) ?>" readonly="readonly">
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <?php if ($data_penyewa->status_pembayaran == '0') { ?>
                                <a class="btn btn-a" href="<?= base_url() ?>transfer/<?= base64_encode($data_penyewa->id_penyewa) ?>">Transfer</a>
                            <?php } ?>
                            <a class="btn btn-a" href="<?= base_url() ?>riwayat">Kembali</a>
                            <button type="submit" id="save" class="btn btn-a">Cetak</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>