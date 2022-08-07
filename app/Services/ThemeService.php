<?php
/**
 * Created by PhpStorm.
 * User: Sanjaya Senevirathne
 * Date: 7/8/2022
 * Time: 5:13 PM
 */

namespace App\Services;
use Nwidart\Modules\Facades\Module;
class ThemeService
{
    public static function getThemeList()
    {
        $moduleDetails = Module::allEnabled();

        $themeList = [];
        foreach ($moduleDetails as $moduleItem)
        {
            $moduleJson = $moduleItem->json();
            if($moduleJson->module_type == 'theme')
            {
                array_push($themeList,$moduleItem->getName());
            }
        }

        return $themeList;
    }
}