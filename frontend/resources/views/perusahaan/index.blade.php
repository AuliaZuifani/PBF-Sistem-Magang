@extends('layouts.app')

@section('title', 'Data Perusahaan')

@section('content')
<div class="container">
    <div class="card shadow-lg p-4 rounded-lg">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h2 class="m-0"><i class="bi bi-buildings"></i> Data Perusahaan</h2>
            <a href="{{ route('perusahaan.create') }}" class="btn btn-light">
                <i class="bi bi-plus-lg"></i> Tambah Perusahaan
            </a>
        </div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-dark text-white">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No Telp</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perusahaans as $perusahaan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $perusahaan->nama_perusahaan }}</td>
                            <td>{{ $perusahaan->no_telp }}</td>
                            <td>{{ $perusahaan->alamat }}</td>
                            <td>{{ $perusahaan->email_perusahaan }}</td>
                            <td>
                                <a href="{{ route('perusahaan.edit', $perusahaan->id_perusahaan) }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <form action="{{ route('perusahaan.destroy', $perusahaan->id_perusahaan) }}" method="POST" style="display:inline;">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection