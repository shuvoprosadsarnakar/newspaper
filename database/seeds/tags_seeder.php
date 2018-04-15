<?php

use Illuminate\Database\Seeder;
use App\Tag;

class tags_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'tag'           => 'মৃত্যু'
        ]);
        Tag::create([
            'tag'           => 'ধর্ষণ'
        ]);
        Tag::create([
            'tag'           => 'চুরি'
        ]);
        Tag::create([
            'tag'           => 'ডাকাতি'
        ]);
        Tag::create([
            'tag'           => 'দুর্ঘটনা'
        ]);
        Tag::create([
            'tag'           => 'বৃষ্টি'
        ]);
        Tag::create([
            'tag'           => 'মৃত্যু'
        ]);
    }
}
