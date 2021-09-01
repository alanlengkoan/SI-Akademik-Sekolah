<script src="<?= assets_url() ?>admin/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= assets_url() ?>admin/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= assets_url() ?>admin/pages/data-table/js/jszip.min.js"></script>
<script src="<?= assets_url() ?>admin/pages/data-table/js/pdfmake.min.js"></script>
<script src="<?= assets_url() ?>admin/pages/data-table/js/vfs_fonts.js"></script>
<script src="<?= assets_url() ?>admin/pages/data-table/extensions/key-table/js/dataTables.keyTable.min.js"></script>
<script src="<?= assets_url() ?>admin/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= assets_url() ?>admin/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= assets_url() ?>admin/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= assets_url() ?>admin/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= assets_url() ?>admin/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

<script>
    let tabelInformasiDt = null;

    // untuk textarea editor
    CKEDITOR.replace('inpisi', {
        language: 'en',
    });

    // untuk datatable
    var untukTabelInformasi = function() {
        tabelInformasiDt = $('#tabel-informasi').DataTable({
            responsive: true,
            processing: true,
            lengthMenu: [5, 10, 25, 50],
            pageLength: 10,
            ajax: '<?= admin_url() ?>informasi/get_data_informasi_dt',
            columns: [{
                    title: 'No.',
                    data: null,
                    className: 'text-center',
                    render: function(data, type, full, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    title: 'Judul',
                    data: 'judul',
                    className: 'text-center',
                },
                {
                    title: 'Kategori',
                    data: 'kategori',
                    className: 'text-center',
                },
                {
                    title: 'Isi',
                    data: 'isi',
                    className: 'text-center',
                },
                {
                    title: 'Gambar',
                    className: 'text-center',
                    render: function(data, type, full, meta) {
                        return `<img src="<?= upload_url('gambar') ?>` + full.gambar + `" width="100" heigth="100" />`
                    },
                },
                {
                    title: 'Status Aktif',
                    className: 'text-center',
                    render: function(data, type, full, meta) {
                        var status = [
                            [
                                'Tidak Aktif',
                                'warning',
                            ],
                            [
                                'Aktif',
                                'primary',
                            ],
                        ];
                        return `<button type="button" id="btn-status-lihat" data-id="` + full.id_informasi + `" data-value="` + full.status + `" class="btn btn-` + status[full.status][1] + ` btn-sm waves-effect"><i class="fa fa-toggle-on"></i>&nbsp;` + status[full.status][0] + `</button>`;
                    },
                },
                {
                    title: 'Status Galeri',
                    className: 'text-center',
                    render: function(data, type, full, meta) {
                        var status = [
                            [
                                'Tidak Aktif',
                                'warning',
                            ],
                            [
                                'Aktif',
                                'primary',
                            ],
                        ];
                        return `<button type="button" id="btn-status-galeri" data-id="` + full.id_informasi + `" data-value="` + full.status_galeri + `" class="btn btn-` + status[full.status_galeri][1] + ` btn-sm waves-effect"><i class="fa fa-toggle-on"></i>&nbsp;` + status[full.status_galeri][0] + `</button>`;
                    },
                },
                {
                    title: 'Aksi',
                    responsivePriority: -1,
                    className: 'text-center',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, full, meta) {
                        return `
                        <div class="button-icon-btn button-icon-btn-cl">
                            <button type="button" id="btn-upd" data-id="` + full.id_informasi + `" class="btn btn-info btn-sm waves-effect" data-toggle="modal" data-target="#modal-add-upd"><i class="fa fa-pencil"></i>&nbsp;Ubah</button>
                            <button type="button" id="btn-del" data-id="` + full.id_informasi + `" class="btn btn-danger btn-sm waves-effect"><i class="fa fa-trash"></i>&nbsp;Hapus</button>
                        </div>
                    `;
                    },
                },
            ],
        });
    }();

    // untuk tambah & ubah data
    var untukTambahDanUbahData = function() {
        $(document).on('submit', '#form-add-upd', function(e) {
            e.preventDefault();
            $('#inpjudul').attr('required', 'required');
            $('#inpidkategori').attr('required', 'required');
            $('#inpgambar').attr('required', 'required');
            $('#inpisi').attr('required', 'required');

            if ($('#form-add-upd').parsley().isValid() == true) {
                $.ajax({
                    method: $(this).attr('method'),
                    url: $(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    cache: false,
                    dataType: 'json',
                    beforeSend: function() {
                        $('#save').attr('disabled', 'disabled');
                        $('#save').html('<i class="fa fa-spinner"></i>&nbsp;Menunggu...');
                    },
                    success: function(response) {
                        swal({
                                title: response.title,
                                text: response.text,
                                icon: response.type,
                                button: response.button,
                            })
                            .then((value) => {
                                $('#modal-add-upd').modal('hide');
                                tabelInformasiDt.ajax.reload();
                            });
                        $('#save').removeAttr('disabled');
                        $('#save').html('<i class="fa fa-save"></i>&nbsp;Simpan');
                    }
                });
            }
        });
    }();

    // untuk reset form
    var untukResetForm = function() {
        $(document).on('click', '#btn-add', function() {
            $('#judul-add-upd').html('Tambah');
            $('#inpidinformasi').val('');
            $('#inpjudul').val('');
            $('#inpidkategori').val('');
            $("input[name*='inpgambar']").removeAttr('disabled');
            $("input[name*='inpgambar']").attr('id', 'inpgambar');
            $('#inpgambar').val('');
            CKEDITOR.instances.inpisi.setData('');
            $('#lihat_gambar').empty();
            $('#lihat_gambar').removeAttr('style');
            $('#centang_gambar').empty();
            $('#centang_gambar').removeAttr('style');

        });
    }();

    // untuk get id
    var untukGetIdData = function() {
        $(document).on('click', '#btn-upd', function() {
            var ini = $(this);

            $.ajax({
                type: "POST",
                url: "<?= admin_url() ?>informasi/get",
                dataType: 'json',
                data: {
                    id: ini.data('id')
                },
                beforeSend: function() {
                    $('#judul-add-upd').html('Ubah');
                    ini.attr('disabled', 'disabled');
                    ini.html('<i class="fa fa-spinner"></i>&nbsp;Menunggu...');
                },
                success: function(response) {
                    $('#lihat_gambar').html(`<img src="<?= upload_url('gambar') ?>` + response.gambar + `" width="100" heigth="100" />`);
                    $('#lihat_gambar').attr('style', 'padding-bottom: 10px');

                    $('#centang_gambar').html(`<div class="checkbox-fade fade-in-default"><label><input type="checkbox" name="ubah_gambar" id="ubah_gambar" /><span class="cr"><i class="cr-icon icofont icofont-ui-check txt-default"></i></span><span>Ubah Gambar!</span></label></div>`);
                    $('#centang_gambar').attr('style', 'padding-top: 10px');

                    $('#inpidinformasi').val(response.id_informasi);
                    $('#inpjudul').val(response.judul);
                    $('#inpidkategori').val(response.id_kategori);
                    $('#inpgambar').attr('disabled', 'disabled');
                    $('#inpgambar').removeAttr('id');
                    CKEDITOR.instances.inpisi.setData(response.isi);

                    ini.removeAttr('disabled');
                    ini.html('<i class="fa fa-pencil"></i>&nbsp;Ubah');
                }
            });
        });
    }();

    // untuk ubah gambar
    var untukUbahGambar = function() {
        $(document).on('click', '#ubah_gambar', function() {
            var ini = $(this);
            if (ini.is(':checked')) {
                $("input[name*='inpgambar']").removeAttr('disabled');
                $("input[name*='inpgambar']").attr('id', 'inpgambar');
            } else {
                $("input[name*='inpgambar']").attr('disabled', 'disabled');
                $("input[name*='inpgambar']").removeAttr('id');
                $("input[name*='inpgambar']").removeAttr('required');
                ini.parent().parent().find('#error').empty();
            }
        });
    }();

    // untuk ubah status
    var untukUbahStatus = function() {
        $(document).on('click', '#btn-status-lihat', function() {
            var ini = $(this);
            swal({
                    title: "Apakah Anda yakin ingin mengubah status?",
                    text: "Berita tersebut akan berubah!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((del) => {
                    if (del) {
                        $.ajax({
                            type: "post",
                            url: "<?= admin_url() ?>informasi/upd_status",
                            dataType: 'json',
                            data: {
                                id: ini.data('id'),
                                value: ini.data('value')
                            },
                            beforeSend: function() {
                                ini.attr('disabled', 'disabled');
                                ini.html('<i class="fa fa-spinner"></i>&nbsp;Menunggu...');
                            },
                            success: function(data) {
                                swal({
                                        title: data.title,
                                        text: data.text,
                                        icon: data.type,
                                        button: data.button,
                                    })
                                    .then((value) => {
                                        tabelInformasiDt.ajax.reload();
                                    });
                            }
                        });
                    } else {
                        return false;
                    }
                });
        });
    }();

    // untuk ubah status galeri
    var untukUbahStatusGaleri = function() {
        $(document).on('click', '#btn-status-galeri', function() {
            var ini = $(this);
            swal({
                    title: "Apakah Anda yakin ingin mengubah status galeri?",
                    text: "Berita tersebut akan berubah!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((del) => {
                    if (del) {
                        $.ajax({
                            type: "post",
                            url: "<?= admin_url() ?>informasi/upd_status_galeri",
                            dataType: 'json',
                            data: {
                                id: ini.data('id'),
                                value: ini.data('value')
                            },
                            beforeSend: function() {
                                ini.attr('disabled', 'disabled');
                                ini.html('<i class="fa fa-spinner"></i>&nbsp;Menunggu...');
                            },
                            success: function(data) {
                                swal({
                                        title: data.title,
                                        text: data.text,
                                        icon: data.type,
                                        button: data.button,
                                    })
                                    .then((value) => {
                                        tabelInformasiDt.ajax.reload();
                                    });
                            }
                        });
                    } else {
                        return false;
                    }
                });
        });
    }();

    // untuk hapus data
    var untukHapusData = function() {
        $(document).on('click', '#btn-del', function() {
            var ini = $(this);
            swal({
                    title: "Apakah Anda yakin ingin menghapusnya?",
                    text: "Data yang telah dihapus tidak dapat dikembalikan!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((del) => {
                    if (del) {
                        $.ajax({
                            type: "post",
                            url: "<?= admin_url() ?>informasi/process_del",
                            dataType: 'json',
                            data: {
                                id: ini.data('id')
                            },
                            beforeSend: function() {
                                ini.attr('disabled', 'disabled');
                                ini.html('<i class="fa fa-spinner"></i>&nbsp;Menunggu...');
                            },
                            success: function(data) {
                                swal({
                                        title: data.title,
                                        text: data.text,
                                        icon: data.type,
                                        button: data.button,
                                    })
                                    .then((value) => {
                                        tabelInformasiDt.ajax.reload();
                                    });
                            }
                        });
                    } else {
                        return false;
                    }
                });
        });
    }();
</script>