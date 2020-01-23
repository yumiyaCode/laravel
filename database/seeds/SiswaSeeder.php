<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['nama'=>'Diki Maulana','nisn'=>'12345','kelamin'=>'laki-laki','alamat'=>'Sekeawi','tglLahir'=>'2003-03-11','umur'=>'16'],
            ['nama'=>'Gilgamesh','nisn'=>'12346','kelamin'=>'laki-laki','alamat'=>'Uruk','tglLahir'=>'2001-05-12','umur'=>'18'],
            ['nama'=>'Kiara','nisn'=>'52345','kelamin'=>'Perempuan','alamat'=>'Eropa','tglLahir'=>'2004-12-23','umur'=>'23'],
            ['nama'=>'Suzuka Gozen','nisn'=>'52645','kelamin'=>'Perempuan','alamat'=>'Kyoto','tglLahir'=>'2000-06-09','umur'=>'18'],
            ['nama'=>'Tomoe Gozen','nisn'=>'59345','kelamin'=>'Perempuan','alamat'=>'Kyoto','tglLahir'=>'1999-08-23','umur'=>'16'],


        ];
          DB::table('siswa')->insert($posts);
    }
}
