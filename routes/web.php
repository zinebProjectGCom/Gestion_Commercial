<?php



use App\Http\Controllers\FamilleController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\SousFamilleController;
use App\Http\Controllers\ModeReglementController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('mode_reglements', ModeReglementController::class);
## les route familles , sousFamilles , produits
Route::resource("familles",FamilleController::class);
Route::resource("sousFamilles",SousFamilleController::class);
Route::resource("produits",ProduitController::class);

