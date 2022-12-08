<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Kegiatan;

class HomeController extends Controller
{
    function showcomponents()
    {
        return view('components.admin');
    }
    function showdashboard()
    {
        $data['berita'] = Berita::all();
        $data['kegiatan'] = Kegiatan::all();
        return view('admin.dashboard', $data);
    }

    function showuser()
    {
        return view('admin.user');
    }

    function showprofil()
    {
        return view('admin.profil');
    }
    function showberita()
    {
        return view('admin.berita');
    }

    function showkegiatan()
    {
        return view('admin.kegiatan');
    }

    function showkelurahan()
    {
        return view('admin.kelurahan');
    }

    function showsetting()
    {
        return view('admin.setting');
    }

    function showberanda()
    {
        return view('admin.beranda');
    }

    function showlayanan()
    {
        return view('admin.layanan');
    }

    function showdatakecamatan()
    {
        return view('admin.datakecamatan');
    }


    function showPendidikan()
    {
        return view('admin.pendidikan');
    }


    function showPariwisata()
    {
        return view('admin.pariwisata');
    }


    function showKebudayaan()
    {
        return view('admin.kebudayaan');
    }
}
