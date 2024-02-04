<?php

<<<<<<< HEAD
use App\Http\Controllers\Admin\BureauController;
use App\Http\Controllers\Admin\ProjetController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjetsController;
use App\Http\Controllers\ServicesController;
use App\Models\Projet;
=======
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
>>>>>>> 4447606fbc3116dd24972f4b7c06707113612a4e
use Illuminate\Support\Facades\Route;
use Stichoza\GoogleTranslate\GoogleTranslate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('', function () {
    return view('pages.principal.index');
});

Route::get('/', [PrincipalController::class, 'index'])->name('principal.index');
Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
Route::get('/news', [NewsController::class, 'index'])->name('news.index');

Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::fallback(function () {
//     return view('pages.notFound');
// });

// crud service admin

Route::post('adminservice/create', [ServiceController::class, 'store']);
Route::put('adminservice/{id}/edit', [ServiceController::class, 'update'])->name('admin.serviices.edit');
Route::get('adminservice/{id}/show', [ServiceController::class, 'show'])->name('admin.serviices.show');
Route::resource('adminservice', ServiceController::class);


// crud projet admin

Route::post('adminbureau/create', [BureauController::class, 'store']);
Route::get('adminbureau/create', [BureauController::class, 'create']);
Route::get('adminbureau/create', [BureauController::class, 'services']);
Route::get('adminbureau', [BureauController::class, 'index'])->name('admin.bureaux.index');
Route::delete('adminbureau/{id}/delete', [BureauController::class, 'destroy']);
Route::put('adminbureau/{id}/edit', [BureauController::class, 'update'])->name('admin.bureaux.edit');
Route::get('adminbureau/{id}/edit', [BureauController::class, 'edit']);
Route::get('adminbureau/{id}/show', [BureauController::class, 'show'])->name('admin.bureaux.show');


// crud projet admin

Route::get('adminprojet', [ProjetController::class, 'index'])->name('admin.projets.index');
Route::post('adminprojet/create', [ProjetController::class, 'store']);
Route::get('adminprojet/create', [ProjetController::class, 'create'])->name('admin.projets.create');
Route::delete('adminprojet/{id}/delete', [ProjetController::class, 'destroy']);
Route::get('adminprojet/{id}/edit', [ProjetController::class, 'edit']);
Route::get('adminprojet/{id}/show', [ProjetController::class, 'show']);
Route::put('adminprojet/{id}/edit', [ProjetController::class, 'update']);



// simple pages routes

// Principal simple pages routes
Route::get('/', [PrincipalController::class, 'index'])->name('principal.index');

// Services simple pages routes
Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
Route::get('/services/{id}/show', [ServicesController::class, 'show'])->name('services.index');

// Projets simple pages routes
Route::get('/projets', [ProjetsController::class, 'index'])->name('projets.index');
Route::get('/projets/{id}/show', [ProjetsController::class, 'show'])->name('services.index');

// Contact simple pages routes
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts.index');

require __DIR__ . '/auth.php';
