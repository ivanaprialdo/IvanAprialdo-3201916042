<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

use function GuzzleHttp\Promise\all;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kontak::all();
        return view('dashboard.kontak.index',[
            'title'=> 'kontak',
            'data' => $data

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kontak.create',[
            'title' => 'Tambah Data kontak'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $kontak = new Kontak();
        $kontak -> email = $request -> email;
        $kontak -> nophone1 = $request -> nophone1;
        $kontak -> nophone2 = $request -> nophone2;
        $kontak -> nophone3 = $request -> nophone3;
        $kontak -> facebook = $request -> facebook;
        $kontak -> save();


        return redirect('/kontak/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.kontak.edit', [
            "title" => "Edit Kontak",
            "kontak" => Kontak::where('id', $id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kontak = Kontak::find($id);
        $kontak->email = $request->email;
        $kontak->nophone1 = $request->nophone1;
        $kontak->nophone2 = $request->nophone2;
        $kontak->nophone3 = $request->nophone3;
        $kontak->facebook = $request->facebook;
       
        $kontak->save();

        return redirect('/kontak/index')->with('success', "Kontak Berhasil diedit!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kontak = Kontak::find($id);
        $kontak->delete();
        return redirect('/kontak')->with('success', "Kontak Berhasil dihapus!!");
    }
}
