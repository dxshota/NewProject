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
            'template_id' => 1,
            'player_position_x' => -135.00, //1
            'player_position_y' => -50.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>2,
            'template_id' => 1,
            'player_position_x' => -135.00,
            'player_position_y' => 90.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>3,
            'template_id' => 1,
            'player_position_x' => -285.00,
            'player_position_y' => -50.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>4,
            'template_id' => 1,
            'player_position_x' => -285.00,
            'player_position_y' => 90.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>5,
            'template_id' => 1,
            'player_position_x' => -435.00,
            'player_position_y' => -50.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>6,
            'template_id' => 1,
            'player_position_x' => -435.00,
            'player_position_y' => 90.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>7,
            'template_id' => 1,
            'player_position_x' => -285.00,
            'player_position_y' => -200.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>8,
            'template_id' => 1,
            'player_position_x' => -285.00,
            'player_position_y' => 250.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>9,
            'template_id' => 1,
            'player_position_x' => -435.00,
            'player_position_y' => -200.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>10,
            'template_id' => 1,
            'player_position_x' => -435.00,
            'player_position_y' => 250.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>11,
            'template_id' => 1,
            'player_position_x' => -630.00, //1GK
            'player_position_y' => 20.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>12,
            'template_id' => 1,
            'player_position_x' => 40.00, //2
            'player_position_y' => -50.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>13,
            'template_id' => 1,
            'player_position_x' => 40.00,
            'player_position_y' => 90.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>14,
            'template_id' => 1,
            'player_position_x' => 185.00,
            'player_position_y' => -50.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>15,
            'template_id' => 1,
            'player_position_x' => 185.00,
            'player_position_y' => 90.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>16,
            'template_id' => 1,
            'player_position_x' => 340.00,
            'player_position_y' => -50.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>17,
            'template_id' => 1,
            'player_position_x' => 340.00,
            'player_position_y' => 90.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>18,
            'template_id' => 1,
            'player_position_x' => 185.00,
            'player_position_y' => -200.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>19,
            'template_id' => 1,
            'player_position_x' => 185.00,
            'player_position_y' => 250.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>20,
            'template_id' => 1,
            'player_position_x' => 340.00,
            'player_position_y' => -200.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>21,
            'template_id' => 1,
            'player_position_x' => 340.00,
            'player_position_y' => 250.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>22,
            'template_id' => 1,
            'player_position_x' => 540.00, //GK2
            'player_position_y' => 20.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>23,
            'template_id' => 1,
            'player_position_x' => -640.00, //sub1
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>24,
            'template_id' => 1,
            'player_position_x' => -590.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>25,
            'template_id' => 1,
            'player_position_x' => -540.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>26,
            'template_id' => 1,
            'player_position_x' => -490.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>27,
            'template_id' => 1,
            'player_position_x' => -440.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>28,
            'template_id' => 1,
            'player_position_x' => -390.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>29,
            'template_id' => 1,
            'player_position_x' => -340.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>30,
            'template_id' => 1,
            'player_position_x' => -290.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>31,
            'template_id' => 1,
            'player_position_x' => -240.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>32,
            'template_id' => 1,
            'player_position_x' => -190.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>33,
            'template_id' => 1,
            'player_position_x' => 550.00, //sub2
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>34,
            'template_id' => 1,
            'player_position_x' => 500.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>35,
            'template_id' => 1,
            'player_position_x' => 450.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>36,
            'template_id' => 1,
            'player_position_x' => 400.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>37,
            'template_id' => 1,
            'player_position_x' => 350.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>38,
            'template_id' => 1,
            'player_position_x' => 300.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>39,
            'template_id' => 1,
            'player_position_x' => 250.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>40,
            'template_id' => 1,
            'player_position_x' => 200.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>41,
            'template_id' => 1,
            'player_position_x' => 150.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id'=>42,
            'template_id' => 1,
            'player_position_x' => 100.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[ //1->4-4-2, 2->3-4-2-1, 3->5-3-2
            'id' =>43,
            'template_id' => 2,
            'player_position_x' => -120.00, //1
            'player_position_y' => 20.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>44,
            'template_id' => 2,
            'player_position_x' => -210.00,
            'player_position_y' => -100.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>45,
            'template_id' => 2,
            'player_position_x' => -210.00,
            'player_position_y' => 130.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>46,
            'template_id' => 2,
            'player_position_x' => -280.00,
            'player_position_y' => -250.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>47,
            'template_id' => 2,
            'player_position_x' => -280.00,
            'player_position_y' => 290.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>48,
            'template_id' => 2,
            'player_position_x' => -350.00,
            'player_position_y' => -100.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>49,
            'template_id' => 2,
            'player_position_x' => -350.00,
            'player_position_y' => 130.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>50,
            'template_id' => 2,
            'player_position_x' => -450.00,
            'player_position_y' => -170.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>51,
            'template_id' => 2,
            'player_position_x' => -450.00,
            'player_position_y' => 210.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>52,
            'template_id' => 2,
            'player_position_x' => -500.00,
            'player_position_y' => 20.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>53,
            'template_id' => 2,
            'player_position_x' => -630.00, //1GK
            'player_position_y' => 20.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>54,
            'template_id' => 2,
            'player_position_x' => 25.00, //2
            'player_position_y' => 20.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>55,
            'template_id' => 2,
            'player_position_x' => 110.00,
            'player_position_y' => -100.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>56,
            'template_id' => 2,
            'player_position_x' => 110.00,
            'player_position_y' => 130.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>57,
            'template_id' => 2,
            'player_position_x' => 180.00,
            'player_position_y' => -250.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>58,
            'template_id' => 2,
            'player_position_x' => 180.00,
            'player_position_y' => 290.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>59,
            'template_id' => 2,
            'player_position_x' => 250.00,
            'player_position_y' => -100.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>60,
            'template_id' => 2,
            'player_position_x' => 250.00,
            'player_position_y' => 130.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>61,
            'template_id' => 2,
            'player_position_x' => 350.00,
            'player_position_y' => -170.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>62,
            'template_id' => 2,
            'player_position_x' => 350.00,
            'player_position_y' => 210.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>63,
            'template_id' => 2,
            'player_position_x' => 410.00,
            'player_position_y' => 20.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>64,
            'template_id' => 2,
            'player_position_x' => 540.00, //GK2
            'player_position_y' => 20.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>65,
            'template_id' => 2,
            'player_position_x' => -640.00, //substitution
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>66,
            'template_id' => 2,
            'player_position_x' => -590.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>67,
            'template_id' => 2,
            'player_position_x' => -540.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>68,
            'template_id' => 2,
            'player_position_x' => -490.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>69,
            'template_id' => 2,
            'player_position_x' => -440.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>70,
            'template_id' => 2,
            'player_position_x' => -390.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>71,
            'template_id' => 2,
            'player_position_x' => -340.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>72,
            'template_id' => 2,
            'player_position_x' => -290.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>73,
            'template_id' => 2,
            'player_position_x' => -240.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>74,
            'template_id' => 2,
            'player_position_x' => -190.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>75,
            'template_id' => 2,
            'player_position_x' => 550.00, //sub2
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>76,
            'template_id' => 2,
            'player_position_x' => 500.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>77,
            'template_id' => 2,
            'player_position_x' => 450.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>78,
            'template_id' => 2,
            'player_position_x' => 400.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>79,
            'template_id' => 2,
            'player_position_x' => 350.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>80,
            'template_id' => 2,
            'player_position_x' => 300.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>81,
            'template_id' => 2,
            'player_position_x' => 250.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>82,
            'template_id' => 2,
            'player_position_x' => 200.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>83,
            'template_id' => 2,
            'player_position_x' => 150.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],[
            'id' =>84,
            'template_id' => 2,
            'player_position_x' => 100.00,
            'player_position_y' => 420.00,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'team_id' => 1
        ],);
    }
}
