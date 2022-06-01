<script>
    $(function() {

        $("#newValidate").validate({
            rules: {
                nama: {
                    required: true,
                    minlength: 3
                },
                email: {
                    required: true,
                },
                password: {
                    required: true,
                    minlength: 8
                },
                nama_produk: {
                    required: true,
                },
                harga: {
                    required: true,
                    min: 0
                },
                stock: {
                    required: true,
                    min: 0
                },
                tgl_masuk: {
                    required: true,
                },

            },
            messages: {
                //action: "Please provide some data"
                nama: {
                    required: "<h6><font color= 'Red'>* Kolom Nama Harus Diisi</h6></font>",
                    minlength: "<h6><font color= 'Red'>* Minimal 3 huruf</h6></font>",
                },
                email: {
                    required: "<h6><font color= 'Red'>* Kolom Email Harus Diisi</h6></font>",
                },
                password: {
                    required: "<h6><font color= 'Red'>* Kolom Password Harus Diisi</h6></font>",
                    minlength: "<h6><font color= 'Red'>* Minimal 8 huruf</h6></font>",
                },
                nama_produk: {
                    required: "<h6><font color= 'Red'>* Kolom Nama Produk Harus Diisi</h6></font>",
                },
                harga: {
                    required: "<h6><font color= 'Red'>* Kolom Harga Harus Diisi</h6></font>",
                    min: "<h6><font color= 'Red'>* Kolom Harga Min 0</h6></font>",
                },
                stock: {
                    required: "<h6><font color= 'Red'>* Kolom Stock Harus Diisi</h6></font>",
                    min: "<h6><font color= 'Red'>* Kolom Stock Min 0</h6></font>",
                },
                tgl_masuk: {
                    required: "<h6><font color= 'Red'>* Kolom Tanggal Harus Diisi</h6></font>",
                },

                min: $.validator.format("<h6><font color= 'Red'>* Minimal 9 digit</h6></font>")

            }
        });
    });
</script>