<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

 @foreach($tabungan as $value1)

Nama  : {{$value1 -> nama}}<br>
Nis : {{$value1 -> nis}}<br>
Jumlah : {{$value1 -> jml}}<br>

@if($value1->jml >= 50000)
    Tabungan Paket C<br>
@elseif($value1->jml >= 25000)
    Tabungan Paket B<br>
@elseif($value1->jml >= 10000)
    Tabungan Paket A<br>
@endif

<hr>

@endforeach

</body>
</html>