<?php
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('insert', function() {
    DB::insert('INSERT INTO posts(title,content) VALUES (?,?)',['PHP','PHP content']);
});

Route::get('see',function(){
    $post = DB::table('posts')->get();
    return $post;

});