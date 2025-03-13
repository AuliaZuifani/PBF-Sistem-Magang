@extends('layouts.app')

@section('title', 'Edit Pembimbing')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">✏️ Edit Pembimbing</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('pembimbing.update', $pembimbing->nidn_pembimbing) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama_pembimbing" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama_pembimbing" value="{{ $pembimbing->nama_pembimbing }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $pembimbing->email }}" required>
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">No. Telp</label>
                    <input type="text" class="form-control" name="no_telp" value="{{ $pembimbing->no_telp }}" required>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('pembimbing.index') }}" class="btn btn-secondary me-2">Batal</a>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
