<?php

namespace App\Http\Controllers;

use App\Models\Vokal;
use Illuminate\Http\Request;

class VokalController extends Controller
{
    public function index()
    {
        return view('vokal.index');
    }

    public function store(Request $request)
    {
        $arr = $request->all();
        $vokals = Vokal::setVokal($arr['kata']);
        $hasil = Vokal::getHasil();
        $jumlah = Vokal::getHitung();
        return view('vokal.hasil', [
            'kata' => $arr['kata'],
            'vokals' => $hasil,
            'jumlah' => $jumlah
        ]);
    }
}
