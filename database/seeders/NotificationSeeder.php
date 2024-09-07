<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Notifications;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $notifications = [
            ['user_id' => 1, 'content' => 'Your luxury car rental request is pending approval.', 'n_type' => 'info'],
            ['user_id' => 6, 'content' => 'Your family car rental request has been confirmed.', 'n_type' => 'success'],
            ['user_id' => 7, 'content' => 'Your rental request for the hybrid car has been cancelled.', 'n_type' => 'warning'],
        ];

        foreach ($notifications as $notification) {
            Notifications::create($notification);
        }
    }
}
