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

//Route::get('/home', 'HomeController@index')->name('home');


//profile

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
/*   Route::get('/dashboard', function () {
    return view('admin.dashboard'); });*/

    Route::get('/dashboard','Admin\MedicamentsController@index');



//user

Route::get('/role-register','Admin\DashboardController@registered');
Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');

Route::get('/role-datail/{id}','Admin\DashboardController@show');

Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');
Route::post('/save-users','Admin\DashboardController@store');

//Medicament

Route::get('/medicaments','Admin\MedicamentsController@indexGes');


//Fournisseur


Route::get('/fournisseur','FournisseurController@indexGes');



//AChat

Route::get('/save-achat','Admin\AchatsController@store');

Route::get('/achat-register','Admin\AchatsController@registered');
Route::get('/achat-edit/{numA}','Admin\AchatsController@achatedit');
Route::put('/achat-update/{numA}','Admin\AchatsController@achatupdate');

Route::delete('/achat-delete/{numA}','Admin\AchatsController@registerdelete');




//Lot

Route::get('lot','Admin\LotController@index');
Route::get('lot/{numL}','Admin\LotController@afficher');

//vente






});

//users

Route::get('/medPre','ListeMedicament@indexUser');
Route::get('/four','users\FournisseurController@index');
Route::get('/achat','users\AchatController@index');
Route::get('/lot','users\LotController@index');
Route::get('/dashboard','ListeMedicament@indexDash');






Route::get('/home', 'HomeController@index');


//medicament
Route::get('/search','ListeMedicament@search');

Route::get('/medicamentPre','ListeMedicament@index');

//liste des fournisseur

Route::get('/fournisseurs','FournisseurController@index');

//contact

Route::get('/contact',function(){
return view('contact');

});





