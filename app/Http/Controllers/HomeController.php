<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Kebudayaan;
use App\Models\Kegiatan;
use App\Models\Kelurahan;
use App\Models\Layanan;
use App\Models\Pariwisata;
use App\Models\Pemerintah;
use App\Models\Pendidikan;
use App\Models\Profil;

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
        $data['kelurahan'] = Kelurahan::all();
        $data['pariwisata'] = Pariwisata::all();
        $data['kebudayaan'] = Kebudayaan::all();
        $data['layanan'] = Layanan::all();
        $data['pendidikan'] = Pendidikan::all();
        $data['profil'] = Profil::all();
        $data['pemerintah'] = Pemerintah::all();

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
