<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembimbing;

class PembimbingController extends Controller
{
    public function index()
    {
        $pembimbing = Pembimbing::all();
        return view('pembimbing.index', compact('pembimbing'));
    }

    public function create()
    {
        return view('pembimbing.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nidn_pembimbing' => 'required|unique:pembimbing',
            'nama_pembimbing' => 'required',
            'email' => 'required|email|unique:pembimbing',
            'no_telp' => 'required',
        ]);

        Pembimbing::create($request->all());
        return redirect()->route('pembimbing.index')->with('success', 'Pembimbing berhasil ditambahkan!');
    }

    public function edit($nidn_pembimbing)
    {
        $pembimbing = Pembimbing::findOrFail($nidn_pembimbing);
        return view('pembimbing.edit', compact('pembimbing'));
    }

    public function update(Request $request, $nidn_pembimbing)
    {
        $request->validate([
            'nama_pembimbing' => 'required',
            'email' => 'required|email|unique:pembimbing,email,'.$nidn_pembimbing.',nidn_pembimbing',
            'no_telp' => 'required',
        ]);

        $pembimbing = Pembimbing::findOrFail($nidn_pembimbing);
        $pembimbing->update($request->all());

        return redirect()->route('pembimbing.index')->with('success', 'Pembimbing berhasil diperbarui!');
    }

    public function destroy($nidn_pembimbing)
    {
        Pembimbing::destroy($nidn_pembimbing);
        return redirect()->route('pembimbing.index')->with('success', 'Pembimbing berhasil dihapus!');
    }
}
