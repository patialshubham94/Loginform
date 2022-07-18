<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\B2BLeadGenerationController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/f', function () {
    return view('B2BLeadGeneration.form2');
});

Route::get('/', [B2BLeadGenerationController::class, 'createForm']);
Route::post('/', [B2BLeadGenerationController::class, 'ContactUsForm'])->name('contact.store');