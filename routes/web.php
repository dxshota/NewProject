<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PlayerPositionController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(PostController::class)->middleware(['auth'])->group(function(){ //認証なしユーザーの制限
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/', [PostController::class, 'callTemplate'])->name('index');//テンプレート欄要素表示
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/get-formation-positions/{formationId}', [PostController::class, 'getFormationPositions']);//テンプレート座標適用
    Route::post('/save-post-data', [PostController::class, 'savePostData'])->name('save-post-data'); //投稿データ保存関数
    /*Route::post('/save-template', [PostController::class, 'saveTemplate'])->name('save.template'); //テンプレート座標保存関数（開発用）
    
    */
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

require __DIR__.'/auth.php';
