<?php

namespace Abdo\AlgeriaWilaya\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Abdo\AlgeriaWilaya\Services\AlgeriaWilayaService;
use Illuminate\Database\Seeder;

class AlgeriaWilayaSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        AlgeriaWilayaService::seedWilayas();
    }
}
