<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'Ahmed Alali', 'email' => 'ahmed.alali@example.com', 'password' => Hash::make('Aseel123$'), 'role_id' => 1, 'image' => 'user_image1.jpg', 'phone' => '555-1234', 'date_created' => now(), 'email_verified_at' => now()],
            ['name' => 'Layla Khaled', 'email' => 'layla.khaled@example.com', 'password' => Hash::make('Aseel123$'), 'role_id' => 2, 'image' => 'user_image2.jpg', 'phone' => '555-5678', 'date_created' => now(), 'email_verified_at' => now()],
            ['name' => 'Salem Alqahtani', 'email' => 'salem.alqahtani@example.com', 'password' => Hash::make('Aseel123$'), 'role_id' => 3, 'image' => 'user_image3.jpg', 'phone' => '555-91011', 'date_created' => now(), 'email_verified_at' => now()],
            ['name' => 'Fatima Mohammed', 'email' => 'fatima.mohammed@example.com', 'password' => Hash::make('Aseel123$'), 'role_id' => 2, 'image' => 'user_image4.jpg', 'phone' => '555-1112', 'date_created' => now(), 'email_verified_at' => now()],
            ['name' => 'Omar Ali', 'email' => 'omar.ali@example.com', 'password' => Hash::make('Aseel123$'), 'role_id' => 3, 'image' => 'user_image5.jpg', 'phone' => '555-1314', 'date_created' => now(), 'email_verified_at' => now()],
            ['name' => 'Hassan Alharthy', 'email' => 'hassan.alharthy@example.com', 'password' => Hash::make('Aseel123$'), 'role_id' => 1, 'image' => 'user_image6.jpg', 'phone' => '555-1516', 'date_created' => now(), 'email_verified_at' => now()],
            ['name' => 'Nour Abdullah', 'email' => 'nour.abdullah@example.com', 'password' => Hash::make('Aseel123$'), 'role_id' => 1, 'image' => 'user_image7.jpg', 'phone' => '555-1718', 'date_created' => now(), 'email_verified_at' => now()],
            ['name' => 'Yasser Faris', 'email' => 'yasser.faris@example.com', 'password' => Hash::make('Aseel123$'), 'role_id' => 3, 'image' => 'user_image8.jpg', 'phone' => '555-1920', 'date_created' => now(), 'email_verified_at' => now()],
            ['name' => 'Amal Saeed', 'email' => 'amal.saeed@example.com', 'password' => Hash::make('Aseel123$'), 'role_id' => 1, 'image' => 'user_image9.jpg', 'phone' => '555-2122', 'date_created' => now(), 'email_verified_at' => now()],
            ['name' => 'Ali Mansour', 'email' => 'ali.mansour@example.com', 'password' => Hash::make('Aseel123$'), 'role_id' => 1, 'image' => 'user_image10.jpg', 'phone' => '555-2324', 'date_created' => now(), 'email_verified_at' => now()],
            ['name' => 'Samira Naji', 'email' => 'samira.naji@example.com', 'password' => Hash::make('Aseel123$'), 'role_id' => 1, 'image' => 'user_image11.jpg', 'phone' => '555-2526', 'date_created' => now(), 'email_verified_at' => now()],
            ['name' => 'Fahad Khalifa', 'email' => 'fahad.khalifa@example.com', 'password' => Hash::make('Aseel123$'), 'role_id' => 3, 'image' => 'user_image12.jpg', 'phone' => '555-2728', 'date_created' => now(), 'email_verified_at' => now()],
            ['name' => 'Mariam Zayed', 'email' => 'mariam.zayed@example.com', 'password' => Hash::make('Aseel123$'), 'role_id' => 1, 'image' => 'user_image13.jpg', 'phone' => '555-2930', 'date_created' => now(), 'email_verified_at' => now()],
            ['name' => 'Mohammed Hamdan', 'email' => 'mohammed.hamdan@example.com', 'password' => Hash::make('Aseel123$'), 'role_id' => 1, 'image' => 'user_image14.jpg', 'phone' => '555-3132', 'date_created' => now(), 'email_verified_at' => now()],
            ['name' => 'Reem Alhassan', 'email' => 'reem.alhassan@example.com', 'password' => Hash::make('Aseel123$'), 'role_id' => 1, 'image' => 'user_image15.jpg', 'phone' => '555-3334', 'date_created' => now(), 'email_verified_at' => now()],


        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
