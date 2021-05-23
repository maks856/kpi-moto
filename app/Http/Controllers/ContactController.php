<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Nahid\Talk\Live\Broadcast;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function add(Request $request){

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

        return view('contact');
    }
}
