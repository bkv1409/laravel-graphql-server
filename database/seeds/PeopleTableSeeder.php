<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            'id' => 1,
            'first_name' => 'Kyle',
            'last_name' => 'Reyes',
            'username' => 'kreyes',
            'email' => 'kyle.reyes@example.com',
        ]);
        DB::table('people')->insert([
            'id' => 2,
            'first_name' => 'Emma',
            'last_name' => 'Thomsen',
            'username' => 'ethomsen',
            'email' => 'emma.thomsen@example.com',
        ]);
        DB::table('people')->insert([
            'id' => 3,
            'first_name' => 'Crispim',
            'last_name' => 'Ramos',
            'username' => 'cramos',
            'email' => 'crispim.ramos@example.com',
        ]);
    }
}
