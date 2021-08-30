<main id="main">
    <!-- begin:: breadcrumb -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single"><?= $halaman ?></h1>
                        <span class="color-text-a">Daftar Rumah Susun</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?= base_url() ?>">Beranda</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <?= $halaman ?>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- end:: breadcrumb -->

    <section class="property-grid grid">
        <div class="container">
            <div class="row">
                <?php foreach ($rumah as $row) { ?>
                    <div class="col-md-4">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img class="img-a img-fluid" src="<?= upload_url() ?>gambar/<?= $row->gambar ?>" alt="<?= $row->nama ?>">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="#"><?= $row->nama ?></a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a"><?= rupiah($row->harga) ?></span>
                                        </div>
                                        <button class="btn btn-success" id="btn-sewa" data-id_users="<?= ($this->session->userdata('id_users') ? $this->session->userdata('id_users') : null) ?>" data-id_rumah="<?= $row->id_rumah ?>">
                                            Sewa&nbsp;<span class="fa fa-shopping-cart"></span>
                                        </button>
                                        <a class="btn btn-primary" href="<?= base_url() ?>rumah/detail/<?= base64url_encode($row->id_rumah) ?>">
                                            Detail&nbsp;<span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</main>