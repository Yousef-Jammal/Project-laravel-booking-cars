<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [
            ['user_id' => 3, 'rating' => 4.9, 'num_of_ratings' => 25, 'description' => 'Premium luxury car rentals with a wide selection of high-end models.', 'location' => 'Zarqa, Jordan'],
            ['user_id' => 5, 'rating' => 4.5, 'num_of_ratings' => 18, 'description' => 'Affordable car rentals focused on family cars and SUVs.', 'location' => 'Amman, Jordan'],
            ['user_id' => 8, 'rating' => 4.3, 'num_of_ratings' => 12, 'description' => 'Eco-friendly car rentals, featuring electric and hybrid vehicles.', 'location' => 'Balqa, Jordan'],
            ['user_id' => 12, 'rating' => 4.9, 'num_of_ratings' => 25, 'description' => 'Premium luxury car rentals with a wide selection of high-end models.', 'location' => 'Amman, Jordan'],

        ];

        foreach ($companies as $company) {
            Company::create($company);
        }
    }
}
