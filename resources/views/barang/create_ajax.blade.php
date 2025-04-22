<form action="{{ url('/barang/ajax') }}" method="POST" id="form-tambah">
    @csrf
    <div id="modal-master" class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="form-group">
                    <label>Kategori Barang</label>
                    <select name="kategori_id" id="kategori_id" class="form-control" required>
                        <option value="">- Pilih Kategori -</option>
                        @foreach($kategori as $l)
                            <option value="{{ $l->kategori_id }}">{{ $l->kategori_nama }}</option>
                        @endforeach
                    </select>
                    <small id="error-kategori_id" class="error-text form-text text-danger"></small>
                </div>

                <div class="form-group">
                    <label>Kode Barang</label>
                    <input type="text" name="kodebarang" id="kodebarang" class="form-control" required>
                    <small id="error-kodebarang" class="error-text form-text text-danger"></small>
                </div>

                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="namabarang" id="namabarang" class="form-control" required>
                    <small id="error-namabarang" class="error-text form-text text-danger"></small>
                </div>

                <div class="form-group">
                    <label>Harga Beli</label>
                    <input type="text" name="hargabeli" id="hargabeli" class="form-control" required>
                    <small id="error-hargabeli" class="error-text form-text text-danger"></small>
                </div>

                <div class="form-group">
                    <label>Harga Jual</label>
                    <input type="text" name="hargajual" id="hargajual" class="form-control" required>
                    <small id="error-hargajual" class="error-text form-text text-danger"></small>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-warning">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</form>

<script>
    $(document).ready(function () {
        $("#form-tambah").validate({
            rules: {
                kategori_id: {
                    required: true,
                    number: true
                },
                kodebarang: {
                    required: true,
                    minlength: 3,
                    maxlength: 10
                },
                namabarang: {
                    required: true,
                    minlength: 3,
                    maxlength: 100
                },
                hargabeli: {
                    required: true,
                    number: true,
                    min: 1000,
                    max: 10000000
                },
                hargajual: {
                    required: true,
                    number: true,
                    min: 1000,
                    max: 10000000    
                }
            },
            submitHandler: function (form) {
                $.ajax({
                    url: form.action,
                    type: form.method,
                    data: $(form).serialize(),
                    success: function (response) {
                        if (response.status) {
                            $('#myModal').modal('hide');
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: response.message
                            });
                            dataUser.ajax.reload();
                        } else {
                            $('.error-text').text('');
                            $.each(response.msgField, function (prefix, val) {
                                $('#error-' + prefix).text(val[0]);
                            });
                            Swal.fire({
                                icon: 'error',
                                title: 'Terjadi Kesalahan',
                                text: response.message
                            });
                        }
                    }
                });
                return false;
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element) {
                $(element).removeClass('is-invalid');
            }
        });
    });

</script>

