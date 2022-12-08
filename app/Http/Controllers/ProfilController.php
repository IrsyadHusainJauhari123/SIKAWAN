<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\User;
use Auth;

class ProfilController extends Controller
{

    function index()
    {
        $data['list_profil'] = Profil::all();
        return view('admin.profil.index', $data);
    }

    function create()
    {
        return view('admin.profil.create');
    }

    function store()
    {
        $profil = new Profil;
        // $profil->id_user = request()->user()->id;
        $profil->level = request('level');
        $profil->nama = request('nama');
        $profil->deskripsi = request('deskripsi');
        $profil->HandleUploadFoto();
        $profil->save();

        return redirect('profil')->with('success', 'Data Berhasil Ditambah');
    }

    function show(Profil $profil)
    {
        $data['profil'] = $profil;
        return view('admin.profil.show', $data);
    }

    function edit(Profil $profil)
    {
        $data['profil'] = $profil;
        return view('admin.profil.edit', $data);
    }

    function update(Profil $profil)
    {
        // $profil->id_user = request()->user()->id;
        $profil->nama = request('nama');
        $profil->level = request('level');
        $profil->deskripsi = request('deskripsi');
        $profil->HandleUploadFoto();
        $profil->save();

        return redirect('profil')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Profil $profil)
    {
        $profil->delete();
        $profil->HandleDeleteFoto();
        return redirect('profil')->with('danger', 'Data Berhasil Dihapus');
    }
}
