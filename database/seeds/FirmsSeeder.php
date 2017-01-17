<?php

use Illuminate\Database\Seeder;

class FirmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $firms=DB::connection('oldcrm')->table('crm_firms');
        dd($firms->toArray());
    }
}
