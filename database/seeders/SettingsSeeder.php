<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * System Seeders Generate
         */

        create_settings(
                'company_name',
                'Larapen',
                'text',
                'General',
                'Please add your company name',
                'required',
                null,
                null,
                null,
                'true'
        );

        create_settings(
            'address',
            'address',
            'text_area',
            'General',
            'Please add your company address',
            'required',
            null,
            null,
            null,
            'false'
        );

        create_settings(
            'main_domain',
            'Larapen',
            'text',
            'General',
            null,
            'required',
            null,
            null,
            null,
            'false'
        );

        create_settings(
            'city',
            null,
            'text',
            'Company Information',
            null,
            '',
            null,
            null,
            null,
            'false'
        );

        create_settings(
            'state',
            null,
            'text',
            'Company Information',
            null,
            '',
            null,
            null,
            null,
            'false'
        );

        create_settings(
            'country_code',
            'Colorado',
            'text',
            'Company Information',
            null,
            '',
            null,
            null,
            null,
            'false'
        );

        create_settings(
            'country_code',
            'Colorado',
            'text',
            'Company Information',
            'This information required for mobile verification/invoice details',
            '',
            null,
            null,
            null,
            'false'
        );


        create_settings(
            'phone_number',
            null,
            'text',
            'Company Information',
            'This information required for mobile verification/invoice details',
            '',
            null,
            null,
            null,
            'false'
        );

        create_settings(
            'vat_number',
            null,
            'text',
            'Company Information',
            'This information required for mobile verification/invoice details',
            '',
            null,
            null,
            null,
            'false'
        );

        create_settings(
            'login_recaptcha_status',
                'false',
                'select',
                'ReCaptcha',
                'Get your credentials at: https://www.google.com/recaptcha/admin',
                null,
                null,[
            [
                'label' => 'Disabled',
                'value' => 'false',
                'default' => 'selected',
            ],
            [
                'label' => 'Enabled',
                'value' => 'true',
                'default' => null,
            ]
        ],null,'true');

        create_settings(
            'register_recaptcha_status',
            'false',
            'select',
            'ReCaptcha',
            'Get your credentials at: https://www.google.com/recaptcha/admin',
            null,
            null,[
            [
                'label' => 'Disabled',
                'value' => 'false',
                'default' => 'selected',
            ],
            [
                'label' => 'Enabled',
                'value' => 'true',
                'default' => null,
            ]
        ],null,'true');

        create_settings(
            'invisible_recaptcha_site_key',
            'false',
            'select',
            'ReCaptcha',
            '',
            null,
            null,
           null,
        null,'true');

        create_settings(
            'invisible_recaptcha_secret_key',
            'false',
            'select',
            'ReCaptcha',
            '',
            null,
            null,
            null,
            null,'true');

        create_settings(
            'admin_requires_2FA',
            'false',
            'select',
            'Access',
            'Two factor authentication enabled for login and register process',
            null,
            null,
            [[
                'label' => 'Disabled',
                'value' => 'false',
                'default' => 'selected',
            ],
                [
                    'label' => 'Enabled',
                    'value' => 'true',
                    'default' => null,
                ],],
            null,'true');


        create_settings(
            'change_email',
            'true',
            'select',
            'Access',
            'Change email function enabled/disabled',
            null,
            null,
            [[
                'label' => 'Disabled',
                'value' => 'false',
                'default' => null,
            ],
                [
                    'label' => 'Enabled',
                    'value' => 'true',
                    'default' => null,
                ],],
            null,'true');

        create_settings(
            'enable_registration',
            'true',
            'select',
            'Access',
            'You can enabled/disable user register',
            null,
            null,
            [[
                'label' => 'Disabled',
                'value' => 'false',
                'default' => null,
            ],
                [
                    'label' => 'Enabled',
                    'value' => 'true',
                    'default' => null,
                ],],
            null,'true');

        create_settings(
            'password_history',
            '3',
            'text',
            'Access',
            'You can enabled/disable user register',
            'required',
            null,
           null,
            null,'true');

        create_settings(
            'single_login',
            'true',
            'select',
            'Access',
            null,
            null,
            null,
            [[
                'label' => 'Disabled',
                'value' => 'false',
                'default' => null,
            ],
                [
                    'label' => 'Enabled',
                    'value' => 'true',
                    'default' => null,
                ],],
            null,'true');

        create_settings(
            'password_expires_days',
            '180',
            'text',
            'Access',
            'You can enabled/disable user register',
            'required',
            null,
            null,
            null,'true');

        create_settings(
            'pusher_app_id',
            '',
            'text',
            'Real-time Configuration',
            'You can get pusher credentials on https://pusher.com ',
            null,
            null,
            null,
            null,'true');

        create_settings(
            'pusher_app_key',
            '',
            'text',
            'Real-time Configuration',
            null,
            null,
            null,
            null,
            null,'true');

        create_settings(
            'pusher_app_secret',
            '',
            'text',
            'Real-time Configuration',
            null,
            null,
            null,
            null,
            null,'true');

        create_settings(
            'pusher_app_cluster',
            'mt1',
            'text',
            'Real-time Configuration',
            null,
            null,
            null,
            null,
            null,'true');

        create_settings(
            'mail_mailer',
            'smtp',
            'text',
            'Mail Configuration',
            null,
            null,
            null,
            null,
            null,'true');

        create_settings(
            'mail_host',
            'smtp.mailtrap.io',
            'text',
            'Mail Configuration',
            null,
            null,
            null,
            null,
            null,'true');


        create_settings(
            'mail_port',
            '2025',
            'text',
            'Mail Configuration',
            null,
            null,
            null,
            null,
            null,'true');

        create_settings(
            'username',
            null,
            'text',
            'Mail Configuration',
            null,
            null,
            null,
            null,
            null,'true');

        create_settings(
            'password',
            null,
            'text',
            'Mail Configuration',
            null,
            null,
            null,
            null,
            null,'true');

        create_settings(
            'mail_encryption',
            null,
            'text',
            'Mail Configuration',
            null,
            null,
            null,
            null,
            null,'true');

        create_settings(
            'mail_from_address',
            null,
            'text',
            'Mail Configuration',
            null,
            null,
            null,
            null,
            null,'true');

        create_settings(
            'mail_from_name',
            null,
            'text',
            'Mail Configuration',
            null,
            null,
            null,
            null,
            null,'true');


        create_settings(
            'default_theme',
            null,
            'system',
            'Theme & Style',
            null,
            null,
            null,
            null,
            null,'false');






    }
}
