<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

        DB::table('navbars')->insert([
            'name' => 'Tournament',
            'phone' => '+6282135678435',
            'email' => 'tournament@gmail.com',
            'facebook' => 'https://web.facebook.com/?locale=id_ID&_rdc=1&_rdr',
            'linkedin' => 'https://www.linkedin.com/',
            'instagram' => 'https://www.instagram.com/accounts/login/',
            'icon' => 'storage/images/icon-02-light.png',
        ]);
    }
}
