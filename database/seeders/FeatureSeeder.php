<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Retrieve all cars
        $cars = DB::table('cars')->get();

        // Define features for each car
        $featuresList = [
            ['Air Conditioning', 'Bluetooth', 'Heated Seats', 'Sunroof', 'Backup Camera'],
            ['Leather Seats', 'GPS Navigation', 'Keyless Entry', 'Cruise Control', 'Blind Spot Monitoring'],
            ['Remote Start', 'Automatic Emergency Braking', 'Apple CarPlay', 'Android Auto', 'Parking Sensors'],
            ['Lane Departure Warning', 'Adaptive Cruise Control', 'Premium Sound System', 'Power Liftgate', 'Heated Mirrors'],
            ['Hands-Free Trunk', 'Memory Seats', 'Panoramic Roof', 'Wireless Charging', 'Driver Assistance']
        ];

        foreach ($cars as $car) {
            // Randomly assign 5 features to each car
            foreach ($featuresList[array_rand($featuresList)] as $feature) {
                DB::table('features')->insert([
                    'car_id' => $car->id,
                    'name' => $feature,
                ]);
            }
        }
    }
}
