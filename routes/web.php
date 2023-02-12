<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Log;
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

Route::get('/', function () {
    // Log::info('ini adalah log info');
    // Log::alert('ini adalah log alert');
    // Log::warning('ini adalah log warning');
    // Log::debug('ini adalah log debug');
    // Log::emergency('ini adalah log emergency');
    // Log::critical('ini adalah log critical');
    Log::notice('ini adalah log notice');
});


// Route::get('/students', [StudentController::class, 'index']);
