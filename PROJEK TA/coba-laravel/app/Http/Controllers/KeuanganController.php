<?php

namespace App\Http\Controllers;


use App\Models\SaldoBulanan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Kolekte;
use App\Models\Persepuluhan;

class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pemasukan.index');
        
    }
    public function bulanan(){
        return view('dashboard.pemasukan.bulanan',[
            'saldo' => SaldoBulanan::all()
        ]);
    }
    public function bulanan_tambah(){
        return view('dashboard.pemasukan.bulanantambah');
    }
    public function bulanan_create(Request $request){
        $data = new SaldoBulanan();
        $data->nominal = $request->nominal;
        $data->bulan = $request->bulan;
        $data->save();

        return redirect('/bulanan')->with('success', "Laporan Keuangan Bulanan Berhasil Ditambahkan!!");
    }
    public function bulanan_edit($id){
        return view('dashboard.pemasukan.bulananedit',[
            'saldo' => SaldoBulanan::where('id',$id)->first()
        ]);
    }

    public function bulananupdate(Request $request, $id){
        $saldo = SaldoBulanan::find($id);
        $saldo->nominal = $request->nominal;
        $saldo->bulan = $request->bulan;
        $saldo->save();
 
        return redirect('/bulanan')->with('success', "Laporan Keuangan Bulanan Berhasil Diupdate!!");
     }

     public function hapusbulanan($id){
        $saldo = SaldoBulanan::find($id);
        $saldo->delete();
        return redirect('/bulanan')->with('success', "Laporan Keuangan Bulanan Berhasil Dihapus!!");
    }

     public function kolekte(){
        return view('dashboard.pemasukan.kolekte',[
            'kolekte' => Kolekte::all()
        ]);
    }
     public function kolekte_tambah(){
        return view('dashboard.pemasukan.kolektetambah');
    }
     public function kolekte_create(Request $request){
        $data = new Kolekte();
        $data->nominal = $request->nominal;
        $data->tanggal = $request->tanggal;
        $data->save();

        return redirect('/kolekte')->with('success', "Laporan Kolekte Minggu Berhasil Dibuat!!");
    }

    public function kolekte_edit($id){
        return view('dashboard.pemasukan.kolekteedit',[
            'saldo' => Kolekte::where('id',$id)->first()
        ]);
    }

    public function kolekteupdate(Request $request, $id){
        $kolekte = Kolekte::find($id);
        $kolekte->nominal = $request->nominal;
        $kolekte->tanggal = $request->tanggal;
        $kolekte->save();
        return redirect('/kolekte')->with('success', "Laporan Kolekte Minggu Berhasil Diupdate!!");
     }

     public function hapuskolekte($id){
        $kolekte = Kolekte::find($id);
        $kolekte->delete();
        return redirect('/kolekte')->with('success', "Laporan Kolekte Minggu Berhasil Dihapus!!");
    }


    public function persepuluhan(){
        return view('dashboard.pemasukan.persepuluhan',[
            'persepuluhan' => Persepuluhan::all()
        ]);
    }

    public function persepuluhan_tambah(){
        return view('dashboard.pemasukan.persepuluhantambah');
    }

    public function persepuluhan_create(Request $request){
        $persepuluhan = new Persepuluhan();
        $persepuluhan->nominal = $request->nominal;
        $persepuluhan->tanggal = $request->tanggal;
        $persepuluhan->save();

        return redirect('/persepuluhan')->with('success', "Laporan Persepuluhan Berhasil Ditambahkan!!");
    }

    public function persepuluhan_edit($id){
        return view('dashboard.pemasukan.persepuluhanedit',[
            'saldo' => Persepuluhan::where('id',$id)->first()
        ]);
    }

    public function persepuluhanupdate(Request $request, $id){
        $persepuluhan = Persepuluhan::find($id);
        $persepuluhan->nominal = $request->nominal;
        $persepuluhan->tanggal = $request->tanggal;
        $persepuluhan->save();
 
        return redirect('/persepuluhan')->with('success', "Laporan Persepuluhan Berhasil Diupdate!!");
     }
     public function hapuspersepuluhan($id){
        $persepuluhan = Persepuluhan::find($id);
        $persepuluhan->delete();
        return redirect('/persepuluhan')->with('success', "Laporan Persepuluhan Berhasil Dihapus!!");
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
