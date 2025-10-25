<?php

namespace Database\Seeders\Starter;

use App\Models\Sys\App;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $app_no = 0;

        App::create([
            'name' => 'Access',
            'subdomain' => 'access.sigap-praja.test',
            'image' => 'access',
            'order_number' => $app_no++
        ]);

        App::create([
            'name' => 'Manage',
            'subdomain' => 'manage.sigap-praja.test',
            'image' => 'manage',
            'order_number' => $app_no++
        ]);

        App::create([
            'name' => 'Data Warehouse',
            'subdomain' => 'dw.sigap-praja.test',
            'image' => 'dw',
            'order_number' => $app_no++
        ]);
    }
}
