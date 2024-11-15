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
            'id'=>1,
            'player_position_x' => -135.00, //1
            'player_position_y' => -50.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>2,
            'player_position_x' => -135.00,
            'player_position_y' => 90.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>3,
            'player_position_x' => -285.00,
            'player_position_y' => -50.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>4,
            'player_position_x' => -285.00,
            'player_position_y' => 90.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>5,
            'player_position_x' => -435.00,
            'player_position_y' => -50.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>6,
            'player_position_x' => -435.00,
            'player_position_y' => 90.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>7,
            'player_position_x' => -285.00,
            'player_position_y' => -200.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>8,
            'player_position_x' => -285.00,
            'player_position_y' => 250.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>9,
            'player_position_x' => -435.00,
            'player_position_y' => -200.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>10,
            'player_position_x' => -435.00,
            'player_position_y' => 250.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>11,
            'player_position_x' => -630.00, //1GK
            'player_position_y' => 20.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>12,
            'player_position_x' => 40.00, //2
            'player_position_y' => -50.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>13,
            'player_position_x' => 40.00,
            'player_position_y' => 90.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>14,
            'player_position_x' => 185.00,
            'player_position_y' => -50.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>15,
            'player_position_x' => 185.00,
            'player_position_y' => 90.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>16,
            'player_position_x' => 340.00,
            'player_position_y' => -50.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>17,
            'player_position_x' => 340.00,
            'player_position_y' => 90.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>18,
            'player_position_x' => 185.00,
            'player_position_y' => -200.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>19,
            'player_position_x' => 185.00,
            'player_position_y' => 250.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>20,
            'player_position_x' => 340.00,
            'player_position_y' => -200.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>21,
            'player_position_x' => 340.00,
            'player_position_y' => 250.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>22,
            'player_position_x' => 540.00, //GK2
            'player_position_y' => 20.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>23,
            'player_position_x' => -640.00, //sub1
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>24,
            'player_position_x' => -590.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>25,
            'player_position_x' => -540.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>26,
            'player_position_x' => -490.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>27,
            'player_position_x' => -440.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>28,
            'player_position_x' => -390.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>29,
            'player_position_x' => -340.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>30,
            'player_position_x' => -290.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>31,
            'player_position_x' => -240.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>32,
            'player_position_x' => -190.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>33,
            'player_position_x' => 550.00, //sub2
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>34,
            'player_position_x' => 500.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>35,
            'player_position_x' => 450.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>36,
            'player_position_x' => 400.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>37,
            'player_position_x' => 350.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>38,
            'player_position_x' => 300.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>39,
            'player_position_x' => 250.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>40,
            'player_position_x' => 200.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>41,
            'player_position_x' => 150.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id'=>42,
            'player_position_x' => 100.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[ //1->4-4-2, 2->3-4-2-1, 3->5-3-2
            'id' =>43,
            'player_position_x' => -120.00, //1
            'player_position_y' => 20.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>44,
            'player_position_x' => -210.00,
            'player_position_y' => -100.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>45,
            'player_position_x' => -210.00,
            'player_position_y' => 130.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>46,
            'player_position_x' => -280.00,
            'player_position_y' => -250.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>47,
            'player_position_x' => -280.00,
            'player_position_y' => 290.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>48,
            'player_position_x' => -350.00,
            'player_position_y' => -100.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>49,
            'player_position_x' => -350.00,
            'player_position_y' => 130.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>50,
            'player_position_x' => -450.00,
            'player_position_y' => -170.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>51,
            'player_position_x' => -450.00,
            'player_position_y' => 210.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>52,
            'player_position_x' => -500.00,
            'player_position_y' => 20.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>53,
            'player_position_x' => -630.00, //1GK
            'player_position_y' => 20.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>54,
            'player_position_x' => 25.00, //2
            'player_position_y' => 20.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>55,
            'player_position_x' => 110.00,
            'player_position_y' => -100.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>56,
            'player_position_x' => 110.00,
            'player_position_y' => 130.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>57,
            'player_position_x' => 180.00,
            'player_position_y' => -250.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>58,
            'player_position_x' => 180.00,
            'player_position_y' => 290.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>59,
            'player_position_x' => 250.00,
            'player_position_y' => -100.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>60,
            'player_position_x' => 250.00,
            'player_position_y' => 130.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>61,
            'player_position_x' => 350.00,
            'player_position_y' => -170.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>62,
            'player_position_x' => 350.00,
            'player_position_y' => 210.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>63,
            'player_position_x' => 410.00,
            'player_position_y' => 20.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>64,
            'player_position_x' => 540.00, //GK2
            'player_position_y' => 20.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>65,
            'player_position_x' => -640.00, //substitution
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>66,
            'player_position_x' => -590.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>67,
            'player_position_x' => -540.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>68,
            'player_position_x' => -490.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>69,
            'player_position_x' => -440.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>70,
            'player_position_x' => -390.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>71,
            'player_position_x' => -340.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>72,
            'player_position_x' => -290.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>73,
            'player_position_x' => -240.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>74,
            'player_position_x' => -190.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>75,
            'player_position_x' => 550.00, //sub2
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>76,
            'player_position_x' => 500.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>77,
            'player_position_x' => 450.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>78,
            'player_position_x' => 400.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>79,
            'player_position_x' => 350.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>80,
            'player_position_x' => 300.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>81,
            'player_position_x' => 250.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>82,
            'player_position_x' => 200.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 1
        ],[
            'id' =>83,
            'player_position_x' => 150.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],[
            'id' =>84,
            'player_position_x' => 100.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1,
            'template_id' => 2
        ],);
    }
}
