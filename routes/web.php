<?php

use Illuminate\Support\Facades\Route;

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
Route::get('foo',function(){
    $a=10;
    $b=8;
    return $a. '+' .$b. '='.($a + $b);
});
Route::get('User/{id}',function($id){
    return 'User' .$id;
});
Route::get('user/{name?}',function ($name = 'PhungVanTan')
{
    return $name;
});
Route::get('posts/{post}/comments/{comment}', function($postID, $commentID){
    return 'Post: '.$postID. '<br>'.' Comment: '.$commentID;
});
Route::prefix('Admin')->group(function(){
    Route::get('User/{id}',function($id){
        return 'User'.$id;
    });
});