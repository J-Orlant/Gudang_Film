<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/home_style.css">

    <!-- Boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- FontAwsome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Owl -->
    <link rel="stylesheet" href="/plugin/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/plugin/owlcarousel/dist/assets/owl.theme.default.min.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand text-light mr-5  " href="#">Navbar</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <div class="search">
                        <input type="text" placeholder="Search">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                </li>

                <li class="nav-item ml-5 active">
                    <a class="nav-link" href="#"><i class="fas fa-home text-light"></i> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-light" href="#">Drama</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-light" href="#">Action</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-light" href="#">Romance</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-light" href="#">Comedy</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-light" href="#">Horror</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-light" href="#">Anime</a>
                </li>
                <li class="nav-item mx-3 dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-globe"></i> ID
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">JP</a>
                        <a class="dropdown-item" href="#">ENG</a>
                    </div>
                </li>
            </ul>
            <div class="ml-auto">
                <button class="btn nav-toogler rounded-3 tombol text-light p-2">Masuk Akun / Daftar</button>
                <button class="btn nav-toogler rounded-3 tombol mx-3 p-2 vip">+ VIP</button>
            </div>
        </div>
    </nav>

    <div class="dasar">
        <p class="text-light pl-2">Film Popular Keluarga</p>
        <div class="row banner m-0">
            <div class="col-lg-5 p-0">
                <img src="image/banner_utama.png" alt="" class="img-fluid" style="width: 100%; height: 100%;">
            </div>
            <div class="col-lg-7 p-0 sec-bg" style="background: #FFFFFF;">
                <div class="d-flex justify-content-center align-items-center ml-2" style="height: 100%;">
                    <div class="owl-carousel">
                        <div class="topMovie">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in iste voluptas sapiente ipsum, nemo dolore minima deleniti vitae obcaecati?</div>
                        <div class="topMovie">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in iste voluptas sapiente ipsum, nemo dolore minima deleniti vitae obcaecati?</div>
                        <div class="topMovie">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in iste voluptas sapiente ipsum, nemo dolore minima deleniti vitae obcaecati?</div>
                        <div class="topMovie">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in iste voluptas sapiente ipsum, nemo dolore minima deleniti vitae obcaecati?</div>
                        <div class="topMovie">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in iste voluptas sapiente ipsum, nemo dolore minima deleniti vitae obcaecati?</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- Owl JS -->
    <script src="/plugin/owlcarousel/dist/owl.carousel.min.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            items: 4,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>
</body>

</html>