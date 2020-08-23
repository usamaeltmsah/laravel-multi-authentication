<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Admin',
            'username' => 'usamaeltmsah',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('adminPass'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Author',
            'username' => 'alimohamed',
            'email' => 'author@gmail.com',
            'password' => bcrypt('authorPass'),
        ]);
    }
}
