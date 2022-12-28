@extends('master')
@section('content')

<style>
    .card2 {
        margin-right: auto;
        margin-left: auto;
        width: 250px;
        box-shadow: 0 15px 25px rgba(129, 124, 124, 0.2);
        height: 250px;
        border-radius: 5px;
        backdrop-filter: blur(14px);
        background-color: rgba(255, 255, 255, 0.2);
        padding: 5px;
        text-align: center;
    }
</style>
<main class="container" id="data">
    <h1 style="text-align: center; margin-top: 50px;" class="display-1">Data Dosen</h1>
    <p style="text-align: center;">Siapa yang kamu cari...?</p>
    <div class="row" style="margin-top: 50px;">
        <form action="#" method="get" class="card bg-opacity-0" style="padding-inline: 0%;">
            <input id="search" onkeyup="Search()" type="text" style="height: 150%; border-color: inherit;" placeholder=" Cari disini..." class="col-md-12 text-muted rounded-3">
        </form>
    </div>
    @forelse ($matakuliahs as $matakuliah)
    <ul style="list-style-type: none; padding-inline: 0%;">
        <li>
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-12 card h-25 bg-info bg-opacity-75">
                    <table>
                        <tr>
                            <td class="card2"><img src="img/buku.jpg" class="rounded-circle card-img-top" height="200px"></td>
                            <td style="padding-left: 5% ;">
                                <h2 class="text-black">{{$matakuliah}}</h2>
                                <small class="text-muted">{{$matakuliah}} | Posted on 21 Mar 2022</small>
                                <p> Mata Kuliah : {{$matakuliah}} <br> Dosen : santoso <br> Matkul ini mempelajari tentang Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam voluptatem veniam, est atque cumque eum delectus sint!</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </li>
    </ul>
    @empty
    <div class="alert alert-danger">
        Tidak ada data..
    </div>
    @endforelse
</main>
@endsection