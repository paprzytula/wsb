<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create(['name'=>'admin']);
        Role::create(['name'=>'customer']);
        Role::create(['name'=>'consultant']);

    }
}
