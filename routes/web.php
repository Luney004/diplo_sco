<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SuiviController;
use App\Http\Controllers\ReleveController;
use App\Http\Controllers\DiplomeController;
use App\Http\Controllers\Admin\PostController as AdminPostController;

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

//Route::post('/demandereleve', [PostController::class, 'askreleve']);


Route::get('/', [PostController::class, 'welcome']);

Route::get('/demandediplome', [DiplomeController::class, 'askdiplome']);
Route::post('/demandediplome', [DiplomeController::class, 'askdiplomeSend']);

Route::get('/demandereleve', [ReleveController::class, 'askreleve']);

Route::get('/suivi', [SuiviController::class, 'follow']);

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin/posts', function () {
return view('admin.posts.index');
})->middleware(['auth'])->name('home');*/

  Route::middleware(['auth'])->name('admin.')->prefix('admin')->group(function () {
  Route::resource('posts', AdminPostController::class);
  });

require __DIR__.'/auth.php';
