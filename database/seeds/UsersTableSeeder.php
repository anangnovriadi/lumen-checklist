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
        factory(App\User::class)->create([
            'name' => 'nang',
            'email' => 'nangning@gmail.com',
            'password' => password_hash('123456', PASSWORD_BCRYPT)
        ]);
    }
}
