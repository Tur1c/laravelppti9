<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('mahasiswa_detail') }}">Detail</a>
    <a href="{{ route('user_profile', ['id' => 10]) }}">Detail</a>
    <ul>
        <li>Andi</li>
        <li>Budi</li>
    </ul>
</body>
</html>
