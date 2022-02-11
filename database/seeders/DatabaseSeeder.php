<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user = new User();
        $user->first_name = 'Tin';
        $user->last_name = 'Modrić';
        $user->zip = '1950';
        $user->address = 'Mokošica';
        $user->country_id = 54;
        $user->password = Hash::make('devlatest');
        $user->email = 'modrictin7@gmail.com';
        $user->email_verified_at = date("Y-m-d H:i:s");
        $user->type = User::TYPE_SHOP_ADMIN;
        $user->save();
    }
}
