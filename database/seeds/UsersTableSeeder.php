<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 29)->create();

        App\User::create([
            'name' => 'Hugo Montenegro',
            'email' => 'hugo@gmail.com',
            'password' => bcrypt('hugo1234'),
        ]);

        Role::create([
            'name' => 'Administrador',
            'slug' => 'admin',
            'special' => 'all-access',
        ]);
    }
}
