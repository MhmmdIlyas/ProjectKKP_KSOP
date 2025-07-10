<?php

namespace App\Http\Controllers;

use App\Models\InformasiPelayanan;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index()
    {
        $items = InformasiPelayanan::all();
        return view('components.pelayanan', compact('items'));
    }

    public function edit($id)
    {
        $item = InformasiPelayanan::findOrFail($id);
        return view('admin.edit-informasi', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi_singkat' => 'required|string|max:255',
            'konten' => 'required',
        ]);

        $item = InformasiPelayanan::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('pelayanan.index')->with('success', 'Informasi berhasil diperbarui');
    }
}
