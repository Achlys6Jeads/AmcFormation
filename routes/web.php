<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompteUtilisateurController;
use Illuminate\Http\Request;


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

Route::get('/test', [CompteUtilisateurController::class, 'getInfo']);


Route::get('/video-{key}', [CompteUtilisateurController::class, 'ShowVideo']);
Route::get('/quiz-{key}', [CompteUtilisateurController::class, 'ShowQuiz']);

Route::get('/resultat', function () {
    return view('resultat');
});
Route::get('/', [CompteUtilisateurController::class, 'Home']);

