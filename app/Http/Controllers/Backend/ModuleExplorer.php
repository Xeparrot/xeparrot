<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Http;
use App\Services\GitService;
use Module;
use Illuminate\Support\Facades\Artisan;
class ModuleExplorer extends Controller
{
    public function explorer(){
        $response = Http::get('https://raw.githubusercontent.com/Xeparrot/module-manager/main/module_service.json');
        $jsonDecoded = json_decode($response);


        return view('backend.module_manager.index',[
                'module_explorer' => $jsonDecoded
            ]);
    }


    public function install_page($repo,$author,$name,$function)
    {
        return view('backend.module_manager.install_wizard',[
            'repo' => $repo,
            'author' => $author,
            'name' => $name,
            'function' => $function
        ]);
    }

    public function migration (Request $request)
    {
        Artisan::call('migrate');
        return redirect()->route('admin.module.explorer')->withFlashSuccess('DB migrated and Module Installed');
    }

    public function module_download(Request $request)
    {
        $moduleName = $request->module_name;
        $moduleAuthor = $request->module_author;

        if($request->install_status == 'install'){
            $git = new GitService(base_path('Modules'));

            $author     = $moduleAuthor;
            $repository = $moduleName;
            $branch     = 'main';
            $path = $git->clone($author, $repository, $branch);
            $module = Module::find($moduleName);
            $module->boot();
            $module->enable();

            Artisan::call('migrate');
            return back()->withFlashSuccess('Module install success');

        }else{
            $module = Module::find($moduleName);
            $module->disable();
            $module->delete();
            Artisan::call('migrate');
            return back()->withFlashSuccess('Module uninstalled success');
        }


    }


    public function module_content($idx,$repo,$author_name,Request $request)
    {
        if($idx == 1)
        {
            $retunData = view('backend.module_manager.module_licenses.gnu_public');
            return $retunData;
        }elseif ($idx == 2)
        {
            $moduleName = $repo;
            $moduleAuthor = $author_name;

            $git = new GitService(base_path('Modules'));

            $author     = $moduleAuthor;
            $repository = $moduleName;
            $branch     = 'main';
            $path = $git->clone($author, $repository, $branch);
            $module = Module::find($moduleName);
            $module->boot();
            $module->enable();

            Artisan::call('migrate');

            $retunData = view('backend.includes.partials.process_bar');
            return $retunData;
        }
    }

}


