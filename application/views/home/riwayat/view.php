<main id="main">
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single"><?= $halaman ?></h1>
                        <span class="color-text-a">Riwayat penyewaan rumah susun.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Jenis</th>
                                <th>Kategori</th>
                                <th>Alamat</th>
                                <th>Tanggal Penyewa</th>
                                <th>Jam Penyewa</th>
                                <th>Metode Pembayaran</th>
                                <th>Status Pembayaran</th>
                                <th>Total</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $status_pembayaran  = ['Menunggu Pembayaran', 'Telah Melakukan Pembayaran', '-'];
                            foreach ($riwayat->result() as $row) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->nama ?></td>
                                    <td><?= $row->jenis ?></td>
                                    <td><?= $row->kategori ?></td>
                                    <td><?= $row->alamat ?></td>
                                    <td><?= $row->tgl_penyewa ?></td>
                                    <td><?= $row->jam_penyewa ?></td>
                                    <td><?= ($row->metode_pembayaran === 'c' ? 'COD' : 'Transfer') ?></td>
                                    <td><?= $status_pembayaran[$row->status_pembayaran] ?></td>
                                    <td><?= create_separator($row->harga) ?></td>
                                    <td>
                                        <a class="btn btn-info" href="<?= base_url() ?>nota/<?= base64url_encode($row->id_penyewa) ?>">Nota</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>