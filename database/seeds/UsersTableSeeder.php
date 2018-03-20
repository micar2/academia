<?php

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
            'name' => 'Micar',
            'email' => 'munar2@hotmail.com',

        ]);
        factory(User::class, 30)->create();
    }
}
