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
        $result = \DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => \Hash::make('sandiaman'),
            'role' => 'admin',
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);
        $result = \DB::table('users')->insert([
            'name' => 'Member',
            'email' => 'member@gmail.com',
            'password' => \Hash::make('sandiaman'),
            'role' => 'member',
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);
    }
}
