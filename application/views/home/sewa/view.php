<main id="main">
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single"><?= $halaman ?></h1>
                        <span class="color-text-a">Silahkan Isi Data Diri dengan baik dan benar</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <form id="form-sewa" action="<?= base_url() ?>sewa/finish" method="post">
                <div class="col-md-12 col-lg-12">
                    <h3>Detail Pelanggan</h3>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Nama&nbsp;*</label>
                                <input type="text" class="form-control" name="inpnama" id="inpnama" value="<?= $user->nama ?>" />
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Email&nbsp;*</label>
                                <input type="email" class="form-control" name="inpemail" id="inpemail" value="<?= $user->email ?>" />
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>No. Telepon&nbsp;*</label>
                                <input type="text" class="form-control" name="inptelepon" id="inptelepon" value="<?= $user->telepon ?>" />
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Jenis Kelamin&nbsp;*</label>
                                <select class="form-control" name="inpkelamin" id="inpkelamin">
                                    <option value="">- Pilih -</option>
                                    <option <?= ($user->kelamin == 'L') ? 'selected' : '' ?> value="L">Laki - laki
                                    </option>
                                    <option <?= ($user->kelamin == 'P') ? 'selected' : '' ?> value="P">Perempuan
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Alamat&nbsp;*</label>
                                <textarea class="form-control" name="inpalamat" id="inpalamat" cols="45" rows="8"><?= $user->alamat ?></textarea>
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
                                <?php foreach ($rumah->result() as $row) { ?>
                                    <tr>
                                        <td><?= $row->nama ?></td>
                                        <td><?= $row->jenis ?></td>
                                        <td><?= $row->kategori ?></td>
                                        <td><?= create_separator($row->harga) ?></td>
                                        <td><?= $row->alamat ?></td>
                                        <td><img src="<?= upload_url() ?>gambar/<?= $row->gambar ?>" alt="<?= $row->nama ?>" width="200" height="200"></td>
                                        <td><?= $row->keterangan ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <h3>Pembayaran</h3>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Metode Pembayaran&nbsp;*</label>
                                <select class="form-control" name="inpmetodepembayaran" id="inpmetodepembayaran">
                                    <option value="">- Pilih -</option>
                                    <option value="t">Transfer</option>
                                </select>
                            </div>
                        </div>
                        <div id="transfer" style="display: none;" class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Bank&nbsp;*</label>
                                <select class="form-control" name="inpidbank" id="inpidbank">
                                    <option value="">- Pilih -</option>
                                    <?php foreach ($bank as $key => $row) { ?>
                                        <option value="<?= $row->id_bank ?>" data-rekening="<?= $row->rekening ?>"><?= $row->nama ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div id="nomor_rekening" style="display: none" class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Rekening</label>
                                <input type="text" class="form-control" id="inprekening" value="0" readonly="readonly">
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" id="save" class="btn btn-a">Proses</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>