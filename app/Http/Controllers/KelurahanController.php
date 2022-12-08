<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use App\Mode\User;
use Auth;

class KelurahanController extends Controller
{
    function index()
    {
        $data['list_kelurahan'] = Kelurahan::all();
        return view('admin.kelurahan.index', $data);
    }

    function create()
    {
        return view('admin.kelurahan.create');
    }

    function store()
    {
        $kelurahan = new Kelurahan;
        $kelurahan->judul = request('judul');
        $kelurahan->nama_kelurahan = request('nama_kelurahan');
        $kelurahan->nama_desa = request('nama_desa');
        $kelurahan->jumlah_rt = request('jumlah_rt');
        $kelurahan->jumlah_rw = request('jumlah_rw');
        $kelurahan->jumlah_dusun = request('jumlah_dusun');
        $kelurahan->kepala_desa = request('kepala_desa');
        $kelurahan->alamat = request('alamat');
        $kelurahan->isi = request('isi');
        $kelurahan->save();
        return redirect('kelurahan')->with('succes', 'Data Berhasil DiTambah');
    }

    function show(Kelurahan $kelurahan)
    {
        $data['kelurahan'] = $kelurahan;
        return view('admin.kelurahan.show', $data);
    }

    function edit(Kelurahan $kelurahan)
    {
        $data['kelurahan'] = $kelurahan;
        return view('admin.kelurahan.edit', $data);
    }

    function update(Kelurahan $kelurahan)
    {
        $kelurahan->judul = request('judul');
        $kelurahan->nama_kelurahan = request('nama_kelurahan');
        $kelurahan->jumlah_rt = request('jumlah_rt');
        $kelurahan->jumlah_rw = request('jumlah_rw');
        $kelurahan->jumlah_dusun = request('jumlah_dusun');
        $kelurahan->nama_desa = request('nama_desa');
        $kelurahan->kepala_desa = request('kepala_desa');
        $kelurahan->alamat = request('alamat');
        $kelurahan->isi = request('isi');
        $kelurahan->save();

        return redirect('kelurahan')->with('success', 'Data berhasil diedit');
    }

    function destroy(Kelurahan $kelurahan)
    {
        $kelurahan->delete();
        return redirect('kelurahan')->with('danger', 'Data berhasil dihapus');
    }
}
