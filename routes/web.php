<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// route basic
Route::get('halo',function()
{
  return'Waga na wa goetia jinrui saikyou kishi'.
        ' <br><b>Goetia de aru</b>';
});

Route::get('profile/arjuna',function()
{
  return'My name is arjuna, A great hero from the
   ancient epic poem from India, "Mahabharata".<br>
   If Karna is the "Hero of Charity",<br> Arjuna is indeed the "Endowed Hero".
   He was born as the son of the king of Kuru, the third of the five Pandava
   brothers,<br> and also as the son of the Lightning God Indra.';
});

Route::get('profile/karna',function()
{
  return'My name is Karna, A great hero from the ancient epic poem from India,
  <br>"Mahabharata". The rival of Arjuna, the central hero of the Mahabharata,
  <br>as well as his half-brother by a different father..';
});

Route::get('profile/chulain',function()
{
  return'My name is chu chulain<br>
   a great hero from celtic mitiologi,My weapon is spear the name is Gae bolg';
});

Route::get('profile/diki',function()
{
  return'My name is Diki<br>
   16th years old, from bandung';
});

Route::get('profile/budi',function()
{
  return'My name is budi<br>
   my name is famous on indonesian text book';
});

//route parameter

Route::get('biodata/{aji}',function($a)
{
 return'Hai this is biodata about '.$a;
});

Route::get('biodata/{name}/{adress}/{age}',function($a,$b,$c)
{
 return'My name is '.$a. 
       '<br>From '.$b. 
       '<br> My age '.$c;
});

//opsional parameter
Route::get('user/{name?}', function ($name = 'Diki Maulana') {
    return 'Your name is '.$name;
});

//latihan
//opsional parameter
Route::get('pesan/{makan?}/{minum?}/{harga?}', function ($makan=null, $minum= null, $harga=null) {
    $str = "Silakan Pesan Dulu";
    if (isset($makan)) {
         $str= "Anda Pesan ". $makan;
    }
    if (isset($minum)) {
         $str .= " & ". $minum;
    }

    if (isset($harga)&&($harga <= 0)) {
         $str .= " maaf Uang anda kurang";
    }
    elseif (isset($harga)&&($harga >35000)) {
         $str .= " Anda mendapat size Large dengan harga Rp.".$harga;
    }
     elseif (isset($harga)&&($harga >=25000)) {
         $str .= " Anda mendapat size Medium dengan harga Rp.".$harga;
    }
     elseif (isset($harga)&&($harga <25000)) {
         $str .= " Anda mendapat size Small dengan harga Rp.".$harga;
    }
    return $str;
});

//tugas
Route::get('tes-tni/{nama?}/{bb?}/{umur?}', function ($nama=null, $bb= null, $umur=null) {
    $str = "Silakan Isi Dulu";
    if (isset($nama)) {
         $str= "Nama ". $nama."<br>";
    }

    if(isset($bb)){
        $str .="Berat Badan Anda ".$bb."Kg<br>";

        if ($bb >= 76 && $bb <= 100 ) {
           $str.="Anda harus Turun berat badan";
        }
         elseif ($bb >= 65 && $bb <= 75) {
           $str.="Berat badan anda Ideal";
        }
         elseif ($bb >= 50 && $bb <= 64) {
           $str.="Naikan Berat Badan anda";
        }
         elseif ($bb <= 50) {
           $str.="Anda Kekurangan Gizi";
        }
    }

 if(isset($umur)){
        $str .="<br>Umur Anda ".$umur." thn<br>";
         if (($umur >= 30)&&($umur <= 40)) {
           $str.="Pangkat : Perwira";
        }
         elseif (($umur >= 40)&&($umur <= 50)) {
           $str.="Pangkat : Laksamana";
        }
         elseif (($umur >= 50)&&($umur <= 60)) {
           $str.="Pangkat : Jendral";
        }
 }

     return $str;
});

//akses model
Route::get('testmodel',function()
{

 $queery= App\Post::all();
 return $queery;

});

Route::get('testmodel-id',function()
{

 $queery= App\Post::find(1);
 return $queery;

});

Route::get('testmodel-like',function()
{

 $queery= App\Post::where('title','like','%Okita%')->get();
 return $queery;

});

Route::get('testmodel-ch',function()
{

$post = App\Post::find(1);
$post->title = "Tips and Build Atago";
$post->save();
return $post;

});

Route::get('testmodel-del',function()
{

$post = App\Post::find(1);
$post->delete();

});

Route::get('testmodel-add',function()
{

$post = new App\Post;
$post->title = "Tips and Build Colorado";
$post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
$post->save();
return $post;

});

Route::get('karung/take3',function()
{
$Servant = App\Servant::all()
->take(3);
return $Servant;

});

Route::get('karung/select', function()
{

$Servant = App\Servant::select('name','ids','jname')->first();
return $Servant;

});

Route::get('karung/{name}/{ids}/{jname}/{hp}/{atk}/{cost}/{va}', function($name,$ids,$jname,$hp,$atk,$cost,$va) {
    $Servant = new App\Servant;
    $Servant->name = $name;
    $Servant->ids = $ids;
    $Servant->jname = $jname;
    $Servant->hp = $hp;
    $Servant->atk = $atk;
    $Servant->cost = $cost;
    $Servant->va = $va;
    $Servant->save();
    return $Servant;
// check record baru di database
    });


Route::get('latihan','LatihanController@halo');
Route::get('kali/{a?}/{b?}','LatihanController@kali');
Route::get('bagi/{a?}/{b?}','LatihanController@bagian');
Route::get('tambah/{a?}/{b?}','LatihanController@tambah');
Route::get('kurang/{a?}/{b?}','LatihanController@kurang');
Route::get('/day','LatihanController@loop');
Route::get('/key','LatihanController@loop2');
Route::get('/key1','LatihanController@gaji');

//crud Tabungan
Route::get('tabungan','TabunganController@index');
Route::get('tabungan/{id}','TabunganController@show');
Route::get('tabungan-add/{nis}/{nama}/{kelas}/{jml}','TabunganController@store');
Route::get('tabungan-edit/{id}/{nis}/{nama}/{kelas}/{jml}','TabunganController@edit');
Route::get('tabungan-del/{id}','TabunganController@del');

//crud Customer
Route::get('customer','CustomerController@index');
Route::get('customer/{id}','CustomerController@show');
Route::get('customer-add/{code}/{name}/{email}/{country}/{city}/{address}/{number}','CustomerController@store');
Route::get('customer-edit/{id}/{code}/{name}/{email}/{country}/{city}/{address}/{number}','CustomerController@edit');
Route::get('customer-del/{id}','CustomerController@del');


//passing data
Route::get('pass','PassingController@pass');
Route::get('goal','PassingController@pass1');
Route::get('pass-tabungan','PassingController@pass2');




