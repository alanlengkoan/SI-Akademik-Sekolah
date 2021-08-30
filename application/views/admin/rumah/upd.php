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
                <!-- begin:: form -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="w-75 p-2">Tambah <?= $halaman ?></h5>
                    </div>
                    <div class="card-block">
                        <form id="form-upd" action="<?= admin_url() ?>rumah/process_upd/<?= base64url_encode($id_rumah) ?>" method="POST">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inpnama" id="inpnama" placeholder="Masukkan nama" value="<?= $rumah->nama ?>" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Harga *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inpharga" id="inpharga" onkeydown="return justAngka(event)" onkeyup="javascript:this.value=autoSeparator(this.value);" placeholder="Masukkan harga" value="<?= create_separator($rumah->harga) ?>" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis *</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="inpidjenis" id="inpidjenis">
                                        <option value="">- Pilih -</option>
                                        <?php foreach ($jenis as $key => $row) { ?>
                                            <option value="<?= $row->id_jenis ?>" <?= ($rumah->id_jenis === $row->id_jenis ? 'selected' : '') ?>><?= $row->nama ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kategori *</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="inpidkategori" id="inpidkategori">
                                        <option value="">- Pilih -</option>
                                        <?php foreach ($kategori as $key => $row) { ?>
                                            <option value="<?= $row->id_kategori ?>" <?= ($rumah->id_kategori === $row->id_kategori ? 'selected' : '') ?>><?= $row->nama ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gambar *</label>
                                <div class="col-sm-10">
                                    <img style="padding-bottom: 10px" src="<?= upload_url('gambar') ?><?= $rumah->gambar ?>" width="100" heigth="100" />
                                    <input type="file" class="form-control" name="inpgambar" disabled="disabled" />
                                    <div style="padding-top: 10px" class="checkbox-fade fade-in-default">
                                        <label>
                                            <input type="checkbox" name="ubah_gambar" id="ubah_gambar" />
                                            <span class="cr">
                                                <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                            </span>
                                            <span>Ubah Gambar!</span>
                                        </label>
                                    </div>
                                    <p>File dengan tipe (*.jpg,*.jpeg,*.png) Max. 20MB</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat *</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="inpalamat" id="inpalamat" placeholder="Masukkan alamat"><?= $rumah->alamat ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Latitude *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inplatitude" id="inplatitude" placeholder="Masukkan latitude" value="<?= $rumah->latitude ?>" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Longitude *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inplongitude" id="inplongitude" placeholder="Masukkan longitude" value="<?= $rumah->longitude ?>" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Keterangan *</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="inpketerangan" id="inpketerangan" placeholder="Masukkan keterangan"><?= $rumah->keterangan ?></textarea>
                                </div>
                            </div>
                            <a href="<?= admin_url() ?>rumah" class="btn btn-danger btn-sm waves-effect"><i class="fa fa-close"></i>&nbsp;Batal</a>
                            <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light" id="save"><i class="fa fa-save"></i>&nbsp;Simpan</button>
                        </form>
                    </div>
                </div>
                <!-- end:: form -->

                <!-- begin:: fasilitas -->
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="w-75 p-2">Tambah Fasilitas <?= $halaman ?></h5>
                            </div>
                            <div class="col-lg-6 text-right">
                                <button type="button" id="btn-add" class="btn btn-success btn-sm waves-effect" data-toggle="modal" data-target="#modal-add-upd"><i class="fa fa-plus"></i>&nbsp;Tambah</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-block table-border-style">
                        <table class="table table-striped table-bordered nowrap" id="tabel-fasilitas">
                        </table>
                    </div>
                </div>
                <!-- end:: fasilitas -->
            </div>
        </div>
    </div>
</div>
<!-- end:: content -->

<!-- begin:: modal tambah & ubah -->
<div class="modal fade" id="modal-add-upd" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><span id="judul-add-upd"></span> Fasilitas <?= $halaman ?></h4>
            </div>
            <form id="form-add-upd" action="<?= admin_url() ?>rumah/process_save_fasilitas" method="POST">
                <!-- begin:: id -->
                <input type="hidden" name="inpidrumah" id="inpidrumah" value="<?= $id_rumah ?>" />
                <input type="hidden" name="inpidfasilitas" id="inpidfasilitas" />
                <!-- end:: id -->

                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="inpnamafasilitas" id="inpnamafasilitas" placeholder="Masukkan nama" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Gambar *</label>
                        <div class="col-sm-10">
                            <div id="lihat_gambar"></div>
                            <input type="file" class="form-control" name="inpgambarfasilitas" id="inpgambarfasilitas" />
                            <div id="centang_gambar"></div>
                            <p>File dengan tipe (*.jpg,*.jpeg,*.png) Max. 20MB</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm waves-effect" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light" id="save_fasilitas"><i class="fa fa-save"></i>&nbsp;Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end:: modal tambah & ubah -->