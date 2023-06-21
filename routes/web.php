<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::namespace('Backend')->group(function(){

    Route::prefix('panel')->group(function(){

        Route::middleware(['auth'])->group(function(){


            Route::get('/',[App\Http\Controllers\Backend\DefaultController::class, 'index'])->name('backend.default.index');

            // KATEGORİ PART
            Route::get('/kategoriler',[App\Http\Controllers\Backend\CategoryController::class, 'index'])->name('backend.category.index');
            Route::get('/kategori/ekle',[App\Http\Controllers\Backend\CategoryController::class, 'create'])->name('backend.category.create');
            Route::post('/kategori/kaydet',[App\Http\Controllers\Backend\CategoryController::class, 'store'])->name('backend.category.store');
            Route::get('/kategori/duzenle/{id}',[App\Http\Controllers\Backend\CategoryController::class, 'edit'])->name('backend.category.edit');
            Route::put('/kategori/duzenle/{id}',[App\Http\Controllers\Backend\CategoryController::class, 'update'])->name('backend.category.update');
            Route::get('/kategori/sil/{id}',[App\Http\Controllers\Backend\CategoryController::class, 'delete'])->name('backend.category.delete');

            // BLOG PART

            Route::get('/blog',[App\Http\Controllers\Backend\BlogController::class, 'index'])->name('backend.blog.index');
            Route::get('/blog/ekle',[App\Http\Controllers\Backend\BlogController::class, 'create'])->name('backend.blog.create');
            Route::post('/blog/kaydet',[App\Http\Controllers\Backend\BlogController::class, 'store'])->name('backend.blog.store');
            Route::get('/blog/duzenle/{id}',[App\Http\Controllers\Backend\BlogController::class, 'edit'])->name('backend.blog.edit');
            Route::put('/blog/duzenle/{id}',[App\Http\Controllers\Backend\BlogController::class, 'update'])->name('backend.blog.update');
            Route::get('/blog/sil/{id}',[App\Http\Controllers\Backend\BlogController::class, 'delete'])->name('backend.blog.delete');

        });


    });


});


Route::namespace('Frontend')->group(function(){

    Route::get('/',[App\Http\Controllers\Frontend\DefaultController::class, 'index'])->name('frontend.default.index');
    

    // KATEGORİ PART
    Route::get('/kategoriler',[App\Http\Controllers\Frontend\CategoryController::class, 'index'])->name('frontend.category.index');
    Route::get('/kategori/{slug}/{id}',[App\Http\Controllers\Frontend\CategoryController::class, 'detail'])->name('frontend.category.detail');

    // BLOG PART
    Route::get('/blog',[App\Http\Controllers\Frontend\BlogController::class, 'index'])->name('frontend.blog.index');
    Route::get('/blog/{slug}/{id}',[App\Http\Controllers\Frontend\BlogController::class, 'detail'])->name('frontend.blog.detail');

});