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
    return view('pages.home');
});

// Detect max size of attributes.
Route::prefix('sdetect')->group(function () {
    // Incoterms
    Route::get('incoterms/groups', 'SizeDetectController@incotermsGroups');
    Route::get('incoterms', 'SizeDetectController@incoterms');

    // Payment
    Route::get('payment/forms', 'SizeDetectController@paymentForms');
    Route::get('payment/methods', 'SizeDetectController@paymentMethods');
});