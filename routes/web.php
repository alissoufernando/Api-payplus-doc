<?php

use App\Http\Livewire\DocumentationComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\WelcomeComponent;

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

Route::get('/', WelcomeComponent::class)->name('welcome');
Route::get('/documentations', DocumentationComponent::class)->name('documentations');
Route::view('/swagger', 'swagger');


