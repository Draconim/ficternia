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
        User::create(['username'=>'Draco','name' => 'Laci', 
        'email'=>'example@test.com','password'=>'$2y$10$6kOb7vbQO50kvKKtZhhB9edLWNFPPTzaX309xNXZtoR3iP4Bnz3EG']);
    }
}
