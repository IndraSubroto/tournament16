<?php

use App\Tournament;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'DonationController@index')->name('welcome');
Route::post('/finish', function(){
    return redirect()->route('welcome');
})->name('donation.finish');
 
Route::post('/donation/store', 'DonationController@submitDonation')->name('donation.store');
Route::post('/notification/handler', 'DonationController@notificationHandler')->name('notification.handler');

//////////////////////////////////////////////////////////////////////////////

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web','auth','roles']], function () {
    
    Route::group(['roles' => ['Member']], function () {
        Route::get('/register/{title}', 'MemberController@formRegisterTournament');                 #Form Register to Tournament
        Route::post('/register/{id}', 'MemberController@prosesRegisterTournament');                 #Proses Register to Tournamnet
        Route::get('/upgrade', 'MemberController@formUpgrade');                                 #Form Upgrade to Promotor
        Route::post('/upgrade', 'MemberController@prosesUpgrade');                            #Proses Upgrade to Promotor
        Route::get('mylist', 'TournamentController@list');                                            #Show by id user
        Route::get('payment', 'PaymentController@index')->name('ahah');
    });
    
    Route::group(['roles' => ['Member','Promotor']], function () {
        Route::resource('profile', 'UserController');
    });
    
    Route::group(['roles' => ['Admin','Promotor']], function () {
        // ajax request only
        Route::get('/location/province', 'LocationController@province');
        Route::get('/location/city', 'LocationController@city');
        Route::get('/location/district', 'LocationController@district');

        Route::get('tournament/create', 'TournamentController@create');                             #Form Input
        Route::post('tournament', 'TournamentController@store');                                    #Process Input
        Route::get('tournament/{id}/edit', 'TournamentController@edit');                            #Form Edit
        Route::post('tournament/{id}', 'TournamentController@update');                              #Process Edit
        Route::get('list', 'TournamentController@list');                                            #Show by id user
        Route::delete('tournament/{id}', 'TournamentController@destroy');                           #Process Delete
    });
    
    
    Route::group(['roles' => ['Admin','Member','Promotor']], function () {
        Route::get('tournament', 'TournamentController@index');                                     #Show All Tournament
        Route::get('tournament/id={id}&title={title}', 'TournamentController@detail');              #Show Detail Tournament
    });
});
