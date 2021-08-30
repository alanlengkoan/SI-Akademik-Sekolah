<main id="main">
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single"><?= $halaman ?></h1>
                        <span class="color-text-a">Detail Rumah Susun</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="property-grid.html">Properties</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                304 Blaster Up
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="property-single nav-arrow-b">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
                        <div class="carousel-item-b">
                            <img src="<?= upload_url() ?>gambar/<?= $rumah->gambar ?>" alt="<?= $rumah->nama ?>">
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-md-5 col-lg-4">
                            <div class="property-price d-flex justify-content-center foo">
                                <div class="card-header-c d-flex">
                                    <div class="card-box-ico">
                                        <span class="ion-money">Rp</span>
                                    </div>
                                    <div class="card-title-c align-self-center">
                                        <h5 class="title-c"><?= create_separator($rumah->harga) ?></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="property-summary">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="title-box-d section-t4">
                                            <h3 class="title-d">Detail Rumah</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary-list">
                                    <ul class="list">
                                        <li class="d-flex justify-content-between">
                                            <strong>ID Rumah:</strong>
                                            <span><?= $rumah->id_rumah ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Alamat:</strong>
                                            <span><?= $rumah->alamat ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Jenis Rumah:</strong>
                                            <span><?= $rumah->jenis ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Kategori Rumah:</strong>
                                            <span><?= $rumah->kategori ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 section-md-t3">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Deskripsi Rumah</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="property-description">
                                <?= $rumah->keterangan ?>
                            </div>
                            <div class="row section-t3">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Fasilitas</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="amenities-list color-text-a">
                                <ul class="list-a no-margin">
                                    <?php foreach ($fasilitas->result() as $row) { ?>
                                        <li><?= $row->nama ?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 offset-md-1">
                    <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="pills-plans-tab" data-toggle="pill" href="#fasilitas" role="tab" aria-controls="pills-plans" aria-selected="false">Fasilitas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map" aria-selected="false">Lokasi</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade" id="fasilitas" role="tabpanel" aria-labelledby="pills-plans-tab">
                            <?php foreach ($fasilitas->result() as $row) { ?>
                                <img src="<?= upload_url() ?>gambar/<?= $row->gambar ?>" width="200" height="200" class="img-fluid">
                            <?php } ?>
                        </div>
                        <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
                            <!-- begin:: untuk google maps -->
                            <div id="map" style="height: 600px; width: 100%;"></div>
                            <!-- end:: untuk google maps -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>