<?php

namespace App\Http\Controllers;

use App\Models\Pengembalaan;
use App\Models\Penasehat;
use App\Models\PengurusInti;
use App\Models\SeksiPelayanan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BpjAdminController extends Controller
{
    public function index()
    // controler dashboard bpj
    {
        return view('dashboard.badanpengurusjemaat.index', [
            'pengembalaan' =>Pengembalaan::all(),
            'penasehat' =>Penasehat::all(),
            'pengurusinti' =>PengurusInti::all(),
            'seksipelayanan' =>SeksiPelayanan::all()
        ]);
    }

    public function pengembalaan()

    {
        return view('dashboard.badanpengurusjemaat.pengembalaan');
    }

    public function buatpengembalaan(Request $request)
    {
        $pengembalaan = new Pengembalaan();
        $pengembalaan-> nama = $request ->nama;
        $pengembalaan ->save();
        return redirect('/dashboard/badanpengurusjemaat');
    }

    // menuju halaman edit pengembalaan
    public function editpengembalaan($id)
    {
        return view('dashboard.badanpengurusjemaat.editpengembalaan', [
            "title" => "Edit Pengembalaan",
            "pengembalaan" => Pengembalaan::where('id', $id)->first()
        ]);
    }

    // memproses perubahan data saat tombol update data
    public function updatepengembalaan(Request $request,$id)
    {
        $pengembalaan = Pengembalaan::find($id);
        $pengembalaan->nama = $request->nama;
        $pengembalaan->save();
        return redirect('/dashboard/badanpengurusjemaat')->with('success', "Data Pengembalaan Berhasil Diupdate!!");
    }
    public function hapuspengembalaan($id){
        $pengembalaan = Pengembalaan::find($id);
        $pengembalaan->delete();
        return redirect('/dashboard/badanpengurusjemaat')->with('success', "Data Pengembalaan Berhasil Dihapus!!");
    }

    public function editpenasehat($id)
    {
        return view('dashboard.badanpengurusjemaat.editpenasehat', [
            "title" => "Edit Penasehat",
            "penasehat" => Penasehat::where('id', $id)->first()
        ]);
    }

    public function updatepenasehat(Request $request,$id)
    {
        $penasehat = Penasehat::find($id);
        $penasehat->nama = $request->nama;
        $penasehat->save();
        return redirect('/dashboard/badanpengurusjemaat')->with('success', "Data Penasehat Berhasil Diupdate!!");
    }
    public function hapuspenasehat($id){
        $penasehat = Penasehat::find($id);
        $penasehat->delete();
        return redirect('/dashboard/badanpengurusjemaat')->with('success', "Data Penasehat Berhasil Dihapus!!");
    }

    public function editpengurusinti($id)
    {
        return view('dashboard.badanpengurusjemaat.editpengurusinti', [
            "title" => "Edit Pengurus Inti",
            "pengurusinti" => PengurusInti::find($id)
        ]);
    }

    public function updatepengurusinti(Request $request,$id)
    {
        $pengurusinti = PengurusInti::find($id);
        $pengurusinti-> ketua = $request ->ketua;
        $pengurusinti-> wakilketuasatu = $request ->wakilketuasatu;
        $pengurusinti-> wakilketuadua = $request ->wakilketuadua;
        $pengurusinti-> sekretaris = $request ->sekretaris;
        $pengurusinti-> wakilsekretaris = $request ->wakilsekretaris;
        $pengurusinti-> bendehara = $request ->bendehara;
        $pengurusinti-> wakilbendehara = $request ->wakilbendehara;
        $pengurusinti-> staftatausaha = $request ->staftatausaha;
        $pengurusinti ->save();
        return redirect('/dashboard/badanpengurusjemaat')->with('success', "Data Pengurus Inti Berhasil Diupdate!!");
    }

    public function hapuspengurusinti($id){
        $pengurusinti = PengurusInti::find($id);
        $pengurusinti->delete();
        return redirect('/dashboard/badanpengurusjemaat')->with('success', "Data Pengurus Inti Berhasil Dihapus!!");
    }

    public function editseksipelayanan($id)
    {
        return view('dashboard.badanpengurusjemaat.editseksipelayanan', [
            "title" => "Edit Seksi Pelayanan",
            "seksipelayanan" => SeksiPelayanan::find($id)
        ]);
    }

    public function updateseksipelayanan(Request $request,$id)
    {
        $seksipelayanan = SeksiPelayanan::find($id);
        $seksipelayanan-> spa = $request ->spa;
        $seksipelayanan-> spr = $request ->spr;
        $seksipelayanan-> sppemuda = $request ->sppemuda;
        $seksipelayanan-> spperkaria = $request ->spperkaria;
        $seksipelayanan-> spperkauan = $request ->spperkauan;
        $seksipelayanan-> spmp = $request ->spmp;
        $seksipelayanan-> spdstb = $request ->spdstb;
        $seksipelayanan-> spim = $request ->spim;
        $seksipelayanan-> sps = $request ->sps;
        $seksipelayanan-> sha = $request ->sha;
        $seksipelayanan-> sp = $request ->sp;
        $seksipelayanan-> spaset = $request ->spaset;
        $seksipelayanan-> slmd = $request ->slmd;
        $seksipelayanan-> skpl = $request ->skpl;
        $seksipelayanan ->save();
        return redirect('/dashboard/badanpengurusjemaat')->with('success', "Data Seksi-Seksi Pelayanan Berhasil Diupdate!!");
    }

    public function hapusseksipelayanan($id){
        $seksipelayanan = SeksiPelayanan::find($id);
        $seksipelayanan->delete();
        return redirect('/dashboard/badanpengurusjemaat')->with('success', "Data Seksi Pelayanan Berhasil Dihapus!!");
    }




    public function penasehat()
    
    {
        return view('dashboard.badanpengurusjemaat.penasehat');
      
    }

    public function buatpenasehat(Request $request)
    {
        $penasehat = new Penasehat();
        $penasehat-> nama = $request ->nama;
        $penasehat ->save();
        return redirect('/dashboard/badanpengurusjemaat');
    }

    public function pengurusinti()
    
    {
        return view('dashboard.badanpengurusjemaat.pengurusinti');
       
    }

    public function buatpengurusinti(Request $request)
    {
        $pengurusinti = new PengurusInti();
        $pengurusinti-> ketua = $request ->ketua;
        $pengurusinti-> wakilketuasatu = $request ->wakilketuasatu;
        $pengurusinti-> wakilketuadua = $request ->wakilketuadua;
        $pengurusinti-> sekretaris = $request ->sekretaris;
        $pengurusinti-> wakilsekretaris = $request ->wakilsekretaris;
        $pengurusinti-> bendehara = $request ->bendehara;
        $pengurusinti-> wakilbendehara = $request ->wakilbendehara;
        $pengurusinti-> staftatausaha = $request ->staftatausaha;
        $pengurusinti ->save();
        return redirect('/dashboard/badanpengurusjemaat');
    }

    public function seksipelayanan()
    
    {
        return view('dashboard.badanpengurusjemaat.seksiseksi');
       
    }
    public function buatseksipelayanan(Request $request)
    {
        $seksipelayanan = new SeksiPelayanan();
        $seksipelayanan-> spa = $request ->spa;
        $seksipelayanan-> spr = $request ->spr;
        $seksipelayanan-> sppemuda = $request ->sppemuda;
        $seksipelayanan-> spperkaria = $request ->spperkaria;
        $seksipelayanan-> spperkauan = $request ->spperkauan;
        $seksipelayanan-> spmp = $request ->spmp;
        $seksipelayanan-> spdstb = $request ->spdstb;
        $seksipelayanan-> spim = $request ->spim;
        $seksipelayanan-> sps = $request ->sps;
        $seksipelayanan-> sha = $request ->sha;
        $seksipelayanan-> sp = $request ->sp;
        $seksipelayanan-> spaset = $request ->spaset;
        $seksipelayanan-> slmd = $request ->slmd;
        $seksipelayanan-> skpl = $request ->skpl;
        $seksipelayanan ->save();
        return redirect('/dashboard/badanpengurusjemaat');
    }
}
