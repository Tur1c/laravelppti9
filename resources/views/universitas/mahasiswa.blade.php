<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('/js/app.js') }}"></script>
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ol>
        {{-- <?php foreach ($namaMhs as $mhs) : ?>
            <li><?= $mhs ?></li>
        <?php endforeach ?> --}}
        @foreach ($namaMhs as $mhs)
            <li>{{ $mhs }}</li>
        @endforeach
    </ol>
    {{-- @if ($nilai >= 0) and ($nilai <= 50)
        <h1>Nilai anda {{ $nilai }}, tidak lulus</h1>
    @else
        <h1>Nilai anda {{ $nilai }}, lulus</h1>
    @endif --}}

    <button type="button" class="btn-primary">Primary</button>
    <button type="button" class="btn-secondary">Secondary</button>
    <button type="button" class="btn-success">Success</button>
    <button type="button" class="btn-danger">Danger</button>
    <button type="button" class="btn-warning">Warning</button>
    <button type="button" class="btn-info">Info</button>
    <button type="button" class="btn-light">Light</button>
    <button type="button" class="btn-dark">Dark</button>
    <button type="button" class="btn-link">Link</button>
</body>
</html>
