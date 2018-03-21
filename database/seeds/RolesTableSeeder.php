<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
        	'Administrator',
        	'Specialist',
        	'User',
        	'Manager',
        	'Staff'
        ];

        foreach ($roles as $role) {
        	App\Role::create(['name' => $role]);
        }
    }
}
