<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::where('email', '=', 'user@mining-farm.co.uk')->first();
        if($admin === null){
            DB::table('users')->insert([
                'first_name' => 'MF',
                'last_name' => 'User',
                'status' => 1,
                'username' =>'user',
                'user_role' => 0,
                'email' => 'user@mining-farm.co.uk',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('8OuCvZ123242453Io19xcxxx'),

            ]);
        }
    }


}
