<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index(Request $request){
        $anggota = \App\Anggota::all();
        return view('pages.admin.anggota.index',['anggota'=>$anggota]);
    }
}
