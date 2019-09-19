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
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('profile', 'UserController@profile');

//Route::post('profile', 'UserController@update_avatar');


Route::get('user/profile',[

    'uses' => 'ProfilesController@index',
'as' => 'user.profile'

]);

Route::post('user/profile/update',[

    'uses' => 'ProfilesController@update',
    'as' => 'user.profile.update'
]);

//Route::get('/profile','UserController@index')->name('profile');

//Route::post('/profile/update','UserController@update')->name('profile.update');


/*Route::get('/test',function(){
    return App\Profile::find(1)->user;
});
*/


Route::group(['middleware' => ['auth','admin']], function () {
   // Route::get('admin/routes', 'HomeController@admin');
   Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/role-register','Admin\DashboardController@registered');
Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');

Route::get('/role-datail/{id}','Admin\DashboardController@show');

Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');
Route::post('/save-users','Admin\DashboardController@store');



Route::get('/medicaments','Admin\MedicamentsController@index');


});
Route::get('/search','ListeMedicament@search');

Route::get('/medicamentPre','ListeMedicament@index');

Route::get('/fournisseurs','FournisseurController@index');


//Route::get('/home', 'HomeController@index')->name('home');


