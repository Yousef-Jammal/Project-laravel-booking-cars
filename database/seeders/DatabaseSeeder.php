<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seeders are called in the correct order, respecting foreign key relationships
        $this->call([
            RoleSeeder::class,        // Seed roles first
            StatusSeeder::class,      // Seed statuses
            BrandSeeder::class,       // Seed brands before cars
            UserSeeder::class,        // Seed users
            CompanySeeder::class,     // Seed companies after users
            CarSeeder::class,         // Seed cars (relies on users and brands)
            FeatureSeeder::class,     // Seed features after cars
            RentalSeeder::class,      // Seed rentals (relies on users, cars, and statuses)
            ReviewSeeder::class,      // Seed reviews after rentals and cars
            RenterRequestSeeder::class,
            ImageSeeder::class,
            NotificationSeeder::class,



        ]);
    }
}
