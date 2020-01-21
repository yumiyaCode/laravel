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
   my name is famous around indonesian text book';
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
