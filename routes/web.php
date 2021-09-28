<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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
    return view('welcome');
});

Route::get("/skills", function () {
    return ['laravel', "php", "vue", "javaScript", "Blade"];
});


Route::get('/project/create', [ProjectController::class, 'create']);
Route::post('/project', [ProjectController::class, 'store'])->name('projectStore');
