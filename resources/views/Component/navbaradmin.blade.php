<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('document_title')</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a href="/a-home"><img src ="{{asset('storage/images/welcome_page/DUOQLO.png')}}" style="width: 50px; height:50px" alt="" srcset=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="/a-home">Home<span class="sr-only"></span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/a-view">Search</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/a-profile">Profile</a>
                </li>
            </ul>

            </div>

            <div class="container d-flex flex-row justify-content-end">
                <div class="row d-flex align-items-center">
                    <a href="/add-item" class="col btn btn-outline-danger navbar-btn">Add Item</a>
                    <form class="col" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" style ="width: 100px" class="btn btn-outline-danger navbar-btn">Sign Out</button>
                    </form>
                </div>
            </div>

        </div>
    </nav>
    @yield('body')
</body>
</html>
