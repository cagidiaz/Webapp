<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'name' => 'Giovanni Diaz',
            'email' => 'admin@softbages.com',
            'role' => 'superadmin',
            'password' => 'admin'
        ]);
        factory(App\User::class, 49)->create();
    }
}
