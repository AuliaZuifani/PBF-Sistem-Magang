@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')
<div class="container">
    <div class="card shadow-lg p-4 rounded-lg">
        <div class="card-header bg-warning text-white d-flex justify-content-between align-items-center">
            <h2 class="m-0"><i class="bi bi-pencil-square"></i> Edit Mahasiswa</h2>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-light text-dark fw-bold">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </div>

        <div class="card-body">
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form action="{{ route('mahasiswa.update', $mahasiswa->npm_mhs) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-bold">NPM</label>
                    <input type="text" name="npm_mhs" class="form-control @error('npm_mhs') is-invalid @enderror" value="{{ old('npm_mhs', $mahasiswa->npm_mhs) }}" readonly>
                    @error('npm_mhs') 
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Nama Mahasiswa</label>
                    <input type="text" name="nama_mhs" class="form-control @error('nama_mhs') is-invalid @enderror" value="{{ old('nama_mhs', $mahasiswa->nama_mhs) }}">
                    @error('nama_mhs') 
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Program Studi</label>
                    <input type="text" name="prodi" class="form-control @error('prodi') is-invalid @enderror" value="{{ old('prodi', $mahasiswa->prodi) }}">
                    @error('prodi') 
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Alamat</label>
                    <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat', $mahasiswa->alamat) }}</textarea>
                    @error('alamat') 
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">No. Telepon</label>
                    <input type="text" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror" value="{{ old('no_telp', $mahasiswa->no_telp) }}">
                    @error('no_telp') 
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $mahasiswa->email) }}">
                    @error('email') 
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-warning text-white"><i class="bi bi-save"></i> Simpan Perubahan</button>
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary"><i class="bi bi-x-circle"></i> Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
