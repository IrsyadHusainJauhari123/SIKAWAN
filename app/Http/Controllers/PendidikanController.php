<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;


use App\Models\User;

use Auth;

class PendidikanController extends Controller
{
    function index()
    {
        $data['list_pendidikan'] = Pendidikan::all();
        return view('admin.pendidikan.index', $data);
    }

    function create()
    {
        return view('admin.pendidikan.create');
    }


    function CariPendidikan()
    {
        $judul = request('judul');
        $data['list_pendidikan'] = Pendidikan::where('judul', 'like', "%$judul%")->paginate(6);
        $data['judul'] = $judul;
        return view('admin.Pendidikan.index', $data);
    }

    function store()
    {
        $pendidikan = new Pendidikan();
        $pendidikan->judul = request('judul');
        $pendidikan->tanggal = request('tanggal');
        $pendidikan->nama_pembuat = request('nama_pembuat');
        // $pendidikan->level = request('level');
        $pendidikan->isi = request('isi');
        $pendidikan->handleUploadFoto();
        $pendidikan->save();

        return redirect('pendidikan')->with('success', 'Data  Berhasil Di Tambah');
    }

    function show(Pendidikan $pendidikan)
    {
        $data['pendidikan'] = $pendidikan;
        return view('pendidikan.show', $data);
    }

    function edit(Pendidikan $pendidikan)
    {
        $data['pendidikan'] = $pendidikan;
        return view('admin.pendidikan.edit', $data);
    }

    function update(Pendidikan $pendidikan)
    {
        $pendidikan->judul = request('judul');
        $pendidikan->tanggal = request('tanggal');
        $pendidikan->nama_pembuat = request('nama_pembuat');
        // $pendidikan->level = request('level');
        $pendidikan->isi = request('isi');
        $pendidikan->handleUploadFoto();
        $pendidikan->save();

        return redirect('pendidikan')->with('success', 'Data Berhasil DiEdit');
    }

    function destroy(Pendidikan $pendidikan)
    {
        $pendidikan->delete();
        $pendidikan->handleDeleteFoto();
        return redirect('pendidikan')->with('danger', 'Data Berhasil DiHapus');
    }
}
