<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $this->call(UsersSeeder::class);
    $this->call(RoleSeeder::class);
    $this->call(FirmsSeeder::class);
    $this->call(ClientsSeeder::class);
    $this->call(RequestSeeder::class);
    $this->call(OkvedSeeder::class);
    $this->call(RequestSeeder::class);
    // $this->call(ProductSeeder::class);
    $this->call(EquipmentSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
