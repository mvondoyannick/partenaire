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

Route::get('/', 'MainController@login');
Route::post('/auth', array(
    'as'=>'login',
    'uses'=>'MainController@authPartner'
));
Route::get('/partner', array(
    'as'=>'partner',
    'uses'=>'MainController@index'));
//new user
Route::get('/partner/account/new', array(
    'as'=>'new',
    'uses'=>'MainController@newCustomer'));
//creation effective
Route::post('/partner/account/new/create', array(
    'as' => 'create',
    'uses'=> 'MainController@customerCreate'
));

//credit user
Route::get('/partner/account/credit', array(
    'as'=>'credit',
    'uses'=>'MainController@credit'));

//credation affectif du compte client
Route::post('/partner/account/credit/go', array(
    'as'=>'creditGo',
    'uses'=>'MainController@creditGo'
));

//debit user
Route::get('/partner/account/debit', array(
    'as'=>'debit',
    'uses'=>'MainController@debit'));

//debit affectif du compte client
Route::post('/partner/account/debit/go', array(
    'as'=>'debitGo',
    'uses'=>'MainController@debitGo'
));

//activate an account
Route::get('/partner/account/activate', array(
    'as'=>'activate',
    'uses'=>'MainController@activer'));

Route::get('/partner/account/activate/step_2/', array(
    'as'=>'activate_2',
    'uses'=>'MainController@activer_step_2'));

Route::post('/partner/account/activate/go', array(
    'as'=>'activerGo',
    'uses'=>'MainController@activerGo'
));

//lock user account
Route::get('/partner/account/lock', array(
    'as'=>'lock',
    'uses'=>'MainController@bloquer'));

//unlock user account
Route::get('/partner/account/unlock', array(
    'as'=>'unlock',
    'uses'=>'MainController@debloquer'));

//agent history
Route::get('/partner/agent/history', array(
    'as'=>'history',
    'uses'=>'MainController@history'));

//Agence history transaction
Route::get('/partner/logs', array(
    'as'=>'logs',
    'uses'=>'MainController@logs'));

//pour la recherche des customers
Route::get('/partner/customer/search', array(
    'as'=>'search',
    'uses'=>'MainController@search'));

//pour la recherche des customers
Route::get('/partner/admin', array(
    'as'=>'admin',
    'uses'=>'MainController@admin'));

//gestion des agences
Route::get('/partner/admin/agences', array(
    'as'=>'agences',
    'uses'=>'MainController@agences'));

//gestion des parametres
Route::get('/partner/admin/users', array(
    'as'=>'users',
    'uses'=>'MainController@users'));