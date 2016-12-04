<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
             array('name'=>'Atletico Madrid', 'slug'=>'atletico-madrid','img_url'=>'images/authors/default_author.png','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'ZACH SCHONBRUN', 'slug'=>'zach-schonbrun','img_url'=>'images/authors/default_author.png','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'Mark Savage', 'slug'=>'mark-savage','img_url'=>'images/authors/default_author.png','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'Leo Kelion', 'slug'=>'leo-kelion','img_url'=>'images/authors/default_author.png','created_at' => Carbon::now(),'updated_at' => Carbon::now()),     
             array('name'=>'Padraig Belton', 'slug'=>'padraig-belton','img_url'=>'images/authors/default_author.png','created_at' => Carbon::now(),'updated_at' => Carbon::now())
        ]);
    }
}
