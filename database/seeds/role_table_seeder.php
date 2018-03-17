<?php

use Illuminate\Database\Seeder;
use App\Role;

class role_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $role = new Role();
        $role->name = 'admin';
        $role->description = 'sob kisu korbar pare';
        $role->save();
        
        $role2 = new Role();
        $role2->name = 'user';
        $role2->description = 'kisu e korbar pare na';
        $role2->save();
        
        $role3 = new Role();
        $role3->name = 'author';
        $role3->description = 'kisu kisu korbar pare';
        $role3->save();


    }
}
