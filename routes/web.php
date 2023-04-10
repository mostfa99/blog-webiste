<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicesDetailsController;
use App\Http\Controllers\SettingsController;
use App\Models\Setting;
use Illuminate\Http\Request;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/dashbord/services', ServiceController::class);
    Route::post('/dashboard/services/create', [ServiceController::class, 'store'])->name('admin.services.store');
    Route::get('/dashboard/contact', [ContactController::class, 'index'])->name('contact');
    Route::resource('/dashboard/servicesdetails', ServicesDetailsController::class);
    Route::get('/dashboard/settings', [SettingsController::class, 'create'])->name('settings');
    Route::post('/dashboard/settings', [SettingsController::class, 'store']);
});

Route::get('/home', [HomepageController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Route::get('/dashbord', function(){
// return view('admin.dashbord');
// })->middleware('auth');

require __DIR__ . '/auth.php';
