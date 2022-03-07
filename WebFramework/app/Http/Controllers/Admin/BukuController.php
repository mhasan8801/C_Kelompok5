<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(Request $request){
        return view('pages.admin.buku.index');
    }
}
