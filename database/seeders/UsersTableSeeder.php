<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
       $user = User::create([
           'name'  => 'John Doe',
           'email' => 'john@test.com',
           'password'=>bcrypt('password123')
       ]);

       /**Token*/

        $user->createToken('JohnDoe')->plainTextToken;

        User::factory()->count(5)->create();
    }
}
