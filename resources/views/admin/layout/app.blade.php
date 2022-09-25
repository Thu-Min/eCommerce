<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Shopper</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        .vl{
            border-left: 1px solid grey;
              height: 100%;
              position: absolute;
              left: 12%;
              top: 0;
        }
    </style>

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <div class="d-flex flex-column flex-shrink-0 bg-light " style="width: 200px; height: 100%;">
                        <a href="#" class="d-flex link-dark text-decoration-none">
                        <span class="fs-2 ms-3 mt-3">Admin Panel</span>
                        </a>
                        <hr>
                        <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item my-3 fs-5">
                            <a href="{{ route('admin#profile') }}" class="nav-link link-primary text-dark">
                                <i class="fa-solid fa-user-tie"></i>
                                Profile
                            </a>
                        </li>
                        <li class="nav-item my-3 fs-5">
                            <a href="{{ route('admin#userAccount') }}" class="nav-link link-primary text-dark">
                                <i class="fa-solid fa-users"></i>
                                Customers
                            </a>
                        </li>
                        <li class="nav-item my-3 fs-5">
                            <a href="#" class="nav-link link-primary text-dark">
                                <i class="fa-solid fa-shirt"></i>
                                Products
                            </a>
                        </li>
                        <li class="nav-item my-3 fs-5">
                            <a href="#" class="nav-link link-primary text-dark">
                                <i class="fa-solid fa-clipboard-list"></i>
                                Categories
                            </a>
                        </li>
                        <li class="nav-item my-3 fs-5">
                            <a href="#" class="nav-link link-primary text-dark">
                                <i class="fa-solid fa-circle-dollar-to-slot"></i>
                                Orders
                            </a>
                        </li>
                        <li class="nav-item my-3 fs-5">
                            <a href="#" class="nav-link link-primary text-dark">
                                <i class="fa-solid fa-headphones-simple"></i>
                                Contact
                            </a>
                        </li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <li class="nav-item my-3 fs-5">
                                <button type="submit" class="btn nav-link text-dark"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
                            </li>
                        </form>
                        </ul>
                    </div>
                    <div class="vl"></div>
                </div>

                <div class="col-10">
                    @yield('content');
                </div>
            </div>
        </div>

</body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="sidebars.js"></script>

</html>
