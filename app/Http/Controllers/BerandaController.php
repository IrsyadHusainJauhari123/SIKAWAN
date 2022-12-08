<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\User;

use Auth;

class BerandaController extends Controller
{
    function index()
    {
        $data['list_beranda'] = Beranda::all();
        return view('admin.beranda.index', $data);
    }

    function create()
    {
        return view('admin.beranda.create');
    }

    function store()
    {
        $beranda = new Beranda;
        $beranda->youtub = request('youtub');
        $beranda->isi = request('isi');
        $beranda->HandleUploadFoto();
        $beranda->save();

        return redirect('beranda')->with('success', 'Data  Telah Ditambah');
    }

    function show(Beranda $beranda)
    {
        $data['beranda'] = $beranda;
        return view('beranda.show', $data);
    }

    function edit(Beranda $beranda)
    {
        $data['beranda'] = $beranda;
        return view('admin.beranda.edit', $data);
    }

    function update(Beranda $beranda)
    {
        $beranda->youtub = request('youtub');
        $beranda->isi = request('isi');
        $beranda->HandleUploadFoto();
        $beranda->save();

        return redirect('beranda')->with('success', 'Data Berhasil DiUpdate');
    }

    function destroy(Beranda $beranda)
    {
        $beranda->delete();
        $beranda->handleDeleteFoto();
        return redirect('beranda')->with('danger', 'Data Berhasil DiHapus');
    }
}
