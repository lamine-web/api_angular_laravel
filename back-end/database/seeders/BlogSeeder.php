<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for($i = 0;$i <20 ; $i++){
            DB::table('blogs')->insert([
                'titre'=>fake()->sentence(3),
                'description'=>fake()->text(),
            ]);
        }
    }
}
