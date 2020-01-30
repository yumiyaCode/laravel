<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
   public function halo()
   {
       return'Halo Halo Halo Halo Halo Halo Halo';
   }

    public function kali($a= null, $b= null)
   {
       $op= "Silahkan Masukan Data Terlebih dahulu";
    if (isset($a) || isset($b)) {
        $op = " Silahkan Masukan 1 angka lagi";
    }
     if (isset($a) && isset($b)) {
        $c = $a*$b;
        $op ="$a*$b=$c";
    }
       return $op;
   }

    public function tambah($a= null, $b= null)
   {
        $op= "Silahkan Masukan Data Terlebih dahulu";
    if (isset($a) || isset($b)) {
        $op = " Silahkan Masukan 1 angka lagi";
    }
     if (isset($a) && isset($b)) {
        $c = $a+$b;
        $op ="$a+$b=$c";
    }
       return $op;
   }

    public function kurang($a= null, $b= null)
   {
         $op= "Silahkan Masukan Data Terlebih dahulu";
    if (isset($a) || isset($b)) {
        $op = " Silahkan Masukan 1 angka lagi";
    }
     if (isset($a) && isset($b)) {
        $c = $a-$b;
        $op ="$a-$b=$c";
    }
       return $op;
   }

    public function bagian($a = null, $b = null)
   {
         $op= "Silahkan Masukan Data Terlebih dahulu";
    if (isset($a) || isset($b)) {
        $op = " Silahkan Masukan 1 angka lagi";
    }
     if (isset($a) && isset($b)) {
        $c = $a/$b;
        $op ="$a/$b=$c";
    }
       return $op;
   }

   public function loop()
   {
       $data = 
      [
       ['nama'=>'senin'],
       ['nama'=>'selasa'],
       ['nama'=>'rabu'],
       ['nama'=>'kamis']
      ];
   
       foreach ($data as $hari=>$key) {
           echo "Nama ".$key['nama']."<hr>";
       }
   }

   public function loop2()
   {
       $jajan = [
           ['nama'=>'Emiya','kelas'=>'XII','uj'=>53000],
           ['nama'=>'Sakura','kelas'=>'XI','uj'=>30000],
           ['nama'=>'Rin','kelas'=>'XII','uj'=>55000],
           ['nama'=>'Saber','kelas'=>'XII','uj'=>20000],
           ['nama'=>'Shinji','kelas'=>'XII','uj'=>15000],
       ];

        foreach ($jajan as $nabung=>$key) {
        $n = $key['uj'];
        $nb = 0;
        $load = "Nama : ".$key['nama']." <br>Kelas : ".$key['kelas']." <br>Uang Jajan : ".$key['uj'];
           if($n >= 50000){
                $load .= "&nbsp(&nbsp&nbspRasio uang tabungan 25%&nbsp&nbsp)";
                $nb = 0.4;
                }
            elseif($n >= 25000){
                $load .= "&nbsp(&nbsp&nbspRasio uang tabungan 15%&nbsp&nbsp) ";
                $nb= 0.15;
                }
            elseif($n >= 10000){
                $load .= "&nbsp(&nbsp&nbspRasio uang tabungan 10%&nbsp&nbsp) ";
                $nb= 0.1;
                }
           $sisa= $n-($n*$nb);
           $hadisk2= $n*$nb;
           $load .="<br> Uang ditabung  = Rp.".$hadisk2;
           $load .="<br> Sisa Uang = Rp.".$sisa;
            echo $load."<hr>";
       }
   }
   public function gaji()
   {
        $req = [
           ['nama'=>'Emiya','agama'=>'islam','alamat'=>'Kp.Fuyuki No1','jk'=>'Laki-Laki','jabatan'=>'sekertaris','jbk'=>210],
           ['nama'=>'Sakura','agama'=>'islam','alamat'=>'Kp.Fuyuki No2','jk'=>'Perempuan','jabatan'=>'manager','jbk'=>190],
           ['nama'=>'Rin','agama'=>'islam','alamat'=>'Kp.Fuyuki No3','jk'=>'Perempuan','jabatan'=>'staff','jbk'=>270],
       ];

       foreach ($req as $ofc => $bb) {
           $sty = "Nama : ".$bb['nama']." <br>agama : ".$bb['agama']." <br>alamat : ".$bb['alamat'].
           "<br>Jenis-Kelamin : ".$bb['jk']." <br>jabatan : ".$bb['jabatan']." <br>jam_kerja : ".$bb['jbk']." jam";

           $wk= $bb['jbk'];
           $po= $bb['jabatan'];
           if ($po == "manager") {
           
           $gaji = 5000000;
           $sty.= "<br>Gaji Anda Sebagai Manager = Rp".$gaji; 

           }
           elseif ($po == "sekertaris") {
           $gaji = 3500000;
           $sty.= "<br>Gaji Anda Sebagai Sekertaris = Rp".$gaji; 
           }
           elseif ($po == "staff") {
           $gaji = 2500000;
           $sty.= "<br>Gaji Anda Sebagai Staff = Rp".$gaji;    
           }
           if ($wk >= 250) {
                $lembur = $gaji * 0.1;
                  $total = $gaji*0.025;
                    $total2 = $total + $lembur;
                   
           }
           elseif($wk >= 200){
                $lembur = $gaji * 0.05;
                   $total = $gaji*0.025;
                    $total2 = $total + $lembur;
                   
           }
           elseif ($wk <200) {
                 $lembur = $gaji * 0;
                   $total = $gaji*0.025;
                    $total2 = $total-$lembur;
                     

           }
            $sty.= "<br>PPN 2.25% = Rp".$total;
            $sty.= "<br>Uang lembur = Rp".$lembur;
            $sty.= "<br>Total Gaji Anda  = Rp".$total2;   
            echo $sty."<hr>";    
       }
   }
}

