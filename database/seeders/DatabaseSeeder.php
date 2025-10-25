<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\Starter\AppSeeder;
use Database\Seeders\Starter\MenuSeeder;
use Database\Seeders\Starter\RoleSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\Starter\UserSeeder;
use Database\Seeders\Starter\RefVillages;
use Database\Seeders\Starter\RefDistricts;
use Database\Seeders\Starter\RefProvinces;
use Database\Seeders\Starter\RefRegencies;
use Database\Seeders\Starter\PermissionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RefProvinces::class);
        $this->call(RefRegencies::class);
        $this->call(RefDistricts::class);
        $this->call(RefVillages::class);

        $this->call(AppSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(UserSeeder::class);
    }
}
