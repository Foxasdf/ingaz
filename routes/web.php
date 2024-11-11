<?php
use App\Http\Controllers\CoinController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoutcherController;
use App\Http\Controllers\VoutcherTypeController;
use App\Http\Controllers\SubVoutcherController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PassportController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/coins', [CoinController::class, 'index'])->name('coins.index');
Route::get('/coins/{id}', [CoinController::class, 'show'])->name('coins.show');
Route::post('/update-coin-price', [CoinController::class, 'updatePrice'])->name('coins.updatePrice');



Route::get('/voutchers', [VoutcherController::class, 'index'])->name('voutchers.index');
Route::get('/voutchers/{voutcher}', [VoutcherController::class, 'show'])->name('voutchers.show');



Route::get('/voutcher-types', [VoutcherTypeController::class, 'index'])->name('voutcher_types.index');
Route::get('/voutcher-types/{voutcherType}', [VoutcherTypeController::class, 'show'])->name('voutcher_types.show');


Route::get('/sub-voutchers', [SubVoutcherController::class, 'index'])->name('sub_voutchers.index');
Route::get('/sub-voutchers/{subVoutcher}', [SubVoutcherController::class, 'show'])->name('sub_voutchers.show');


Route::get('/journals', [JournalController::class, 'index'])->name('journals.index');
Route::get('/journals/create', [JournalController::class, 'create'])->name('journals.create');
Route::post('/journals', [JournalController::class, 'store'])->name('journals.store');
Route::get('/journals/{journal}', [JournalController::class, 'show'])->name('journals.show');


Route::get('/accounts', [AccountController::class, 'index'])->name('accounts.index');
Route::get('/accounts/{account}', [AccountController::class, 'show'])->name('accounts.show');


Route::get('/passports', [PassportController::class, 'index'])->name('passports.index');
Route::get('/passports/{passport}', [PassportController::class, 'show'])->name('passports.show');
