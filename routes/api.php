<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\ModuleExplorer;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::get('module-content-step/{idx}/{repo}/{author_name}',[ModuleExplorer::class,'module_content'])->name('settings.index');
