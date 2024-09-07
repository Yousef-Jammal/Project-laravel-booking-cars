<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            // Reviews for Mercedes S-Class (car_id: 1)
            ['user_id' => 1, 'car_id' => 1, 'date' => '2024-09-01', 'content' => 'Luxury at its finest. The ride was smooth and comfortable.', 'rating' => 5.0],
            ['user_id' => 6, 'car_id' => 1, 'date' => '2024-09-02', 'content' => 'Incredible car, felt like I was floating on the road.', 'rating' => 4.8],
            ['user_id' => 7, 'car_id' => 1, 'date' => '2024-09-03', 'content' => 'Expensive, but worth it for a special occasion.', 'rating' => 4.7],

            // Reviews for Mercedes E-Class (car_id: 2)
            ['user_id' => 9, 'car_id' => 2, 'date' => '2024-09-04', 'content' => 'Great handling and very comfortable.', 'rating' => 4.6],
            ['user_id' => 10, 'car_id' => 2, 'date' => '2024-09-05', 'content' => 'Perfect for a weekend trip.', 'rating' => 4.7],
            ['user_id' => 6, 'car_id' => 2, 'date' => '2024-09-06', 'content' => 'Stylish, but I wish it had more trunk space.', 'rating' => 4.5],

            // Reviews for Mercedes C-Class (car_id: 3)
            ['user_id' => 7, 'car_id' => 3, 'date' => '2024-09-07', 'content' => 'Very fun to drive, perfect for city driving.', 'rating' => 4.7],
            ['user_id' => 11, 'car_id' => 3, 'date' => '2024-09-08', 'content' => 'The coupe design is sleek and modern.', 'rating' => 4.8],
            ['user_id' => 9, 'car_id' => 3, 'date' => '2024-09-09', 'content' => 'A bit cramped in the back, but otherwise perfect.', 'rating' => 4.6],

            // Reviews for Mercedes GLS (car_id: 4)
            ['user_id' => 10, 'car_id' => 4, 'date' => '2024-09-10', 'content' => 'Perfect SUV for a family trip.', 'rating' => 4.9],
            ['user_id' => 11, 'car_id' => 4, 'date' => '2024-09-11', 'content' => 'Spacious and luxurious interior.', 'rating' => 5.0],
            ['user_id' => 12, 'car_id' => 4, 'date' => '2024-09-12', 'content' => 'A bit too large for city driving but amazing on highways.', 'rating' => 4.8],

            // Reviews for Mercedes G-Class (car_id: 5)
            ['user_id' => 13, 'car_id' => 5, 'date' => '2024-09-13', 'content' => 'The best off-road vehicle I have ever driven.', 'rating' => 5.0],
            ['user_id' => 14, 'car_id' => 5, 'date' => '2024-09-14', 'content' => 'Superb performance, worth every penny.', 'rating' => 4.9],
            ['user_id' => 15, 'car_id' => 5, 'date' => '2024-09-15', 'content' => 'Fuel efficiency could be better, but overall it’s great.', 'rating' => 4.7],

            // Reviews for Audi A4 (car_id: 6)
            ['user_id' => 1, 'car_id' => 6, 'date' => '2024-09-16', 'content' => 'Reliable and great for daily commuting.', 'rating' => 4.6],
            ['user_id' => 6, 'car_id' => 6, 'date' => '2024-09-17', 'content' => 'Smooth handling and very comfortable.', 'rating' => 4.7],
            ['user_id' => 7, 'car_id' => 6, 'date' => '2024-09-18', 'content' => 'Great value for money.', 'rating' => 4.5],

            // Reviews for Audi Q7 (car_id: 7)
            ['user_id' => 9, 'car_id' => 7, 'date' => '2024-09-19', 'content' => 'Spacious and perfect for family trips.', 'rating' => 4.9],
            ['user_id' => 10, 'car_id' => 7, 'date' => '2024-09-20', 'content' => 'Luxurious and comfortable ride.', 'rating' => 5.0],
            ['user_id' => 11, 'car_id' => 7, 'date' => '2024-09-21', 'content' => 'Good performance but a bit pricey.', 'rating' => 4.8],

            // Reviews for Audi A6 (car_id: 8)
            ['user_id' => 12, 'car_id' => 8, 'date' => '2024-09-22', 'content' => 'Perfect balance of luxury and performance.', 'rating' => 4.7],
            ['user_id' => 13, 'car_id' => 8, 'date' => '2024-09-23', 'content' => 'Very spacious and comfortable.', 'rating' => 4.8],
            ['user_id' => 14, 'car_id' => 8, 'date' => '2024-09-24', 'content' => 'Great for long-distance driving.', 'rating' => 4.6],

            // Reviews for Audi Q5 (car_id: 9)
            ['user_id' => 15, 'car_id' => 9, 'date' => '2024-09-25', 'content' => 'A compact SUV with lots of features.', 'rating' => 4.7],
            ['user_id' => 1, 'car_id' => 9, 'date' => '2024-09-26', 'content' => 'Perfect size for city driving.', 'rating' => 4.8],
            ['user_id' => 6, 'car_id' => 9, 'date' => '2024-09-27', 'content' => 'Impressive fuel efficiency for an SUV.', 'rating' => 4.7],

            // Reviews for Audi RS7 (car_id: 10)
            ['user_id' => 6, 'car_id' => 10, 'date' => '2024-09-28', 'content' => 'An absolute powerhouse, stunning performance.', 'rating' => 5.0],
            ['user_id' => 7, 'car_id' => 10, 'date' => '2024-09-29', 'content' => 'Fastest car I’ve ever driven, a real head-turner.', 'rating' => 4.9],
            ['user_id' => 1, 'car_id' => 10, 'date' => '2024-09-30', 'content' => 'Luxury meets speed, worth every penny.', 'rating' => 4.8],

            // Reviews for Honda Civic (car_id: 11)
            ['user_id' => 6, 'car_id' => 11, 'date' => '2024-10-01', 'content' => 'Great fuel efficiency, perfect for daily driving.', 'rating' => 4.5],
            ['user_id' => 7, 'car_id' => 11, 'date' => '2024-10-02', 'content' => 'Handles well, great city car.', 'rating' => 4.6],
            ['user_id' => 1, 'car_id' => 11, 'date' => '2024-10-03', 'content' => 'Affordable and reliable.', 'rating' => 4.7],

            // Reviews for Honda Accord (car_id: 12)
            ['user_id' => 9, 'car_id' => 12, 'date' => '2024-10-04', 'content' => 'Very comfortable and great for long trips.', 'rating' => 4.8],
            ['user_id' => 10, 'car_id' => 12, 'date' => '2024-10-05', 'content' => 'Smooth ride, luxury on a budget.', 'rating' => 4.7],
            ['user_id' => 11, 'car_id' => 12, 'date' => '2024-10-06', 'content' => 'Good performance but could use more features.', 'rating' => 4.6],

            // Reviews for Honda CR-V (car_id: 13)
            ['user_id' => 12, 'car_id' => 13, 'date' => '2024-10-07', 'content' => 'Spacious, great for family trips.', 'rating' => 4.9],
            ['user_id' => 13, 'car_id' => 13, 'date' => '2024-10-08', 'content' => 'Handles well, excellent visibility.', 'rating' => 4.8],
            ['user_id' => 14, 'car_id' => 13, 'date' => '2024-10-09', 'content' => 'Perfect balance of fuel efficiency and power.', 'rating' => 4.7],

            // Reviews for Honda Pilot (car_id: 14)
            ['user_id' => 15, 'car_id' => 14, 'date' => '2024-10-10', 'content' => 'Large and comfortable, a great SUV.', 'rating' => 4.8],
            ['user_id' => 1, 'car_id' => 14, 'date' => '2024-10-11', 'content' => 'Plenty of space for a big family.', 'rating' => 4.7],
            ['user_id' => 6, 'car_id' => 14, 'date' => '2024-10-12', 'content' => 'Could use more tech features, but overall great.', 'rating' => 4.6],

            // Reviews for Toyota Camry (car_id: 16)
            ['user_id' => 7, 'car_id' => 16, 'date' => '2024-10-13', 'content' => 'Reliable, affordable, and great on gas.', 'rating' => 4.7],
            ['user_id' => 9, 'car_id' => 16, 'date' => '2024-10-14', 'content' => 'One of the best mid-sized sedans out there.', 'rating' => 4.8],
            ['user_id' => 10, 'car_id' => 16, 'date' => '2024-10-15', 'content' => 'Comfortable ride, but interior could use an upgrade.', 'rating' => 4.6],

            // Reviews for Toyota Corolla (car_id: 17)
            ['user_id' => 11, 'car_id' => 17, 'date' => '2024-10-16', 'content' => 'Compact but spacious, very economical.', 'rating' => 4.7],
            ['user_id' => 12, 'car_id' => 17, 'date' => '2024-10-17', 'content' => 'Great value for the price, a reliable car.', 'rating' => 4.8],
            ['user_id' => 13, 'car_id' => 17, 'date' => '2024-10-18', 'content' => 'Good for commuting, nothing too fancy.', 'rating' => 4.6],

            // Reviews for Toyota Highlander (car_id: 18)
            ['user_id' => 14, 'car_id' => 18, 'date' => '2024-10-19', 'content' => 'Best SUV I have driven so far, very spacious.', 'rating' => 4.9],
            ['user_id' => 15, 'car_id' => 18, 'date' => '2024-10-20', 'content' => 'Smooth ride and tons of cargo space.', 'rating' => 4.8],
            ['user_id' => 1, 'car_id' => 18, 'date' => '2024-10-21', 'content' => 'A little pricey but worth it.', 'rating' => 4.7],

            // Reviews for Toyota Tacoma (car_id: 19)
            ['user_id' => 1, 'car_id' => 19, 'date' => '2024-10-22', 'content' => 'Great for hauling and off-roading.', 'rating' => 4.9],
            ['user_id' => 6, 'car_id' => 19, 'date' => '2024-10-23', 'content' => 'A strong and reliable truck, perfect for work.', 'rating' => 4.8],
            ['user_id' => 7, 'car_id' => 19, 'date' => '2024-10-24', 'content' => 'Handles well on tough terrain, a solid choice.', 'rating' => 4.7],

            // Reviews for Tesla Model 3 (car_id: 21)
            ['user_id' => 6, 'car_id' => 21, 'date' => '2024-10-25', 'content' => 'Fast, sleek, and eco-friendly.', 'rating' => 5.0],
            ['user_id' => 6, 'car_id' => 21, 'date' => '2024-10-26', 'content' => 'Super smooth driving experience, I love it.', 'rating' => 4.9],
            ['user_id' => 7, 'car_id' => 21, 'date' => '2024-10-27', 'content' => 'Tesla’s technology is unmatched, a joy to drive.', 'rating' => 5.0],

            // Reviews for Tesla Model S (car_id: 22)
            ['user_id' => 1, 'car_id' => 22, 'date' => '2024-10-28', 'content' => 'A luxurious electric car, the future is here.', 'rating' => 5.0],
            ['user_id' => 9, 'car_id' => 22, 'date' => '2024-10-29', 'content' => 'Insane acceleration, feels like a spaceship.', 'rating' => 5.0],
            ['user_id' => 10, 'car_id' => 22, 'date' => '2024-10-30', 'content' => 'It’s expensive, but you get what you pay for.', 'rating' => 4.9],

            // Reviews for Tesla Model X (car_id: 23)
            ['user_id' => 11, 'car_id' => 23, 'date' => '2024-10-31', 'content' => 'Best electric SUV on the market, hands down.', 'rating' => 5.0],
            ['user_id' => 12, 'car_id' => 23, 'date' => '2024-11-01', 'content' => 'The falcon-wing doors are a real attention grabber.', 'rating' => 5.0],
            ['user_id' => 13, 'car_id' => 23, 'date' => '2024-11-02', 'content' => 'Great for long road trips, the autopilot is amazing.', 'rating' => 5.0],

            // Reviews for Tesla Model Y (car_id: 24)
            ['user_id' => 14, 'car_id' => 24, 'date' => '2024-11-03', 'content' => 'A perfect blend of performance and practicality.', 'rating' => 4.9],
            ['user_id' => 15, 'car_id' => 24, 'date' => '2024-11-04', 'content' => 'Roomy interior with the latest tech features.', 'rating' => 4.8],
            ['user_id' => 1, 'car_id' => 24, 'date' => '2024-11-05', 'content' => 'Great range and driving comfort.', 'rating' => 4.9],

            // Reviews for Tesla Cybertruck (car_id: 25)
            ['user_id' => 7, 'car_id' => 25, 'date' => '2024-11-06', 'content' => 'Unique design, unlike any other truck.', 'rating' => 5.0],
            ['user_id' => 1, 'car_id' => 25, 'date' => '2024-11-07', 'content' => 'Feels like a tank, incredible strength.', 'rating' => 5.0],
            ['user_id' => 10, 'car_id' => 25, 'date' => '2024-11-08', 'content' => 'Tesla outdid themselves with this one.', 'rating' => 5.0],
        ];

        DB::table('reviews')->insert($reviews);
    }
}
