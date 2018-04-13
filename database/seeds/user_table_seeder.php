<?php

use Illuminate\Database\Seeder;
use App\Role;

class user_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role :: where ('name','user')->first();
        $role_user2 = Role :: where ('name','author')->first();
        $role_user3 = Role :: where ('name','admin')->first();

        $user = new User();
        $user->name='shuvo';
        $user->email='shuvoprosad@gmail.com';
        $user->password=bcrypt('shuvo');
        $user->save();
        $user->roles()->attach($role_user3);

        $user2 = new User();
        $user2->name='antara';
        $user2->email='antara@gmail.com';
        $user2->password=bcrypt('antara');
        $user2->save();
        $user2->roles()->attach($role_user2);

        $user3 = new User();
        $user3->name='arifin';
        $user3->email='arifin@gmail.com';
        $user3->password=bcrypt('arifin');
        $user3->save();
        $user3->roles()->attach($role_user);

    }
}
