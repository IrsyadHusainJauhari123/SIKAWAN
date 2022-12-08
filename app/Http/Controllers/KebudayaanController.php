<?php

namespace App\Http\Controllers;

use App\Models\Kebudayaan;


use App\Models\User;

use Auth;

class KebudayaanController extends Controller
{
    function index()
    {
        $data['list_kebudayaan'] = Kebudayaan::all();
        return view('admin.kebudayaan.index', $data);
    }

    function create()
    {
        return view('admin.kebudayaan.create');
    }

    function store()
    {
        $kebudayaan = new Kebudayaan();
        $kebudayaan->judul = request('judul');
        $kebudayaan->tanggal = request('tanggal');
        $kebudayaan->nama_pembuat = request('nama_pembuat');
        // $kebudayaan->level = request('level');
        $kebudayaan->isi = request('isi');
        $kebudayaan->handleUploadFoto();
        $kebudayaan->save();

        return redirect('kebudayaan')->with('success', 'Data  Berhasil Di Tambah');
    }

    function edit(Kebudayaan $kebudayaan)
    {
        $data['kebudayaan'] = $kebudayaan;
        return view('admin.kebudayaan.edit', $data);
    }


    function CariKebudayaan()
    {
        $judul = request('judul');
        $data['list_kebudayaan'] = Kebudayaan::where('judul', 'like', "%$judul%")->paginate(6);
        $data['judul'] = $judul;
        return view('admin.Kebudayaan.index', $data);
    }

    function show(Kebudayaan $kebudayaan)
    {
        $data['kebudayaan'] = $kebudayaan;
        return view('kebudayaan.show', $data);
    }

    function update(Kebudayaan $kebudayaan)
    {
        $kebudayaan->judul = request('judul');
        $kebudayaan->tanggal = request('tanggal');
        $kebudayaan->nama_pembuat = request('nama_pembuat');
        // $kebudayaan->level = request('level');
        $kebudayaan->isi = request('isi');
        $kebudayaan->handleUploadFoto();
        $kebudayaan->save();

        return redirect('kebudayaan')->with('success', 'Data Berhasil DiEdit');
    }

    function destroy(Kebudayaan $kebudayaan)
    {
        $kebudayaan->delete();
        $kebudayaan->handleDeleteFoto();
        return redirect('kebudayaan')->with('danger', 'Data Berhasil DiHapus');
    }
}
