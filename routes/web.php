<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquiposController;

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
    return view('welcome');
});
/* Route::get('/equipos', function () {
    return view('equipos.index');
});
/**metodo get para obtener  */
// Route::get('/equipos/create',[EquiposController::class,'create']); */

/**para obtener todos los metods  */
Route::resource('equipos', EquiposController::class);

