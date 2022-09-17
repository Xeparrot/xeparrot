<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Http;
use App\Services\GitService;
use Module;
class ModuleExplorer extends Controller
{
    public function explorer(){
        $response = Http::get('https://raw.githubusercontent.com/Xeparrot/module-manager/main/module_service.json');
        $jsonDecoded = json_decode($response);


        return view('backend.module_manager.index',[
                'module_explorer' => $jsonDecoded
            ]);
    }

    public function module_download(Request $request)
    {
        $moduleRepo = $request->module_repo;
        $moduleName = $request->module_name;
        $moduleAuthor = $request->module_author;

        if($request->install_status == 'install'){
            $git = new GitService(base_path('Modules'));

            $author     = $moduleAuthor;
            $repository = $moduleName;
            $branch     = 'main';
            $path = $git->clone($author, $repository, $branch);
            $module = Module::find($moduleName);
            $module->enable();

        }else{
            $module = Module::find($moduleName);
            $module->disable();
            $module->delete();
        }




      return back();
    }
}
