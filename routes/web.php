<?php

use App\Models\Curso;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
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

Route::get('/',HomeController::class);


Route::controller(CursoController::class)->group(function(){
    Route::get('cursos','index')->name('cursos.index');
    Route::get('cursos/create','create')->name('cursos.create');
    Route::post('cursos','store')->name('cursos.store');
    Route::get('cursos/{id}','show')->name('cursos.show');
    Route::get('cursos/{curso}/edit','edit')->name('cursos.edit');
    Route::put('cursos/{curso}','update')->name('cursos.update');
});



/*Route::get('/', function () {
    $cursos = Curso::paginate();
    return view('welcome',compact('cursos'));
});*/
