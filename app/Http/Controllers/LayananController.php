<?php

namespace App\Http\Controllers;

use App\Models\Layanan;

use App\Models\User;
use Auth;

class LayananController extends Controller
{

    function index()
    {
        $data['list_layanan'] = Layanan::all();
        return view('admin.layanan.index', $data);
    }

    function create()
    {
        return view('admin.layanan.create');
    }

    function store()
    {
        $layanan = new Layanan;
        // $layanan->user_id = Auth::user()->id;
        $layanan->keterangan = request('keterangan');
        $layanan->level = request('level');
        $layanan->deskripsi = request('deskripsi');
        $layanan->tanggal_masuk = request('tanggal_masuk');
        $layanan->HandleUploadFile();
        $layanan->handleUploadFoto();
        $layanan->save();

        return redirect('layanan')->with('success', 'Data Berhasil Ditambah');
    }

    function show(Layanan $layanan)
    {
        $data['layanan'] = $layanan;
        return view('admin.Layanan.show', $data);
    }

    function edit(Layanan $layanan)
    {
        $data['layanan'] = $layanan;
        return view('admin.Layanan.edit', $data);
    }

    function update(Layanan $layanan)
    {
        // $layanan->user_id = Auth::user()->id;
        $layanan->keterangan = request('keterangan');
        $layanan->level = request('level');
        $layanan->deskripsi = request('deskripsi');
        $layanan->tanggal_masuk = request('tanggal_masuk');
        $layanan->HandleUploadFile();
        $layanan->HandleUploadFoto();
        $layanan->save();

        return redirect('layanan')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Layanan $layanan)
    {
        $layanan->delete();
        $layanan->HandleDeleteFile();
        $layanan->handleDeleteFoto();
        return redirect('layanan')->with('danger', 'Data Berhasil Dihapus');
    }
}
