<?php

use App\Http\Controllers\DonerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeekerController;
use App\Http\Controllers\UserDetailsController;
use App\Models\UserDetails;
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




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', [ProfileController::class, 'navigator'])->name('navigator');
    Route::post('/addUserDetails', [UserDetailsController::class, 'create'])->name('create');
    Route::get('/become-a-doner', [DonerController::class, 'index'])->name('index');
    Route::post('/confirm-doner', [DonerController::class, 'create'])->name('create');
    Route::get('/seeking-for-blood', [SeekerController::class, 'index'])->name('index');
    Route::post('/store-transaction', [SeekerController::class, 'storeTransaction']);
    Route::post('/search-for-donators', [SeekerController::class, 'searchForDonators']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
