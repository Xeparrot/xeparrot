<?php

use App\Http\Controllers\Backend\DashboardController;
use Tabuna\Breadcrumbs\Trail;
use App\Http\Controllers\Backend\SettingsController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
    });


Route::get('settings/{setting_type}',[SettingsController::class,'index'])->name('settings.index');
Route::post('settings-store',[SettingsController::class,'store'])->name('settings.store');
