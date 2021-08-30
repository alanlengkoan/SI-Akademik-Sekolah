<main id="main">
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single"><?= $halaman ?></h1>
                        <span class="color-text-a"><i>Note :</i> Silahkan transfer sesuai dengan total yang tertera!</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <form id="form-transfer" action="<?= base_url() ?>pembayaran/<?= $id_penyewa ?>" method="post">
                <div class="col-md-12 col-lg-12">
                    <h3>Pembayaran</h3>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Bank</label>
                                <input type="text" class="form-control" id="inpbank" placeholder="<?= $pembayaran->nama ?>" readonly="readonly" />
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Rekening</label>
                                <input type="text" class="form-control" id="inprekening" placeholder="<?= $pembayaran->rekening ?>" readonly="readonly" />
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Total</label>
                                <input type="text" class="form-control" id="inprekening" placeholder="<?= $total->harga ?>" readonly="readonly" />
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Nama Penyetor&nbsp;*</label>
                                <input type="text" class="form-control" name="inpnamapenyetor" id="inpnamapenyetor" placeholder="Masukkan nama penyetor" />
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Atas Nama&nbsp;*</label>
                                <input type="text" class="form-control" name="inpatasnama" id="inpatasnama" placeholder="Masukkan atas nama" />
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Bukti Pembayaran&nbsp;*</label>
                                <input type="file" class="form-control" name="inpbukti" id="inpbukti" />
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