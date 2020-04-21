<?php

use Illuminate\Database\Seeder;
use WSB_BANK\Role;
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
        Role::create(['name'=>'banker']);
        Role::create(['name'=>'user']);
    }
}
