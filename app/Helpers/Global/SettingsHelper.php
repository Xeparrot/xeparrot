<?php
use App\Models\Models\Settings;
use App\Services\SettingsEngineService;

if (! function_exists('create_settings')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function create_settings($key,$value,$type,$settings_category,$description=null,$required=null,$fuction = null, $options = null,$detault =null,$is_visible = null)
    {

        $settingDetails = Settings::where('key',$key)->first();

        if($settingDetails)
        {
            return 'settinga_already_added';
        }else{
            $settingQ = new Settings;
            $settingQ->key = $key;
            $settingQ->value = $value;
            $settingQ->type = $type;
            $settingQ->description = $description;
            $settingQ->required = $required;
            $settingQ->settings_category = $settings_category;
            $settingQ->function = $fuction;
            if($options){
                $settingQ->options = json_encode($options);
            }else{
                $settingQ->options = null;
            }
            $settingQ->default = $detault;
            $settingQ->is_visible = $is_visible;
            $settingQ->save();
            return 'settings_added';
        }

    }


    function print_setting_input($key)
    {
        $printSettings = SettingsEngineService::printSettings($key);
        return $printSettings;
    }

    function slugify($text, $divider = '-')
    {
        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
        // lowercase
        $retunData = strtolower($text);
        return $retunData;
    }

    function getSettingPage($pageCategory)
    {
        $getCatery = SettingsEngineService::getSettingPage($pageCategory);
        return $getCatery;
    }

    function getSetting($key)
    {
        $getSettings = Settings::where('key',$key)->first();

        if(isset($getSettings))
        {
            return $getSettings->value;
        }else{
            return null;
        }


    }



}
