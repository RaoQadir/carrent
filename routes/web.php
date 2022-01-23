<?php

use App\Http\Controllers\admin\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//------------------- Brand Section ----------------------------------------------
Route::get('show_brand', [AdminController::class, 'showbrand'])->name('admin.brand');
Route::post('add_brand', [AdminController::class, "add_brand"])->name('admin.add_brand');
Route::get('manage_brand', [AdminController::class, 'manage_brand'])->name('admin.manage_brand');
Route::post('edit_brand', [AdminController::class, 'edit_brand'])->name('admin.edit_brand');
Route::get('delete_brand/{id}', [AdminController::class, 'delete_brand'])->name('admin.delete_brand');
Route::post('update_barnd', [AdminController::class, 'update_brand'])->name('admin.update_brand');
//------------------- Add Vehicle ---------------------------------------------------
Route::get('vehicle', [AdminController::class, 'vehicle_index'])->name('admin.vehicles_index');
Route::post('add_vehicle', [AdminController::class, 'add_vehicle'])->name('admin.add_vehicle');
