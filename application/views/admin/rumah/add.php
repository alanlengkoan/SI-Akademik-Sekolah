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
                        <form id="form-add" action="<?= admin_url() ?>rumah/process_add" method="POST">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inpnama" id="inpnama" placeholder="Masukkan nama" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Harga *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inpharga" id="inpharga" onkeydown="return justAngka(event)" onkeyup="javascript:this.value=autoSeparator(this.value);" placeholder="Masukkan harga" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis *</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="inpidjenis" id="inpidjenis">
                                        <option value="">- Pilih -</option>
                                        <?php foreach ($jenis as $key => $row) { ?>
                                            <option value="<?= $row->id_jenis ?>"><?= $row->nama ?></option>
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
                                            <option value="<?= $row->id_kategori ?>"><?= $row->nama ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gambar *</label>
                                <div class="col-sm-10">
                                    <div id="lihat_gambar"></div>
                                    <input type="file" class="form-control" name="inpgambar" id="inpgambar" placeholder="Masukkan rekening" />
                                    <div id="centang_gambar"></div>
                                    <p>File dengan tipe (*.jpg,*.jpeg,*.png) Max. 20MB</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat *</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="inpalamat" id="inpalamat" placeholder="Masukkan alamat"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Latitude *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inplatitude" id="inplatitude" placeholder="Masukkan latitude" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Longitude *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inplongitude" id="inplongitude" placeholder="Masukkan longitude" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Keterangan *</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="inpketerangan" id="inpketerangan" placeholder="Masukkan keterangan"></textarea>
                                </div>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm waves-effect" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Batal</button>
                            <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light" id="save"><i class="fa fa-save"></i>&nbsp;Simpan</button>
                        </form>
                    </div>
                </div>
                <!-- end:: form -->
            </div>
        </div>
    </div>
</div>
<!-- end:: content -->