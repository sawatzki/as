<?php

use App\User;
use Illuminate\Database\Seeder;
use App\Models\UserRole;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            [
                'name' => 'Artem Sawatzki',
                'email' => 'artem@gmx.de',
                'password' => bcrypt('1234567890'),
            ],
            [
                'name' => 'Wladimir Keller',
                'email' => 'wladimir@gmail.com',
                'password' => bcrypt('1234567890'),
            ],
            [
                'name' => 'Ivan Sawatzki',
                'email' => 'ivan@mail.ru',
                'password' => bcrypt('1234567890'),
            ],
        ];

        foreach ($users as $item) {
            factory(User::class, 1)->create($item)->each(
                function ($u) {
                    if ($u['email'] == 'artem@gmx.de') {
                        $role_id = 1;
                    } else {
                        $role_id = 2;
                    }

                    $u->userRoles()->save(
                        factory(UserRole::class)->make([
                            'role_id' => $role_id,
                        ])
                    );
                }
            );
        }


        factory(User::class, 10)->create()->each(

            function ($u) {
                $u->userRoles()->save(
                    factory(UserRole::class)->make([
                        'role_id' => 3,
                    ])
                );
            }
        );

    }
}
