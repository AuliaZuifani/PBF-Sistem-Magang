<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'npm_mhs' => 'required|unique:mahasiswa',
            'nama_mhs' => 'required',
            'prodi' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required|email|unique:mahasiswa',
        ]);

        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambahkan!');
    }

    public function edit($npm_mhs)
    {
        $mahasiswa = Mahasiswa::where('npm_mhs', $npm_mhs)->firstOrFail();
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $npm_mhs)
    {
        $request->validate([
            'npm_mhs' => 'required|unique:mahasiswa,npm_mhs,' . $npm_mhs . ',npm_mhs',
            'nama_mhs' => 'required',
            'prodi' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required|email|unique:mahasiswa,email,' . $npm_mhs . ',npm_mhs',
        ]);
    
        $mahasiswa = Mahasiswa::where('npm_mhs', $npm_mhs)->firstOrFail();
        
        // Cek jika NPM diubah
        if ($request->npm_mhs !== $mahasiswa->npm_mhs) {
            // Hapus data lama dan buat baru (karena primary key tidak bisa langsung diupdate)
            Mahasiswa::where('npm_mhs', $npm_mhs)->delete();
            Mahasiswa::create($request->all());
        } else {
            $mahasiswa->update($request->all());
        }
    
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil diperbarui!');
    }
    


    public function destroy($id)
    {
        Mahasiswa::destroy($id);
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil dihapus!');
    }
}
