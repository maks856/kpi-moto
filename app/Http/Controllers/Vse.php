<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Nahid\Talk\Live\Broadcast;
use Carbon\Carbon;

class Vse extends Controller
{
    public function ALL(){
        return view('/personal', ['users' => User::orderby('name')->get()]);
    }
    public function Poisk(Request $request){
        $namees = $request->nam;
        $users = DB::table('users')->where('name', 'like', "%$namees%")->get();
        return view('/personal', compact('users'));
    }
    public function Update(Request $request){
        $date = Carbon::now();
        DB::update('UPDATE `users` SET `name` = ?, `email` = ?, `updated_at` = ? WHERE `id` = ?', [$request->namee,$request->emaill,$request->$date,$request->idd]);
        return view('/personal', ['users' => User::orderby('name')->get()]);
    }

}

