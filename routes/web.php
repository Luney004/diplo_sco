<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SuiviController;
use App\Http\Controllers\ReleveController;
use App\Http\Controllers\DiplomeController;

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

Route::get('/', [PostController::class, 'welcome']);

Route::get('/demandediplome', [DiplomeController::class, 'askdiplome']);
Route::post('/demandediplome', [DiplomeController::class, 'askdiplomeSend']);

Route::get('/demandereleve', [ReleveController::class, 'askreleve']);

Route::get('/suivi', [SuiviController::class, 'follow']);

//Route::post('/demandereleve', [PostController::class, 'askreleve']);
