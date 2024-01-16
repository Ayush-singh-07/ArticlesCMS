<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DefaultController;

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

Route::match(['get', 'post'], '/', [AuthController::class, "login"])->name('login');


Route::middleware(['auth', 'user_access'])->group(function () {
    Route::match(['get', 'post'], '/logout', [AuthController::class, "logout"])->name('logout');
    Route::match(['get', 'post'], '/admin/dashboard', [AdminController::class, "adminDashboard"])->name("admin_dashboard");
    Route::match(['get', 'post'], '/manage-articles', [DefaultController::class, "manageArticles"])->name("manageArticles");
    Route::get('/delete-article/{article_id}', [DefaultController::class, "deleteArticle"])->name("deleteArticle");
    Route::match(['get', 'post'], '/edit-articles/{article_id}', [DefaultController::class, "editArticle"])->name("editArticle");
    Route::get('articles', [DefaultController::class, "articles"])->name("articles");
});

