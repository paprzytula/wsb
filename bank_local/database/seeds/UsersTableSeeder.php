<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
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
        $customerRole = Role::where('name', 'customer')->first();
        $consultantRole = Role::where('name', 'consultant')->first();


        $admin = User::create([
            'lname'=>'User',
            'fname'=>'Admin',
            'email'=>'admin@admin.com',
            'password'=> Hash::make('password') // NOTE dummy credentials
        ]);
        $customer = User::create([
            'lname'=>'User',
            'fname'=>'Customer',
            'email'=>'customer@customer.com',
            'password'=> Hash::make('password') // NOTE dummy credentials
        ]);
        $consultant = User::create([
            'lname'=>'User',
            'fname'=>'Consultant',
            'email'=>'consultant@consultant.com',
            'password'=> Hash::make('password') // NOTE dummy credentials
        ]);

        $admin->roles()->attach($adminRole);
        $consultant->roles()->attach($consultantRole);
        $customer->roles()->attach($customerRole);
    }
}
