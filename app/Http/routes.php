<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('go2allen', function () {
//     return redirect('allen');
// });

// Route::get('hello', function () {
//     return "hello Laravel 2016 08 11" ;
// });

// Route::get('allen', function () {
//     return view('allen');
// });
// Route::get('goto/{name}', function ($name) {
//     return view($name);
// });

// Route::get('goto/{name?}', function ($name='welcome') {
//     return view($name);
// });
// Route::get('{name?}', function ($name='welcome') {
//     return view($name);
// });
 Route::get('id/{no?}', function ($no=0) {
     return "id:" . $no;
 })->where('no' ,'[0-9]+' );

// // view   <a href={{urlname}} >

// Route::get('aliasname/{name?}',[ 'as'=>'urlname', function ($name=0) {
//     return "id:" . $no;
// }])->where('no' ,'[0-9]+' );
// // Route group


//        ->where ('id' , '[0-9]'+);   // 限定變數為數字
/*
 *
Route::get('group/{name?}',[ 'as'=>'urlname', function ($name=0) {
    return "id:" . $no;
}])->where('no' ,'[0-9]+' );
 * */

Route::get('/',[ 'as'=>'home.index',  'uses' =>'HomeController@index' ] );
Route::get('about',[ 'as'=>'about.index',  'uses' =>'AboutController@index' ] );
Route::get('news',[ 'as'=>'news.index',  'uses' =>'NewsController@index' ] );

 
Route::get('/allen', function () {
    return view('allen');
});

// view welcome
