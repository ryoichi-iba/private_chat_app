<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class)->create(
        [
            'email' => 'test1@gmail.com',
            'name' => 'test1'
        ],
          [
            'email' => 'test2@gmail.com',
            'name' => 'test2'
        ],
          [
            'email' => 'test3@gmail.com',
            'name' => 'test3'
        ]
    );
    }
}
