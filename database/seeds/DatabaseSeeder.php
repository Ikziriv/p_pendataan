<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name'    => 'Admin',
            'email'   => 'admin@gmail.com',
            'is_admin'   => 1,
            'password'   => bcrypt('admin'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name'    => 'Pak RT',
            'email'   => 'rt@gmail.com',
            'is_rt'   => 1,
            'password'   => bcrypt('rt'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name'    => 'Pak RW',
            'email'   => 'rw@gmail.com',
            'is_rw'   => 1,
            'password'   => bcrypt('rw'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
