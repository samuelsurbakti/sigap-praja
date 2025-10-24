<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Starter\RefDistricts;
use Database\Seeders\Starter\RefProvinces;
use Database\Seeders\Starter\RefRegencies;
use Database\Seeders\Starter\RefVillages;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
    }
}
