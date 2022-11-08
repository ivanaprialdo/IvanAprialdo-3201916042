<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PelayananAnak;
use App\Models\PelayananRemaja;
use App\Models\PelayananPemuda;
use App\Models\PelayananPerkaria;
use App\Models\PelayananPerkauan;

class BidangPelayananController extends Controller
{
    public function index()
    {
        return view('dashboard.bidangpelayanan.index', [
            'pelayanananak' =>PelayananAnak::all(),
            'pelayananremaja' =>PelayananRemaja::all(),
            'pelayananpemuda' =>PelayananPemuda::all(),
            'pelayananperkaria' =>PelayananPerkaria::all(),
            'pelayananperkauan' =>PelayananPerkauan::all()
        ]);
    }
    public function pelayanananak()

    {
        return view('dashboard.bidangpelayanan.pelayanananak',);
    }

    public function buatpelayanananak(Request $request)
    {
        $pelayanananak = new PelayananAnak();
        $pelayanananak-> ketua = $request ->ketua;
        $pelayanananak-> sekretaris = $request ->sekretaris;
        $pelayanananak-> bendehara = $request ->bendehara;
        $pelayanananak ->save();
        return redirect('/dashboard/bidangpelayanan');
    }


  public function editpelayanananak($id)
  {
      return view('dashboard.bidangpelayanan.editpelayanananak', [
          "title" => "Edit Pelayanan Anak",
          "pelayanananak" => PelayananAnak::where('id', $id)->first()
      ]);
  }

  // memproses perubahan data saat tombol update data
  public function updatepelayanananak(Request $request,$id)
  {
      $pelayanananak = PelayananAnak::find($id);
      $pelayanananak-> ketua = $request ->ketua;
      $pelayanananak-> sekretaris = $request ->sekretaris;
      $pelayanananak-> bendehara = $request ->bendehara;
      $pelayanananak ->save();
      return redirect('/dashboard/bidangpelayanan')->with('success', "Data Pelayanan Anak Berhasil Diupdate!!");
  }
  public function hapuspelayanananak($id){
      $pelayanananak = PelayananAnak::find($id);
      $pelayanananak->delete();
      return redirect('/dashboard/bidangpelayanan')->with('success', "Data Pelayanan Anak Berhasil Dihapus!!");
  }

  public function editpelayananremaja($id)
  {
      return view('dashboard.bidangpelayanan.editpelayananremaja', [
          "title" => "Edit Pelayanan Remaja",
          "pelayananremaja" => PelayananRemaja::where('id', $id)->first()
      ]);
  }
  // memproses perubahan data saat tombol update data
  public function updatepelayananremaja(Request $request,$id)
  {
      $pelayananremaja = PelayananRemaja::find($id);
      $pelayananremaja-> ketua = $request ->ketua;
      $pelayananremaja-> sekretaris = $request ->sekretaris;
      $pelayananremaja-> bendehara = $request ->bendehara;
      $pelayananremaja ->save();
      return redirect('/dashboard/bidangpelayanan')->with('success', "Data Pelayanan Remaja Berhasil Diupdate!!");
  }
  public function hapuspelayananremaja($id){
      $pelayananremaja = PelayananRemaja::find($id);
      $pelayananremaja->delete();
      return redirect('/dashboard/bidangpelayanan')->with('success', "Data Pelayanan Remaja Berhasil Dihapus!!");
  }

  public function editpelayananpemuda($id)
  {
      return view('dashboard.bidangpelayanan.editpelayananpemuda', [
          "title" => "Edit Pelayanan Pemuda",
          "pelayananpemuda" => PelayananPemuda::where('id', $id)->first()
      ]);
  }
  // memproses perubahan data saat tombol update data
  public function updatepelayananpemuda(Request $request,$id)
  {
      $pelayananpemuda = PelayananPemuda::find($id);
      $pelayananpemuda-> ketua = $request ->ketua;
      $pelayananpemuda-> sekretaris = $request ->sekretaris;
      $pelayananpemuda-> bendehara = $request ->bendehara;
      $pelayananpemuda ->save();
      return redirect('/dashboard/bidangpelayanan')->with('success', "Data Pelayanan Pemuda Berhasil Diupdate!!");
  }
  public function hapuspelayananpemuda($id){
      $pelayananpemuda = PelayananPemuda::find($id);
      $pelayananpemuda->delete();
      return redirect('/dashboard/bidangpelayanan')->with('success', "Data Pelayanan Pemuda Berhasil Dihapus!!");
  }

  public function editpelayananperkaria($id)
  {
      return view('dashboard.bidangpelayanan.editpelayananperkaria', [
          "title" => "Edit Pelayanan Perkaria",
          "pelayananperkaria" => PelayananPerkaria::where('id', $id)->first()
      ]);
  }
  // memproses perubahan data saat tombol update data
  public function updatepelayananperkaria(Request $request,$id)
  {
      $pelayananperkaria = PelayananPerkaria::find($id);
      $pelayananperkaria-> ketua = $request ->ketua;
      $pelayananperkaria-> sekretaris = $request ->sekretaris;
      $pelayananperkaria-> bendehara = $request ->bendehara;
      $pelayananperkaria ->save();
      return redirect('/dashboard/bidangpelayanan')->with('success', "Data Pelayanan Perkaria Berhasil Diupdate!!");
  }
  public function hapuspelayananperkaria($id){
      $pelayananperkaria = PelayananPerkaria::find($id);
      $pelayananperkaria->delete();
      return redirect('/dashboard/bidangpelayanan')->with('success', "Data Pelayanan Perkaria Berhasil Dihapus!!");
  }

  public function editpelayananperkauan($id)
  {
      return view('dashboard.bidangpelayanan.editpelayananperkauan', [
          "title" => "Edit Pelayanan Perkauan",
          "pelayananperkauan" => PelayananPerkauan::where('id', $id)->first()
      ]);
  }
  // memproses perubahan data saat tombol update data
  public function updatepelayananperkauan(Request $request,$id)
  {
      $pelayananperkauan = PelayananPerkauan::find($id);
      $pelayananperkauan-> ketua = $request ->ketua;
      $pelayananperkauan-> sekretaris = $request ->sekretaris;
      $pelayananperkauan-> bendehara = $request ->bendehara;
      $pelayananperkauan ->save();
      return redirect('/dashboard/bidangpelayanan')->with('success', "Data Pelayanan Perkauan Berhasil Diupdate!!");
  }
  public function hapuspelayananperkauan($id){
      $pelayananperkauan = PelayananPerkauan::find($id);
      $pelayananperkauan->delete();
      return redirect('/dashboard/bidangpelayanan')->with('success', "Data Pelayanan Perkauan Berhasil Dihapus!!");
  }








    public function pelayananremaja()

    {
        return view('dashboard.bidangpelayanan.pelayananremaja');
    }

    public function buatpelayananremaja(Request $request)
    {
        $pelayananremaja = new PelayananRemaja();
        $pelayananremaja-> ketua = $request ->ketua;
        $pelayananremaja-> sekretaris = $request ->sekretaris;
        $pelayananremaja-> bendehara = $request ->bendehara;
        $pelayananremaja ->save();
        return redirect('/dashboard/bidangpelayanan');
    }

    public function pelayananpemuda()

    {
        return view('dashboard.bidangpelayanan.pelayananpemuda');
    }

    public function buatpelayananpemuda(Request $request)
    {
        $pelayananpemuda = new PelayananPemuda();
        $pelayananpemuda-> ketua = $request ->ketua;
        $pelayananpemuda-> sekretaris = $request ->sekretaris;
        $pelayananpemuda-> bendehara = $request ->bendehara;
        $pelayananpemuda ->save();
        return redirect('/dashboard/bidangpelayanan');
    }

    public function pelayananperkaria()

    {
        return view('dashboard.bidangpelayanan.pelayananperkaria');
    }

    public function buatpelayananperkaria(Request $request)
    {
        $pelayananpemuda = new PelayananPerkaria();
        $pelayananpemuda-> ketua = $request ->ketua;
        $pelayananpemuda-> sekretaris = $request ->sekretaris;
        $pelayananpemuda-> bendehara = $request ->bendehara;
        $pelayananpemuda ->save();
        return redirect('/dashboard/bidangpelayanan');
    }

    public function pelayananperkauan()

    {
        return view('dashboard.bidangpelayanan.pelayananperkauan');
    }

    public function buatpelayananperkauan(Request $request)
    {
        $pelayananpemuda = new PelayananPerkauan();
        $pelayananpemuda-> ketua = $request ->ketua;
        $pelayananpemuda-> sekretaris = $request ->sekretaris;
        $pelayananpemuda-> bendehara = $request ->bendehara;
        $pelayananpemuda ->save();
        return redirect('/dashboard/bidangpelayanan');
    }
}
