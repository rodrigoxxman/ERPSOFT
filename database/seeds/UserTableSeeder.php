<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'User';
        $user->email = 'user@ejemplo.com';
        $user->password = bcrypt('secret');
        $user->code = '12345678910';
        $user->active = '1';
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@ejemplo.com';
        $user->password = bcrypt('secret');
        $user->code = '12345678911';
        $user->active = '1';
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
