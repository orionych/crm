<?php

use App\User;
use App\OldUser;
use Illuminate\Database\Seeder;

class OldUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  public function run()
    {
     $userData =OldUser::all();
    DB::statement("SET FOREIGN_KEY_CHECKS=0");
    DB::table('users')->truncate();
    DB::statement("SET FOREIGN_KEY_CHECKS=1");
    Eloquent::unguard();
    foreach ($userData as $userSingle) {
         User::create([
                    'id'              => $userSingle->id,
                    'enabled'		=> $userSingle->enabled,
                    'username'          => $userSingle->username,
                    'email'		=> $userSingle->email,
                    'nickname'	=> '',
                    // 'password' => $userSingle->user_hashed_password,
                    // 'email'          => $userSingle->user_email,
                    'name'            => iconv("KOI8-R","UTF-8",$userSingle->description)
                ]);
    }	
        // $this->call(UsersTableSeeder::class);
    }
}
