<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\Berita;
use App\Models\DataKecamatan;
use App\Models\Kebudayaan;
use App\Models\Pariwisata;
use App\Models\Kegiatan;
use App\Models\Pemerintah;
use App\Models\Kelurahan;
use App\Models\Layanan;
use App\Models\Pendidikan;
use Illuminate\Http\Request;
use App\Models\Profil;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    function VisiMisi()
    {
        $data['visi'] = Profil::where('level', 'Visi')->get();
        $data['misi'] = Profil::where('level', 'Misi')->get();
        return view('user.profile.visi-misi', $data);
    }


    function Struktur()
    {
        $data['galeri'] = Profil::where('level', 'Galeri')->get();
        return view('user.profile.struktur', $data);
    }

    function Kk()
    {
        $data['kk'] = Layanan::where('level', 'Kk')->get();
        return view('user.layanan.kk', $data);
    }

    function Ktp()
    {
        $data['ktp'] = Layanan::where('level', 'Ktp')->get();
        return view('user.layanan.ktp', $data);
    }

    function Nikah()
    {
        $data['nikah'] = Layanan::where('level', 'Nikah')->get();
        return view('user.layanan.nikah', $data);
    }

    function Informasi()
    {
        $data['informasi'] = Layanan::where('level', 'Informasi')->get();
        return view('user.layanan.informasi', $data);
    }

    function Waris()
    {
        $data['waris'] = Layanan::where('level', 'Waris')->get();
        return view('user.layanan.waris', $data);
    }

    function Pensiun()
    {
        $data['pensiun'] = Layanan::where('level', 'Pensiun')->get();
        return view('user.layanan.pensiun', $data);
    }

    function Mikro()
    {
        $data['mikro'] = Layanan::where('level', 'Mikro')->get();
        return view('user.layanan.mikro', $data);
    }

    function Penelitian()
    {
        $data['penelitian'] = Layanan::where('level', 'Penelitian')->get();
        return view('user.layanan.penelitian', $data);
    }

    function Tupoksi()
    {
        $data['tupoksi'] = Profil::where('level', 'Tupoksi')->get();
        return view('user.profile.tupoksi', $data);
    }
    function Sejarah()
    {
        $data['sejarah'] = Profil::where('level', 'Sejarah')->get();
        return view('user.profile.sejarah', $data);
    }

    function Bupati()
    {
        $data['bupati'] = Pemerintah::where('level', 'Bupati')->get();
        return view('user.pemerintah.bupati', $data);
    }

    function WakilBupati()
    {
        $data['wakilbupati'] = Pemerintah::where('level', 'WakilBupati')->get();
        return view('user.pemerintah.wakilbupati', $data);
    }

    function Camat()
    {
        $data['camat'] = Pemerintah::where('level', 'Camat')->get();
        return view('user.pemerintah.camat', $data);
    }

    function WakilCamat()
    {
        $data['wakilcamat'] = Pemerintah::where('level', 'WakilCamat')->get();
        return view('user.pemerintah.wakilcamat', $data);
    }


    function Berita()
    {
        $data['list_berita'] = Berita::all();
        return view('user.berita.berita', $data);
    }


    function CariBerita()
    {
        $judul = request('judul');
        $data['list_berita'] = Berita::where('judul', 'like', "%$judul%")->paginate(6);
        $data['judul'] = $judul;
        return view('user.berita.berita', $data);
    }


    function Kegiatan()
    {
        $data['list_kegiatan'] = Kegiatan::all();
        return view('user.berita.kegiatan', $data);
    }

    function CariKegiatan()
    {
        $judul = request('judul');
        $data['list_kegiatan'] = kegiatan::where('judul', 'like', "%$judul%")->paginate(6);
        $data['judul'] = $judul;
        return view('user.berita.kegiatan', $data);
    }

    function Kelurahan()
    {
        $data['list_kelurahan'] = Kelurahan::all();
        return view('user.kelurahan.Kelurahan', $data);
    }

    function DetailBerita(Berita $berita)
    {
        $data['berita'] = $berita;
        return view('user.berita.detailberita', $data);
    }

    function DetailKegiatan(Kegiatan $kegiatan)
    {
        $data['kegiatan'] = $kegiatan;
        return view('user.berita.detailkegiatan', $data);
    }

    function Beranda()
    {
        $data['list_beranda'] = Beranda::all();
        $data['list_berita'] = Berita::latest()->paginate(3);
        return view('user.beranda.beranda', $data);
    }



    function Pariwisata()
    {
        $data['list_pariwisata'] = Pariwisata::all();
        return view('user.inovasi.pariwisata', $data);
    }

    function CariPariwisata()
    {
        $judul = request('judul');
        $data['list_pariwisata'] = Pariwisata::where('judul', 'like', "%$judul%")->paginate(6);
        $data['judul'] = $judul;
        return view('user.inovasi.pariwisata', $data);
    }



    function DetailPariwisata(Pariwisata $pariwisata)
    {
        $data['pariwisata'] = $pariwisata;
        return view('user.inovasi.detailpariwisata', $data);
    }

    function Kebudayaan()
    {
        $data['list_kebudayaan'] = Kebudayaan::all();
        return view('user.inovasi.kebudayaan', $data);
    }

    function CariKebudayaan()
    {
        $judul = request('judul');
        $data['list_kebudayaan'] = Kebudayaan::where('judul', 'like', "%$judul%")->paginate(6);
        $data['judul'] = $judul;
        return view('user.inovasi.kebudayaan', $data);
    }

    function Pendidikan()
    {
        $data['list_pendidikan'] = Pendidikan::all();
        return view('user.inovasi.pendidikan', $data);
    }

    function CariPendidikan()
    {
        $judul = request('judul');
        $data['list_pendidikan'] = Pendidikan::where('judul', 'like', "%$judul%")->paginate(6);
        $data['judul'] = $judul;
        return view('user.inovasi.pendidikan', $data);
    }


    // function Inovasi()
    // {
    //     $data['list_kegiatan'] = Kegiatan::all();
    //     return view('user.berita.kegiatan', $data);
    // }
    // function Kebudayaan()
    // {
    //     $data['kebudayaan'] = Inovasi::where('level', 'Kebudayaan')->get();
    //     return view('user.inovasi.kebudayaan', $data);
    // }


    // function Pariwisata()
    // {
    //     $data['pariwisata'] = Inovasi::where('level', 'Pariwisata')->get();
    //     return view('user.inovasi.pariwisata', $data);
    // }

    // // function DetailPariwisata(Pariwisata $pariwisata)
    // // {
    // //     $data['pariwisata'] = $pariwisata;
    // //     return view('user.inovasi.detailpariwisata', $data);
    // // }


    // function Pendidikan()
    // {
    //     $data['pendidikan'] = Inovasi::where('level', 'Pendidikan')->get();
    //     return view('user.inovasi.pendidikan', $data);
    // }

    function Rkt()
    {
        $data['rkt'] = DataKecamatan::where('level', 'Rkt')->get();
        return view('user.laporan.rkt', $data);
    }


    function Lkjip()
    {
        $data['lkjip'] = DataKecamatan::where('level', 'Lkjip')->get();
        return view('user.laporan.lkjip', $data);
    }


    function Pj()
    {
        $data['pj'] = DataKecamatan::where('level', 'Pj')->get();
        return view('user.laporan.pj', $data);
    }


    function Renstra()
    {
        $data['renstra'] = DataKecamatan::where('level', 'Renstra')->get();
        return view('user.laporan.renstra', $data);
    }
}
