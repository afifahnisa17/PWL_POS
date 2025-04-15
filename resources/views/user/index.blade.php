@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('user/create') }}">Tambah</a>
            </div>
        </div>
    </div>

    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Filter:</label>
                    <div class="col-3">
                        <select class="form-control" id="level_id" name="level_id" required>
                            <option value="">- Semua -</option>
                            @foreach($level as $item)
                                <option value="{{ $item->level_id }}">{{ $item->level_nama }}</option>
                            @endforeach
                        </select>
                        <small class="form-text text-muted">Level Pengguna</small>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-bordered table-striped table-hover table-sm" id="table_user">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Level Pengguna</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>

@endsection


@push('css')
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            var dataUser = $('#table_user').DataTable({
                serverSide: true, // Aktifkan server-side processing
                ajax: {
                    "url": "{{ url('user/list') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data": function(d) {
                        d.level_id = $('#level_id').val(); // Mengirimkan nilai level_id yang dipilih
                    }
                },
                columns: [
                    {
                        // Kolom untuk nomor urut
                        data: null,
                        className: "text-center",
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row, meta) {
                            return meta.row + 1;
                        }
                    },
                    {
                        data: "username",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "nama",
                        orderable: true,
                        searchable: true
                    },
                    {
                        // Menampilkan level pengguna, pastikan 'level' data ada dalam response
                        data: "level.level_nama",
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: "aksi",
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            $('#level_id').on('change', function() {
                dataUser.ajax.reload(); // Reload data setelah memilih level
            });
        });
    </script>
@endpush
