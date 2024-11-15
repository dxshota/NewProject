<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('templates')->insert([
            'formation_template_name' => "4-4-2",
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        // DB::table('templates')->insert([
        //     'formation_template_name' => "3-4-2-1",
        //     'created_at' => new DateTime(),
        //     'updated_at' => new DateTime(),
        //     'deleted_at' => null
        // ]);
        // DB::table('templates')->insert([
        //     'formation_template_name' => "5-3-2",
        //     'created_at' => new DateTime(),
        //     'updated_at' => new DateTime(),
        //     'deleted_at' => null
        // ]);
    }
}
