<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopper</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
{{-- navbar --}}
    <nav class="navbar navbar-expand bg-dark sticky-top px-5 pt-3">
        <div class="container-fluid ">
            <div class="me-0 p-0" style="margin-left: 250px">
                <a href="#" class="navbar-brand fs-2 text-white" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Shopper</a>
            </div>

            <div class="" style="font-size: 17px" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                <ul class="nav  justify-content-center">
                    <li class="nav-item">
                        <a href="{{ route('user#home') }}" class="nav-link text-white link-primary">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user#shopPage') }}" class="nav-link text-white link-primary">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-white link-primary">Contact</a>
                    </li>

                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0">
                            @auth
                                <li class="nav-item">
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                            <button class="btn nav-link text-white link-danger" type="submit">
                                                {{ auth::user()->name; }} <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                            </button>
                                    </form>
                                </li>
                            @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link text-white link-info"><i class="fa-regular fa-user"></i></a>
                            </li>
                            @endauth
                        </div>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
{{-- navbar --}}

    @yield('content')

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>
