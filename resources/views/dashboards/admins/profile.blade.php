@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Profile')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-4">
            <div class="card text-white bg-light mb-3">
                <img src="{{url('/img/fotopas.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h1>Adam Noer Hidayatullah</h1>
                    <a>adamnoer62@gmail.com</a><br>
                     <a href="https://www.linkedin.com/in/adam-nur-b25a87195/">Linkedin</a>
                </div>
            </div>
            <div class="card text-white bg-light mb-3">
                <div class="card-body text-center">
                    <a>+62 822 9793 0060</a><br>
                   
                    <a>Jonggol Bogor, Jawa Barat – Indonesia 1680</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card text-white bg-light mb-3">
                <div class="card-header">{{ __('Ringkasan') }}</div>
                <div class="card-body" style="text-justify">
                    Saya saat ini ingin untuk terus belajar dan mengimplementasikan apa yang saya ketahui, dengan begitu saya 
                    dapat melakukan pekerjaan semampu dan semaksimal saya. Saya dapat melakukan pekerjaan secara tim ataupun 
                    juga secara individual, memiliki pengalaman bekerja secara tim ketika dalam berorganisasi dan bekerja secara 
                    individual ketika dalam mengerjakan Tugas Akhir pada saat masih menjadi mahasiswa memicu saya untuk dapat 
                    beradaptasi dengan segala situasi dan kondisi.
                </div>
            </div>

            <div class="card text-white bg-light mb-3">
                <div class="card-header">{{ __('Pendidikan') }}</div>
                <div class="card-body" style="text-justify">
                    <a>1.Ilmu Pengetahuan sosial – SMAN 1 JONGGOL, Bogor – Jawa Barat, Indonesia (2015 – 2017)</a>
                    <br>
                    <a>2. Diploma Teknik Informatika - Politeknik Pos Indonesia, Bandung – Jawa Barat, Indonesia
                        IPK 2.99 (2017 – 2021)</a>
                </div>
            </div>

            <div class="card text-white bg-light mb-3">
                <div class="card-header">{{ __('Pengalaman') }}</div>
                <div class="card-body" style="text-justify">
                    <a>1. Manajemen data</a>
                    <br>
                    <a>  Badan Pusat Statistik Jawa Barat</a>
                    <a>  - Mengelola data, Membuat Laporan, mengamati data dan tugas sampingan scan data sejawa barat.</a>
                    <br>
                </div>
            </div>

            <div class="card text-white bg-light mb-3">
                <div class="card-header">{{ __('Kemampuan') }}</div>
                <div class="card-body" style="text-justify">
                    <a>1. Web Programmer (HTML, PHP, Laravel, CodeIgniter, Javascript, Bootsrap, CSS, MVC, OOP)</a>
                    <br>
                    <a>2. Desain Grafis (Ibis Paint, Adobe Photoshop)</a>
                    <br>
                    <a>3. Pengolahan Data (Microsoft Office Word, Excel)</a>
                    <br>
                    <a>4. Manajemen data</a>
                    <br>
                    <a>5. Analisis</a>
                </div>
            </div>

            <div class="card text-white bg-light mb-3">
                <div class="card-header">{{ __('Proyek') }}</div>
                <div class="card-body" style="text-justify">
                    <a>1. Membuat Aplikasi Jasa Gusmus Terapy (PHP)</a>
                    <br>
                    <a>2. Membuat Aplikasi Sensus Penduduk Pada Badan Pusat Statisik Jawa Barat Laravel (PHP)</a>
                    <br>
                </div>
            </div>

            <div class="card text-white bg-light mb-3">
                <div class="card-header">{{ __('Sertifikasi dan Pencapaian') }}</div>
                <div class="card-body" style="text-justify">
                    <a>1. Sertifikat IC3 Computing Fundamental GS5</a>
                    <br>
                    <a>- Hardware</a>
                    <br>
                    <a>- Software</a>
                    <br>
                    <a>- Operating System</a>
                    <br>
                    <a>- Troubleshooting</a>
                    <br>
                    <a>- Basic Computer Care</a>
                    <br>
                    <a>2. Sertifikat TOEFL (513)</a>
                </div>
            </div>

        </div>
        
    </div>
</div>
@endsection
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">


