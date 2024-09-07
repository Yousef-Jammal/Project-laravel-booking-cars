<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            // Mercedes cars

            ['car_id' => 1, 'name' => 'Mercedes1.jpg'],
            ['car_id' => 1, 'name' => 'Mercedes2.jpg'],
            ['car_id' => 1, 'name' => 'Mercedes3.jpg'],
            ['car_id' => 1, 'name' => 'Mercedes4.jpg'],
            ['car_id' => 1, 'name' => 'Mercedes5.jpg'],

            ['car_id' => 2, 'name' => 'Mercedes2.jpg'],
            ['car_id' => 2, 'name' => 'Mercedes1.jpg'],
            ['car_id' => 2, 'name' => 'Mercedes3.jpg'],
            ['car_id' => 2, 'name' => 'Mercedes4.jpg'],
            ['car_id' => 2, 'name' => 'Mercedes5.jpg'],

            ['car_id' => 3, 'name' => 'Mercedes3.jpg'],
            ['car_id' => 3, 'name' => 'Mercedes2.jpg'],
            ['car_id' => 3, 'name' => 'Mercedes1.jpg'],
            ['car_id' => 3, 'name' => 'Mercedes4.jpg'],
            ['car_id' => 3, 'name' => 'Mercedes5.jpg'],

            ['car_id' => 4, 'name' => 'Mercedes4.jpg'],
            ['car_id' => 4, 'name' => 'Mercedes2.jpg'],
            ['car_id' => 4, 'name' => 'Mercedes3.jpg'],
            ['car_id' => 4, 'name' => 'Mercedes1.jpg'],
            ['car_id' => 4, 'name' => 'Mercedes5.jpg'],

            ['car_id' => 5, 'name' => 'Mercedes5.jpg'],
            ['car_id' => 5, 'name' => 'Mercedes2.jpg'],
            ['car_id' => 5, 'name' => 'Mercedes3.jpg'],
            ['car_id' => 5, 'name' => 'Mercedes4.jpg'],
            ['car_id' => 5, 'name' => 'Mercedes1.jpg'],

            // Audi cars
            ['car_id' => 6, 'name' => 'Audi1.jpg'],
            ['car_id' => 6, 'name' => 'Audi2.jpg'],
            ['car_id' => 6, 'name' => 'Audi3.jpg'],
            ['car_id' => 6, 'name' => 'Audi4.jpg'],
            ['car_id' => 6, 'name' => 'Audi5.jpg'],

            ['car_id' => 7, 'name' => 'Audi2.jpg'],
            ['car_id' => 7, 'name' => 'Audi1.jpg'],
            ['car_id' => 7, 'name' => 'Audi3.jpg'],
            ['car_id' => 7, 'name' => 'Audi4.jpg'],
            ['car_id' => 7, 'name' => 'Audi5.jpg'],

            ['car_id' => 8, 'name' => 'Audi3.jpg'],
            ['car_id' => 8, 'name' => 'Audi2.jpg'],
            ['car_id' => 8, 'name' => 'Audi1.jpg'],
            ['car_id' => 8, 'name' => 'Audi4.jpg'],
            ['car_id' => 8, 'name' => 'Audi5.jpg'],

            ['car_id' => 9, 'name' => 'Audi4.jpg'],
            ['car_id' => 9, 'name' => 'Audi2.jpg'],
            ['car_id' => 9, 'name' => 'Audi3.jpg'],
            ['car_id' => 9, 'name' => 'Audi1.jpg'],
            ['car_id' => 9, 'name' => 'Audi5.jpg'],

            ['car_id' => 10, 'name' => 'Audi5.jpg'],
            ['car_id' => 10, 'name' => 'Audi2.jpg'],
            ['car_id' => 10, 'name' => 'Audi3.jpg'],
            ['car_id' => 10, 'name' => 'Audi4.jpg'],
            ['car_id' => 10, 'name' => 'Audi1.jpg'],


            // Honda cars
            ['car_id' => 11, 'name' => 'Honda1.jpg'],
            ['car_id' => 11, 'name' => 'Honda2.jpg'],
            ['car_id' => 11, 'name' => 'Honda3.jpg'],
            ['car_id' => 11, 'name' => 'Honda4.jpg'],
            ['car_id' => 11, 'name' => 'Honda5.jpg'],

            ['car_id' => 12, 'name' => 'Honda2.jpg'],
            ['car_id' => 12, 'name' => 'Honda1.jpg'],
            ['car_id' => 12, 'name' => 'Honda3.jpg'],
            ['car_id' => 12, 'name' => 'Honda4.jpg'],
            ['car_id' => 12, 'name' => 'Honda5.jpg'],

            ['car_id' => 13, 'name' => 'Honda3.jpg'],
            ['car_id' => 13, 'name' => 'Honda2.jpg'],
            ['car_id' => 13, 'name' => 'Honda1.jpg'],
            ['car_id' => 13, 'name' => 'Honda4.jpg'],
            ['car_id' => 13, 'name' => 'Honda5.jpg'],

            ['car_id' => 14, 'name' => 'Honda4.jpg'],
            ['car_id' => 14, 'name' => 'Honda2.jpg'],
            ['car_id' => 14, 'name' => 'Honda3.jpg'],
            ['car_id' => 14, 'name' => 'Honda1.jpg'],
            ['car_id' => 14, 'name' => 'Honda5.jpg'],

            ['car_id' => 15, 'name' => 'Honda5.jpg'],
            ['car_id' => 15, 'name' => 'Honda2.jpg'],
            ['car_id' => 15, 'name' => 'Honda3.jpg'],
            ['car_id' => 15, 'name' => 'Honda4.jpg'],
            ['car_id' => 15, 'name' => 'Honda1.jpg'],
            // Toyota cars
            ['car_id' => 16, 'name' => 'Toyota1.jpg'],
            ['car_id' => 16, 'name' => 'Toyota2.jpg'],
            ['car_id' => 16, 'name' => 'Toyota3.jpg'],
            ['car_id' => 16, 'name' => 'Toyota4.jpg'],
            ['car_id' => 16, 'name' => 'Toyota5.jpg'],

            ['car_id' => 17, 'name' => 'Toyota2.jpg'],
            ['car_id' => 17, 'name' => 'Toyota1.jpg'],
            ['car_id' => 17, 'name' => 'Toyota3.jpg'],
            ['car_id' => 17, 'name' => 'Toyota4.jpg'],
            ['car_id' => 17, 'name' => 'Toyota5.jpg'],

            ['car_id' => 18, 'name' => 'Toyota3.jpg'],
            ['car_id' => 18, 'name' => 'Toyota2.jpg'],
            ['car_id' => 18, 'name' => 'Toyota1.jpg'],
            ['car_id' => 18, 'name' => 'Toyota4.jpg'],
            ['car_id' => 18, 'name' => 'Toyota5.jpg'],

            ['car_id' => 19, 'name' => 'Toyota4.jpg'],
            ['car_id' => 19, 'name' => 'Toyota2.jpg'],
            ['car_id' => 19, 'name' => 'Toyota3.jpg'],
            ['car_id' => 19, 'name' => 'Toyota1.jpg'],
            ['car_id' => 19, 'name' => 'Toyota5.jpg'],

            ['car_id' => 20, 'name' => 'Toyota5.jpg'],
            ['car_id' => 20, 'name' => 'Toyota2.jpg'],
            ['car_id' => 20, 'name' => 'Toyota3.jpg'],
            ['car_id' => 20, 'name' => 'Toyota4.jpg'],
            ['car_id' => 20, 'name' => 'Toyota1.jpg'],

            // Tesla cars
            ['car_id' => 21, 'name' => 'Tesla1.jpg'],
            ['car_id' => 21, 'name' => 'Tesla2.jpg'],
            ['car_id' => 21, 'name' => 'Tesla3.jpg'],
            ['car_id' => 21, 'name' => 'Tesla4.jpg'],
            ['car_id' => 21, 'name' => 'Tesla5.jpg'],

            ['car_id' => 22, 'name' => 'Tesla2.jpg'],
            ['car_id' => 22, 'name' => 'Tesla1.jpg'],
            ['car_id' => 22, 'name' => 'Tesla3.jpg'],
            ['car_id' => 22, 'name' => 'Tesla4.jpg'],
            ['car_id' => 22, 'name' => 'Tesla5.jpg'],

            ['car_id' => 23, 'name' => 'Tesla3.jpg'],
            ['car_id' => 23, 'name' => 'Tesla2.jpg'],
            ['car_id' => 23, 'name' => 'Tesla1.jpg'],
            ['car_id' => 23, 'name' => 'Tesla4.jpg'],
            ['car_id' => 23, 'name' => 'Tesla5.jpg'],

            ['car_id' => 24, 'name' => 'Tesla4.jpg'],
            ['car_id' => 24, 'name' => 'Tesla2.jpg'],
            ['car_id' => 24, 'name' => 'Tesla3.jpg'],
            ['car_id' => 24, 'name' => 'Tesla1.jpg'],
            ['car_id' => 24, 'name' => 'Tesla5.jpg'],

            ['car_id' => 25, 'name' => 'Tesla5.jpg'],
            ['car_id' => 25, 'name' => 'Tesla2.jpg'],
            ['car_id' => 25, 'name' => 'Tesla3.jpg'],
            ['car_id' => 25, 'name' => 'Tesla4.jpg'],
            ['car_id' => 25, 'name' => 'Tesla1.jpg'],

            // Acura cars
            ['car_id' => 26, 'name' => 'Acura1.jpg'],
            ['car_id' => 26, 'name' => 'Acura2.jpg'],
            ['car_id' => 26, 'name' => 'Acura3.jpg'],
            ['car_id' => 26, 'name' => 'Acura4.jpg'],
            ['car_id' => 26, 'name' => 'Acura5.jpg'],

            ['car_id' => 27, 'name' => 'Acura2.jpg'],
            ['car_id' => 27, 'name' => 'Acura1.jpg'],
            ['car_id' => 27, 'name' => 'Acura3.jpg'],
            ['car_id' => 27, 'name' => 'Acura4.jpg'],
            ['car_id' => 27, 'name' => 'Acura5.jpg'],

            ['car_id' => 28, 'name' => 'Acura3.jpg'],
            ['car_id' => 28, 'name' => 'Acura2.jpg'],
            ['car_id' => 28, 'name' => 'Acura1.jpg'],
            ['car_id' => 28, 'name' => 'Acura4.jpg'],
            ['car_id' => 28, 'name' => 'Acura5.jpg'],

            ['car_id' => 29, 'name' => 'Acura4.jpg'],
            ['car_id' => 29, 'name' => 'Acura2.jpg'],
            ['car_id' => 29, 'name' => 'Acura3.jpg'],
            ['car_id' => 29, 'name' => 'Acura1.jpg'],
            ['car_id' => 29, 'name' => 'Acura5.jpg'],

            ['car_id' => 30, 'name' => 'Acura5.jpg'],
            ['car_id' => 30, 'name' => 'Acura2.jpg'],
            ['car_id' => 30, 'name' => 'Acura3.jpg'],
            ['car_id' => 30, 'name' => 'Acura4.jpg'],
            ['car_id' => 30, 'name' => 'Acura1.jpg'],


        ];

        foreach ($images as $image) {
            Image::create($image);
        }
    }
}
