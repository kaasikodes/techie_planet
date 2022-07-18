<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Seed the subject table
        DB::table('subjects')->insert([
            'name' => 'Physics',
            'description' => 'wonderful',
            
        ]);
        DB::table('subjects')->insert([
            'name' => 'Geography',
            'description' => 'wonderful',
            
        ]);
        DB::table('subjects')->insert([
            'name' => 'Economics',
            'description' => 'wonderful',
            
        ]);
        DB::table('subjects')->insert([
            'name' => 'Chemistry',
            'description' => 'wonderful',
            
        ]);
        DB::table('subjects')->insert([
            'name' => 'Creative Arts',
            'description' => 'wonderful',
            
        ]);


        // seed the students table
        DB::table('students')->insert([
            'name' => 'James Okoro',
            
            
        ]);
        DB::table('students')->insert([
            'name' => 'Stephanie Oko',
            
            
        ]);
        DB::table('students')->insert([
            'name' => 'Arya Paul',
            
            
        ]);
        DB::table('students')->insert([
            'name' => 'Patience Larry',
            
            
        ]);
      
    }
}
