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
        // DB::table('admins')->insert(['username' => 'admin', 'password' => bcrypt('mlmAdmin#')]);

         DB::table('districts')->insert(['name' => 'Barpeta']);
         DB::table('districts')->insert(['name' => 'Bongaigaon']);
         DB::table('districts')->insert(['name' => 'Cachar']);
         DB::table('districts')->insert(['name' => 'Darrang']);
         DB::table('districts')->insert(['name' => 'Dhemaji']);
         DB::table('districts')->insert(['name' => 'Dhubri']);
         DB::table('districts')->insert(['name' => 'Dibrugarh']);
         DB::table('districts')->insert(['name' => 'Goalpara']);
         DB::table('districts')->insert(['name' => 'Golaghat']);
         DB::table('districts')->insert(['name' => 'Hailakandi']);
         DB::table('districts')->insert(['name' => 'Jorhat']);
         DB::table('districts')->insert(['name' => 'Karbi Anglong']);
         DB::table('districts')->insert(['name' => 'Karimganj']);
         DB::table('districts')->insert(['name' => 'Kokrajhar']);
         DB::table('districts')->insert(['name' => 'Lakhimpur']);
         DB::table('districts')->insert(['name' => 'Morigaon']);
         DB::table('districts')->insert(['name' => 'Nagaon']);
         DB::table('districts')->insert(['name' => 'Nalbari']);

         DB::table('districts')->insert(['name' => 'Dima Hasao']);
         //DB::table('districts')->insert(['name' => 'Sivasagar']);
         DB::table('districts')->insert(['name' => 'Sonitpur']);
         DB::table('districts')->insert(['name' => 'Tinsukia']);
         DB::table('districts')->insert(['name' => 'Kamrup']);
         DB::table('districts')->insert(['name' => 'Baksa']);
         DB::table('districts')->insert(['name' => 'Udalguri']);
         DB::table('districts')->insert(['name' => 'Chirang']);
         DB::table('districts')->insert(['name' => 'Majuli']);
    }
}
