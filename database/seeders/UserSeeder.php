<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name = 'SuperAdmin';
        $admin->email = 'superadmin@gmail.com';
        $admin->email_verified_at = date('Y-m-d H:i:s');
        $admin->password = bcrypt('12345678');
        $admin->role = 'superadmin';
        $admin->save();

        $admin = new User;
        $admin->name = 'Petugas';
        $admin->email = 'petugas@gmail.com';
        $admin->email_verified_at = date('Y-m-d H:i:s');
        $admin->password = bcrypt('12345678');
        $admin->role = 'petugas';
        $admin->save();
    }
}
