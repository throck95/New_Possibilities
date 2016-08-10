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

Route::get('/',function() {
    return view('pages.home');
})->name('home');
Route::get('/counseling',function() {
    return view('pages.counseling');
})->name('counseling');
Route::get('/coaching',function() {
    return view('pages.coaching');
})->name('coaching');
Route::get('/our-team',function() {
    return view('pages.team');
})->name('team');
Route::get('/what-to-expect',function() {
    return view('pages.expectation');
})->name('expectation');
Route::get('/contact-us',function() {
    return view('pages.contact');
})->name('contact');

Route::get('/counseling/marriage-and-relationships',function() {
    return view('pages.counseling.relationships');
})->name('relationships');
Route::get('/counseling/stress-and-anxiety',function() {
    return view('pages.counseling.stress');
})->name('stress');
Route::get('/counseling/substance-use',function() {
    return view('pages.counseling.substance');
})->name('substance');

Route::get('/coaching/life-phase-transitions',function() {
    return view('pages.counseling.lifePhaseTransitions');
})->name('lifePhaseTransitions');
Route::get('/coaching/professional-growth',function() {
    return view('pages.counseling.profGrowth');
})->name('profGrowth');