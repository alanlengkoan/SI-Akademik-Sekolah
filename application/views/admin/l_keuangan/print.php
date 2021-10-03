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
                <h3>SMA NEGERI 12 TANA TORAJA</h3>
            </td>
        </tr>
    </table>
    <hr>

    <table align="center" border="1">
        <thead>
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2">Keuangan</th>
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
                    <td><?= $row['nama_keuangan'] ?></td>
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