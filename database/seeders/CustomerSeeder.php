<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //        
            Customer::create([
                'city' => 'Breda',
                'zipcode' => '1212er',
                'firstname' => 'Jantje',
                'lastname' => 'Klaassen',
                'email' => 'jantjeklaassen@gmail.com',
                'address' => 'hb3',
                'birth_date' => '2003-04-12',
                'phone' => '+31 6 13135790',
                'user_id' => User::inRandomOrder()->first()->id
        ]);
        
    }
}

