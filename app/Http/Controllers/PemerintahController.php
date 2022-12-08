<?php

namespace App\Http\Controllers;

use App\Models\Pemerintah;
use App\Models\User;
use Auth;

class PemerintahController extends Controller
{

    function index()
    {
        $data['list_pemerintah'] = Pemerintah::all();
        return view('admin.pemerintah.index', $data);
    }

    function create()
    {
        return view('admin.pemerintah.create');
    }

    function store()
    {
        $pemerintah = new Pemerintah;
        // $pemerintah->id_user = request()->user()->id;
        $pemerintah->nama = request('nama');
        $pemerintah->level = request('level');
        $pemerintah->tempat_lahir = request('tempat_lahir');
        $pemerintah->pendidikan_terakhir = request('pendidikan_terakhir');
        $pemerintah->alamat = request('alamat');
        $pemerintah->tanggal_lahir = request('tanggal_lahir');
        $pemerintah->jabatan = request('jabatan');
        $pemerintah->periode = request('periode');
        $pemerintah->deskripsi = request('deskripsi');
        $pemerintah->HandleUploadFoto();
        $pemerintah->save();

        return redirect('pemerintah')->with('success', 'Data Berhasil Ditambah');
    }

    function show(Pemerintah $pemerintah)
    {
        $data['pemerintah'] = $pemerintah;
        return view('admin.pemerintah.show', $data);
    }

    function edit(Pemerintah $pemerintah)
    {
        $data['pemerintah'] = $pemerintah;
        return view('admin.pemerintah.edit', $data);
    }

    function update(Pemerintah $pemerintah)
    {
        // $pemerintah->id_user = request()->user()->id;
        $pemerintah->nama = request('nama');
        $pemerintah->level = request('level');
        $pemerintah->pendidikan_terakhir = request('pendidikan_terakhir');
        $pemerintah->alamat = request('alamat');
        $pemerintah->tanggal_lahir = request('tanggal_lahir');
        $pemerintah->tempat_lahir = request('tempat_lahir');
        $pemerintah->jabatan = request('jabatan');
        $pemerintah->periode = request('periode');
        $pemerintah->deskripsi = request('deskripsi');
        $pemerintah->HandleUploadFoto();
        $pemerintah->save();

        return redirect('pemerintah')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Pemerintah $pemerintah)
    {
        $pemerintah->delete();
        $pemerintah->HandleDeleteFoto();
        return redirect('pemerintah')->with('danger', 'Data Berhasil Dihapus');
    }
}
