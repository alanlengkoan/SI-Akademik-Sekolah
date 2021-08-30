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
                <h3>LAPORAN SEWA</h3>
                <h3>RUMAH SUSUN (RUSUNAWA)</h3>
            </td>
        </tr>
    </table>
    <hr>

    <table align="center" border="1">
        <tr>
            <th>Nama</th>
            <th>Tanggal Sewa</th>
            <th>Jam Sewa</th>
            <th>Total Sewa</th>
            <th>Total Bayar</th>
        </tr>
        <?php
        $total_pembelian = 0;
        $total_bayar = 0;
        foreach ($laporan as $key => $value) { ?>
            <tr>
                <td rowspan="<?= count($value) + 1 ?>"><?= $key ?></td>
                <?php foreach ($value as $row) {
                    $total_pembelian = $total_pembelian + $row['total_pembelian'];
                    $total_bayar = $total_bayar + $row['total_bayar'];
                ?>
            <tr>
                <td><?= $row['tanggal_pembelian'] ?></td>
                <td><?= $row['jam_pembelian'] ?></td>
                <td><?= create_separator($row['total_pembelian']) ?></td>
                <td><?= create_separator($row['total_bayar']) ?></td>
            </tr>
        <?php } ?>
        </tr>
    <?php } ?>
    <tr>
        <th colspan="3" style="text-align: center;">Total</th>
        <th><?= create_separator($total_pembelian) ?></th>
        <th><?= create_separator($total_bayar) ?></th>
    </tr>
    </table>
</div>