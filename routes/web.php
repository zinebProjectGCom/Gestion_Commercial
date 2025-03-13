<?php






use App\Http\Controllers\FamilleController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\SousFamilleController;
use App\Http\Controllers\ModeReglementController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\UniteController;



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



Route::resource('marques', MarqueController::class);

Route::resource('unites', UniteController::class);



Route::get('/', function () {
    return view('layouts.app');
});

Route::resource('mode_reglements', ModeReglementController::class);
## les route familles , sousFamilles , produits
Route::resource("familles",FamilleController::class);
Route::resource("sousFamilles",SousFamilleController::class);
Route::resource("produits",ProduitController::class);


