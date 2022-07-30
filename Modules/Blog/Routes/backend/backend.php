<?php

Route::prefix('blog/')->group(function() {
    Route::get('/', 'BlogController@index')->name('blog.index');
    Route::get('edit/{id}', 'BlogController@edit')->name('blog.edit');
    Route::get('delete', 'BlogController@delete')->name('blog.delete');
    Route::post('store', 'BlogController@store')->name('blog.store');
});

