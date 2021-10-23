<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>

<script>
    // untuk lihat data
    var untukLihatData = function() {
        $('#form-report').submit(function(e) {
            e.preventDefault();
            $('#tgl_awal').attr('required', 'required');
            $('#tgl_akhir').attr('required', 'required');

            if ($('#form-report').parsley().isValid() == true) {
                $.ajax({
                    method: $(this).attr('method'),
                    url: $(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: 'html',
                    beforeSend: function() {
                        $('#proses').attr('disabled', 'disabled');
                        $('#proses').html('<i class="fa fa-spinner"></i>&nbsp;Waiting...');
                    },
                    success: function(response) {
                        $('#lihat-tabel').html(response);
                        $('#proses').removeAttr('disabled');
                        $('#proses').html('<i class="fa fa-eye"></i>&nbsp;Lihat');
                    }
                })
            }
        });
    }();
</script>