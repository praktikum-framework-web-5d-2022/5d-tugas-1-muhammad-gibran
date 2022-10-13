@extends('master')
@section('content')
<style>
    .card2:hover {
        transform: scale(1.1);
    }

    .card2 {
        transition: transform 0.2s ease;
    }
</style>

<nav class="navbar navbar-expand-lg bg-info fixed-top" style="padding:1% ;">
    <div class="container-fluid">
        <a class="navbar-brand" style="color:azure;" href="/">Sistem Informasi Akademik</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto" style="color: #0d6efd;">
                <li class="nav-item">
                    <a class="nav-link" style="color:azure;" href="/Dosen">Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:azure;" href="/Mahasiswa">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:azure;" href="/MataKuliah">Mata Kuliah</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-lg" style="padding-bottom: 5%;">
    <div style="padding-top: 1%;">
        <h1 style="text-align: center;"><?= $Judul; ?></h1>
        <p style="text-align: center;"><?= $des; ?></p>
    </div>
    <div class="container-md" style="text-align: center;">
        <div class="card card2 m-3 shadow" style="width: 15rem; display: inline-block">
            <img class="card-img-top" src="img/cybr.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title"><?= $Dosen; ?></h5>
                <p class="card-text"><?= $DesDosen; ?></p>
                <a href="Dosen" class="stretched-link"></a>
            </div>
        </div>
        <div class="card card2 m-3 shadow" style="width: 15rem; display: inline-block">
            <img class="card-img-top" src="img/cybr.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title"><?= $Mahasiswa; ?></h5>
                <p class="card-text"><?= $DesMahasiswa; ?></p>
                <a href="Mahasiswa" class="stretched-link"></a>
            </div>
        </div>
        <div class="card card2 m-3 shadow" style="width: 15rem; display: inline-block">
            <img class="card-img-top" src="img/cybr.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title"><?= $MataKuliah; ?></h5>
                <p class="card-text"><?= $DesMataKuliah; ?></p>
                <a href="MataKuliah" class="stretched-link"></a>
            </div>
        </div>
    </div>
</div>

<footer class="bg-light text-center text-lg-start" style="padding-top:2%;">
    <div class="container p-4">
        <h5 class="text-uppercase">Website apa ini..?</h5>
        <p>
            <?= $tentang; ?>
        </p>
    </div>
</footer>
@endsection