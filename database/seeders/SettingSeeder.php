<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules = [
            [
                'name' => 'default_time_zone',
                'val' => 'Asia/Kolkata',
                'type' =>'misc', 
                'datatype' => 'misc',
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'name' => 'is_application_link',
                'val' => 1,
                'type' =>'integaration', 
            ],
            [
                'name' => 'customer_app_play_store',
                'val' => 'Patient playstore URL',
                'type' =>'is_application_link', 
            ],
            [
                'name' => 'customer_app_app_store',
                'val' => 'Patient appstore URL',
                'type' =>'is_application_link', 
            ],
            [
                'name' => 'employee_app_play_store',
                'val' => 'https://play.google.com/store/apps/details?id=com.pawlly.employee',
                'type' =>'is_application_link', 
            ],
            [
                'name' => 'employee_app_app_store',
                'val' => 'https://apps.apple.com/us/app/pawlly-for-employee/id6462849036',
                'type' =>'is_application_link', 
            ],
            [
                'name' => 'is_zoom',
                'val' => 1,
                'type' =>'integaration', 
            ],
            [
                'name' => 'account_id',
                'val' => 'Zoom Account ID',
                'type' =>'is_zoom', 
            ],
            [
                'name' => 'client_id',
                'val' => 'Zoom Client ID',
                'type' =>'is_zoom', 
            ],
            [
                'name' => 'client_secret',
                'val' => 'Client Secret',
                'type' =>'is_zoom', 
            ],

            [
                'name' => 'razor_payment_method',
                'val' => 1,
                'type' =>'razorpayPayment', 
            ],
            [
                'name' => 'razorpay_secretkey',
                'val' => 'Razorpay secretkey',
                'type' =>'razor_payment_method', 
            ],
            [
                'name' => 'razorpay_publickey',
                'val' => 'Razorpay Publickey',
                'type' =>'razor_payment_method', 
            ],
            [
                'name' => 'str_payment_method',
                'val' => 1,
                'type' =>'stripePayment', 
            ],
            [
                'name' => 'stripe_secretkey',
                'val' => 'Stripe Secretkey',
                'type' =>'str_payment_method', 
            ],
            [
                'name' => 'stripe_publickey',
                'val' => 'Stripe Publickey',
                'type' =>'str_payment_method', 
            ],
            [
                'name' => 'paystack_payment_method',
                'val' => 1,
                'type' =>'paystackPayment', 
            ],
            [
                'name' => 'paystack_secretkey',
                'val' => 'Paystack Secretkey',
                'type' =>'paystack_payment_method', 
            ],
            [
                'name' => 'paystack_publickey',
                'val' => 'Paystack Publickey',
                'type' =>'paystack_payment_method', 
            ],
            [
                'name' => 'paypal_payment_method',
                'val' => 1,
                'type' =>'paypalPayment', 
            ],
            [
                'name' => 'paypal_secretkey',
                'val' => 'Paypal Secretkey',
                'type' =>'paypal_payment_method', 
            ],
            [
                'name' => 'paypal_clientid',
                'val' => 'paypal ClientId',
                'type' =>'paypal_payment_method', 
            ],
            [
                'name' => 'flutterwave_payment_method',
                'val' => 1,
                'type' =>'flutterwavePayment', 
            ],
            [
                'name' => 'flutterwave_secretkey',
                'val' => 'Flutterwave Secretkey',
                'type' =>'flutterwave_payment_method', 
            ],
            [
                'name' => 'flutterwave_publickey',
                'val' => 'Flutterwave Publickey',
                'type' =>'flutterwave_payment_method', 
            ],
            [
                'name' => 'is_event',
                'val' => 1,
                'type' =>'other_settings', 
            ],
            [
                'name' => 'is_blog',
                'val' => 1,
                'type' =>'other_settings', 
            ],
            [
                'name' => 'is_user_push_notification',
                'val' => 1,
                'type' =>'other_settings', 
            ],
            [
                'name' => 'is_provider_push_notification',
                'val' => 1,
                'type' =>'other_settings', 
            ],
            
            [
                'name' => 'firebase_notification',
                'val' => '1',
                'type' =>'other_settings', 
            ],
            [
                'name' => 'firebase_key',
                'val' => 'Firebase_Key',
                'type' =>'firebase_notification', 
            ],
            
            [
                'name' => 'view_patient_soap',
                'val' => '1',
                'type' =>'module_settings', 
            ],
            [
                'name' => 'is_body_chart',
                'val' => '1',
                'type' =>'module_settings', 
            ],
            [
                'name' => 'is_telemed_setting',
                'val' => '1',
                'type' =>'module_settings', 
            ],
            [
                'name' => 'is_multi_vendor',
                'val' => '0',
                'type' =>'module_settings', 
            ],
            [
                'name' => 'is_encounter_problem',
                'val' => '1',
                'type' =>'module_settings', 
            ],
            [
                'name' => 'is_encounter_observation',
                'val' => '1',
                'type' =>'module_settings', 
            ],
            [
                'name' => 'is_encounter_note',
                'val' => '1',
                'type' =>'module_settings', 
            ],
            [
                'name' => 'is_encounter_prescription',
                'val' => '1',
                'type' =>'module_settings', 
            ],
            [
                'name' => 'date_formate',
                'val' => 'Y-m-d',
                'type' =>'misc', 
                'datatype' => 'misc',
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'name' => 'time_formate',
                'val' => 'g:i A',
                'type' =>'misc', 
                'datatype' => 'misc',
                'created_by' => 1,
                'updated_by' => 1,
            ],

        ];
        foreach ($modules as $key => $value) {
        
            $service = [
                'name' => $value['name'],
                'val' => $value['val'],
                'type' => $value['type'],
                'datatype' => $value['datatype'] ?? null,
                'created_by' => 1,
                'updated_by' => 1,
            ];
            $service = Setting::create($service);
        }

    }
}
