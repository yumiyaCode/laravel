<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

 @foreach($ark as $value)
<hr>
IDS    : {{$value-> ids}}<br>
Name   : {{$value-> name}}<br>
Type   : {{$value-> type}}<br>
Role   : {{$value-> role}}<br>
Rare   : {{$value-> rare}}<br>
Cost   : {{$value-> cost}}<br>
Legion : {{$value-> legion}}<br>

<hr>

@endforeach

</body>
</html>