<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RentalRequest;

class RenterRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $renterRequests = [
            ['user_id' => 15, 'user_description' => ' luxury car for a wedding event.', 'user_id_image' => 'user_id_image15.jpg', 'request_status' => 'Pending'],
            ['user_id' => 14, 'user_description' => 'Long-term rental  for a family car.', 'user_id_image' => 'user_id_image14.jpg', 'request_status' => 'Confirmed'],
            ['user_id' => 13, 'user_description' => ' hybrid vehicle', 'user_id_image' => 'user_id_image13.jpg', 'request_status' => 'Cancelled'],
        ];

        foreach ($renterRequests as $renterRequest) {
            RentalRequest::create($renterRequest);
        }
    }
}
