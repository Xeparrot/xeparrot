<?php

use App\Http\Controllers\Backend\DashboardController;
use Tabuna\Breadcrumbs\Trail;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\ModuleExplorer;
use App\Http\Controllers\Backend\CustomerController;
// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
    });


Route::get('settings/{setting_type}',[SettingsController::class,'index'])->name('settings.index');
Route::post('settings-store',[SettingsController::class,'store'])->name('settings.store');


Route::get('customers',[CustomerController::class,'index'])->name('customer.index');

Route::get('module-explorer',[ModuleExplorer::class,'explorer'])->name('module.explorer');
Route::get('module-install/{repo?}/{author}/{name}/{function}',[ModuleExplorer::class,'install_page'])->name('module.install');
Route::post('module-download',[ModuleExplorer::class,'module_download'])->name('module.download');
Route::post('module-migration',[ModuleExplorer::class,'migration'])->name('module.migration');