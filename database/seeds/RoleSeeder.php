<?php

use App\Permission;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $permission=Permission::create(['name'=>'user_admin']);
       $permission->users()->attach(1);
    }
}
