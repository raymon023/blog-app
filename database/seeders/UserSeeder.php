<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Raymon Rodriguez',
            'email' => 'raymon023@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $user->assignRole('admin');

        User::factory(99)->create();
    }
}
