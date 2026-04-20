@extends('layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="page-title mb-1">Daftar Data Obat</h2>
        <p class="text-muted mb-0">Kelola data obat apotek dengan mudah dan rapi.</p>
    </div>
    <a href="{{ route('obat.create') }}" class="btn btn-success btn-custom">+ Tambah Obat</a>
</div>

<div class="row mb-4">
    <div class="col-md-4 mb-3">
        <div class="card stats-card bg-white">
            <div class="card-body">
                <h6 class="text-muted">Total Obat</h6>
                <h3 class="fw-bold text-success">{{ $obats->count() }}</h3>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card stats-card bg-white">
            <div class="card-body">
                <h6 class="text-muted">Jumlah Kategori</h6>
                <h3 class="fw-bold text-primary">{{ $obats->pluck('kategori')->unique()->count() }}</h3>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card stats-card bg-white">
            <div class="card-body">
                <h6 class="text-muted">Stok Rendah</h6>
                <h3 class="fw-bold text-danger">{{ $obats->where('stok', '<=', 10)->count() }}</h3>
            </div>
        </div>
    </div>
</div>

<div class="card main-card">
    <div class="card-body">

        @if(session('success'))
            <div class="alert alert-success rounded-3">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive table-wrapper">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-success">
                    <tr>
                        <th>No</th>
                        <th>Nama Obat</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Tanggal Kadaluarsa</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($obats as $index => $obat)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td class="fw-semibold">{{ $obat->nama_obat }}</td>
                            <td>
                                <span class="badge bg-info text-dark">{{ $obat->kategori }}</span>
                            </td>
                            <td>Rp {{ number_format($obat->harga, 0, ',', '.') }}</td>
                            <td>
                                @if($obat->stok <= 10)
                                    <span class="badge bg-danger">{{ $obat->stok }}</span>
                                @else
                                    <span class="badge bg-success">{{ $obat->stok }}</span>
                                @endif
                            </td>
                            <td>{{ $obat->tanggal_kadaluarsa }}</td>
                            <td class="text-center">
                                <a href="{{ route('obat.edit', $obat->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('obat.destroy', $obat->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted py-4">Belum ada data obat.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection