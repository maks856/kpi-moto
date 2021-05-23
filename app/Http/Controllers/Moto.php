<?php

namespace App\Http\Controllers;

use App\Models\Motoo;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Moto extends Controller
{
    public function ALL(){
        return view('/moto', ['motoos' => Motoo::orderby('namemoto')->get()]);
    }
    public function Poisk(Request $request){
        $namees = $request->nam;
        $motoos = DB::table('motoos')->where('namemoto', 'like', "%$namees%")->get();
        return view('/moto', compact('motoos'));
    }
    public function Update(Request $request){
        $date = Carbon::now();
        DB::update('UPDATE `motoos` SET `namemoto` = ?, `length` = ?, `price` = ?, `updated_at` = ? WHERE `id` = ?', [$request->namee,$request->lengthh,$request->pricee,$request->$date,$request->idd]);
        return view('/moto', ['motoos' => Motoo::orderby('namemoto')->get()]);
    }
}
