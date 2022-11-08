<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminPesanController extends Controller
{
    
    public function index()
    {
        return view('dashboard.pesan.index', [
            'pesan' => Pesan::all()
        ]);
    }

    public function destroy($id)
    {
        $pesan = Pesan::find($id);
        $pesan->delete();
        return redirect('/dashboard/pesan')->with('success', 'Kritik dan Saran Berhasil di Hapus');
    }
}
