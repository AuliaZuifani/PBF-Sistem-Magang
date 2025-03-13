@extends('layouts.app')

@section('title', 'Data Pembimbing')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">📋 Data Pembimbing</h4>
            <a href="{{ route('pembimbing.create') }}" class="btn btn-light">
                <i class="fas fa-plus"></i> Tambah Pembimbing
            </a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>NIDN</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No. Telp</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pembimbing as $pb)
                        <tr>
                            <td>{{ $pb->nidn_pembimbing }}</td>
                            <td>{{ $pb->nama_pembimbing }}</td>
                            <td>{{ $pb->email }}</td>
                            <td>{{ $pb->no_telp }}</td>
                            <td class="text-center">
                                <a href="{{ route('pembimbing.edit', $pb->nidn_pembimbing) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('pembimbing.destroy', $pb->nidn_pembimbing) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">
                                        <i class="fas fa-trash"></i> Hapus
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
