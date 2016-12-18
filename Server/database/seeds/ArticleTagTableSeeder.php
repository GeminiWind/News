<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ArticleTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_tag')->insert([
             array('article_id'=>1, 'tag_id'=>1,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('article_id'=>1, 'tag_id'=>2,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('article_id'=>1, 'tag_id'=>3,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('article_id'=>2, 'tag_id'=>4,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('article_id'=>2, 'tag_id'=>5,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('article_id'=>2, 'tag_id'=>6,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('article_id'=>3, 'tag_id'=>7,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('article_id'=>3, 'tag_id'=>8,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('article_id'=>4, 'tag_id'=>9,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('article_id'=>4, 'tag_id'=>10,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('article_id'=>5, 'tag_id'=>3,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('article_id'=>5, 'tag_id'=>11,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('article_id'=>5, 'tag_id'=>12,'created_at' => Carbon::now(),'updated_at' => Carbon::now())
        ]);
    }
}
