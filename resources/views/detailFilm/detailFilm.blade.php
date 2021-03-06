@extends('layouts.index')

@section('title')
    Gudang  Film | Streaming
@endsection

@section('content')

    <!-- Section video-player -->
    <section class="video-player container-fluid">
        <iframe width="560" height="315" src="{{ $film->video }}"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
        <div class="banner" style="background-image: url('/image/bg.jpg');"></div>
        <div class="detail">
            <div class="d-flex">
                <div class="img" style="background-image: url('/image/{{$satuan[0]}}/{{$film->banner}}');">
                </div>
                <div class="rincian">
                    <h5 class="title">{{$film->name}}</h5>
                    <p class="year">{{$film->release}}</p>
                    <p class="time-genre">{{$film->duration}} | {{$film->genre}}</p>
                    <div class="rating-imdb d-flex">
                        <i class="fas fa-star text-warning"></i>
                        <p class="rating">7,1
                            <span class="p">/10</span>
                        </p>
                        <p class="imdb">IMDb</p>
                    </div>
                    <p class="sipnopsis">{{ $film->synopsis }}</p>
                    <div class="d-flex justify-content-lg-end">
                        @if($user->type == 'free')
                            @if($film->type == 'p')
                                <button class="btn btn-primary" id="pop-trig">Tonton Film</button>
                            @else
                                <button class="btn btn-primary free">Tonton Film</button>
                            @endif
                        @else
                            <button class="btn btn-primary free">Tonton Film</button>
                        @endif
                        <!-- <button class="btn btn-primary free">Tonton Film</button> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Section video-player -->

    <!-- Section recommended -->
    <div class="recommended container-fluid">
        <h5 class="title">Rekomendasi Lainnya</h5>
        <div class="row">
            <div class="col-12 card-row">
                <div class="owl-carousel-2">
                    @foreach ($populars as $popular)
                            <?php
                                $satuan = strtolower($popular->genre);
                                $genre = explode("/", $satuan);
                            ?>
                            <a href="{{ route('detail', $popular->id) }}" class="custom-card light d-block">
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
    </div>
    <!-- End of Section recommended -->


    @push('addon-js')
    <script src="/plugin/owlcarousel/dist/owl.carousel.min.js"></script>

        <script>

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

            $('.free').click(function () {
                $(".banner").toggleClass("d-none");
                $(".detail").toggleClass("d-none");
            })

            $('#pop-trigger').click(function () {
                // if ($(".popUp").hasClass('d-none')) {
                //     $(".popUp").removeClass("d-none");
                //     $(".popUp").addClass("d-flex");
                // }

                $(".popUp").toggleClass("d-none");
                $(".popUp").toggleClass("d-flex");
            })
            $('#pop-trig').click(function () {
                // if ($(".popUp").hasClass('d-none')) {
                //     $(".popUp").removeClass("d-none");
                //     $(".popUp").addClass("d-flex");
                // }

                $(".popUp").toggleClass("d-none");
                $(".popUp").toggleClass("d-flex");
            })

            $(".cls").click(function () {
                $(".popUp").toggleClass("d-none");
                $(".popUp").toggleClass("d-flex");
            })
        </script>
    @endpush
@endsection
