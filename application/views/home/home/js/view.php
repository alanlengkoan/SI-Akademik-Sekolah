<script type="text/javascript">
    // untuk sewa
    var untukSewa = function() {
        $(document).on('click', '#btn-sewa', function(e) {
            e.preventDefault();
            var ini = $(this);
            var id_users = ini.data('id_users');
            var id_rumah = ini.data('id_rumah');

            if (id_users === '') {
                window.location = '<?= login_url() ?>';
            } else {
                $.ajax({
                    method: 'post',
                    url: '<?= base_url() ?>sewa/add',
                    dataType: 'json',
                    data: {
                        inpidusers: id_users,
                        inpidrumah: id_rumah,
                    },
                    beforeSend: function() {
                        ini.attr('disabled', 'disabled');
                    },
                    success: function(response) {
                        swal({
                            title: response.title,
                            text: response.text,
                            icon: response.type,
                            button: response.button,
                        })
                        .then((value) => {
                            location.href = '<?= base_url() ?>sewa'
                        });
                    }
                });
            }
        });
    }();
</script>