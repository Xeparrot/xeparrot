<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModuleExplorer extends Controller
{
    public function explorer(){
        return view('backend.module_manager.index');
    }
}
