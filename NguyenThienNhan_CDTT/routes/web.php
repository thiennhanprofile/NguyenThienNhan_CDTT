<?php
use App\Http\Controllers\AuthController;
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

Route::get('/get', function () {
    return view('welcome');
});
Route::get('category/index', [CategoryController::class, 'index']);
Route::get('admin/login', [AuthController::class, 'login'])->route(‘admin.login’);