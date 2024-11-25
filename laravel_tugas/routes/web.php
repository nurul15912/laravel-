<?php

use App\Http\Controllers\DataTableController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template/master');
});

Route::get('/table', function () {
    return view('template.table');
});

Route::get('/data-tables', function () {
    return view('template.data-tables');
});