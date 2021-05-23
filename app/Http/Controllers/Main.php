<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use App\Models\Motoo;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main extends Controller
{
    public function ALL(){
        return view('/buy', ['buys' => DB::select('SELECT buys.id, users.name, motoos.namemoto, quantity, pricee, motoo_id FROM buys INNER JOIN users ON buys.`user_id`= users.id INNER JOIN motoos ON buys.`motoo_id` = motoos.id')]);
    }
    public function Poisk(Request $request){
        $namees = $request->nam;
        $buys = DB::table('buys')
            ->select(['buys.id', 'users.name', 'motoos.namemoto', 'quantity', 'pricee', 'motoo_id'])
            ->join('users', 'buys.user_id', '=', 'users.id')
            ->join('motoos', 'buys.motoo_id', '=', 'motoos.id')
            ->where('users.name', 'like', "%$namees%")
            ->get();
        return view('/buy', compact('buys'));
    }

    public function Update(Request $request){

        $date = Carbon::now();


        $user = DB::select('select id from users where name = ?', [$request->nameuser]);
        if ($user != null){
            $a="Такого пользователя не существует!";
            return view('/addbuy', compact('a'));
        }
        $moto = DB::select('select `id`, `price` , `length` from motoos where namemoto = ?', [$request->namemotoo]);
        if ($moto != null){
            $a="Такого мотоцикла не существует!";
            return view('/addmoto', compact('a'));
        }
        $buys = Buy::find($request->idd);
        $mot = Motoo::find($buys->motoo_id);
        $mot->length +=  $buys->quantity;
        $mot->save();
        $par = DB::select('SELECT id FROM `users` WHERE `name`= ?',[$request->nameusers]);
        foreach ($par as $p){
            $par = $p->id;
        }
        $buys->user_id = $par;
        $par = DB::select('SELECT id FROM `motoos` WHERE `namemoto`= ?',[$request->namemotoos]);
        foreach ($par as $p){
            $par = $p->id;
        }
        $buys->motoo_id = $par;

        $buys->quantity = $request->lengthh;
        $par = DB::select('SELECT price FROM `motoos` WHERE `namemoto`= ?',[$request->namemotoos]);
        foreach ($par as $p) {
            $par = $p->price;
        }
        $b = $par * $request->lengthh;
        $buys->pricee = $b;

        $par = DB::select('SELECT length FROM `motoos` WHERE `namemoto`= ?',[$request->namemotoos]);
        foreach ($par as $p) {
            $par = $p->length;
        }
        if ($par >= $request->lengthh) {
            $b = $par - $request->lengthh;
            $date = Carbon::now();
            $mmm = Motoo::find($buys->motoo_id);
            $mmm->length = $b;
            $mmm->updated_at = $request->$date;
            $mmm->save();
        } else return view('/buy');

        $buys->save();

        return view('/buy', ['buys' => DB::select('SELECT buys.id, users.name, motoos.namemoto, quantity, pricee, motoo_id FROM buys INNER JOIN users ON buys.`user_id`= users.id INNER JOIN motoos ON buys.`motoo_id` = motoos.id')]);

    }





}
