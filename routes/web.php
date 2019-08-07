<?php

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

    return view('index');
});

Route::get('/blog', 'HomeController@showBlogList');

Route::get('/contact', function () {

    return view('contact');
});

// Route::get('blogdetail/{n}', function ($n) {
//     return view('blogdetail')->with('numero',$n);

// })-> where('n','[1-3]');
Route::get('/blogdetail/{id}', 'BlogDetail@showBlogdetail');

Route::get('/page/{slug}', 'PageController@showPage');


Route::get('/expertise', function () {


    return view('expertise');

});
Route::get('/prestation', function () {

    return view('prestation');
});

Route::get('/blog2', function () {

    return view('blog2');
});

Route::get('/prestation/pricing', function () {

    return view('prestation.pricing');
});

Route::get('/expertise/pricing', function () {

    return view('expertise.pricing');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



