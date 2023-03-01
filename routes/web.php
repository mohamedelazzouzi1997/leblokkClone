<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\ReservationController;


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

Route::get('/international', function () {
    return view('clients.pages.internationale');
})->name('internationale');

Route::get('/cuisine-japonais', function () {
    return view('clients.pages.cuisine-japonais');
})->name('cuisine-japonais');

Route::get('/nos-spectacles', function () {
    return view('clients.pages.nos-spectacles');
})->name('nos-spectacles');


//reservation route

Route::post('reservation/store',[ReservationController::class,'store'])->name('reservation.store');




//admin routes
Route::middleware(['auth','is_admin'])->group(function () {
    Route::get('/reservation', [ReservationController::class,'index'])->name('dashboard');
    Route::get('/reservation/{id}/details', [ReservationController::class,'show'])->name('reservation.show');
    Route::post('/reservation/{id}/delete', [ReservationController::class,'delete'])->name('reservation.delete');
    Route::post('/reservation/{id}/reject', [ReservationController::class,'reject'])->name('reservation.reject');
    Route::post('/reservation/{id}/confirm', [ReservationController::class,'confirm'])->name('reservation.confirm');
});


Route::get('/{origin?}', function ($origin = 'direct') {
    $minutes = 15;

    if(Cookie::get('leblokk_origin')){
        $origin = Cookie::get('leblokk_origin');
        return view('clients.home',compact('origin'));

    }else{
        Cookie::queue('leblokk_origin', $origin, $minutes);

    }

    return view('clients.home',compact('origin'));
})->name('home.index');