<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'ripon@gmail.com')->first();
        if (is_null($user)) {
            $user = new User();
            $user->name = "Mr. Ripon";
            $user->email = "ripon@gmail.com";
            $user->password = Hash::make('12345678');
            $user->save();
        }
    }
}
