<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('configs')->insert([
            'nameweb' => 'Habibie Website',
            'about' => "My name is Habibie. I am a Full-stack developer, and I'm very passionate and dedicated to my work, in building a website with interactive design and friendly design.",
            'logo' => 'yh.png',
            'icon' => 'yh.png',
            'keywords' => 'portfolios',
            'description' => Str::random(50),
            'email' => 'malizzulhaq08@gmail.com',
            'phone' => '083893238789',
            'address' => 'Jl. Kresek Raya No.15620, Kabupaten Tangerang - Banten.',
            'facebook' => 'https://web.facebook.com/mrfantastic11/',
            'instagram' => 'https://www.instagram.com/alihabibie11/',
            'twitter' => '',
            'linkedin' => 'https://www.linkedin.com/in/ali-habibie-2442921a2/',
            'github' => 'https://github.com/alihabibie11',
            'google_maps' => '-6.129878397523142, 106.3797943',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
