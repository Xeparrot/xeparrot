<?php

namespace App\Http\Controllers\Backend;
use Menu;
use URL;
use App\Services\SettingPageGeneratorBackend;
/**
 * Class DashboardController.
 */
class DashboardController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {


        return view('backend.dashboard');
    }
}
