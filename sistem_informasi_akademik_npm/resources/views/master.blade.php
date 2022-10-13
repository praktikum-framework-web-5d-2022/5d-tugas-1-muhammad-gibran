<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('tittle','Sistem Informasi Akademik NPM')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script>
        function Search() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById('search');
            filter = input.value.toUpperCase();
            ul = document.getElementById("data");
            li = ul.getElementsByTagName('li');

            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("h2")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script>
</head>

<body>
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
    <div class="card"><img src="img/broadcast.jpg" alt=""></div>


    @yield('content')

    <footer class="bg-light text-center text-lg-start" style="padding-top:2%;">
        <div class="text-end p-2 bg-info" style="color:azure;">
            Muhammad Gibran | Tugas Framework Pemrograman Web
        </div>
    </footer>

</body>

</html>