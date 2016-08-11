<?php

/**
 * Home Page
 */
Route::get('/',function() {
    return view('pages.home');
})->name('home');

/**
 * Root Page Routing
 */
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

/**
 * Counseling Pages Routing
 */
Route::get('/counseling/marriage-and-relationships',function() {
    return view('pages.counseling.relationships');
})->name('relationships');
Route::get('/counseling/stress-and-anxiety',function() {
    return view('pages.counseling.stress');
})->name('stress');
Route::get('/counseling/substance-use',function() {
    return view('pages.counseling.substance');
})->name('substance');

/**
 * Coaching Pages Routing
 */
Route::get('/coaching/life-phase-transitions',function() {
    return view('pages.counseling.lifePhaseTransitions');
})->name('lifePhaseTransitions');
Route::get('/coaching/professional-growth',function() {
    return view('pages.counseling.profGrowth');
})->name('profGrowth');

Route::get('/attributions',function() {
    return view('pages.attributions');
})->name('attributions');