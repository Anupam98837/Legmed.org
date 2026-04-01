<?php
 
namespace Database\Seeders;
 
use App\Models\User;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;
 
class AdminSeeder extends Seeder

{

    public function run(): void

    {

        User::updateOrCreate(

            ['email' => 'admin@gmail.com'],

            [

                'uuid' => (string) Str::uuid(),

                'slug' => 'admin',

                'name' => 'Admin',

                'phone_number' => '9999999999',

                'alternative_email' => null,

                'alternative_phone_number' => null,

                'whatsapp_number' => null,

                'password' => Hash::make('adin@123'),

                'image' => null,

                'address' => null,

                'role' => 'admin',

                'role_short_form' => 'ADM',

                'status' => 'active',

                'email_verified_at' => now(),

                'last_login_at' => null,

                'last_login_ip' => null,

                'created_by' => null,

                'created_at_ip' => '127.0.0.1',

                'metadata' => json_encode([

                    'seeded' => true,

                    'source' => 'AdminSeeder',

                ]),

                'remember_token' => Str::random(10),

            ]

        );

    }

}
 