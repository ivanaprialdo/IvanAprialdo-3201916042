<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PesanController extends Controller
{
    public function create (Request $request)
    {
        $pesan = new Pesan();
        $pesan-> nama = $request ->nama;
        $pesan-> email = $request ->email;
        $pesan-> subjek = $request ->subjek;
        $pesan-> pesan = $request ->pesan;

        $pesan ->save();
        return redirect('/kontak');
    }
}
