<?php

namespace App\Http\Controllers;

use App\Models\DataKecamatan;

use App\Models\User;
use Auth;

class DataKecamatanController extends Controller
{

    function index()
    {
        $data['list_datakecamatan'] = DataKecamatan::all();
        return view('admin.datakecamatan.index', $data);
    }

    function create()
    {
        return view('admin.datakecamatan.create');
    }

    function store()
    {
        $datakecamatan = new DataKecamatan();
        // $datakecamatan->user_id = Auth::user()->id;
        // $datakecamatan->keterangan = request('keterangan');
        $datakecamatan->judul = request('judul');
        $datakecamatan->deskripsi = request('deskripsi');
        $datakecamatan->level = request('level');
        // $datakecamatan->tanggal_masuk = request('tanggal_masuk');
        $datakecamatan->HandleUploadFile();
        // $datakecamatan->handleUploadFoto();
        $datakecamatan->save();

        return redirect('datakecamatan')->with('success', 'Data Berhasil Ditambah');
    }

    function show(DataKecamatan $datakecamatan)
    {
        $data['datakecamatan'] = $datakecamatan;
        return view('admin.datakecamatan.show', $data);
    }

    function edit(DataKecamatan $datakecamatan)
    {
        $data['datakecamatan'] = $datakecamatan;
        return view('admin.datakecamatan.edit', $data);
    }

    function update(DataKecamatan $datakecamatan)
    {
        // $datakecamatan->user_id = Auth::user()->id;
        $datakecamatan->judul = request('judul');
        $datakecamatan->deskripsi = request('deskripsi');
        $datakecamatan->level = request('level');
        // $datakecamatan->deskripsi = request('deskripsi');
        // $datakecamatan->tanggal_masuk = request('tanggal_masuk');
        $datakecamatan->HandleUploadFile();
        $datakecamatan->save();

        return redirect('datakecamatan')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(DataKecamatan $datakecamatan)
    {
        $datakecamatan->delete();
        $datakecamatan->HandleDeleteFile();
        // $datakecamatan->handleDeleteFoto();
        return redirect('datakecamatan')->with('danger', 'Data Berhasil Dihapus');
    }
}
