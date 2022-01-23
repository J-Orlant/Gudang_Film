<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- FontAwsome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">

    @stack('addon-css')
</head>

<body>
    @include('components.navbar')
    @yield('content')
    <!-- Popup -->
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
    <!-- End of Popup -->

    @include('components.footer')

    <!-- Bootstrap js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    @stack('addon-js')
</body>

</html>
