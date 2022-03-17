<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    public function index(Request $request){
        $petugas = DB::table('petugass')->get();
        return view('pages.admin.petugas.index', [
            'petugas' => $petugas,
        ]);
        // $petugas = \App\Petugas::all('petugass');
        // return view('pages.admin.petugas.index',['petugas'=>$petugas]);
    }
}
