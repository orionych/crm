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
    $this->call(OldUsersSeeder::class);
    $this->call(RoleSeeder::class);
    $this->call(FirmsSeeder::class);
    $this->call(OldClientsSeeder::class);
    $this->call(OldRequestSeeder::class);
    $this->call(SectorSeeder::class);
    $this->call(OldRequestTypesSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
