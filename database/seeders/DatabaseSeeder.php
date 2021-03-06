<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Subscribe;
use App\Models\Category;
use App\Models\Room;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            BookingSeeder::class,
            GuestSeeder::class,
            SubscribeSeeder::class,
            CategorySeeder::class,
            RoomSeeder::class,

        ]);
    }
}
