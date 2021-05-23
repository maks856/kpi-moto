<?php

namespace App\Http\Controllers;


use App\Models\Buy;
use App\Models\Motoo;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Nahid\Talk\Live\Broadcast;

class MainController extends Controller
{

    public function app(Request $request){
        $a = "Добавили!";
        $users = new User();
        $test = DB::select('select email from users where name = ?', [$request->namee]);
            if ($test != null){
                $a="Уже существует!";
                return view('/choice', compact('a'));
            }
        $te = DB::select('select name from users where email = ?', [$request->emaill]);
        if ($te != null){
            $a="Уже существует!";
            return view('/choice', compact('a'));
        }
            $users->name = $request->namee;
            $users->email = $request->emaill;
            $users->save();
        return view('/choice', compact('a'));
    }

    public function appmoto(Request $request){

        $a = "Добавили!";


        $motoos = new Motoo();
        $te = DB::select('select length from motoos where namemoto = ?', [$request->namee]);
        if ($te != null){
            $date = Carbon::now();
            $a="Уже существует!";
            DB::update('UPDATE `motoos` SET `length` = ?, `updated_at` = ? WHERE `namemoto` = ?', [$request->lengthh,$request->$date,$request->namee]);
            return view('/addmoto', compact('a'));
        }

        $img = $request->file('image')->store('uploads','public');

        $motoos->img = $img;
        $motoos->namemoto = $request->namee;
        $motoos->length = $request->lengthh;
        $motoos->price = $request->pricee;

        $motoos->save();
        return view('/addmoto', compact('a'));
    }

    public function appbuy(Request $request){

        $a = "Добавили!";
        $buys = new Buy();
        $user = DB::select('select id from users where name = ?', [$request->nameuser]);
        if ($user == null){
            $a="Такого пользователя не существует!";
            return view('/addbuy', compact('a'));
        }
        $moto = DB::select('select `id`, `price` , `length` from motoos where namemoto = ?', [$request->namemotoo]);
        if ($moto == null){
            $a="Такого пользователя не существует!";
            return view('/addbuy', compact('a'));
        }
        foreach ($moto as $mot) {
            $ca = $mot->length;
        }

        if ($ca >= $request->lengthh) {
            $b = $ca - $request->lengthh;
            $date = Carbon::now();
            DB::update('UPDATE `motoos` SET `length` = ?, `updated_at` = ? WHERE `namemoto` = ?', [$b,$request->$date,$request->namemotoo]);
        } else return view('/addbuy');

        foreach ($user as $us) {
            $us = $us->id;
        }
        $buys->user_id = $us;
        foreach ($moto as $mot) {
            $ca = $mot->id;
        }
        $buys->motoo_id = $ca;
        $buys->quantity = $request->lengthh;
        foreach ($moto as $mot) {
            $ca = $mot->price;
        }
        $b = $ca * $request->lengthh;
        $buys->pricee = $b;
        $buys->save();
        return view('/addbuy', compact('a'));
    }


    public function index(){
        return view('/personal', ['users' => User::find(1)->get()]);
    }




}
