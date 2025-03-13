@extends('layouts.app')

@section('title', 'Edit Perusahaan')

@section('content')
<div class="container">
    <div class="card shadow-lg p-4 rounded-lg">
        <div class="card-header bg-warning text-dark d-flex justify-content-between align-items-center">
            <h2 class="m-0"><i class="bi bi-pencil-square"></i> Edit Perusahaan</h2>
        </div>

        <div class="card-body">
            <form action="{{ route('perusahaan.update', $perusahaan->id_perusahaan) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label class="form-label fw-bold"><i class="bi bi-shop"></i> Nama Perusahaan</label>
                    <input type="text" name="nama_perusahaan" class="form-control" value="{{ $perusahaan->nama_perusahaan }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold"><i class="bi bi-telephone"></i> No. Telepon</label>
                    <input type="text" name="no_telp" class="form-control" value="{{ $perusahaan->no_telp }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold"><i class="bi bi-geo-alt"></i> Alamat</label>
                    <textarea name="alamat" class="form-control" rows="3" required>{{ $perusahaan->alamat }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold"><i class="bi bi-envelope"></i> Email Perusahaan</label>
                    <input type="email" name="email_perusahaan" class="form-control" value="{{ $perusahaan->email_perusahaan }}" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('perusahaan.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-warning">
                        <i class="bi bi-save"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
