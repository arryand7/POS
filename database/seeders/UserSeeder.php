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
        User::updateOrCreate([
            'email' => 'admin@gmail.com'
        ], [
            'first_name' => 'ToBa',
            'last_name' => 'Tofik Baim',
            'email'=>'toba@gmail.com',
            'password' => bcrypt('toba123')
        ]);
    }
}
