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
    <h3>Detail Pelanggan</h3>
    <table align="center">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $pelanggan->nama ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?= $pelanggan->email ?></td>
        </tr>
        <tr>
            <td>No. Hp</td>
            <td>:</td>
            <td><?= $pelanggan->telepon ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?= ($pelanggan->kelamin == "L" ? "Laki - laki" : "Perempuan") ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $pelanggan->alamat ?></td>
        </tr>
    </table>

    <br>
    <h3>Detail Order</h3>
    <table align="center" border="1" cellspacing="0">
        <thead>
            <tr>
                <th>No.</th>
                <th>Tanggal Pemesanan</th>
                <th>Rumah</th>
                <th>Harga</th>
                <th>Sub Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $total = 0;
            $no = 1;
            foreach ($laporan as $key => $row) { ?>
                <tr>
                    <td rowspan="<?= count($row['detail']) + 1 ?>"><?= $no++ ?></td>
                    <td rowspan="<?= count($row['detail']) + 1 ?>"><?= $row['tgl_pemesanan'] ?></td>
                    <?php foreach ($row['detail'] as $rows) {
                        $total = $total + $rows->harga;
                    ?>
                <tr>
                    <td><?= $rows->nama ?></td>
                    <td><?= create_separator($rows->harga) ?></td>
                    <td><?= create_separator($rows->harga) ?></td>
                </tr>
            <?php } ?>
            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="4" style="text-align: center;">Total</th>
                <th><?= create_separator($total) ?></th>
            </tr>
        </tfoot>
    </table>
</div>