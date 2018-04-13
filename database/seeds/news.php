<?php

use Illuminate\Database\Seeder;

class news extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) { 
            $title = str_random(8);
	    	DB::table('news')->insert([

	            'title' => $title,

	            'slug' => str_slug($title),

                'description' => str_random(25),
                
                'user_id' => 1,
                
                'newscategory_id' => 1

	        ]);

    	}
    }
}
