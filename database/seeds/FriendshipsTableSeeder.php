<?php

use Illuminate\Database\Seeder;

class FriendshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('friendships')->insert([
            'person_id' => 1,
            'friend_id' => 2,
        ]);
        DB::table('friendships')->insert([
            'person_id' => 1,
            'friend_id' => 3,
        ]);
        DB::table('friendships')->insert([
            'person_id' => 2,
            'friend_id' => 1,
        ]);
        DB::table('friendships')->insert([
            'person_id' => 2,
            'friend_id' => 3,
        ]);
        DB::table('friendships')->insert([
            'person_id' => 3,
            'friend_id' => 1,
        ]);
        DB::table('friendships')->insert([
            'person_id' => 3,
            'friend_id' => 2,
        ]);
    }
}
