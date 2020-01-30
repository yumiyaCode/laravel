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
 Nis : {{$value1 -> nis}}
 <hr>
 @endforeach

</body>
</html>