<?php

namespace Abdo\AlgeriaWilaya\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Abdo\AlgeriaWilayas\Models\Wilaya;
use Illuminate\Database\Seeder;

class AlgeriaWilayaSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $json = file_get_contents(__DIR__ . '/../../storage/data/Wilaya_Of_Algeria.json');
        $data = json_decode($json, true);
        foreach ($data as $wilaya => $value) {
            Wilaya::create(
                [
                    'name' => $value['name'],
                    'code' => $value['code'],
                    'arabic_name' => $value['arabic_name'],
                    'latitude' => $value['latitude'],
                    'longitude' => $value['longitude'],
                ]
            );
        }
    }
}
