<!DOCTYPE html>
<html lang="en">

<head>
    <title>Selamat Datang | <?= $halaman ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Sistem Informasi Penyewaan Rumah" />
    <meta name="keywords" content="Sistem Informasi Penyewaan Rumah" />
    <meta name="author" content="Sistem Informasi Penyewaan Rumah" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- begin:: css local -->
    <?php empty($css) ? '' : $this->load->view($css); ?>
    <!-- end:: css local -->

    <style>
        .parsley-errors-list {
            color: red;
            list-style-type: none;
            padding: 0;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- begin:: navbar -->
    <ul>
        <li>
            <a href="<?= base_url() ?>">Beranda</a>
        </li>
        <li>
            <a href="<?= base_url() ?>tentang">Tentang</a>
        </li>
        <li>
            <a href="<?= base_url() ?>kontak">Kontak</a>
        </li>
        <li>
            <a href="<?= base_url() ?>rumah">Rumah</a>
        </li>
        <?php if ($this->session->userdata('id_users')) { ?>
            <li>
                <a href="<?= base_url() ?>riwayat">Riwayat</a>
            </li>
            <li>
                <a href="<?= logout_url() ?>">Logout</a>
            </li>
        <?php } else { ?>
            <li>
                <a href="<?= register_url() ?>">Register</a>
            </li>
            <li>
                <a href="<?= login_url() ?>">Login</a>
            </li>
        <?php } ?>
    </ul>
    <!-- end:: navbar -->

    <!-- begin:: content -->
    <?php $this->load->view($content); ?>
    <!-- end:: content -->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <script type="text/javascript">
        // untuk angka
        function justAngka(e) {
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190, 77]) !== -1 ||
                (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                (e.keyCode >= 35 && e.keyCode <= 40)) {
                return;
            }
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        };
        // untuk format harga
        function autoSeparator(Num) {
            Num += '';
            Num = Num.replace('.', '');
            Num = Num.replace('.', '');
            Num = Num.replace('.', '');
            Num = Num.replace('.', '');
            Num = Num.replace('.', '');
            Num = Num.replace('.', '');
            x = Num.split('.');
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1))
                x1 = x1.replace(rgx, '$1' + '.' + '$2');
            return x1 + x2;
        };
    </script>

    <!-- begin:: js local -->
    <?php empty($js) ? '' : $this->load->view($js); ?>
    <!-- end:: js local -->
</body>

</html>