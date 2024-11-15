<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PositionPlayerTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('position_player_templates')->insert([ //1->4-4-2, 2->3-4-2-1, 3->5-3-2
            'template_id' => 1,
            'player_position_x' => -135.00, //1
            'player_position_y' => -50.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => -135.00,
            'player_position_y' => 90.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => -285.00,
            'player_position_y' => -50.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => -285.00,
            'player_position_y' => 90.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => -435.00,
            'player_position_y' => -50.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => -435.00,
            'player_position_y' => 90.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => -285.00,
            'player_position_y' => -200.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => -285.00,
            'player_position_y' => 250.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => -435.00,
            'player_position_y' => -200.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => -435.00,
            'player_position_y' => 250.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => -630.00, //1GK
            'player_position_y' => 20.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => 40.00, //2
            'player_position_y' => -50.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => 40.00,
            'player_position_y' => 90.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => 185.00,
            'player_position_y' => -50.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => 185.00,
            'player_position_y' => 90.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => 340.00,
            'player_position_y' => -50.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => 340.00,
            'player_position_y' => 90.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => 185.00,
            'player_position_y' => -200.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => 185.00,
            'player_position_y' => 250.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => 340.00,
            'player_position_y' => -200.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => 340.00,
            'player_position_y' => 250.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => 540.00, //GK2
            'player_position_y' => 20.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => -640.00, //sub1
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => -590.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => -540.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => -490.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => -440.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => -390.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => -340.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => -290.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => -240.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => -190.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => 550.00, //sub2
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => 500.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => 450.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => 400.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => 350.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => 300.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => 250.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => 200.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => 150.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 1,
            'player_position_x' => 100.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[ //1->4-4-2, 2->3-4-2-1, 3->5-3-2
            'template_id' => 2,
            'player_position_x' => -120.00, //1
            'player_position_y' => 20.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => -210.00,
            'player_position_y' => -100.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => -210.00,
            'player_position_y' => 130.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => -280.00,
            'player_position_y' => -250.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => -280.00,
            'player_position_y' => 290.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => -350.00,
            'player_position_y' => -100.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => -350.00,
            'player_position_y' => 130.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => -450.00,
            'player_position_y' => -170.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => -450.00,
            'player_position_y' => 210.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => -500.00,
            'player_position_y' => 20.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => -630.00, //1GK
            'player_position_y' => 20.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => 25.00, //2
            'player_position_y' => 20.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => 110.00,
            'player_position_y' => -100.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => 110.00,
            'player_position_y' => 130.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => 180.00,
            'player_position_y' => -250.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => 180.00,
            'player_position_y' => 290.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => 250.00,
            'player_position_y' => -100.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => 250.00,
            'player_position_y' => 130.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => 350.00,
            'player_position_y' => -170.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => 350.00,
            'player_position_y' => 210.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => 410.00,
            'player_position_y' => 20.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => 540.00, //GK2
            'player_position_y' => 20.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => -640.00, //substitution
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => -590.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => -540.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => -490.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => -440.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => -390.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => -340.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => -290.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => -240.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => -190.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => 550.00, //sub2
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => 500.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => 450.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => 400.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => 350.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => 300.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => 250.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => 200.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => 150.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],[
            'template_id' => 2,
            'player_position_x' => 100.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team-id' => 1
        ],);
    }
}
