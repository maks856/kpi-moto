<?php

namespace App\Http\Controllers;

use App\Models\Motoo;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function allData(){
        $motos = new Motoo();
        return view('welcome', ['data' => $motos->where('id', '<', '7')->orderBy('id')->get()]);
    }
}
