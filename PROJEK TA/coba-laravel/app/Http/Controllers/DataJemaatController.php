<?php

namespace App\Http\Controllers;

use App\Models\DataJemaat;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DataJemaatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create (Request $request)
    {
        $datajemaat = new DataJemaat();
        $datajemaat-> nama = $request ->nama;
        $datajemaat-> alamat = $request ->alamat;
        $datajemaat-> ttl = $request ->ttl;
        $datajemaat-> gender = $request ->gender;
        $datajemaat-> pekerjaan = $request ->pekerjaan;
        $datajemaat-> statusbaptis = $request ->statusbaptis;
        $datajemaat-> nohp = $request ->nohp;
        
        $datajemaat ->save();
        return redirect('/dashboard/datajemaat')->with('success', "Data Jemaat Berhasil Ditambahkan!!");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
