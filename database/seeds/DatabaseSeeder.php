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
            'name' => Str::random(10),
            'email' => 's@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('settings')->insert([
            'id' => '1',
            'brand' => 'Brand Name',
            'deskripsi_singkat' => 'Judul Deskripsi',
            'deskripsi' => 'Deskripsi',
            'link_shoppe' => 'Link Shoppe',
            'link_instagram' => 'Link IG',
            'wa' => '02885858'
        ]);
    }
}
