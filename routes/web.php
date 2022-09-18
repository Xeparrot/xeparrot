<?php

use App\Http\Controllers\LocaleController;
use App\Http\Controllers\Frontend\AizUploadController;
/*
 * Global Routes
 *
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', [LocaleController::class, 'change'])->name('locale.change');

/*
 * Frontend Routes
 */
Route::group(['as' => 'frontend.'], function () {
    includeRouteFiles(__DIR__.'/frontend/');
});

/*
 * Backend Routes
 *
 * These routes can only be accessed by users with type `admin`
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    includeRouteFiles(__DIR__.'/backend/');
});

includeRouteFiles(base_path('menu'));



Route::post('/xem-uploader', [AizUploadController::class, 'show_uploader']);
Route::post('/xem-uploader/upload', [AizUploadController::class, 'upload']);
Route::get('/xem-uploader/get_uploaded_files', [AizUploadController::class, 'get_uploaded_files']);
Route::post('/xem-uploader/get_file_by_ids', [AizUploadController::class, 'get_preview_files']);
Route::get('/xem-uploader/download/{id}', [AizUploadController::class, 'attachment_download'])->name('download_attachment');
Route::get('/uploads/all/{file_name}',[AizUploadController::class,'get_image_content']);