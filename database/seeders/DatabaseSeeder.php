<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'superadmin',
        //     'email' => 'superadmin@gmail.com',
        //     'password' => bcrypt('12345678')
        // ]);
        $this->call([
            UserSeeder::class,
        ]);
    }
}
