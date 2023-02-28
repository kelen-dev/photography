<?php

use App\Http\Controllers\ContactsController;
use App\Mail\ContactMessageCreated;
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
    return view('home');
})->name('home');

Route::get('/maintenance', function () {
    return view('maintenance');
})->name('maintenance');

Route::get('/cv', function () {
    return view('/p/cv');
})->name('cv');

Route::get('/a-propos', function () {
    return view('/p/a-propos');
})->name('a-propos');

Route::get('/mentions-legales', function () {
    return view('/p/mentions-legales');
})->name('mentions-legales');

Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/', [ContactsController::class, 'create'])->name('index');
    Route::post('/', [ContactsController::class, 'store'])->name('index');

    Route::get('/test-email', function () {
        return new ContactMessageCreated('KelenS', 'contact@kelens.fr', 'Ceci est un test');
    });
});
