<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'MMA Admin',
            'email' => 'admin@mma.com',
            'zip' => '12345',
            'npn' => '12345678',
            'phone' => '1234567890',
        ]);
    }
}
