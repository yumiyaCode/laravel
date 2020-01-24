<?php

use Illuminate\Database\Seeder;

class ServantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fgo = [
            ['name'=>'Arjuna','ids'=>'84','jname'=>'アルジュナ(Endowed Hero)','hp'=>'13230','atk'=>'12342','cost'=>'16','va'=>'Shimazaki Nobunaga'],
            ['name'=>'Karna','ids'=>'85','jname'=>'カルナ(Hero of Charity)','hp'=>'15230','atk'=>'11842','cost'=>'16','va'=>'Yusa Kouji'],
            ['name'=>'Okita Soji','ids'=>'68','jname'=>'沖田総司(Sakura Saber)','hp'=>'13530','atk'=>'12892','cost'=>'16','va'=>'Yuki Aoi'],
            ['name'=>'Mashuu','ids'=>'1','jname'=>'マシュ・キリエライト(Mashu Kryrieleght)','hp'=>'12930','atk'=>'8892','cost'=>'2','va'=>'Takanashi Rie'],
            ['name'=>'Sesshoin Kiara','ids'=>'167','jname'=>'Last Prophet','hp'=>'12930','atk'=>'10892','cost'=>'16','va'=>'Tanaka Rie'],
            ['name'=>'Emiya','ids'=>'57','jname'=>'Nameless','hp'=>'6778','atk'=>'2234','cost'=>'13','va'=>'d'],
            ['name'=>'Jeane alter','ids'=>'89','jname'=>'Dragon Witch','hp'=>'12000','atk'=>'18000','cost'=>'18','Sakamoto Maaya'],
            ['name'=>'Leonardo Da vinci','ids'=>'37','jname'=>'Da vinci-chan','hp'=>'15930','atk'=>'11892','cost'=>'16','va'=>'Sakamoto maaya'],
            ['name'=>'Da vinci Rider Lily','ids'=>'177','jname'=>'Da vinci-chan','hp'=>'13930','atk'=>'13892','cost'=>'16','va'=>'Sakaamoto maaya'],
            ['name'=>'Angra Minyuu','ids'=>'13','jname'=>'THE WEAK ONE','hp'=>'2234','atk'=>'2234','cost'=>'6','va'=>'d']
        ];

         DB::table('servants')->insert($fgo);

    }
}
