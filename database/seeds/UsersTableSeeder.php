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
        for ($i = 0; $i < 10; $i++){
            $user = new User();
            $user->name = 'Artem';
            $user->email = $i.'artem@gmx.de';
            $user->password = bcrypt('1234567890');
            $user->save();
        }

    }
}