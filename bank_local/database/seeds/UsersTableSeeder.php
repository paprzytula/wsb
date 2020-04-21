<?php

use Illuminate\Database\Seeder;
use WSB_BANK\User;
use WSB_BANK\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $adminRole = Role::where('name', 'admin')->first();
        $bankerRole = Role::where('name', 'banker')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'fname' => 'Admin',
            'lname' => 'Adminowski',
            'email' => 'admin@admin.com',
            'pesel' => 12345678911,
            'password' => bcrypt('password')
        ]);
        $banker = User::create([
            'fname' => 'Banker',
            'lname' => 'Bankerowski',
            'email' => 'banker@banker.com',
            'pesel' => 12345678912,
            'password' => bcrypt('password')
        ]);
        $user = User::create([
            'fname' => 'User',
            'lname' => 'Userowski',
            'email' => 'user@user.com',
            'pesel' => 12345678913,
            'password' => bcrypt('password')
        ]);
        $admin->roles()->attach($adminRole);
        $banker->roles()->attach($bankerRole);
        $user->roles()->attach($userRole);
    }
}
