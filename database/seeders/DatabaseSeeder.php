<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        DB::table('fields')->insert([
            'fieldname'=>'Artificial Intelligence',
        ]);
        DB::table('fields')->insert([
            'fieldname'=>'Cyber Security',
        ]);
        DB::table('fields')->insert([
            'fieldname'=>'Database Management',
        ]);
        DB::table('fields')->insert([
            'fieldname'=>'Data Visualisation',
        ]);
        DB::table('fields')->insert([
            'fieldname'=>'Computer Based Education',
        ]);
        DB::table('fields')->insert([
            'fieldname'=>'Gamification',
        ]);
        DB::table('fields')->insert([
            'fieldname'=>'Image Processing',
        ]);
        DB::table('fields')->insert([
            'fieldname'=>'IoT',
        ]);
        DB::table('fields')->insert([
            'fieldname'=>'Multimedia',
        ]);
        DB::table('fields')->insert([
            'fieldname'=>'Online Learning Platform',
        ]);
        DB::table('fields')->insert([
            'fieldname'=>'Educational Technology',
        ]);
    }
}
