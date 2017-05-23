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

/*Route::get('/', function () {
    return view('welcome');
});
*/

/*Route::get('/', 'OradaController@index');*/


/*Route::get('about', function () {
	$bitfumes = ['This','is','Bitfumes'];

    return view('about')->with(['bitfumes' =>$bitfumes]);*/
    
    // 1. withreturn 

    // 2. withBitfumes -- return view('about')->withBitfumes($bitfumes);

    // 3. [''] - return view('about')->with(['bitfumes' =>$bitfumes]);

    // 4. compact - return view('about',compact('bitfumes'));

//Route::resource('contact', 'ContactController');

 Route::get('/contact', function () {
    return view('form.contactForm');
});


 Route::get('/', function () {
    return view('home');
});
   

Route::get('about', function () {
    return view('about');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});


Route::get('lang/{lang}', function($lang) {
	$available = ['en', 'th'];
	Session::put('locale',
		     in_array($lang, $available)?
		     $lang : Config::get('app.locale'));
	return redirect()->back();

});

Route::get('/clear', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});




