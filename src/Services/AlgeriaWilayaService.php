<?php 

namespace Abdo\AlgeriaWilaya\Services;

use Illuminate\Support\Facades\DB;

class AlgeriaWilayaService
{
    /**
     * Get the data from the JSON file.
     *
     * @return array The data from the JSON file.
     */
    private function getFromJson(){
        $json = file_get_contents(__DIR__ . '/../../data/Wilaya_Of_Algeria.json');
        $data = json_decode($json, true);
        return $data;
    }
    
    /**
     * Get the value of a specific field for a given code.
     *
     * @param int $code The code of the wilaya.
     * @param string $field The field to retrieve the value from.
     * @return string The value of the specified field.
     */
    public static function getValueOf(int $code, string $field): string
    {
        $data = Self::getFromJson();
        $value = '';
        foreach ($data as $item) {
            if ($item['code'] === $code) {
                $value = $item[$field];
                break;
            }
        }
        return $value;
    }
    
    /**
     * Seed the wilayas table with data from the JSON file.
     *
     * @return void
     */
    public static function seedWilayas(){
        $data = Self::getFromJson();
        foreach ($data as $item) {
            DB::table('alg__wilayas')->insert([
                'name' => $item['name'],
                'code' => $item['code'],
                'arabic_name' => $item['arabic_name'],
                'latitude' => $item['latitude'],
                'longitude' => $item['longitude'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}