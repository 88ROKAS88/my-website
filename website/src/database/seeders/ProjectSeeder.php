<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Project::factory(10)->create();

        // \App\Models\Project::factory(1)->create([
        //     'title' => 'Test User',

        // ]);

        // DB::table('projects')->insert([
        //     'title' => Str::random(10),
        //     'description' => Str::random(10) . '@gmail.com',

        // ]);
    }
}
