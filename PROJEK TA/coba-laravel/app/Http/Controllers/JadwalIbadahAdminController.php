<?php

namespace App\Http\Controllers;

use App\Models\IbadahRemaja;
use App\Models\JadwalIbadah;
use App\Models\IbadahPerkaria;
use App\Models\IbadahKeluarga;
use App\Models\IbadahPemuda as ModelsIbadahPemuda;
use App\Models\IbadahPerseDoaPemuda;
use App\Models\IbadahPerkauan;
use App\Models\IbadahPemuda;
use App\Models\IbadahMinggu;
use App\Models\IbadahSekolah;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JadwalIbadahAdminController extends Controller
{
    
    public function index()
    // controler dashboard jadwal ibadah
    {
        return view('dashboard.jadwalibadah.index', [
            'ibadahremaja' =>IbadahRemaja::all(),
            'iperkaria' =>IbadahPerkaria::all(),
            'ikeluarga' =>IbadahKeluarga::all(),
            'ipersedoapemuda' =>IbadahPerseDoaPemuda::all(),
            'iperkauan' =>IbadahPerkauan::all(),
            'ipemuda' =>IbadahPemuda::all(),
            'iminggu' =>IbadahMinggu::all(),
            'isekolah' =>IbadahSekolah::all()
        ]);
    }

    public function ibadahremaja()
    // ibadahremaja() merupakan nama kelea yang aakan di deklarasikan pada web.php
    {
        return view('dashboard.jadwalibadah.ibadahremaja');
        // dashboard.jadwalibadah.ibadahremaja merupakan lokasi dari file ibadah remaja yang berada didalam folder dashboard/folder jadwalibadah
    }

    public function buatA(Request $request)
    {
        $jadwalibadah = new IbadahRemaja();
        $jadwalibadah-> wsleader = $request ->wsleader;
        $jadwalibadah-> pemainmusik = $request ->pemainmusik;
        $jadwalibadah-> pkhotbah = $request ->pkhotbah;
        $jadwalibadah-> hari = $request ->hari;
        $jadwalibadah-> jam = $request ->jam;
        $jadwalibadah-> tempat = $request ->tempat;
        $jadwalibadah ->save();
        return redirect('/dashboard/jadwalibadah');
    }

    public function editibadahremaja($id)
    {
        return view('dashboard.jadwalibadah.editibadahremaja', [
            "title" => "Edit Ibadah Remaja",
            "ibadahremaja" => IbadahRemaja::where('id', $id)->first()
        ]);
    }
    // memproses perubahan data saat tombol update data
    public function updateibadahremaja(Request $request,$id)
    {
        $jadwalibadah = IbadahRemaja::find($id);
        $jadwalibadah-> wsleader = $request ->wsleader;
        $jadwalibadah-> pemainmusik = $request ->pemainmusik;
        $jadwalibadah-> pkhotbah = $request ->pkhotbah;
        $jadwalibadah-> hari = $request ->hari;
        $jadwalibadah-> jam = $request ->jam;
        $jadwalibadah-> tempat = $request ->tempat;
        $jadwalibadah ->save();
        return redirect('/dashboard/jadwalibadah')->with('success', "Jadwal Ibadah Remaja Berhasil Diupdate!!");
    }
    public function hapusibadahremaja($id){
        $jadwalibadah = IbadahRemaja::find($id);
        $jadwalibadah->delete();
        return redirect('/dashboard/jadwalibadah')->with('success', "Jadwal Ibadah Remaja Berhasil Dihapus!!");
    }

    public function editibadahperkaria($id)
    {
        return view('dashboard.jadwalibadah.editibadahperkaria', [
            "title" => "Edit Ibadah Perkaria",
            "ibadahperkaria" => IbadahPerkaria::where('id', $id)->first()
        ]);
    }
    // memproses perubahan data saat tombol update data
    public function updateibadahperkaria(Request $request,$id)
    {
        $iperkaria = IbadahPerkaria::find($id);
        $iperkaria-> wsleader = $request ->wsleader;
        $iperkaria-> pemainmusik = $request ->pemainmusik;
        $iperkaria-> pkhotbah = $request ->pkhotbah;
        $iperkaria-> hari = $request ->hari;
        $iperkaria-> jam = $request ->jam;
        $iperkaria-> tempat = $request ->tempat;
        $iperkaria ->save();
        return redirect('/dashboard/jadwalibadah')->with('success', "Jadwal Ibadah Perkaria Berhasil Diupdate!!");
    }
    public function hapusibadahperkaria($id){
        $iperkaria = IbadahPerkaria::find($id);
        $iperkaria->delete();
        return redirect('/dashboard/jadwalibadah')->with('success', "Jadwal Ibadah Perkaria Berhasil Dihapus!!");
    }

    public function editibadahkeluarga($id)
    {
        return view('dashboard.jadwalibadah.editibadahkeluarga', [
            "title" => "Edit Ibadah Keluarga",
            "ibadahkeluarga" => IbadahKeluarga::where('id', $id)->first()
        ]);
    }
    // memproses perubahan data saat tombol update data
    public function updateibadahkeluarga(Request $request,$id)
    {
        $ikeluarga = IbadahKeluarga::find($id);
        $ikeluarga-> wsleader = $request ->wsleader;
        $ikeluarga-> pemainmusik = $request ->pemainmusik;
        $ikeluarga-> pkhotbah = $request ->pkhotbah;
        $ikeluarga-> hari = $request ->hari;
        $ikeluarga-> jam = $request ->jam;
        $ikeluarga-> tempat = $request ->tempat;
        $ikeluarga-> alamat = $request ->alamat;
        $ikeluarga ->save();
        return redirect('/dashboard/jadwalibadah')->with('success', "Jadwal Ibadah Keluarga Berhasil Diupdate!!");
    }
    public function hapusibadahkeluarga($id){
        $ikeluarga = IbadahKeluarga::find($id);
        $ikeluarga->delete();
        return redirect('/dashboard/jadwalibadah')->with('success', "Jadwal Ibadah Keluarga Berhasil Dihapus!!");
    }

    public function editibadahpersekutuan($id)
    {
        return view('dashboard.jadwalibadah.editibadahpersekutuan', [
            "title" => "Edit Ibadah Persekutuan",
            "ibadahpersekutuan" => IbadahPerseDoaPemuda::where('id', $id)->first()
        ]);
    }
    // memproses perubahan data saat tombol update data
    public function updateibadahpersekutuan(Request $request,$id)
    {
        $ipersedoa = IbadahPerseDoaPemuda::find($id);
        $ipersedoa-> wsleader = $request ->wsleader;
        $ipersedoa-> pemainmusik = $request ->pemainmusik;
        $ipersedoa-> pkhotbah = $request ->pkhotbah;
        $ipersedoa-> hari = $request ->hari;
        $ipersedoa-> jam = $request ->jam;
        $ipersedoa-> tempat = $request ->tempat;
        $ipersedoa-> alamat = $request ->alamat;
        $ipersedoa ->save();
        return redirect('/dashboard/jadwalibadah')->with('success', "Jadwal Ibadah Persekutuan Doa Pemuda Berhasil Diupdate!!");
    }
    public function hapusibadahpersekutuan($id){
        $ipersedoa = IbadahPerseDoaPemuda::find($id);
        $ipersedoa->delete();
        return redirect('/dashboard/jadwalibadah')->with('success', "Jadwal Ibadah Persekutuan Doa Pemuda Berhasil Dihapus!!");
    }

    public function editibadahperkauan($id)
    {
        return view('dashboard.jadwalibadah.editibadahperkauan', [
            "title" => "Edit Ibadah Perkauan",
            "ibadahperkauan" => IbadahPerkauan::where('id', $id)->first()
        ]);
    }
    // memproses perubahan data saat tombol update data
    public function updateibadahperkauan(Request $request,$id)
    {
        $iperkauan = IbadahPerkauan::find($id);
        $iperkauan-> wsleader = $request ->wsleader;
        $iperkauan-> pemainmusik = $request ->pemainmusik;
        $iperkauan-> pkhotbah = $request ->pkhotbah;
        $iperkauan-> hari = $request ->hari;
        $iperkauan-> jam = $request ->jam;
        $iperkauan-> tempat = $request ->tempat;
        $iperkauan ->save();
        return redirect('/dashboard/jadwalibadah')->with('success', "Jadwal Ibadah Perkauan Berhasil Diupdate!!");
    }
    public function hapusibadahperkauan($id){
        $iperkauan = IbadahPerkauan::find($id);
        $iperkauan->delete();
        return redirect('/dashboard/jadwalibadah')->with('success', "Jadwal Ibadah Perkauan Berhasil Dihapus!!");
    }

    public function editibadahpemuda($id)
    {
        return view('dashboard.jadwalibadah.editibadahpemuda', [
            "title" => "Edit Ibadah Pemuda",
            "ibadahpemuda" => IbadahPemuda::where('id', $id)->first()
        ]);
    }
    // memproses perubahan data saat tombol update data
    public function updateibadahpemuda(Request $request,$id)
    {
        $ipemuda = IbadahPemuda::find($id);
        $ipemuda-> wsleader = $request ->wsleader;
        $ipemuda-> pemainmusik = $request ->pemainmusik;
        $ipemuda-> pkhotbah = $request ->pkhotbah;
        $ipemuda-> hari = $request ->hari;
        $ipemuda-> jam = $request ->jam;
        $ipemuda-> tempat = $request ->tempat;
        $ipemuda ->save();
        return redirect('/dashboard/jadwalibadah')->with('success', "Jadwal Ibadah Pemuda Berhasil Diupdate!!");
    }
    public function hapusibadahpemuda($id){
        $ipemuda = IbadahPemuda::find($id);
        $ipemuda->delete();
        return redirect('/dashboard/jadwalibadah')->with('success', "Jadwal Ibadah Pemuda Berhasil Dihapus!!");
    }

    public function editibadahmingguraya($id)
    {
        return view('dashboard.jadwalibadah.editibadahmingguraya', [
            "title" => "Edit Ibadah Minggu Raya",
            "ibadahmingguraya" => IbadahMinggu::where('id', $id)->first()
        ]);
    }
    // memproses perubahan data saat tombol update data
    public function updateibadahmingguraya(Request $request,$id)
    {
        $imingguraya = IbadahMinggu::find($id);
        $imingguraya -> wsleader = $request ->wsleader;
        $imingguraya -> pemainmusik = $request ->pemainmusik;
        $imingguraya -> singer = $request ->singer;
        $imingguraya -> pkhotbah = $request ->pkhotbah;
        $imingguraya -> pendoa = $request ->pendoa;
        $imingguraya -> ptgskolekte = $request ->ptgskolekte;
        $imingguraya -> pentamu = $request ->pentamu;
        $imingguraya -> petparkir = $request ->pentamu;
        $imingguraya -> hari = $request ->hari;
        $imingguraya -> jam = $request ->jam;
        $imingguraya -> tempat = $request ->tempat;
        $imingguraya  ->save();
        return redirect('/dashboard/jadwalibadah')->with('success', "Jadwal Ibadah Minggu Raya Berhasil Diupdate!!");
    }
    public function hapusibadahmingguraya($id){
        $imingguraya  = IbadahMinggu::find($id);
        $imingguraya ->delete();
        return redirect('/dashboard/jadwalibadah')->with('success', "Jadwal Ibadah Minggu Raya Berhasil Dihapus!!");
    }

    public function editibadahsekolahminggu($id)
    {
        return view('dashboard.jadwalibadah.editibadahsekolahminggu', [
            "title" => "Edit Ibadah Sekolah Minggu",
            "ibadahsekolahminggu" => IbadahSekolah::where('id', $id)->first()
        ]);
    }
    // memproses perubahan data saat tombol update data
    public function updateibadahsekolahminggu(Request $request,$id)
    {
        $isekolahminggu = IbadahSekolah::find($id);
        $isekolahminggu-> wsleader = $request ->wsleader;
        $isekolahminggu-> pemainmusik = $request ->pemainmusik;
        $isekolahminggu-> pbwcerita = $request ->pbwcerita;
        $isekolahminggu-> hari = $request ->hari;
        $isekolahminggu-> jam = $request ->jam;
        $isekolahminggu-> tempat = $request ->tempat;
        $isekolahminggu ->save();
        return redirect('/dashboard/jadwalibadah')->with('success', "Jadwal Ibadah Sekolah Minggu Berhasil Diupdate!!");
    }
    public function hapusibadahsekolahminggu($id){
        $isekolahminggu = IbadahSekolah::find($id);
        $isekolahminggu->delete();
        return redirect('/dashboard/jadwalibadah')->with('success', "Jadwal Ibadah Sekolah Minggu Berhasil Dihapus!!");
    }

    public function ibadahperkaria()
    {
        return view('dashboard.jadwalibadah.ibadahperkaria');
    }

    public function buatB(Request $request)
    {
        $iperkaria = new IbadahPerkaria();
        $iperkaria-> wsleader = $request ->wsleader;
        $iperkaria-> pemainmusik = $request ->pemainmusik;
        $iperkaria-> pkhotbah = $request ->pkhotbah;
        $iperkaria-> hari = $request ->hari;
        $iperkaria-> jam = $request ->jam;
        $iperkaria-> tempat = $request ->tempat;
        $iperkaria ->save();
        return redirect('/dashboard/jadwalibadah');
    }

    public function ibadahkeluarga()
    {
        return view('dashboard.jadwalibadah.ibadahkeluarga');
    }

    public function buatC(Request $request)
    {
        $iperkaria = new IbadahKeluarga();
        $iperkaria-> wsleader = $request ->wsleader;
        $iperkaria-> pemainmusik = $request ->pemainmusik;
        $iperkaria-> pkhotbah = $request ->pkhotbah;
        $iperkaria-> hari = $request ->hari;
        $iperkaria-> jam = $request ->jam;
        $iperkaria-> tempat = $request ->tempat;
        $iperkaria-> alamat = $request ->alamat;
        $iperkaria ->save();
        return redirect('/dashboard/jadwalibadah');
    }

    public function ibadahpersekutuan()
    {
        return view('dashboard.jadwalibadah.ibadahpersekutuan');
    }

    public function buatD(Request $request)
    {
        $iperkaria = new IbadahPerseDoaPemuda();
        $iperkaria-> wsleader = $request ->wsleader;
        $iperkaria-> pemainmusik = $request ->pemainmusik;
        $iperkaria-> pkhotbah = $request ->pkhotbah;
        $iperkaria-> hari = $request ->hari;
        $iperkaria-> jam = $request ->jam;
        $iperkaria-> tempat = $request ->tempat;
        $iperkaria-> alamat = $request ->alamat;
        $iperkaria ->save();
        return redirect('/dashboard/jadwalibadah');
    }

    public function ibadahperkauan()
    {
        return view('dashboard.jadwalibadah.ibadahperkauan');
    }

    public function buatE(Request $request)
    {
        $iperkaria = new IbadahPerkauan();
        $iperkaria-> wsleader = $request ->wsleader;
        $iperkaria-> pemainmusik = $request ->pemainmusik;
        $iperkaria-> pkhotbah = $request ->pkhotbah;
        $iperkaria-> hari = $request ->hari;
        $iperkaria-> jam = $request ->jam;
        $iperkaria-> tempat = $request ->tempat;
        $iperkaria ->save();
        return redirect('/dashboard/jadwalibadah');
    }

    public function ibadahpemuda()
    {
        return view('dashboard.jadwalibadah.ibadahpemuda');
    }

    public function buatF(Request $request)
    {
        $iperkaria = new IbadahPemuda();
        $iperkaria-> wsleader = $request ->wsleader;
        $iperkaria-> pemainmusik = $request ->pemainmusik;
        $iperkaria-> pkhotbah = $request ->pkhotbah;
        $iperkaria-> hari = $request ->hari;
        $iperkaria-> jam = $request ->jam;
        $iperkaria-> tempat = $request ->tempat;
        $iperkaria ->save();
        return redirect('/dashboard/jadwalibadah');
    }

    public function ibadahmingguraya()
    {
        return view('dashboard.jadwalibadah.ibadahmingguraya');
    }

    public function buatG(Request $request)
    {
        $iperkaria = new IbadahMinggu();
        $iperkaria-> wsleader = $request ->wsleader;
        $iperkaria-> pemainmusik = $request ->pemainmusik;
        $iperkaria-> singer = $request ->singer;
        $iperkaria-> pkhotbah = $request ->pkhotbah;
        $iperkaria-> pendoa = $request ->pendoa;
        $iperkaria-> ptgskolekte = $request ->ptgskolekte;
        $iperkaria-> pentamu = $request ->pentamu;
        $iperkaria-> petparkir = $request ->pentamu;
        $iperkaria-> hari = $request ->hari;
        $iperkaria-> jam = $request ->jam;
        $iperkaria-> tempat = $request ->tempat;
        $iperkaria ->save();
        return redirect('/dashboard/jadwalibadah');
    }

    public function ibadahsekolahminggu()
    {
        return view('dashboard.jadwalibadah.ibadahsekolahminggu');
    }
    public function buatH(Request $request)
    {
        $iperkaria = new IbadahSekolah();
        $iperkaria-> wsleader = $request ->wsleader;
        $iperkaria-> pemainmusik = $request ->pemainmusik;
        $iperkaria-> pbwcerita = $request ->pbwcerita;
        $iperkaria-> hari = $request ->hari;
        $iperkaria-> jam = $request ->jam;
        $iperkaria-> tempat = $request ->tempat;
        $iperkaria ->save();
        return redirect('/dashboard/jadwalibadah');
    }
    
}
