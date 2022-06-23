<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'odohuugiin@gmail.com',
            'password' => bcrypt('admin'),
        ]);
        // DB::table('roles')->insert([
        //     'name' => 'admin',
        //     'code' => 'admin',
        //     'name' => 'author',
        //     'code' => 'author',
        // ]);
    }
}
