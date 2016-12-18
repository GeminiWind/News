<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('tags')->insert([
             array('name'=>'sports', 'slug'=>'sports','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'football', 'slug'=>'football','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'club', 'slug'=>'club','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'technology', 'slug'=>'technology','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'event', 'slug'=>'event','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'plan', 'slug'=>'plan','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'entertainment', 'slug'=>'entertainment','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'actor', 'slug'=>'actor','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'business', 'slug'=>'business','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'product', 'slug'=>'product','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'exchange', 'slug'=>'exchange','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'networks', 'slug'=>'networks','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
        ]);
    }
}
