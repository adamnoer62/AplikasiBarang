<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="s/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="s/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="s/assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand bg-light navigation-clean">
        <div class="container"><a class="navbar-brand" href="#">Aplikasi Barang&nbsp;</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"></button>
            <div class="collapse navbar-collapse" id="navcol-1"></div>
        </div>
    </nav>
    <header class="text-center text-white masthead" style="background:url('s/assets/img/bg-masthead.jpg')no-repeat center center;background-size:cover;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">Hallo Admin atau pegawai untuk halaman kalian silakan login terlebih dahulu</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form>
                        <a class="btn btn-primary" href="{{ route('login') }}"role="button">Login</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
</header>

</section>
<section class="showcase">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-dark table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nomor Barang</th>
                            <th>Nama Barang</th>
                            <th>Jenis Barang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produks as $pgw)
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $pgw->nomorbarang}}</td>
                            <td>{{ $pgw->namabarang}}</td>
                            <td>{{ $pgw->jenisbarang}}</td>
                            <td>
                            </tr>
                            @endforeach

    <script src="s/assets/js/jquery.min.js"></script>
    <script src="s/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="s/assets/js/bs-init.js"></script>
</body>

</html>