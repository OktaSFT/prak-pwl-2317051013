<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    // Menampilkan semua data
    public function index()
    {
        $mks = MataKuliah::all();
        return view('list_mk', compact('mks'));
    }

    // Menampilkan form create
    public function create()
    {
        return view('create_mk');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required',
            'nama_mk' => 'required',
            'sks' => 'required|numeric',
        ]);

        MataKuliah::create([
            'kode_mk' => $request->kode_mk,
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
        ]);

        return redirect('/matakuliah')->with('success', 'Data berhasil ditambahkan!');
    }
}
