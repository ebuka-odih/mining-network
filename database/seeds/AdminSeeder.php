<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::where('email', '=', 'admin@mining-farm.co.uk')->first();
        if($admin === null){
            DB::table('users')->insert([
                'first_name' => 'Admin',
                'last_name' => 'Mining-farm',
                'status' => 1,
                'username' =>'admin',
                'user_role' => 1,
                'email' => 'admin@mining-farm.co.uk',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('JOHNDOLLAR787898'),

            ]);
        }
    }


}
