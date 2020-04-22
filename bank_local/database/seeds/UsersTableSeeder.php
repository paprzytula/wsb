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
        DB::table('role_user')->truncate();
        $adminRole = Role::where('name', 'admin')->first();
        $bankerRole = Role::where('name', 'banker')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Adminowski',
            'email' => 'admin@admin.com',
            'pesel' => 12345678911,
            'password' => bcrypt('password')
        ]);
        $banker = User::create([
            'first_name' => 'Banker',
            'last_name' => 'Bankerowski',
            'email' => 'banker@banker.com',
            'pesel' => 12345678912,
            'password' => bcrypt('password')
        ]);
        $user = User::create([
            'first_name' => 'User',
            'last_name' => 'Userowski',
            'email' => 'user@user.com',
            'pesel' => 12345678913,
            'password' => bcrypt('password')
        ]);
        $admin->roles()->attach($adminRole);
        $banker->roles()->attach($bankerRole);
        $user->roles()->attach($userRole);

   factory(WSB_BANK\User::class, 10)->create();
    }
}
