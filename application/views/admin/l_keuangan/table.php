<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-6">
                <h5 class="w-75 p-2">Daftar <?= $halaman ?></h5>
            </div>
            <div class="col-lg-6 text-right">
            </div>
        </div>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-striped table-bordered display no-wrap" style="width:100%">
                <thead>
                    <tr>
                        <th rowspan="2">No.</th>
                        <th rowspan="2">Dana</th>
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
                            <td><?= $row['dana'] ?></td>
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
    </div>
</div>