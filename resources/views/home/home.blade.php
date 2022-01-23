@extends('layouts.index')

@section('title')
    Gudang Film | Home
@endsection


@section('content')
    @push('addon-css')
        <!-- Owl -->
        <link rel="stylesheet" href="/plugin/owlcarousel/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="/plugin/owlcarousel/dist/assets/owl.theme.default.min.css">

    @endpush
    <!-- Section Popular -->
    <section class="section-home container-fluid">
        <h5 class="section-title">Film Popular Keluarga</h5>
        <div class="row section-banner">
            <div class="col-lg-6 col-md-12 banner" style="background-image: url('/image/banner_utama.png');">
            </div>
            <div class="col-lg-6 col-md-12 card-row">
                <div class="owl-carousel">
                    @foreach ($populars as $popular)
                        <?php
                            $satuan = strtolower($popular->genre);
                            $genre = explode("/", $satuan);
                        ?>
                        <a href="{{ route('detail', $popular->id) }}" class="custom-card dark d-block">
                            <div class="thumbnail-card" style="background-image: url('/image/{{$genre[0]}}/{{ $popular->banner }}');">

                            </div>
                            <div class="custom-card-body">
                                {{$popular->name}} <br>
                                {{$popular->release}}
                                <div class="d-flex">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-light"></i>
                                </div>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- End Of Popular -->

    <!-- Section Genre -->
    <section class="section-genre container-fluid" id="drama">
        <h5 class="section-title text-center">Drama</h5>
        <div class="row">
            <div class="col-12 card-row">
                <div class="owl-carousel-2">
                    @foreach ($dramas as $drama)
                        <a href="{{ route('detail', $drama->id) }}" class="custom-card light d-block">
                            <div class="thumbnail-card" style="background-image: url('/image/drama/{{ $drama->banner }}');">

                            </div>
                            <div class="custom-card-body">
                                {{$drama->name}} <br>
                                {{$drama->release}}
                                <div class="d-flex">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-dark"></i>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="section-genre container-fluid" id="action">
        <h5 class="section-title text-center">Action</h5>
        <div class="row">
            <div class="col-12 card-row">
                <div class="owl-carousel-2">
                    @foreach ($actions as $action)
                        <a href="{{ route('detail', $action->id) }}" class="custom-card light d-block">
                            <div class="thumbnail-card" style="background-image: url('/image/action/{{ $action->banner }}');">

                            </div>
                            <div class="custom-card-body">
                                {{$action->name}} <br>
                                {{$action->release}}
                                <div class="d-flex">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-dark"></i>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="section-genre container-fluid" id="romance">
        <h5 class="section-title text-center">Romance</h5>
        <div class="row">
            <div class="col-12 card-row">
                <div class="owl-carousel-2">
                    @foreach ($romances as $romance)
                        <a href="{{ route('detail', $romance->id) }}" class="custom-card light d-block">
                            <div class="thumbnail-card" style="background-image: url('/image/romance/{{ $romance->banner }}');">

                            </div>
                            <div class="custom-card-body">
                                {{$romance->name}} <br>
                                {{$romance->release}}
                                <div class="d-flex">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-dark"></i>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="section-genre container-fluid" id="comedy">
        <h5 class="section-title text-center">Comedy</h5>
        <div class="row">
            <div class="col-12 card-row">
                <div class="owl-carousel-2">
                    @foreach ($comedys as $comedy)
                        <a href="{{ route('detail', $comedy->id) }}" class="custom-card light d-block">
                            <div class="thumbnail-card" style="background-image: url('/image/comedy/{{ $comedy->banner }}');">

                            </div>
                            <div class="custom-card-body">
                                {{$comedy->name}} <br>
                                {{$comedy->release}}
                                <div class="d-flex">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-dark"></i>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End Of Section Genre -->

    <!-- Section Popular -->
    <section class="section-home container-fluid nemo">
        <h5 class="section-title">Film Popular Tahun ini</h5>
        <div class="row section-banner">
            <div class="col-lg-6 col-md-12 banner" style="background-image: url('/image/nemo.png');">
            </div>
            <div class="col-lg-6 col-md-12 card-row">
                <div class="owl-carousel">
                    @foreach ($populars as $popular)
                        <?php
                            $satuan = strtolower($popular->genre);
                            $genre = explode("/", $satuan);
                        ?>
                        <a href="{{ route('detail', $popular->id) }}" class="custom-card dark d-block">
                            <div class="thumbnail-card" style="background-image: url('/image/{{$genre[0]}}/{{ $popular->banner }}');">

                            </div>
                            <div class="custom-card-body">
                                {{$popular->name}} <br>
                                {{$popular->release}}
                                <div class="d-flex">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-light"></i>
                                </div>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- End Of Popular -->

    <!-- Section Genre -->
    <section class="section-genre container-fluid" id="horror">
        <h5 class="section-title text-center">Horror</h5>
        <div class="row">
            <div class="col-12 card-row">
                <div class="owl-carousel-2">
                    @foreach ($horrors as $horror)
                        <a href="{{ route('detail', $horror->id) }}" class="custom-card light d-block">
                            <div class="thumbnail-card" style="background-image: url('/image/horror/{{ $horror->banner }}');">

                            </div>
                            <div class="custom-card-body">
                                {{$horror->name}} <br>
                                {{$horror->release}}
                                <div class="d-flex">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-dark"></i>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="section-genre container-fluid" id="anime">
        <h5 class="section-title text-center">Anime</h5>
        <div class="row">
            <div class="col-12 card-row">
                <div class="owl-carousel-2">
                    @foreach ($animes as $anime)
                        <a href="{{ route('detail', $anime->id) }}" class="custom-card light d-block">
                            <div class="thumbnail-card" style="background-image: url('/image/anime/{{ $anime->banner }}');">

                            </div>
                            <div class="custom-card-body">
                                {{$anime->name}} <br>
                                {{$anime->release}}
                                <div class="d-flex">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-dark"></i>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End of Section Genre -->


    @push('addon-js')
        <!-- Owl -->
        <script src="/plugin/owlcarousel/dist/owl.carousel.min.js"></script>

        <script>
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 50,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 2,
                        nav: true,
                        loop: false,
                    },
                    600: {
                        items: 4,
                        nav: false,
                        loop: false,
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false,
                    },
                    1200: {
                        items: 4,
                        nav: true,
                        loop: false,
                    }
                }
            })

            $('.owl-carousel-2').owlCarousel({
                loop: true,
                margin: 50,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 2,
                        nav: true
                    },
                    900: {
                        items: 4,
                        nav: false
                    },
                    1000: {
                        items: 5,
                        nav: true,
                        loop: false
                    },
                    1100: {
                        items: 6,
                        nav: true,
                        loop: false
                    }
                }
            })

            $('#pop-trigger').click(function() {
                $(".popUp").toggleClass("d-none");
                $(".popUp").toggleClass("d-flex");
            })

            $(".cls").click(function() {
                $(".popUp").toggleClass("d-none");
                $(".popUp").toggleClass("d-flex");
            })
        </script>
    @endpush
@endsection

{{-- <body>

    <div class="dasar">
        <p class="text-light pl-3">Film Popular Keluarga</p>
        <div class="row banner m-0">
            <div class="col-lg-5 col-sm-12 p-0">
                <img src="image/banner_utama.png" alt="" class="img-fluid" style="width: 100%; height: 100%;">
            </div>
            <div class="col-lg-7 col-sm-12 p-0 sec-bg" style="background: #FFFFFF;">
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
                @foreach($romances as $romance)
                <a href="{{route('detail', $romance->id)}}">
                    <div class="card kartu">
                        <img class="card-img-top" src="image/romance/{{ $romance->banner }}" alt="" style="height: 300px">
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

    <div class="movie" id="comedy">
        <p class="text-light text-center pt-5">Comedy</p>
        <div class="col-md-12">
            <div class="owl-carousel-kedua">
                @foreach($comedys as $comedy)
                <a href="{{route('detail', $comedy->id)}}">
                    <div class="card kartu">
                        <img class="card-img-top" src="image/comedy/{{ $comedy->banner }}" alt="" style="height: 300px">
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
                        <img class="card-img-top" src="image/horror/{{ $horror->banner }}" alt="" style="height: 300px">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
        $('.owl-carousel-kedua').owlCarousel({
            loop: true,
            margin: 50,
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

</html> --}}
