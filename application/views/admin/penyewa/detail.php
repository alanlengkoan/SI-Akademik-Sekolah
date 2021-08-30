<!-- begin:: breadcumb -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h4 class="m-b-10"><?= $halaman ?></h4>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">
                            <i class="feather icon-home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#!">Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end:: breadcumb -->

<!-- begin:: content -->
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="card">
                    <div class="card-header">
                        <h5 class="w-75 p-2"><?= $halaman ?></h5>
                    </div>
                    <div class="card-block">
                        <!-- begin:: form -->
                        <h3>Detail Pembayaran</h3>
                        <!-- begin:: id -->
                        <input type="text" class="form-control" id="inpidpenyewa" value="<?= $data_penyewa->id_penyewa ?>" />
                        <!-- end:: id -->

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" id="inpnama" class="form-control" placeholder="<?= $data_user->nama ?>" readonly="readonly" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" id="inpemail" class="form-control" placeholder="<?= $data_user->nama ?>" readonly="readonly" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">No. Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" id="inptelepon" class="form-control" placeholder="<?= $data_user->nama ?>" readonly="readonly" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <input type="text" id="inpkelamin" class="form-control" placeholder="<?= ($data_user->kelamin == 'L') ? 'Laki - laki' : 'Perempuan' ?>" readonly="readonly" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea name="inpalamat" id="inpalamat" class="form-control" placeholder="<?= $data_user->alamat ?>" readonly="readonly"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tanggal Penyewa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="<?= $data_penyewa->tgl_penyewa ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jam Penyewa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="<?= $data_penyewa->jam_penyewa ?>" readonly>
                            </div>
                        </div>
                        <h3>Pembayaran</h3>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Metode Pembayaran</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="<?= ($data_penyewa->metode_pembayaran === 'c' ? 'COD' : 'Transfer') ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Status Pembayaran</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="<?= ($data_penyewa->status_pembayaran === 0 ? 'Menunggu Pembayaran' : 'Telah Melakukan Pembayaran') ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Bank</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="<?= $data_pembayaran->nama ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Rekening</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="<?= $data_pembayaran->rekening ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Atas Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="<?= ($data_pembayaran->atas_nama === null ? '-' : $data_pembayaran->atas_nama) ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Penyetor</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="<?= ($data_pembayaran->nama_penyetor === null ? '-' : $data_pembayaran->nama_penyetor) ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tanggal Transfer</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="<?= ($data_pembayaran->tgl_transfer === null ? '-' : $data_pembayaran->tgl_transfer) ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jam Transfer</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="<?= ($data_pembayaran->jam_transfer === null ? '-' : $data_pembayaran->jam_transfer) ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Bukti Transfer</label>
                            <div class="col-sm-10">
                                <?= ($data_pembayaran->bukti === null ? '-' : '<img src="' . upload_url('gambar') . '' . $data_pembayaran->bukti  . '" width="100" heigth="100" />') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jumlah Transfer</label>
                            <div class="col-sm-10">
                                <?php if ($data_pembayaran->jumlah_transfer === null) { ?>
                                    <div class="input-group input-group-button">
                                        <input type="text" class="form-control" name="inpjumlahtransfer" id="inpjumlahtransfer" onkeydown="return justAngka(event)" onkeyup="javascript:this.value=autoSeparator(this.value);" placeholder="Masukkan Jumlah Transfer">
                                        <div class="input-group-append">
                                            <button type="button" id="btn-simpan" class="btn btn-primary"><i class="fa fa-save"></i></button>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <input type="text" class="form-control" placeholder="<?= create_separator($data_pembayaran->jumlah_transfer) ?>" readonly>
                                <?php } ?>
                            </div>
                        </div>
                        <?php if ($data_penyewa->status_pembayaran === '1') { ?>
                            <div class="alert alert-success background-success">
                                <strong>Berhasil!</strong> Transaksi telah diproses!
                            </div>
                        <?php } else { ?>
                            <div class="alert alert-info background-info">
                                <strong>Progress!</strong> Transaksi sedang diproses!
                            </div>
                        <?php } ?>
                        <hr>
                        <!-- end:: form -->
                        <h3>Tabel Rumah</h3>
                        <!-- begin:: table -->
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr align="center">
                                        <td>Nama</td>
                                        <td>Jenis</td>
                                        <td>Kategori</td>
                                        <td>Alamat</td>
                                        <td>Keterangan</td>
                                        <td>Harga</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?= $data_penyewa->nama ?></td>
                                        <td><?= $data_penyewa->jenis ?></td>
                                        <td><?= $data_penyewa->kategori ?></td>
                                        <td><?= $data_penyewa->alamat ?></td>
                                        <td><?= (strlen($data_penyewa->keterangan) > 50 ? substr_replace($data_penyewa->keterangan, "...", 50) : $data_penyewa->keterangan ) ?></td>
                                        <td><?= create_separator($data_penyewa->harga) ?></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" align="center">
                                            Total
                                        </td>
                                        <td align="center">
                                            <span><?= rupiah($data_penyewa->harga) ?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" align="center">
                                            Grand Total
                                        </td>
                                        <td align="center">
                                            <span><?= rupiah($data_penyewa->harga) ?></span>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- end:: table -->
                        <a class="btn btn-danger btn-sm waves-effect" href="<?= admin_url() ?>penyewa">
                            <i class="fa fa-arrow-left"></i>&nbsp;Kembali
                        </a>
                        <button type="button" class="btn btn-primary btn-sm waves-effect" data-id="<?= $data_penyewa->id_penyewa ?>" id="cetak"><i class="fa fa-print"></i> Cetak</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end:: content -->