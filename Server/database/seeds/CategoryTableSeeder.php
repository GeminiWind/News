<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
             array('name'=>'Technology', 'slug'=>'technology','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'Sports', 'slug'=>'sports','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'Bussiness', 'slug'=>'bussiness','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'Movie', 'slug'=>'movie','created_at' => Carbon::now(),'updated_at' => Carbon::now()),     
             array('name'=>'Entertainment', 'slug'=>'entertainment','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'Culture', 'slug'=>'culture','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'Book', 'slug'=>'book','created_at' => Carbon::now(),'updated_at' => Carbon::now())
        ]);
    }
}
