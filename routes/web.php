<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Auth\ForgotPasswordController;
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

/* Route::get('Prueba', function(){
return "Hola desde web.php";
}
); 

Route::get('nombre/{nombre}', function($nombre)
{
return "Mi nombre es: ". $nombre;
});

Route::get('edad/{edad}', function($edad)
{
return "Mi edad es: ". $edad;
});

Route::get('edad2/{edad?}', function($edad =20)
{
return "Mi edad es: ". $edad;
});

Route::get('controlador', [PruebaController::class, 'index']);
Route::get('name/{nombre}', [PruebaController::class, 'nombre']);

Route::get('/', function () {
    return view('welcome');
});

Route::resource('movie', MovieController::class);

 */

 /* Route::get('admin',[FrontController::class,'admin'])
->name('admin.index'); */

Route::get('/', [FrontController::class,'index'])
->name('index.home');

Route::get('contact', [FrontController::class,'contact'])
->name('contact.send');

Route::get('reviews', [FrontController::class,'reviews'])
->name('reviews.movie');

Auth::routes();

    Route::resource('user',UserController::class);
    Route::get('admin', [AdminController::class, 'index'])->name('admin.index'); 
    Route::get('genre', [GenreController::class, 'index'])->name('genre.index');
    Route::post('add-update-genre', [GenreController::class, 'store']);
    Route::post('edit-genre', [GenreController::class, 'edit']);
    Route::post('delete-genre', [GenreController::class, 'destroy']);
    Route::resource('movie',MovieController::class);
    Route::resource('mail',MailController::class);
    
    Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
    Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
    Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');