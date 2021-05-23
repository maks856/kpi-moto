<?php

use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LandingController;
use App\Models\Motoo;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/catalogue', [CatalogueController::class, 'index']);
Route::get('/', [LandingController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/about', function(){
    return view('about');
});
Route::get('/service', function(){
    return view('service');
});
Route::get('/contact/add', 'App\Http\Controllers\ContactController@add')->name('addcontacts');




Route::get('/Users', 'App\Http\Controllers\Vse@ALL')->name('users');
Route::get('/Users/search', 'App\Http\Controllers\Vse@Poisk')->name('search');
Route::get('/Users/update', 'App\Http\Controllers\Vse@Update')->name('update');
Route::get('/Users/updateusers', function () {
    return view('/updateusers');
})->name('updateusers');
Route::get('/Users/delete', function () {
    $users = DB::delete('delete from users where id = ?', [$_GET['id']]);
    $users = User::all();
    return view('/personal', compact('users'));
})->name('delete');
Route::get('/Add', function () {
    return view('/choice');
})->name('add');
Route::get('/app', 'App\Http\Controllers\MainController@app')->name('app');



Route::get('/Moto', 'App\Http\Controllers\Moto@ALL')->name('moto');
Route::get('/Moto/search', 'App\Http\Controllers\Moto@Poisk')->name('searchm');
Route::get('/Moto/update', 'App\Http\Controllers\Moto@Update')->name('updatem');
Route::get('/Moto/updatemoto', function () {
    return view('/updatemotos');
})->name('updatemotos');
Route::get('/Moto/delete', function () {
    $motos = DB::delete('delete from motoos where id = ?', [$_GET['id']]);
    return view('/moto', ['motoos' => Motoo::orderby('namemoto')->get()]);
})->name('deletem');
Route::get('/Add/Moto', function () {
    return view('/addmoto');
})->name('addmoto');
Route::post('/app/moto', 'App\Http\Controllers\MainController@appmoto')->name('appmoto');


Route::get('/Buy', 'App\Http\Controllers\Main@ALL')->name('buy');
Route::get('/Buy/search', 'App\Http\Controllers\Main@Poisk')->name('searchb');
Route::get('/Buy/delete', function () {
    $idm = $_GET['motoid'];
    $len = $_GET['lengthh'];
    $id = $_GET['id'];
    $moto = Motoo::find($idm);
    $moto->length = $moto->length + $len;
    $moto->save();
    DB::delete('delete from buys where id = ?', [$_GET['id']]);
    return view('/buy', ['buys' => DB::select('SELECT buys.id, users.name, motoos.namemoto, quantity, pricee FROM buys INNER JOIN users ON buys.`user_id`= users.id INNER JOIN motoos ON buys.`motoo_id` = motoos.id')]);
})->name('deleteb');
Route::get('/Buy/update', 'App\Http\Controllers\Main@Update')->name('updateb');
Route::get('/Buy/updatebuy', function () {
    return view('/updatebuys');
})->name('updatebuys');
Route::get('/Add/Buy', function () {
    return view('/addbuy');
})->name('addbuy');
Route::get('/app/buy', 'App\Http\Controllers\MainController@appbuy')->name('appbuy');









