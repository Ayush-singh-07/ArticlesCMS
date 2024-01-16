<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Ayush Kumar Singh',
            'email' => 'ayushsingh.offc08@gmail.com',
            'password' => Hash::make("ayush@001")
        ]);

        \App\Models\User::factory()->create([
            'name' => 'john',
            'email' => 'john@gmail.com',
            'password' => Hash::make("john@001")
        ]);

        \App\Models\User::factory()->create([
            'name' => 'diana prince',
            'email' => 'diana@gmail.com',
            'password' => Hash::make("diana@001")
        ]);
        \App\Models\User::factory()->create([
            'name' => 'barry allen',
            'email' => 'barry@gmail.com',
            'password' => Hash::make("barry@001")
        ]);
        \App\Models\User::factory()->create([
            'name' => 'bruce wayne',
            'email' => 'bruce@gmail.com',
            'password' => Hash::make("bruce@001")
        ]);

        \App\Models\User::factory()->create([
            'name' => 'clark kent',
            'email' => 'clark@gmail.com',
            'password' => Hash::make("clark@001")
        ]);

        \App\Models\UserTypes::create([
            'user_id' => '1',
            'usertype' => 'A',

        ]);

         \App\Models\UserTypes::create([
            'user_id' => '2',
            'usertype' => 'E',

        ]);

        
        \App\Models\UserTypes::create([
            'user_id' => '3',
            'usertype' => 'U',

        ]);

        
        \App\Models\UserTypes::create([
            'user_id' => '4',
            'usertype' => 'U',

        ]);

        
        \App\Models\UserTypes::create([
            'user_id' => '5',
            'usertype' => 'U',

        ]);

        \App\Models\UserTypes::create([
            'user_id' => '6',
            'usertype' => 'U',

        ]);


        
        
    }
}
