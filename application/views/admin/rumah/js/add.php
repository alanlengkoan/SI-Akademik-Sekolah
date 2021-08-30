<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>

<script>
    // untuk tambah data
    var untukTambahData = function() {
        $(document).on('submit', '#form-add', function(e) {
            e.preventDefault();
            $('#inpnama').attr('required', 'required');
            $('#inpharga').attr('required', 'required');
            $('#inpidjenis').attr('required', 'required');
            $('#inpidkategori').attr('required', 'required');
            $('#inpgambar').attr('required', 'required');
            $('#inpalamat').attr('required', 'required');
            $('#inplatitude').attr('required', 'required');
            $('#inplongitude').attr('required', 'required');
            $('#inpketerangan').attr('required', 'required');

            if ($('#form-add').parsley().isValid() == true) {
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
                            if (response.id_rumah === null) {
                                location.reload();
                            } else {
                                location.href = '<?= admin_url() ?>rumah/upd/'+ btoa(response.id_rumah);
                            }
                        });
                        $('#save').removeAttr('disabled');
                        $('#save').html('<i class="fa fa-save"></i>&nbsp;Simpan');
                    }
                })
            }
        });
    }();
</script>