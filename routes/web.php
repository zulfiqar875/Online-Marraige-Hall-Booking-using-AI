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
Route::get('/registerhall', function () {
    return view('registerhall');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/ownerprofile/{id}', function () {
    return view('ownerprofile');
});
Route::get('/back','HallCont@back');
Route::get('/marriagehall','HallCont@marriagehalllist');
Route::get('/openhall','HallCont@openhalllist');
Route::get('/partyhall','HallCont@partyhalllist');
Route::get('/eventcaterers','HallCont@eventcatererslist');
Route::get('/floristdeco','HallCont@floristdecolist');
Route::get('/carrental','HallCont@carrentallist');
Route::get('/profile/{id}','HallCont@ownerprofile');
Route::get('/marriagehall/{type}','HallCont@marriagehalllist');
Route::get('/booking/{id}','HallCont@Booking');
Route::get('/Hallinfo/{OID}/{id}','HallCont@Hallinfo');
Route::get('/clientprofile/{cid}/{cbid}','HallCont@clientprofile');

Route::get('/morebooking/{cid}','HallCont@morebookinglist');
Route::get('/MoreHallinfo/{OID}/{id}/{cid}','HallCont@MoreHallinfo');
Route::get('/morehallbooking/{id}/{cid}','HallCont@MoreBookinghall');
Route::post('/clientportal/{OID}/{cid}','HallCont@moreaddclientdata');

Route::post('/addhall/{id}','HallCont@addhall');
Route::post('/portal','HallCont@authaccount');
Route::post('/adddata','HallCont@adddata');
Route::post('/onwerlogin/{OID}','HallCont@addclientdata');
Route::post('/cashamount/{cbid}','HallCont@easypaisa');
Route::get('/accept/{cbid}','HallCont@accept');
Route::get('/reject/{cbid}','HallCont@reject');

Route::post('/updateowner/{id}','HallCont@updateonwer');
Route::get('/delbooking/{cbid}','HallCont@delbooking');
Route::post('/rating/{cbid}','HallCont@rating');

