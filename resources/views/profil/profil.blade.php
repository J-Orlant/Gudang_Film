<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gudang Film - Profil</title>

    <!-- Boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- FontAwsome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/profil_style.css">

</head>

<body>
    <div class="popUp d-none justify-content-center align-items-center">
        <!-- whatsapp://send?text=I wanna buy VIP&phone=+6282123595108 -->
        <a href="https://wa.me/6282123595108?text=I%20wanna%20buy%20VIP" class="d-flex justify-content-center align-items-center" target="_blank">
            <div class="aa d-flex justify-content-center align-items-center">
                <img src="/image/image_card_pembayaran.png" width="50%" alt="">
            </div>
        </a>
        <div class="bb">
            <button class="cls">x</button>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand text-light mr-5" href="#">
            <img src="image/logo.png" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <div class="search">
                        <input type="text" placeholder="Search">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                </li>

                <li class="nav-item ml-5 aktif">
                    <a class="nav-link" href="/"><i class="fas fa-home text-light"></i> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-light" href="/#drama">Drama</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-light" href="/#action">Action</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-light" href="/#romance">Romance</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-light" href="/#comedy">Comedy</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-light" href="/#horror">Horror</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-light" href="/#anime">Anime</a>
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

    <section class="container px-5">
        <div class="tab-bar d-flex">
            <div class="link mr-5 tablinks active" onclick="openCity(event, 'account')">
                <p class="text-light">My Account</p>
            </div>
            <div class="link mr-5 tablinks" onclick="openCity(event, 'subcription')">
                <p class="text-light">Redeem Voucher</p>
            </div>
            <div class="link mr-5 tablinks" onclick="openCity(event, 'redeem')">
                <p class="text-light">Watch History</p>
            </div>
            <div class="link mr-5 tablinks" onclick="openCity(event, 'history')">
                <p class="text-light">Favorite</p>
            </div>
        </div>

        <!-- Content -->
        <div class="content">

            <!-- account -->
            <div class="tabcontent mt-5" id="account" style="display: block">
                <img width="50%" src="image/form_account.png" alt=""> <br>
                <a href="{{ route('logout') }}" class="btn btn-danger mt-5">Log Out</a>
            </div>

            <!-- Subcription -->
            <div class="tabcontent mt-5" id="subcription" style="height: 500px">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h2 class="text-light" style="margin-top: 100px">Redeem Voucher</h2>
                    <form action="{{ route('redeem') }}" method="post" class="mt-5">
                        @csrf
                        <div class="row">
                            <div class="col-md-7 mb-4 rounded">
                                <input type="text" name="code" class="form-control" placeholder="Voucher Code">
                            </div>
                            <div class="col-md-5">
                                <button class="btn rede">Redeem Code</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- redeem -->
            <div class="tabcontent mt-5" id="redeem">
                <img src="/image/history.png" style="width: 80%" alt="">
            </div>

            <!-- history -->
            <div class="tabcontent mt-5" id="history">
                <img src="/image/history.png" style="width: 80%" alt="">
            </div>

        </div>
    </section>

    <!-- Bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

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