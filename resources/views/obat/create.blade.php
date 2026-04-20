@extends('layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card main-card">
            <div class="card-body p-4">
                <h2 class="page-title mb-1">Tambah Data Obat</h2>
                <p class="text-muted mb-4">Masukkan informasi obat dengan lengkap.</p>

                @if($errors->any())
                    <div class="alert alert-danger rounded-3">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('obat.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nama Obat</label>
                        <input type="text" name="nama_obat" class="form-control" value="{{ old('nama_obat') }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Kategori</label>
                        <select name="kategori" class="form-select">
                            <option value="">-- Pilih Kategori --</option>
                            <option value="Tablet" {{ old('kategori') == 'Tablet' ? 'selected' : '' }}>Tablet</option>
                            <option value="Kapsul" {{ old('kategori') == 'Kapsul' ? 'selected' : '' }}>Kapsul</option>
                            <option value="Sirup" {{ old('kategori') == 'Sirup' ? 'selected' : '' }}>Sirup</option>
                            <option value="Salep" {{ old('kategori') == 'Salep' ? 'selected' : '' }}>Salep</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Harga</label>
                            <input type="number" name="harga" class="form-control" value="{{ old('harga') }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Stok</label>
                            <input type="number" name="stok" class="form-control" value="{{ old('stok') }}">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Tanggal Kadaluarsa</label>
                        <input type="date" name="tanggal_kadaluarsa" class="form-control" value="{{ old('tanggal_kadaluarsa') }}">
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-success btn-custom">Simpan</button>
                        <a href="{{ route('obat.index') }}" class="btn btn-secondary btn-custom">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection