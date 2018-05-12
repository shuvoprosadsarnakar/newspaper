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

            'parent_id' => null,
            
            'category_name' => "Bangladesh",
            
        ]);

        DB::table('news_categories')->insert([

            'parent_id' => null,
            
            'category_name' => "Nationwide",
            
        ]);

        DB::table('news_categories')->insert([

            'parent_id' => null,
            
            'category_name' => "Internatioal",
            
        ]);

        DB::table('news_categories')->insert([

            'parent_id' => null,
            
            'category_name' => "Sports",
            
        ]);

        DB::table('news_categories')->insert([

            'parent_id' => null,
            
            'category_name' => "Entertainment",
            
        ]);

        DB::table('news_categories')->insert([

            'parent_id' => null,
            
            'category_name' => "Education",
            
        ]);

        DB::table('news_categories')->insert([

            'parent_id' => null,
            
            'category_name' => "Features",
            
        ]);

        DB::table('news_categories')->insert([

            'parent_id' => null,
            
            'category_name' => "Photo gallery",
            
        ]);

        DB::table('news_categories')->insert([

            'parent_id' => null,
            
            'category_name' => "Jobs",
            
        ]);

    }
}
