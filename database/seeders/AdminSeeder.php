<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder; 
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'pvcpvc009@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$/lVfIn.dqnf79GSRfN5Hx.1W9vFU1vgI9zr37dc1.wHo99MeMMAvS',
        ]);
        $user->assignRole('Admin','admin');
    }
}
