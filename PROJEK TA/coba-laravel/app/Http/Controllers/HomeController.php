<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\Kontak;
use App\Models\Kolekte;
use App\Models\Penasehat;
use App\Models\DataJemaat;
use App\Models\IbadahMinggu;
use App\Models\IbadahPemuda;
use App\Models\IbadahRemaja;
use App\Models\Pengembalaan;
use App\Models\PengurusInti;
use App\Models\Persepuluhan;
use App\Models\SaldoBulanan;
use Illuminate\Http\Request;
use App\Models\IbadahSekolah;
use App\Models\PelayananAnak;
use App\Models\IbadahKeluarga;
use App\Models\IbadahPerkaria;
use App\Models\IbadahPerkauan;
use App\Models\SeksiPelayanan;
use App\Models\PelayananPemuda;
use App\Models\PelayananRemaja;
use App\Models\PelayananPerkaria;
use App\Models\PelayananPerkauan;
use Illuminate\Routing\Controller;
use App\Models\IbadahPerseDoaPemuda;

class HomeController extends Controller
{
    public function sejarah ()
    {
        return view('sejarah',[
            'title' => 'sejarah',
            'active' => 'sejarah'
        ]);
    }

    public function visimisi ()
    {
        return view('visimisi',[
            'title' => 'visimisi',
            'active' => 'visimisi'
        ]);
    }

    public function bpj ()
    {
        return view('bpj',[
            'title' => 'bpj',
            'active' => 'bpj',
            'pengembalaan' => Pengembalaan::all(),
            'penasehat' => Penasehat::all(),
            'pengurusinti' => PengurusInti::all()->first(),
            'seksipelayanan' => SeksiPelayanan::all()->first()

        ]);
    }

    public function bidangpelayanan ()
    {
        return view('bidangpelayanan',[
            'title' => 'bidangpelayanan',
            'active' => 'bidangpelayanan',
            'pelayanananak' =>PelayananAnak::all()->first(),
            'pelayananremaja' =>PelayananRemaja::all()->first(),
            'pelayananpemuda' =>PelayananPemuda::all()->first(),
            'pelayananperkaria' =>PelayananPerkaria::all()->first(),
            'pelayananperkauan' =>PelayananPerkauan::all()->first(),

        ]);
    }

    public function wartajemaat ()
    {
        return view('wartajemaat',[
            'title' => 'wartajemaat',
            'active' => 'wartajemaat'
        ]);
    }

    public function jadwalkebaktian ()
    {
        return view('jadwalkebaktian',[
            'title' => 'jadwalkebaktian',
            'active' => 'jadwalkebaktian',
            'iremaja' => IbadahRemaja::all(),
            'iperkaria' => IbadahPerkaria::all(),
            'ikeluarga' => IbadahKeluarga::all(),
            'ipersedoapemuda' => IbadahPerseDoaPemuda::all(),
            'iperkauan' => IbadahPerkauan::all(),
            'ipemuda' => IbadahPemuda::all(),
            'iminggu' => IbadahMinggu::all(),
            'isekolah' => IbadahSekolah::all()
        ]);
    }

    public function laporankeuangan ()
    {
        return view('laporankeuangan',[
            'title' => 'laporankeuangan',
            'active' => 'laporankeuangan',
            'saldo' => SaldoBulanan::all()->first(),
            'kolekte' => Kolekte::all()->first(),
            'persepuluhan' => Persepuluhan::all()->first()
        ]);
    }

    public function halamanpendataan ()
    {
        return view('halamanpendataan',[
            'title' => 'halamanpendataan',
            'active' => 'halamanpendataan',
            'data_jemaat' => DataJemaat::paginate(10) 
        ]);
    }

    public function galery ()
    {
        return view('galery',[
            'title' => 'galery',
            'active' => 'galery',
            'galery' => Galery::all()
        ]);
    }

    public function kontak ()
    {
        $kontak = kontak::all()->first();
        return view('kontak',[
            'title' => 'kontak',
            'active' => 'kontak',
            'kontak' => $kontak
            
        ]);
    }


}
