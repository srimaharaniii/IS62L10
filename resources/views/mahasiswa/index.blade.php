<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ assets('/css/bootstrap.css') }}">
    <title>Document</title>
</head>

<body>
    {{-- Penampilan blade --}}
    <h2>List Mahasiswa Kelas{{ $kelas }}</h2>
    <ol>
        @foreach ($data as $nama)
            <li>{{ $nama }}</li>
        @endforeach
    </ol>

    {{-- <h2>List Mahasiswa Kelas<?php echo $kelas; ?> IS62</h2>
        <ol>
        <?php
        foreach ($data as $nama) {
            echo "<li>$nama</li>";
        }
        ?>
        </ol> --}}
    {{-- <ol>
            <li>Herdio</li>
            <li>Rani</li>
            <li>Putri</li>
            <li>Erik</li>
        </ol> --}}

    <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.js') }}"></script>

</body>

</html>
