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
        DB::table('carousels')->insert([
            'title' => 'Tournament',
            'text' => "Our website streamlines the registration process for sports tournaments, offering easy access to a variety of events worldwide. Athletes of all levels can quickly sign up for upcoming tournaments, browse event details, and securely complete their registration online. With a user-friendly interface and secure payment options, we prioritize convenience and safety. Additionally, our platform provides resources and community features to support athletes in their sporting journey. Join us today and take the first step towards your next athletic adventure!",
            'image' => 'storage/images/sport-small.jpg',
        ]);
        DB::table('abouts')->insert([
            'title' => "We're Here To Assist You With Exploring Protection",
            'sub_title' => 'Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed stet lorem sit clita duo justo erat amet',
            'text' => 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet',
            'footer' => 'Call Us: +012 345 6789',
            'image' => 'storage/images/cycling.jpg',
        ]);
    }
}
