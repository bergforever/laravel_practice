<?php

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

/*
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('store', function () {
    return view('store');
});
Route::get('dt', function () {
    return view('dt');
});
Route::get('sdt', function () {
    return view('sdt');
});
Route::get('form', function () {
    return view('form');
});
Route::get('index', function () {
    return view('index');
});
Route::get('itmd', function () {
    return view('itmd');
});

*/


/*
Route::get('dt', [\App\Http\Controllers\GroceryController::class, 'index']);
Route::get('store', [\App\Http\Controllers\GroceryController::class, 'create']);
Route::post('store', [\App\Http\Controllers\GroceryController::class, 'store']);
*/

/*
Route::get('itmd', [\App\Http\Controllers\uItemController::class, 'index']);
Route::get('sdt', [\App\Http\Controllers\TableController::class, 'index']);
Route::get('form', [\App\Http\Controllers\TableController::class, 'create']);
Route::post('store', [\App\Http\Controllers\TableController::class, 'store']);
*/

/*
Route::get('delete_product/{id}', [\App\Http\Controllers\TableController::class, 'destroy'])->name('delete_product');
Route::get('edit_product/{id}',[\App\Http\Controllers\TableController::class,'edit'])->name('edit_product');
Route::post('update_product/{id}',[\App\Http\Controllers\TableController::class,'update'])->name('update_product');

*/

/*
Route::post('store', [\App\Http\Controllers\uItemController::class, 'store']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/

/*
Route::get('sdtt', [\App\Http\Controllers\ProductController::class, 'index']);

Route::get('form2', [\App\Http\Controllers\ProductController::class, 'create']);

Route::post('store2', [\App\Http\Controllers\ProductController::class, 'store']);


Route::get('sdt', [\App\Http\Controllers\RowController::class, 'index']);
Route::get('form', [\App\Http\Controllers\RowController::class, 'create']);
Route::post('store', [\App\Http\Controllers\RowController::class, 'store']);
*/

//Route::get('utility_form',function (){

    //return view('utility_form');
//});


Route::get('utility_database', function () {
    return view('utility_database');
});


Route::get('utility_database', [\App\Http\Controllers\UtilityStoreController::class, 'index']);
Route::get('utility_form', [\App\Http\Controllers\UtilityStoreController::class, 'create']);
Route::post('store-utility', [\App\Http\Controllers\UtilityStoreController::class, 'store']);
Route::get('delete_commodity/{id}',[\App\Http\Controllers\UtilityStoreController::class,'destroy'])->name('delete_commodity');
Route::get('edit_commodity/{id}',[\App\Http\Controllers\UtilityStoreController::class,'edit'])->name('edit_commodity');
Route::post('update_commodity/{id}',[\App\Http\Controllers\UtilityStoreController::class,'update'])->name('update_commodity');


//modaale

Route::get('utility_modal', function () {
    return view('utility_modal');
});
Route::get('utility_modal', [\App\Http\Controllers\ItemController::class, 'index']);
Route::post('store', [\App\Http\Controllers\ItemController::class, 'store']);
Route::get('delete_item/{id}',[\App\Http\Controllers\ItemController::class,'destroy'])->name('delete_item');
Route::get('edit_item/{id}',[\App\Http\Controllers\ItemController::class,'edit'])->name('edit_item');
Route::post('update_item',[\App\Http\Controllers\ItemController::class,'update'])->name('update_item');

