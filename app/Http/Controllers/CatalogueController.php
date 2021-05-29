<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motoo;

class CatalogueController extends Controller
{
    public function index(){
        return view('catalogue');
    }

    public function allData(){
        $motos = new Motoo();
        return view('catalogue', ['data' => $motos->orderBy('id')->get()]);
    }
}
