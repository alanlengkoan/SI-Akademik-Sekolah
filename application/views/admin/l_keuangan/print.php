<!-- CSS -->
<style media="screen">
    .judul {
        padding: 4mm;
        text-align: center;
    }

    .nama {
        text-decoration: underline;
        font-weight: bold;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-top: 0;
        margin-bottom: 5px;
    }

    h3 {
        font-family: times;
    }

    p {
        margin: 0;
    }
</style>
<!-- CSS -->

<div class="judul">
    <table align="center">
        <tr>
            <td align="center">
                <h3>LAPORAN KEUANGAN</h3>
            </td>
        </tr>
    </table>
    <hr>

    <table align="center" border="1">
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