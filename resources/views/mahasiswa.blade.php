<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="pt-3 mt-3 text-center bg-white">
        <h1 class="p-3 text-white bg-dark d-inline-block">{{ $nama }}</h1>
        <h1 class="p-3 text-white bg-success d-inline-block">{{ $nilai }}</h1>
        @if ($nilai >= 85 and $nilai <= 100)
            <h2 class="alert alert-success d-inline-block">A</h2>
        @elseif ($nilai >= 70 and $nilai <= 84)
            <h2 class="alert alert-success d-inline-block">B</h2>
        @elseif ($nilai >= 55 and $nilai <= 69)
            <h2 class="alert alert-warning d-inline-block">C</h2>
        @elseif ($nilai >= 40 and $nilai <= 54)
            <h2 class="alert alert-danger d-inline-block">D</h2>
        @elseif ($nilai >= 0 and $nilai <= 39)
            <h2 class="alert alert-danger d-inline-block">E</h2>
        @else
            <h2 class="alert alert-secondary d-inline-block">Nilai Tidak Valid</h2>
        @endif

        <br>
        @if ($nilai >= 0 and $nilai <= 50)
            <div class="alert alert-danger d-inline-block">Tidak Lulus</div>
        @elseif($nilai > 50 and $nilai <= 100)
            <div class="alert alert-success d-inline-block">Lulus</div>
        @else
            <div class="alert alert-secondary d-inline-block">Nilai Tidak Valid</div>
        @endif
        <br>

        {{-- @foreach ($nilai2 as $val)
        <div class="alert alert-info d-inline-block">{{ $val }}</div>
        @endforeach --}}

        @forelse ($nilai2 as $val)
            @if ($val >= 0 and $val <= 50)
                <div class="alert alert-danger d-inline-block">{{ $val }}</div>
            @elseif($val >= 50 and $val <= 100)
                <div class="alert alert-success d-inline-block">{{ $val }}</div>
            @endif
        @empty
            <div class="alert alert-secondary d-inline-block">Nilai Tidak Valid</div>
        @endforelse




    </div>
    <hr>
    <div class="text-center">
        @for ($i = 1; $i <= 5; $i++)
            <div class="alert alert-info d-inline-block">{{ $i }}</div>
        @endfor
    </div>


    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
