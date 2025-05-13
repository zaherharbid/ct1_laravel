<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('', [AdminController::class, 'index'])->name('index');
    Route::get('/posts', [AdminController::class, 'posts'])->name('posts');
    Route::get('/products', [AdminController::class, 'products'])->name('products');
});

// Route::get('/post/{post}', function(Post $post){
//     // $post = Post::where('id',$id)->get();
//     return $post;
// });


// Route::resource()