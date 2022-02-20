<?php

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

Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/tenant/create', function () {
    return view('landlord.tenant_details.create');
})->name('landlord.tenant_details.create');

Route::get('/tenant/index', function () {
    return view('landlord.tenant_details.index');
})->name('tenant_index');

Route::get('/bill', function () {
    return view('landlord.bill_details.create');
})->name('landlord.bill_details.create');

Route::get('/bill/index', function () {
    return view('landlord.bill_details.index');
})->name('landlord.bill_details.index');

Route::get('/property/index', function () {
    return view('landlord.property_details.index');
})->name('landlord.property_details.index');

Route::get('/property/create', function () {
    return view('landlord.property_details.create');
})->name('landlord.property_details.create');

Route::get('/notice/template', function () {
    return view('landlord.evacuation_notice.template');
})->name('landlord.evacuation_notice.template');

Route::get('/notice/create', function () {
    return view('landlord.evacuation_notice.create');
})->name('landlord.evacuation_notice.create');

Route::get('/notice/index', function () {
    return view('landlord.evacuation_notice.index');
})->name('landlord.evacuation_notice.index');