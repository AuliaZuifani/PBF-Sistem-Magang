<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    public function index()
{
    $perusahaans = Perusahaan::all(); // Ambil semua data perusahaan
    return view('perusahaan.index', compact('perusahaans'));
}

    public function create() {
        return view('perusahaan.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama_perusahaan' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            'email_perusahaan' => 'required|email|unique:perusahaans,email_perusahaan'
        ]);

        Perusahaan::create($request->all());
        return redirect()->route('perusahaan.index')->with('success', 'Perusahaan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $perusahaan = Perusahaan::where('id_perusahaan', $id)->firstOrFail();
        return view('perusahaan.edit', compact('perusahaan'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            'email_perusahaan' => 'required|email',
        ]);

        $perusahaan = Perusahaan::where('id_perusahaan', $id)->firstOrFail();
        $perusahaan->update($request->all());

        return redirect()->route('perusahaan.index')->with('success', 'Data perusahaan berhasil diperbarui!');
    }


    public function destroy(Perusahaan $perusahaan) {
        $perusahaan->delete();
        return redirect()->route('perusahaan.index')->with('success', 'Perusahaan berhasil dihapus!');
    }
}
