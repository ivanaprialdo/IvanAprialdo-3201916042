<?php

namespace App\Http\Controllers;

use App\Models\DataJemaat;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DataJemaatAdminController extends Controller
{
    
    public function index()
    {
        return view('dashboard.datajemaat.index', [
            'pesan' =>DataJemaat::paginate(10)
            // pesan merupakan array penampung data dari tabel data jemaat
            // data jemaat::all merupakan tabel pada database yang berisi data jemaat
        ]);
    }

    public function tambah(){
        return view('dashboard.datajemaat.tambahdatajemaat');
    }
    public function edit($id)
    {
        return view('dashboard.datajemaat.edit', [
            "title" => "Data Jemaat",
            "datajemaat" => DataJemaat::where('id', $id)->first()
        ]);
    }

    public function updatedatajemaat(Request $request,$id)
    {
        $datajemaat = DataJemaat::find($id);
        $datajemaat-> nama = $request ->nama;
        $datajemaat-> alamat = $request ->alamat;
        $datajemaat-> ttl = $request ->ttl;
        $datajemaat-> gender = $request ->gender;
        $datajemaat-> pekerjaan = $request ->pekerjaan;
        $datajemaat-> statusbaptis = $request ->statusbaptis;
        $datajemaat-> nohp = $request ->nohp;
        $datajemaat ->save();
        return redirect('/dashboard/datajemaat')->with('success', "Data Jemaat Berhasil Diupdate!!");
    }

    public function destroy($id)
    {
        $pesan = DataJemaat::find($id);
        $pesan->delete();
        return redirect('/dashboard/datajemaat')->with('success', 'Data Jemaat Berhasil di Hapus!!');
    }

}
