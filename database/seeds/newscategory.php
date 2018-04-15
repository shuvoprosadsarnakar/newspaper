<?php

use Illuminate\Database\Seeder;

class newscategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('news_categories')->insert([

            'parent_id' => 1,
            
            'category_name' => "বাংলাদেশ",
            
        ]);

        DB::table('news_categories')->insert([

            'parent_id' => 1,
            
            'category_name' => "দেশজুড়ে",
            
        ]);

        DB::table('news_categories')->insert([

            'parent_id' => 1,
            
            'category_name' => "আন্তর্জাতিক",
            
        ]);

        DB::table('news_categories')->insert([

            'parent_id' => 1,
            
            'category_name' => "খেলাধুলা",
            
        ]);

        DB::table('news_categories')->insert([

            'parent_id' => 1,
            
            'category_name' => "বিনোদন",
            
        ]);

        DB::table('news_categories')->insert([

            'parent_id' => 1,
            
            'category_name' => "শিক্ষাঙ্গন",
            
        ]);

        DB::table('news_categories')->insert([

            'parent_id' => 1,
            
            'category_name' => "ফিচার",
            
        ]);

        DB::table('news_categories')->insert([

            'parent_id' => 1,
            
            'category_name' => "ফটো গ্যালারি",
            
        ]);

        DB::table('news_categories')->insert([

            'parent_id' => 1,
            
            'category_name' => "ভিডিও",
            
        ]);

    }
}
