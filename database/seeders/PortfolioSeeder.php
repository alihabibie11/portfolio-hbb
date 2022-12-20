<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Tratour Travel',
                'slug' => 'tratour-travel',
                'description' => '<p><span style="font-family:neue montreal,helvetica neue,helvetica,arial,sans-serif,apple color emoji,segoe ui emoji,segoe ui symbol,noto color emoji; font-size:14px">This is one of my projects, namely this Simple Website Travel Application which was created using the PHP programming language and the Laravel 7 Framework as the Backend, for the frontend it uses the Bootstrap 4 framework.</span></p>

                <p><span style="font-family:neue montreal,helvetica neue,helvetica,arial,sans-serif,apple color emoji,segoe ui emoji,segoe ui symbol,noto color emoji; font-size:14px">This application is for finding tourist attraction or travel place and users can buy tickets for tours. tourist attractions can be processed by the admin on this website so the user can see these tourist attractions.</span></p>
                
                <p><span style="font-size:14px">Features in the application or in this project:<br />
                - Authenticate using Laravel UI<br />
                - Using the SB Admin 2 template for the backend view<br />
                - There are 2 user roles, namely admin and user<br />
                - Admin<br />
                &nbsp; &nbsp;- CRUD/Manage travel package data<br />
                &nbsp; &nbsp;- Manage Users<br />
                &nbsp; &nbsp;- Manage Transactions<br />
                - User<br />
                &nbsp; &nbsp;- Choose travel packages and make transactions<br />
                &nbsp; &nbsp;- View transaction history</span></p>',
                'image' => '1645942732-Hometra.png',
                'category_id' => '1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
        ];
        DB::table('portfolios')->insert($data);
    }
}
