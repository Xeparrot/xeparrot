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
        $settingPageGenerator = new SettingPageGeneratorBackend('FileManager','values','https://hellocom.com');



        $settingPageGenerator->addController(
            'project_name',
                true,
                'Project Name',
                'Please enter your project name',
                'Projects',
                'text',
                'hello');


        $settingPageGenerator->addController(
            'project_example',
            true,
            'Project Example',
            'This is best example label',
            'Hello',
            'select',
                'values2',[
            [
                'name' => 'Sanjaya Senevirathne',
                'value' => 'values'

            ],
            [
                'name' => 'Kumara Bandara',
                'value' => 'values2'
            ]
        ]);

        $settingPageGenerator->addController(
            'project_name',
            false,
            'Project Name',
            'Please enter your project name',
            'Projects',
            'textarea',
            'hello');


        $settingPageGenerator->addController(
            'project_name',
            true,
            'Project Name',
            'Please enter your project name',
            'Projects',
            'file',
            'hello');

        $settingPageGenerator->renderControllers();
        $category = $settingPageGenerator->getContent();

        return view($settingPageGenerator->renderPage(),[
            'formData' => $category,
            'formURL' => ''
        ]);
    }
}
