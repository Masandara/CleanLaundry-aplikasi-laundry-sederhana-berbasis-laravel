<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Laundry XYZ') }}</title>
    <link href="{{ asset('/img/dashboard/favicon.png') }}" rel="icon" type="image/png">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Javascript -->
    <script defer src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script defer src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <!-- Fontawesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body style="padding-top: 56px;">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark
    fixed-top">
        <div class="container">
            <a class="navbar-brand" href="">{{ config('app.name') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    {{-- <li class="nav-item mr-sm-3 mb-2 mb-sm-0">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @lang('landing.langtext')
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ url('id') }}">Indonesia</a>
                                <a class="dropdown-item" href="{{ url('en') }}">English</a>
                            </div>
                        </div>
                    </li> --}}
                    <li class="nav-item">
                        <a class="btn btn-success" href="{{ url('login') }}">@lang('landing.loginOrRegister')</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="py-5 position-relative">
        <div class="background-blur"></div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-3 text-white mt-5 mb-2 with-border">@lang('landing.welcome')</h1>
                    <p class="lead mb-5 text-white text-center">@lang('landing.tagline')</p>
                </div>
                {{-- <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="{{ asset('img/landing/header.png') }}" alt=""
                        srcset="">
                </div> --}}
            </div>
        </div>
    </header>

    <section class="p-5 text-center">
        <h3>@lang('landing.why')</h3>
    </section>

    <!-- Page Content -->
    <section class="kelebihan bg-blue text-white">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Peralatan Lengkap dan Canggih</h4>
                    <p>Laundry kami menggunakan peralatan yang cukup lengkap dan canggih. Peralatan kami memungkinkan
                        baju tidak perlu dijemur dan mengurangi debu pada baju</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="{{ asset('img/landing/alat.png') }}" alt=""
                        srcset="">
                </div>
            </div>
        </div>
    </section>

    <section class="kelebihan bg-blue text-white">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="{{ asset('img/landing/tipebaju.png') }}"
                        alt="" srcset="">
                </div>
                <div class="col-lg-6">
                    <h4>Segala Tipe Pakaian</h4>
                    <p>Laundry kami menerima segala tipe pakaian mulai dari baju, celana, jas, dan
                        selimut.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="kelebihan bg-blue text-white">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Pegawai Profesional</h4>
                    <p>Laundry kami terdiri dari pegawai-pegawai yang profesional yang mampu bekerja dalam tim dengan
                        cukup baik dan handal di bidangnya sehingga membuat laundry kami minim kesalahan</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="{{ asset('img/landing/pegawai.png') }}"
                        alt="" srcset="">
                </div>
            </div>
        </div>
    </section>

    <section class="text-center p-5">
        <h3>Apa saja yang bisa kami laundry?</h3>
    </section>

    <section class="bg-blue p-5 text-center">
        <div class="container">
            <div class="row flex-row flex-nowrap kategori">
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="{{ asset('img/landing/Baju.jpg') }}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Baju</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="{{ asset('img/landing/Celana.jpg') }}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Celana</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="{{ asset('img/landing/Jas.jpg') }}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Jas</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="{{ asset('img/landing/Selimut.jpg') }}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Selimut</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-center p-5">
        <h3>Temukan kami!</h3>
    </section>

    <section class="text-white bg-blue">
        <div class="container p-5">
            <div class="row">
                <div class="col-md-6 mb-4 mb-sm-0">
                    <h5>Alamat</h5>
                    <p>Tipes, Kec. Serengan, Kota Surakarta, Jawa Tengah</p>
                    <br>
                    <h5>Kontak</h5>
                    <p>cleanlaundry@gmail.com</p>
                    <p>(0361)123456</p>
                    <p>081234567890</p>
                </div>
                <div class="col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.987975718024!2d110.80675027455068!3d-7.576286774840404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1677724790d5%3A0x8165748f42e56384!2sJl.%20Bhayangkara%2C%20Tipes%2C%20Kec.%20Serengan%2C%20Kota%20Surakarta%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1704006961476!5m2!1sid!2sid"
                        width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            {{-- <p class="m-0 text-center text-white">Terima Kasih Telah Memilih {{ config('app.name') }} Sebagai
                Kebersihan Pakaian Anda</p> --}}
        </div>
        <!-- /.container -->
    </footer>

</body>

</html>
