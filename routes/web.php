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

use Spatie\Analytics\Period;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data', function (){
//    $analyticsData = Analytics::fetchTopReferrers(Period::days(7));

//    $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));
//
//    $analyticsData = Analytics::fetchTotalVisitorsAndPageViews(Period::days(7));
//
    $analyticsData = Analytics::fetchMostVisitedPages(Period::days(7));

    dd($analyticsData);
});
