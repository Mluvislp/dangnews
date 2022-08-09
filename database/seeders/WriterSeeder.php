<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'writer',
            'email' => 'hoanghaidang.dv@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$/lVfIn.dqnf79GSRfN5Hx.1W9vFU1vgI9zr37dc1.wHo99MeMMAvS',
        ]);
        $user->assignRole('Writer','writer');
    }
}
