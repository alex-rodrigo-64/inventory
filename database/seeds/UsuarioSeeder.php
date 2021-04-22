<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'name'=> 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123123')
        ]);
    }
}
