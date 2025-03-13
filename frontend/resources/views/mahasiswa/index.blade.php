@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')
<div class="container">
    <div class="card shadow-lg p-4 rounded-lg">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h2 class="m-0"><i class="bi bi-people-fill"></i> Data Mahasiswa</h2>
            <a href="{{ route('mahasiswa.create') }}" class="btn btn-light text-primary fw-bold">
                <i class="bi bi-person-plus-fill"></i> Tambah Mahasiswa
            </a>
        </div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>NPM</th>
                            <th>Nama</th>
                            <th>Prodi</th>
                            <th>Alamat</th>
                            <th>No. Telp</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center align-middle">
                        @foreach($mahasiswa as $mhs)
                        <tr>
                            <td>{{ $mhs->npm_mhs }}</td>
                            <td>{{ $mhs->nama_mhs }}</td>
                            <td>{{ $mhs->prodi }}</td>
                            <td>{{ $mhs->alamat }}</td>
                            <td>{{ $mhs->no_telp }}</td>
                            <td>{{ $mhs->email }}</td>
                            <td>
                                <a href="{{ route('mahasiswa.edit', $mhs->npm_mhs) }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('mahasiswa.destroy', $mhs->npm_mhs) }}" method="POST" style="display:inline;">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">
                                        <i class="bi bi-trash"></i>
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
