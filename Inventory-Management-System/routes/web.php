<?php

use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

// ... existing routes ...

Route::resource('products', ProductController::class);

Route::get('/products', [ProductController::class, 'index']);



// Route to list all products
Route::get('/products', 'ProductController')->name('products.index');

// Route to create a new product
Route::get('/products/create', 'ProductController@create')->name('products.create');

// Route to store a new product
Route::post('/products', 'ProductController@store')->name('products.store');

// Route to show a specific product
Route::get('/products/{product}', 'ProductController@show')->name('products.show');

// Route to edit a specific product
Route::get('/products/{product}/edit', 'ProductController@edit')->name('products.edit');

// Route to update a specific product
Route::put('/products/{product}', 'ProductController@update')->name('products.update');

// Route to delete a specific product
Route::delete('/products/{product}', 'ProductController@destroy')->name('products.destroy');







