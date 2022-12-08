<?php

namespace App\Http\Controllers;

use App\Models\Pariwisata;


use App\Models\User;

use Auth;

class PariwisataController extends Controller
{
    function index()
    {
        $data['list_pariwisata'] = Pariwisata::all();
        return view('admin.pariwisata.index', $data);
    }

    function create()
    {
        return view('admin.pariwisata.create');
    }

    function store()
    {
        $pariwisata = new Pariwisata();
        $pariwisata->judul = request('judul');
        $pariwisata->tanggal = request('tanggal');
        $pariwisata->nama_pembuat = request('nama_pembuat');
        // $pariwisata->level = request('level');
        $pariwisata->isi = request('isi');
        $pariwisata->handleUploadFoto();
        $pariwisata->save();

        return redirect('pariwisata')->with('success', 'Data  Berhasil Di Tambah');
    }

    function show(Pariwisata $pariwisata)
    {
        $data['pariwisata'] = $pariwisata;
        return view('pariwisata.show', $data);
    }

    function edit(Pariwisata $pariwisata)
    {
        $data['pariwisata'] = $pariwisata;
        return view('admin.pariwisata.edit', $data);
    }


    function CariPariwisata()
    {
        $judul = request('judul');
        $data['list_pariwisata'] = Pariwisata::where('judul', 'like', "%$judul%")->paginate(6);
        $data['judul'] = $judul;
        return view('admin.Pariwisata.index', $data);
    }

    function update(Pariwisata $pariwisata)
    {
        $pariwisata->judul = request('judul');
        $pariwisata->tanggal = request('tanggal');
        $pariwisata->nama_pembuat = request('nama_pembuat');
        // $pariwisata->level = request('level');
        $pariwisata->isi = request('isi');
        $pariwisata->handleUploadFoto();
        $pariwisata->save();

        return redirect('pariwisata')->with('success', 'Data Berhasil DiEdit');
    }

    function destroy(Pariwisata $pariwisata)
    {
        $pariwisata->delete();
        $pariwisata->handleDeleteFoto();
        return redirect('pariwisata')->with('danger', 'Data Berhasil DiHapus');
    }
}
