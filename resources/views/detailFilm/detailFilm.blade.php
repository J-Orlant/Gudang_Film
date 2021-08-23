<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- css -->
    <link rel="stylesheet" href="/css/detail_style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- FontAwsome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Owl -->
    <link rel="stylesheet" href="/plugin/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/plugin/owlcarousel/dist/assets/owl.theme.default.min.css">
    <title>Gudang Film</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand text-light mr-5" href="#">
            <img src="image/logo.png" width="80%" alt="">
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <div class="search">
                        <input type="text" placeholder="Search">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                </li>

                <li class="nav-item ml-5 aktif">
                    <a class="nav-link" href="#"><i class="fas fa-home text-light"></i> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-light" href="#drama">Drama</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-light" href="#action">Action</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-light" href="#romance">Romance</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-light" href="#comedy">Comedy</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-light" href="#horror">Horror</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-light" href="#anime">Anime</a>
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

    <section class="container d-flex justify-content-center">
        <div class="banner">
            <!-- Video -->
            <video controls="controls" id="video" width="100%" height="auto">
                <source src="/video/raiden.mp4" type='video/mp4'>
            </video>


            <!-- Banner -->

            <div class="img"></div>

            <!-- Detail -->

            <div class="detail">
                <div class="kartus">
                    <img src="/image/{{$satuan[0]}}/{{$film->banner}}" alt="">
                </div>

                <div class="konten">
                    <h2 class="judul text-light">{{$film->name}}</h2>
                    <p class="tahun text-light">{{$film->release}}</p>
                    <p class="durasi text-light">{{$film->duration}} | <span class="genre">{{$film->genre}}</span></p>
                    <div class="d-flex">
                        <i class="fas fa-star text-warning mr-3"></i>
                        <p class="text-light mr-3">8,5/<span>10</span></p>
                        <p class="producer bg-warning rounded px-1">
                            IMDb
                        </p>
                    </div>
                    <p class="sipnopsis text-light">
                        {{$film->synopsis}}
                    </p>

                    <div class="d-flex justify-content-around align-items-center tombols">
                        <button class="tombol-trailer">Tonton Trailer</button>
                        @if($user->type == 'free')
                            @if($film->type == 'p')
                                <div class="tombol-film">Gk Bsa Tonton Film</div>
                            @else
                                <div class="tombol-film">Bsa Tonton Film</div>
                            @endif
                        @else{
                            <div class="tombol-film">Bsa Tonton Semua Film</div>
                        }
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="rekomen px-3 mt-4">
        <h3 class="text-light mb-5">Rekomendasi Lain nya</h3>
        <div class="col-md-12 d-flex">
            <div class="col-md-2 px-2">
                <img class="img-fluid" src="image/kungfuPanda.png" alt="">
            </div>
            <div class="col-md-2 px-2">
                <img class="img-fluid" src="image/kungfuPanda.png" alt="">
            </div>
            <div class="col-md-2 px-2">
                <img class="img-fluid" src="image/kungfuPanda.png" alt="">
            </div>
            <div class="col-md-2 px-2">
                <img class="img-fluid" src="image/kungfuPanda.png" alt="">
            </div>
            <div class="col-md-2 px-2">
                <img class="img-fluid" src="image/kungfuPanda.png" alt="">
            </div>
            <div class="col-md-2 px-2">
                <img class="img-fluid" src="image/kungfuPanda.png" alt="">
            </div>
        </div>
    </section>


    <div class="col-lg-12  d-flex flex-column justify-content-center align-items-center" style="height: 20%; background: #1D1C2A;">
        <p class="text-light">&copy; Copyright Weebs. All Rights Reserved</p>
        <p class="text-light">Design by Aldrian</p>
    </div>



    <!-- Owl -->
    <script src="plugin/owlcarousel/dist/owl.carousel.min.js"></script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        // $('.owl-carousel-kedua').owlCarousel({
        //     loop: true,
        //     margin: 100,
        //     responsiveClass: true,
        //     responsive: {
        //         0: {
        //             items: 1,
        //             nav: true
        //         },
        //         600: {
        //             items: 5,
        //             nav: false
        //         },
        //         1000: {
        //             items: 6,
        //             nav: true,
        //             loop: false
        //         }
        //     }
        // })

        $('.tombol-film').click(function() {
            $(".img").toggleClass("hide");
            $(".detail").toggleClass("hide");
        })
    </script>
</body>

</html>