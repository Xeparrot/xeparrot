<?php

if (! function_exists('defineMenuStyle')) {

    function defineMenuStyle($class,$name,$moduleName)
    {
        if(Schema::hasTable('settings')){
            $menus =  config('menus.styles');
            $menus[$name] = $class;

            $themeDetails = getSetting('default_theme');

            $getModuleDetails = Module::find($moduleName);

            if($themeDetails == $getModuleDetails->getName())
            {
                Config::set('menus.styles', $menus);
                return 'menus updated';
            }else{
                return 'menus not updated';
            }
        }else{
            return 'menus not updated';
        }





    }
}