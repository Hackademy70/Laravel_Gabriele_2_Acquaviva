<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/chisiamo', [PublicController::class, 'chisiamo']);

Route::get('prodotti', [PublicController::class, 'products'])->name('prodotti');


Route::get('/product/{id}', [PublicController::class, 'showProducts'])
    ->name('details.product');

Route::get('search', [PublicController::class, 'searchProduct'])->name('product.search');

Route::get('/page404', function () {
    return view('page404');
});

Route::get('/contacts', [ContactController::class, 'contactUs'])->name('contact-us');

Route::post('/contact-send', [ContactController::class, 'contactSend'])->name('contactSend');

Route::get('/thanks', [PublicController::class, 'thanksPage'])->name('thanksPage');
Route::get('/create', [PublicController::class, 'createProduct'])->name('create.product');

Route::post('/product-store', [PublicController::class, 'store'])->name('product.store');
Route::get('/newproduct', [PublicController::class, 'newProduct'])->name('new.product');