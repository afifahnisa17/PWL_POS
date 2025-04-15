@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            @if (!$supplier)
                <div class="alert alert-danger alert-dismissible">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5> Data yang Anda cari tidak ditemukan.
                </div>
                <a href="{{ url('supplier') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
            @else
                <form method="POST" action="{{ url('/supplier/' . $supplier->supplier_id) }}" class="form-horizontal">
                    @csrf
                    @method('PUT') <!-- Ini method yang benar untuk update -->

                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Kode Supplier</label>
                        <div class="col-11">
                            <input type="text" class="form-control" name="kode_supplier"
                                value="{{ old('kode_supplier', $supplier->kode_supplier) }}" required>
                            @error('kode_supplier')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Nama Supplier</label>
                        <div class="col-11">
                            <input type="text" class="form-control" name="nama_supplier"
                                value="{{ old('nama_supplier', $supplier->supplier_nama) }}" required>
                            @error('nama_supplier')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Alamat</label>
                        <div class="col-11">
                            <input type="text" class="form-control" name="alamat"
                                value="{{ old('alamat', $supplier->supplier_nama) }}" required>
                            @error('alamat')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Telepon</label>
                        <div class="col-11">
                            <input type="text" class="form-control" name="telepon"
                                value="{{ old('telepon', $supplier->telepon) }}" required>
                            @error('telepon')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Email</label>
                        <div class="col-11">
                            <input type="text" class="form-control" name="email"
                                value="{{ old('email', $supplier->email) }}" required>
                            @error('email')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Kontak Person</label>
                        <div class="col-11">
                            <input type="text" class="form-control" name="kontak_person"
                                value="{{ old('kontak_person', $supplier->kontak_person) }}" required>
                            @error('kontak_person')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label"></label>
                        <div class="col-11">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            <a class="btn btn-sm btn-default ml-1" href="{{ url('supplier') }}">Kembali</a>
                        </div>
                    </div>
                </form>
            @endif
        </div>
    </div>
@endsection

@push('css')
@endpush

@push('js')
@endpush
