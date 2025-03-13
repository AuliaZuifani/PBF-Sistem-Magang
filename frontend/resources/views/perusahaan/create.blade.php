@extends('layouts.app')

@section('title', 'Tambah Perusahaan')

@section('content')
<div class="container">
    <div class="card shadow-lg p-4 rounded-lg">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h2 class="m-0"><i class="bi bi-building"></i> Tambah Perusahaan</h2>
        </div>

        <div class="card-body">
            <form action="{{ route('perusahaan.store') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label class="form-label fw-bold"><i class="bi bi-shop"></i> Nama Perusahaan</label>
                    <input type="text" name="nama_perusahaan" class="form-control" placeholder="Masukkan nama perusahaan" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold"><i class="bi bi-telephone"></i> No Telepon</label>
                    <input type="text" name="no_telp" class="form-control" placeholder="Masukkan no telepon" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold"><i class="bi bi-geo-alt"></i> Alamat</label>
                    <textarea name="alamat" class="form-control" rows="3" placeholder="Masukkan alamat" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold"><i class="bi bi-envelope"></i> Email</label>
                    <input type="email" name="email_perusahaan" class="form-control" placeholder="Masukkan email" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('perusahaan.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
