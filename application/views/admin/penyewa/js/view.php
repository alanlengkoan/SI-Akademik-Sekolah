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

<script>
    let tabelPenyewaDt = null;

    // untuk datatable
    var untukTabelPenyewa = function() {
        tabelPenyewaDt = $('#tabel-penyewa').DataTable({
            responsive: true,
            processing: true,
            lengthMenu: [5, 10, 25, 50],
            pageLength: 10,
            ajax: '<?= admin_url() ?>penyewa/get_data_penyewa_dt',
            columns: [{
                    title: 'No.',
                    data: null,
                    className: 'text-center',
                    render: function(data, type, full, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    title: 'Nama',
                    data: 'nama',
                    className: 'text-center',
                },
                {
                    title: 'Jenis',
                    data: 'jenis',
                    className: 'text-center',
                },
                {
                    title: 'Kategori',
                    data: 'kategori',
                    className: 'text-center',
                },
                {
                    title: 'Alamat',
                    data: 'alamat',
                    className: 'text-center',
                },
                {
                    title: 'Tanggal Penyewa',
                    data: 'tgl_penyewa',
                    className: 'text-center',
                },
                {
                    title: 'Jam Penyewa',
                    data: 'jam_penyewa',
                    className: 'text-center',
                },
                {
                    title: 'Metode Pembayaran',
                    data: null,
                    className: 'text-center',
                    render: function(data, type, full, meta) {
                        return (full.metode_pembayaran === 'c' ? 'COD' : 'Transfer');
                    },
                },
                {
                    title: 'Status Pembayaran',
                    data: null,
                    className: 'text-center',
                    render: function(data, type, full, meta) {
                        let statusPembayaran = ['Menunggu Pembayaran', 'Telah Melakukan Pembayaran'];
                        return statusPembayaran[full.status_pembayaran];
                    },
                },
                {
                    title: 'Total',
                    data: null,
                    className: 'text-center',
                    render: function(data, type, full, meta) {
                        return autoSeparator(full.harga);
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
                                <a class="btn btn-info btn-sm waves-effect lihat" data-id="` + full.id_penyewa + `" href="<?= admin_url() ?>penyewa/detail/` + btoa(full.id_penyewa) + `">
                                    <i class="fa fa-info"></i>&nbsp;Detail
                                </a>
                            </div>
                        `;
                    },
                },
            ],
        });
    }();
</script>