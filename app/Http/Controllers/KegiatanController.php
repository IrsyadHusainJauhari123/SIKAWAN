<?php

namespace App\Http\Controllers;

use App\Models\kegiatan;
use App\Models\User;
use Auth;

class KegiatanController extends Controller
{

    function index()
    {
        $data['list_kegiatan'] = kegiatan::all();
        return view('admin.kegiatan.index', $data);
    }

    function create()
    {
        return view('admin.kegiatan.create');
    }

    function store()
    {
        $kegiatan = new Kegiatan;
        // $kegiatan->user_id = Auth::user()->id;
        $kegiatan->judul = request('judul');
        $kegiatan->nama_pembuat = request('nama_pembuat');
        $kegiatan->tanggal = request('tanggal');
        $kegiatan->tahun = request('tahun');
        $kegiatan->deskripsi = request('deskripsi');
        $kegiatan->HandleUploadFoto();
        $kegiatan->save();

        return redirect('kegiatan')->with('success', 'Data Berhasil Ditambah');
    }

    function show(Kegiatan $kegiatan)
    {
        $data['kegiatan'] = $kegiatan;
        return view('kegiatan.show', $data);
    }

    function CariKegiatan()
    {
        $judul = request('judul');
        $data['list_kegiatan'] = kegiatan::where('judul', 'like', "%$judul%")->paginate(6);
        $data['judul'] = $judul;
        return view('admin.Kegiatan.index', $data);
    }


    function edit(kegiatan $kegiatan)
    {
        $data['kegiatan'] = $kegiatan;
        return view('admin.kegiatan.edit', $data);
    }

    function update(kegiatan $kegiatan)
    {
        $kegiatan->judul = request('judul');
        // $kegiatan->user_id = Auth::user()->id;
        $kegiatan->tahun = request('tahun');
        $kegiatan->nama_pembuat = request('nama_pembuat');
        $kegiatan->tanggal = request('tanggal');
        $kegiatan->deskripsi = request('deskripsi');
        $kegiatan->HandleUploadFoto();
        $kegiatan->save();

        return redirect('kegiatan')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(kegiatan $kegiatan)
    {
        $kegiatan->delete();
        $kegiatan->HandleDeleteFoto();
        return redirect('kegiatan')->with('danger', 'Data Berhasil Dihapus');
    }
}
