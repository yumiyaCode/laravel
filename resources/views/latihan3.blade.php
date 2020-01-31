<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Personal Data Tabungan</center>
    Nama  : {{$tabungan -> nama}}<br>
    Nis : {{$tabungan -> nis}}<br>
    Jumlah : {{$tabungan -> jml}}<br>
    Kelas : {{$tabungan -> kelas}}<br>

@if($tabungan->jml > 25000)
    Tabungan Paket C<br>
@elseif($tabungan->jml > 10000)
    Tabungan Paket B<br>
@else
    Tabungan Paket A<br>
@endif

</body>
</html>