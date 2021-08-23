<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/css/home_style.css">

    <!-- Boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- FontAwsome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand text-light mr-5" href="#">
            <img src="image/logo.png" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

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
                <button href="" class="btn btn-warning text-light" id="pop-trigger"><i class="fas fa-gem"></i> Get Vip!</button>
                <a class="btn nav-toogler tombol mx-3 p-2 vip" href="/profil">
                    <i class="fas fa-user"></i>
                </a>
            </div>
        </div>
    </nav>


    <div class="popUp d-none justify-content-center align-items-center">
        <!-- whatsapp://send?text=I wanna buy VIP&phone=+6282123595108 -->
        <a href="https://wa.me/6282123595108?text=I%20wanna%20buy%20VIP" class="d-flex justify-content-center align-items-center" target="_blank">
            <div class="aa d-flex justify-content-center align-items-center">
                <img src="image/image_card_pembayaran.png" width="50%" alt="">
            </div>
        </a>
        <div class="bb">
            <button class="cls">x</button>
        </div>
    </div>



    <div class="dasar">
        <p class="text-light pl-3">Film Popular Keluarga</p>
        <div class="row banner m-0">
            <div class="col-lg-5 p-0">
                <img src="image/banner_utama.png" alt="" class="img-fluid" style="width: 100%; height: 100%;">
            </div>
            <div class="col-lg-7 p-0 sec-bg" style="background: #FFFFFF;">
                <div class="owl-carousel">
                @foreach($populars as $popular)
                <?php 
                    $satuan = strtolower($popular->genre);
                    $genre = explode("/", $satuan);
                ?>
                <a href="{{route('detail', $popular->id)}}">
                    <div class="card kartu">
                        <img class="card-img-top" src="image/{{$genre[0]}}/{{ $popular->banner }}" alt="" style="height: 300px">
                        <div class="card-body pt-2 px-3">
                            <p class="text-light">{{$popular->name}}</p>
                            <p class="text-light pb-2">{{$popular->release}}</p>
                            <div class="d-flex">
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-dark"></i>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
                    
                </div>
            </div>

        </div>
    </div>

    <div class="movie" id="drama">
        <p class="text-light text-center pt-4">Drama</p>
        <div class="col-md-12">
            <div class="owl-carousel-kedua">
                @foreach($dramas as $drama)
                <a href="{{route('detail', $drama->id)}}">
                    <div class="card kartu">
                        <img class="card-img-top" src="image/drama/{{ $drama->banner }}" alt="" style="height: 300px">
                        <div class="card-body pt-2 px-3">
                            <p class="text-dark">{{$drama->name}}</p>
                            <p class="text-dark pb-2">{{$drama->release}}</p>
                            <div class="d-flex">
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-dark"></i>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="movie" id="action">
        <p class="text-light text-center pt-5">Action</p>
        <div class="col-md-12">
            <div class="owl-carousel-kedua">
                @foreach($actions as $action)
                <a href="{{route('detail', $action->id)}}">
                    <div class="card kartu">
                        <img class="card-img-top" src="image/action/{{ $action->banner }}" alt="" style="height: 300px">
                        <div class="card-body pt-2 px-3">
                            <p class="text-dark">{{$action->name}}</p>
                            <p class="text-dark pb-2">{{$action->release}}</p>
                            <div class="d-flex">
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-dark"></i>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="movie" id="romance">
        <p class="text-light text-center pt-5">Romance</p>
        <div class="col-md-12">
            <div class="owl-carousel-kedua">
                @foreach($comedys as $comedy)
                <a href="{{route('detail', $comedy->id)}}">
                    <div class="card kartu">
                        <img class="card-img-top" src="image/zootopia.png" alt="">
                        <div class="card-body pt-2 px-3">
                            <p class="text-dark">{{$comedy->name}}</p>
                            <p class="text-dark pb-2">{{$comedy->release}}</p>
                            <div class="d-flex">
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-dark"></i>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="movie" id="comedy">
        <p class="text-light text-center pt-5">Comedy</p>
        <div class="col-md-12">
            <div class="owl-carousel-kedua">
                @foreach($romances as $romance)
                <a href="{{route('detail', $romance->id)}}">
                    <div class="card kartu">
                        <img class="card-img-top" src="image/zootopia.png" alt="">
                        <div class="card-body pt-2 px-3">
                            <p class="text-dark">{{$romance->name}}</p>
                            <p class="text-dark pb-2">{{$romance->release}}</p>
                            <div class="d-flex">
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-dark"></i>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>


    <div class="dasar">
        <p class="text-light pl-3">Film Popular Keluarga</p>
        <div class="row banner m-0">
            <div class="col-lg-5 p-0">
                <img src="image/nemo.png" alt="" class="img-fluid" style="width: 100%; height: 100%;">
            </div>
            <div class="col-lg-7 p-0 sec-bg nemo">
                <div class="owl-carousel">

                    <div class="card kartu">
                        <img class="img-fluid" src="image/kungfuPanda.png" alt="">
                        <div class="card-body pt-2 px-3">
                            <p class="text-light">Kunfu Panda</p>
                            <p class="text-light pb-2">2016</p>
                            <div class="d-flex">
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-light"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card kartu">
                        <img class="img-fluid" src="image/kungfuPanda.png" alt="">
                        <div class="card-body pt-2 px-3">
                            <p class="text-light">Kunfu Panda</p>
                            <p class="text-light pb-2">2016</p>
                            <div class="d-flex">
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-light"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card kartu">
                        <img class="img-fluid" src="image/kungfuPanda.png" alt="">
                        <div class="card-body pt-2 px-3">
                            <p class="text-light">Kunfu Panda</p>
                            <p class="text-light pb-2">2016</p>
                            <div class="d-flex">
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-light"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card kartu">
                        <img class="img-fluid" src="image/kungfuPanda.png" alt="">
                        <div class="card-body pt-2 px-3">
                            <p class="text-light">Kunfu Panda</p>
                            <p class="text-light pb-2">2016</p>
                            <div class="d-flex">
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-light"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card kartu">
                        <img class="img-fluid" src="image/kungfuPanda.png" alt="">
                        <div class="card-body pt-2 px-3">
                            <p class="text-light">Kunfu Panda</p>
                            <p class="text-light pb-2">2016</p>
                            <div class="d-flex">
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-light"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="movie" id="horror">
        <p class="text-light text-center pt-5">Horror</p>
        <div class="col-md-12">
            <div class="owl-carousel-kedua">
                @foreach($horrors as $horror)
                <a href="{{route('detail', $horror->id)}}">
                    <div class="card kartu">
                        <img class="card-img-top" src="image/zootopia.png" alt="">
                        <div class="card-body pt-2 px-3">
                            <p class="text-dark">{{$horror->name}}</p>
                            <p class="text-dark pb-2">{{$horror->release}}</p>
                            <div class="d-flex">
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-dark"></i>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="movie" id="anime">
        <p class="text-light text-center pt-5">Anime</p>
        <div class="col-md-12">
            <div class="owl-carousel-kedua">
                @foreach($animes as $anime)
                <a href="{{route('detail', $anime->id)}}">
                    <div class="card kartu">
                        <img class="card-img-top" src="image/anime/{{ $anime->banner }}" alt="" style="height: 300px">
                        <div class="card-body pt-2 px-3">
                            <p class="text-dark">{{$anime->name}}</p>
                            <p class="text-dark pb-2">{{$anime->release}}</p>
                            <div class="d-flex">
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-warning pr-2"></i>
                                <i class="fas fa-star text-dark"></i>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="col-lg-12 mt-5 d-flex flex-column justify-content-center align-items-center" style="height: 20%; background: #1D1C2A;">
        <p class="text-light">&copy; Copyright Weebs. All Rights Reserved</p>
        <p class="text-light">Design by Aldrian</p>
    </div>



    <!-- Bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- Owl -->
    <script src="plugin/owlcarousel/dist/owl.carousel.min.js"></script>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 50,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
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
        $('.owl-carousel-kedua').owlCarousel({
            loop: true,
            margin: 50,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 5,
                    nav: false
                },
                1000: {
                    items: 6,
                    nav: true,
                    loop: false
                }
            }
        })


        $('#pop-trigger').click(function() {
            // if ($(".popUp").hasClass('d-none')) {
            //     $(".popUp").removeClass("d-none");
            //     $(".popUp").addClass("d-flex");
            // }

            $(".popUp").toggleClass("d-none");
            $(".popUp").toggleClass("d-flex");
        })

        $(".cls").click(function() {
            $(".popUp").toggleClass("d-none");
            $(".popUp").toggleClass("d-flex");
        })
    </script>

</body>

</html>