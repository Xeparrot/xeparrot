<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Models\Settings;
use App\Services\ThemeService;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index($setting_type)
    {
//        create_settings(
//            'company_name',
//                'Larapene',
//                'text',
//                'General',
//                null,
//                null,
//                null,
//                null,
//                null,
//                'true');
//
//        create_settings(
//            'company_email',
//                'admin@admin.com',
//                'text',
//                'General',
//                null,
//                null,
//                null,
//                null,
//                null,
//                'true');
//
//        create_settings(
//            'company_address',
//                'No.128, Queate Stole City, R100, Menlo Park, Califonia'
//                , 'text_area',
//                'General',
//                null,
//                null,
//                null,
//                null,
//                null,
//                'true');
//
//
//        create_settings(
//            'search_option',
//                null,
//                'radio',
//                'General',
//                null,
//                'required',
//                null,[
//           [
//               'label' => 'We agree for that',
//               'value' => 'search_option__agree',
//               'checked' => null
//
//           ],
//            [
//                'label' => 'We dont agree for that',
//                'value' => 'search_option__disagree',
//                'checked' => 'checked'
//            ]
//        ],null,'true');
//
//        create_settings(
//            'default_theme',
//                'light_theme',
//                'select',
//                'Appearance',
//                null,
//                null,
//                null,[
//            [
//                'label' => 'Default Theme',
//                'value' => 'default_theme',
//                'default' => 'selected',
//            ],
//            [
//                'label' => 'Sky Theme',
//                'value' => 'sky_theme',
//                'default' => null,
//            ],
//            [
//                'label' => 'Blues Theme',
//                'value' => 'blues_theme',
//                'default' => null,
//            ],
//            [
//                'label' => 'Decboom Theme',
//                'value' => 'decboom_theme',
//                'default' => null
//            ]
//        ],null,'true');
//
//        create_settings(
//            'march_date',
//                '2012.12.12',
//                'date',
//                'Time Data',
//                null,
//                null,
//                null,
//                null,
//                null,
//                'true');


        return view('backend.settings.index');
    }

    public function store(Request $request)
    {
        $filterRequest = $request->except(['_token']);

        foreach ($filterRequest as $key => $item)
        {
            Settings::where('key',$key)->update([
                'value' => $item
            ]);
        }

        return back();
    }
}
