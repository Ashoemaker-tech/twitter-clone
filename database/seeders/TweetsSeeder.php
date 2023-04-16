<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tweets')->insert([
            'name' => 'Andrew Shoemaker',
            'handle' => '@Ashoemaker_tech',
            'image' => 'https://randomuser.me/api/portraits/men/40.jpg',
            'tweet' => 'This is my first tweet on this new twitter and this is awesome',
            'file' => '/videos/city.mp4',
            'is_video' => true,
            'comments' => '35',
            'retweets' => '54',
            'likes' => '88',
            'analytics' => '81',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
