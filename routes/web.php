<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::fallback(function(){
    return view('errors.404');
});
Route::get('/',function(){
    return view('home.home');
})->name('home');
Route::get('/register', [RegisteredUserController::class, 'create'])->name('inscription');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('inscription.store');
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'login'])->name('login.login');
Route::middleware(['auth'])->group(function () {
Route::get('/profile', [ProfilController::class, 'show'])->name('profil');
Route::get('/profile/edit', [ProfilController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update/{id}', [ProfilController::class, 'update'])->name('profile.update');
Route::get('/profile/confirm-delete', [ProfilController::class, 'destroy'])->name('confirm-delete');
Route::delete('/profile/destroy', [ProfilController::class, 'delete'])->name('profile.destroy');
Route::get('/logout', [AuthenticatedSessionController::class, 'logout'])->name('logout');
});
Route::middleware(['auth:sanctum', 'api', 'admin','verified'])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('admin.index');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('admin.edit');
    Route::put('/users/{user}/update', [UserController::class, 'update'])->name('admin.update');
    Route::get('/users/{user}/confirm-delete', [UserController::class, 'confirmDelete'])->name('admin.confirm-delete');
    Route::delete('/users/{user}/destroy', [UserController::class, 'destroy'])->name('admin.destroy');
    Route::prefix('/admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    });
});
Route::get('/admin/login', [AuthenticatedSessionController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthenticatedSessionController::class, 'adminLogin']);
Route::get('/test',function(){
    return view('test');
})->name('test');

Route::get('/interface', function () {
    return view('photoshop.interface');
})->name('interface');