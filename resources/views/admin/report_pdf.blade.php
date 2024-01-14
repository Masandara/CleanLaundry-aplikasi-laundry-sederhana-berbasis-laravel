<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laporan Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>

    </style>
</head>

<body>

    <header class="text-center">
        <div class="row">
            <div class="col-4">
                <h1>{{ config('app.name') }}</h1>
            </div>
            <div class="col-4">
                <h3>Laporan Transaksi Bulan {{ $monthInput }} Tahun {{ $yearInput }}</h3>
            </div>
            <div class="col-4">
            </div>
        </div>
    </header>
    <br>
    {{-- <div class="text-left">
        <span class="text-muted small text-end">Dicetak pada Surakarta, {{ date('d M Y') }}</span>
    </div> --}}
    <hr>
    <main>
        <p>Banyak transaksi: {{ $transactionsCount }} transaksi</p>
        <p>Total pendapatan: Rp {{ number_format($revenue, 0, ',', '.') }}</p>
    </main>
    <hr>
    {{-- <div class="row mt-3">
        <div class="col-4 text-end">
            <p>Surakarta, {{ date('d F Y') }}</p>
            <br>
            <br>
            <br>
            <p></p>
        </div>
    </div> --}}
    <footer class="text-end">
        <span class="text-muted small text-end">Dicetak pada Surakarta, {{ date('d M Y') }}</span>
        {{-- <br>
        <br>
        <br>
        <p></p> --}}
    </footer>

</body>

</html>
