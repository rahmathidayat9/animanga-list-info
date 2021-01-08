<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
    		[
	    		'name' => 'Rahmat Hidayat',
	    		'email' => 'rahmat@gmail.com',
	    		'password' => Hash::make('password'),
    		],
    		[
	    		'name' => 'Admin',
	    		'email' => 'admin@gmail.com',
	    		'password' => Hash::make('passwordadmin'),
    		],
    	]);
    }
}
