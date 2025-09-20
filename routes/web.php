<?php
use App\Http\Controllers\homepage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimesController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\signinController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\DetailsController;

Route::get('/', [homepage::class, 'index']);



Route::get('/details/{id}', [DetailsController::class, 'index'])->name('details');
Route::get('/movies/{id}', [DetailsController::class, 'show'])->name('movies.show');
Route::get('/movies', [MoviesController::class, 'index'])->name('movies');
Route::get('/series', [SeriesController::class, 'index'])->name('series');
Route::get('/animes', [AnimesController::class, 'index'])->name('animes');


Route::get('/signin', [SigninController::class, 'showForm'])->name('signin.form');
Route::post('/signin', [SigninController::class, 'signin'])->name('signin.store');
Route::get('/signup', [SignupController::class, 'showForm'])->name('signup');
Route::post('/signup', [SignupController::class, 'signup'])->name('signup.store'); 






Route::middleware(['auth'])->group(function () {
    Route::get('/upload', [UploadController::class, 'index']) ->name('upload');
Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');

route::get('/movies_list', [UploadController::class, 'all'])->name('all');
route::resource('movie', UploadController::class);
Route::get('/movies_scarch', [UploadController::class, 'moviesearch'])->name('moviescarch');

    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/'); 
    })->name('logout');
});


Route::middleware(['auth','is_admin'])->group(function () {
    Route::get('/search', [MoviesController::class, 'search'])->name('search');
});




