<?php
/**
 * Created by PhpStorm.
 * User: Sanjaya Senevirathne
 * Date: 7/8/2022
 * Time: 5:13 PM
 */

namespace App\Services;
use App\Models\Models\Settings;

class SettingsEngineService
{
    public static function optionEngine($key)
    {

    }

    public static function printSettings($key)
    {
        $settingDetails = Settings::where('key',$key)->first();

        if($settingDetails)
        {
            if($settingDetails->required == 'required')
            {
                $requrired = '<span style="color: red">*</span>';
            }else {
                $requrired = null;
            }

            $labelData = '<label>'.self::settingkeyConverToLabel($key).' ' .$requrired.' : </label><br>';
            if($settingDetails->description){
                $descriptionData = '<label><small>'.$settingDetails->description.'</small></label>';
            }else{
                $descriptionData = null;
            }

            if($settingDetails->type == 'text'){
                $controlData = '<div class="form-group">
                                   '.$labelData.'
                                    '.$descriptionData.'
                                    <input type="text" class="form-control" value="'.$settingDetails->value.'" name="'.$key.'" '.$settingDetails->required.'>
                                </div>';
                return $controlData;
            }elseif($settingDetails->type == 'text_area'){
                $controlData = '<div class="form-group">
                                    '.$labelData.'
                                     '.$descriptionData.'
                                    <textarea row="5" class="form-control" name="'.$settingDetails->key.'" '.$settingDetails->required.'>'.$settingDetails->value.'</textarea>
                                </div>';
                return $controlData;
            }elseif($settingDetails->type == 'radio'){
                return self::getOption($key);

            }elseif ($settingDetails->type == 'select'){
                if ($settingDetails->options){
                    $controlData = '<div class="form-group">
                                       '.$labelData.'
                                       '.$descriptionData.'
                                        <select name="'.$settingDetails->key.'" class="form-control" '.$settingDetails->required.'>'.self::getOption($key).'</select>
                                   </div>';
                }else{
                    $controlData = '<div class="form-group">
                                        '.$labelData.'
                                        '.$descriptionData.'
                                        <select name="'.$settingDetails->key.'" class="form-control" '.$settingDetails->required.'></select>
                                   </div>';
                }
                return '<br>'.$controlData;
            }elseif($settingDetails->type == 'check'){

            }elseif($settingDetails->type == 'date'){
                $controlData = '<div class="form-group">
                                   '.$labelData.'
                                   '.$descriptionData.'
                                    <input type="date" name="'.$settingDetails->key.'"  class="form-control" value="'.$settingDetails->value.'" '.$settingDetails->required.'>
                                </div>';
                return $controlData;

            }elseif ($settingDetails->type == 'time'){
                $controlData = '<div class="form-group">
                                   '.$labelData.'
                                   '.$descriptionData.'
                                    <input type="time" name="'.$settingDetails->key.'"  class="form-control" value="'.$settingDetails->value.'" '.$settingDetails->required.'>
                                </div>';
                return $controlData;
            }
        }else{
            return null;
        }
    }

    public static function settingkeyConverToLabel($key)
    {
        $replacedKey = str_replace('_', ' ', $key);
        $uppderCase = ucwords($replacedKey);
        return $uppderCase;
    }

    public static function getOption($key)
    {
        $settingDetails = Settings::where('key',$key)->first();

        if($settingDetails->type == 'select')
        {
            if($settingDetails->options){
                $getOptions = json_decode($settingDetails->options);
                $controlData = null;

                foreach ($getOptions as $optionitem)
                {
                    if($settingDetails->value == $optionitem->value){
                        $node = '<option value="'.$optionitem->value.'" selected>'.$optionitem->label.'</option>';
                    }else{
                        $node = '<option value="'.$optionitem->value.'">'.$optionitem->label.'</option>';
                    }
                    $controlData .=  $node;
                }
                return $controlData;
            }else{
                return null;
            }


        }elseif($settingDetails->type == 'radio'){
            if ($settingDetails->options){
                $jsonOptionDecode =  json_decode($settingDetails->options);
                $controlData = null;

                foreach ($jsonOptionDecode as $optnItem) {
                    $node = '
                                <div class="form-check">                               
                                    <input class="form-check-input" value="'.$optnItem->value.'" type="radio" name="'.$settingDetails->key.'" id="'.$optnItem->value.'"'.$optnItem->checked.'>
                                    <label class="form-check-label" for="'.$optnItem->value.'">
                                      '.$optnItem->label.'
                                    </label>
                                </div>';
                    $controlData .=  $node;
                }
                return ' <label>'.self::settingkeyConverToLabel($key).'</label><br>'.$controlData;
            }
        }elseif($settingDetails->type == 'system'){

        }


    }

    public static function getSettingsCategies()
    {
      $categies=  Settings::select('settings_category')
          ->whereNotIn('settings_category', ['General','Theme & Style'])
          ->distinct()
          ->get();
      return $categies;
    }

    public static function getSettingPage($category)
    {
        $getCategory = Settings::where('settings_category',$category)
            ->get();
        $settingFinal =null;
        foreach ($getCategory as $settingItem)
        {
            if($settingItem->type != 'system'){
                $settingFinal .= self::printSettings($settingItem->key);
            }

        }
        return $settingFinal;
    }
}