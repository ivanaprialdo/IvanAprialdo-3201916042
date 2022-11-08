<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;

class GaleryController extends Controller
{
    public function index (){
        return view('dashboard.galery.index',[
            'data'=> Galery::all()
        ]);

    }


    public function create (){
        return view('dashboard.galery.create');
    }

    public function store (Request $request){
        $gambar=new Galery;
        $gambar->deskripsi = $request->deskripsi;
        if ($request->file('gambar')) {
            $file=$request->file('gambar');
            $nama_file = time() . str_replace(" ","", $file->getClientOriginalName());
            $file->move('galery',$nama_file);
            $gambar->gambar=$nama_file;
        }
        $gambar->save();
        return redirect('/dashboard/galery')->with('Succes', 'Gambar Berhasil Di Tambahkan');
    }

    public function edit($id){
        return view('dashboard.galery.edit',[
            'galery' => Galery::find($id)->first()
        ]);
    }

    public function update(Request $request, $id){
       
        $gambar= Galery::find($id);
        $gambar->deskripsi = $request->deskripsi;
        if ($request->file('gambar')) {
            $file=$request->file('gambar');
            $nama_file = time() . str_replace(" ","", $file->getClientOriginalName());
            $file->move('galery',$nama_file);
            $gambar->gambar=$nama_file;
        }
        $gambar->save();
        return redirect('/dashboard/galery')->with('Succes', 'Gambar Berhasil Di Update');
    }
    public function destroy($id)
    {
        $gambar = Galery::find($id);
        $file = ('galery/'. $gambar->gambar);
        if (File::exists($file)){
            File::delete($file);
        }
        $gambar->delete();
        return redirect('/dashboard/galery');
    }


}
