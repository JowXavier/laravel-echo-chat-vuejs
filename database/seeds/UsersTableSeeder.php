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
        factory(User::class,10)->create();

        factory(User::class)->create([
            'name' => 'Jonathan Xavier',
            'email' => 'jonathanxribeiro@gmail.com'
        ]);

        factory(User::class)->create([
            'name' => 'Jack Sparrow',
            'email' => 'capitaojack@gmail.com'
        ]);
    }
}
