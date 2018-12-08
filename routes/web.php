<?php

use App\Cart;

Route::get('/', 'ProductController@frontIndex')->name('products.front.index');
Route::get('/category/{category}', 'ProductController@catIndex')->name('products.front.category');

Auth::routes();

Route::get('admin', function () {
    return view('admin.home');
})->middleware('auth');

Route::resource('admin/products', 'ProductController')->middleware('auth');
Route::resource('admin/categories', 'CategoryController')->middleware('auth');
Route::resource('admin/orders', 'OrderController');

Route::get('cart', function () {
    $oldCart = session()->has('cart') ? session()->get('cart') : null;
    $cart = new Cart($oldCart);
    return view('front.cart', compact('cart'));
})->name('cart');

Route::get('checkout', function () {

    if (!session()->get('cart')) {
        return redirect()->route('products.front.index');
    }

    return view('front.checkout');
})->name('checkout');

Route::get('/confirm', function () {

    return view('front.orderconfirmation');
})->name('confirm');

Route::post('addtocart/{product}', 'ProductController@addToCart')->name('addtocart');
Route::post('removeFromCart/{id}', 'ProductController@removeFromCart')->name('removeFromCart');
