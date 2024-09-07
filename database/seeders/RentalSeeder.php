<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rental;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rentals = [
            [
                'user_id' => 1,
                'car_id' => 1,  // Mercedes S-Class
                'status_id' => 2, // Confirmed
                'rent_start' => '2024-09-01',
                'rent_end' => '2024-09-07',
            ],
            [
                'user_id' => 1,
                'car_id' => 6,  // Audi A4
                'status_id' => 1, // Pending
                'rent_start' => '2024-09-05',
                'rent_end' => '2024-09-12',
            ],
            [
                'user_id' => 1,
                'car_id' => 11,  // Honda Accord
                'status_id' => 2, // Confirmed
                'rent_start' => '2024-09-10',
                'rent_end' => '2024-09-17',
            ],
            [
                'user_id' => 1,
                'car_id' => 16,  // Toyota Camry
                'status_id' => 3, // Cancelled
                'rent_start' => '2024-08-25',
                'rent_end' => '2024-08-30',
            ],
            [
                'user_id' => 6,
                'car_id' => 21,  // Tesla Model 3
                'status_id' => 2, // Confirmed
                'rent_start' => '2024-09-02',
                'rent_end' => '2024-09-08',
            ],
            // 20 more rental records
            [
                'user_id' => 6,
                'car_id' => 2,  // Mercedes E-Class
                'status_id' => 2, // Confirmed
                'rent_start' => '2024-09-15',
                'rent_end' => '2024-09-22',
            ],
            [
                'user_id' => 7,
                'car_id' => 7,  // Audi Q7
                'status_id' => 1, // Pending
                'rent_start' => '2024-09-18',
                'rent_end' => '2024-09-25',
            ],
            [
                'user_id' => 15,
                'car_id' => 12,  // Honda CR-V
                'status_id' => 2, // Confirmed
                'rent_start' => '2024-09-20',
                'rent_end' => '2024-09-27',
            ],
            [
                'user_id' => 9,
                'car_id' => 17,  // Toyota Highlander
                'status_id' => 3, // Cancelled
                'rent_start' => '2024-08-28',
                'rent_end' => '2024-09-03',
            ],
            [
                'user_id' => 10,
                'car_id' => 22,  // Tesla Model S
                'status_id' => 2, // Confirmed
                'rent_start' => '2024-09-09',
                'rent_end' => '2024-09-16',
            ],
            [
                'user_id' => 11,
                'car_id' => 3,  // Mercedes C-Class
                'status_id' => 2, // Confirmed
                'rent_start' => '2024-09-12',
                'rent_end' => '2024-09-18',
            ],
            [
                'user_id' => 12,
                'car_id' => 8,  // Audi A6
                'status_id' => 1, // Pending
                'rent_start' => '2024-09-25',
                'rent_end' => '2024-10-02',
            ],
            [
                'user_id' => 13,
                'car_id' => 13,  // Honda Pilot
                'status_id' => 2, // Confirmed
                'rent_start' => '2024-09-11',
                'rent_end' => '2024-09-18',
            ],
            [
                'user_id' => 14,
                'car_id' => 18,  // Toyota Tacoma
                'status_id' => 2, // Confirmed
                'rent_start' => '2024-09-15',
                'rent_end' => '2024-09-22',
            ],
            [
                'user_id' => 15,
                'car_id' => 23,  // Tesla Model X
                'status_id' => 3, // Cancelled
                'rent_start' => '2024-08-21',
                'rent_end' => '2024-08-27',
            ],
            [
                'user_id' => 14,
                'car_id' => 4,  // Mercedes GLS
                'status_id' => 2, // Confirmed
                'rent_start' => '2024-09-19',
                'rent_end' => '2024-09-26',
            ],
            [
                'user_id' => 13,
                'car_id' => 9,  // Audi Q5
                'status_id' => 1, // Pending
                'rent_start' => '2024-09-21',
                'rent_end' => '2024-09-28',
            ],
            [
                'user_id' => 12,
                'car_id' => 14,  // Honda Odyssey
                'status_id' => 2, // Confirmed
                'rent_start' => '2024-09-10',
                'rent_end' => '2024-09-17',
            ],
            [
                'user_id' => 11,
                'car_id' => 19,  // Acura MDX
                'status_id' => 3, // Cancelled
                'rent_start' => '2024-08-20',
                'rent_end' => '2024-08-25',
            ],
            [
                'user_id' => 10,
                'car_id' => 24,  // Tesla Model Y
                'status_id' => 2, // Confirmed
                'rent_start' => '2024-09-22',
                'rent_end' => '2024-09-29',
            ],
            [
                'user_id' => 9,
                'car_id' => 5,  // Mercedes G-Class
                'status_id' => 2, // Confirmed
                'rent_start' => '2024-09-15',
                'rent_end' => '2024-09-22',
            ],
            [
                'user_id' => 7,
                'car_id' => 10,  // Audi RS7
                'status_id' => 1, // Pending
                'rent_start' => '2024-09-12',
                'rent_end' => '2024-09-19',
            ],
            [
                'user_id' => 6,
                'car_id' => 15,  // Toyota RAV4
                'status_id' => 2, // Confirmed
                'rent_start' => '2024-09-08',
                'rent_end' => '2024-09-15',
            ],
            [
                'user_id' => 1,
                'car_id' => 20,  // Acura NSX
                'status_id' => 2, // Confirmed
                'rent_start' => '2024-09-09',
                'rent_end' => '2024-09-16',
            ],
            [
                'user_id' => 1,
                'car_id' => 25,  // Tesla Cybertruck
                'status_id' => 2, // Confirmed
                'rent_start' => '2024-09-20',
                'rent_end' => '2024-09-25',
            ],
        ];

        foreach ($rentals as $rental) {
            Rental::create($rental);
        }
    }
}
