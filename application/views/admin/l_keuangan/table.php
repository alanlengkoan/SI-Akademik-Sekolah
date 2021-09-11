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
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>Keuangan</th>
                        <th>Keterangan</th>
                        <th>Masuk (Debit)</th>
                        <th>Keluar (Kredit)</th>
                        <th>Saldo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $saldo_m = 0;
                    $saldo_k = 0;
                    $debit   = 0;
                    $kredit  = 0;
                    $no      = 1;
                    foreach ($keuangan->result() as $row) {
                        $saldo_m = ($saldo_m + $row->debit);
                        $saldo_k = ($saldo_k - $row->kredit);
                        $saldo   = ($saldo_m + $saldo_k);
                        $debit   = $debit + $row->debit;
                        $kredit  = $kredit + $row->kredit;
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= tgl_indo($row->tanggal) ?></td>
                            <td><?= $row->nama_keuangan ?></td>
                            <td><?= $row->keterangan ?></td>
                            <td><?= create_separator($row->debit) ?></td>
                            <td><?= create_separator($row->kredit) ?></td>
                            <td><?= create_separator($saldo) ?></td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <?php $total = ($debit - $kredit); ?>
                        <td colspan="4" align="center">Total</td>
                        <td><?= create_separator($debit) ?></td>
                        <td><?= create_separator($kredit) ?></td>
                        <td><?= create_separator($total) ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>