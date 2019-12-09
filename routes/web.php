<?php

use App\Acme\SingleResponsibility\Reporting\HtmlOutput;
use App\Acme\SingleResponsibility\Reporting\Repositories\SalesRepository;
use App\Acme\SingleResponsibility\Reporting\SalesReporter;
use Carbon\Carbon;

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

    $report = new SalesReporter(new SalesRepository);

    $begin = Carbon::now()->subDays(10);
    $end = Carbon::now();

    return $report->between($begin, $end, new HtmlOutput);

});
