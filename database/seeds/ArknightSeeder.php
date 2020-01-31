<?php

use Illuminate\Database\Seeder;

class ArknightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $akg = [
            ['ids'=>'1234','name'=>'Hoshiguma','type'=>'Defender','role'=>'DPS-Recover','rare'=>6,'cost'=>16,'legion'=>'Reunion'],
            ['ids'=>'1235','name'=>'Nightingale','type'=>'Ranged','role'=>'Medic','rare'=>6,'cost'=>17,'legion'=>'Black-Steel'],
            ['ids'=>'9876','name'=>'Silver-Ash','type'=>'Vanguard','role'=>'DPS-Recover','rare'=>6,'cost'=>19,'legion'=>'Rhodes-Island'],
            ['ids'=>'7646','name'=>'Siege','type'=>'Vanguard','role'=>'DPS-Recover','rare'=>6,'cost'=>12,'legion'=>'Reunion'],
            ['ids'=>'3948','name'=>'Amiya','type'=>'Ranged','role'=>'Caster','rare'=>5,'cost'=>18,'legion'=>'Reunion'],
            ['ids'=>'9236','name'=>'Angelina','type'=>'Ranged','role'=>'Medic','rare'=>6,'cost'=>14,'legion'=>'Rine-Lab'],
            ['ids'=>'2093','name'=>'Astesia','type'=>'Guard','role'=>'Defense','rare'=>5,'cost'=>19,'legion'=>'Black-Steel'],
            ['ids'=>'0236','name'=>'Ctapult','type'=>'Ranged','role'=>'Sniper','rare'=>3,'cost'=>14,'legion'=>'Rine-Lab'],
            ['ids'=>'7656','name'=>'Cardigan','type'=>'Defender','role'=>'Defense','rare'=>3,'cost'=>10,'legion'=>'Reunion'],
            ['ids'=>'1934','name'=>'Hoshiguma','type'=>'Defender','role'=>'DPS-Recover','rare'=>6,'cost'=>16,'legion'=>'Reunion'],
            ['ids'=>'9096','name'=>'Angelina Beta','type'=>'Ranged','role'=>'Medic','rare'=>6,'cost'=>14,'legion'=>'Rine-Lab'],
          
        ];
          DB::table('arknights')->insert($akg);
    }
}
