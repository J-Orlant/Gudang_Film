<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="css/login_style.css">

    <!-- Boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- FontAwsome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>

    <div class="container bg-primary">
        <div class="row">
            <div class="col-lg-6 col-md-6 banner">
                <img src="image/login_image.png" class="img-fluid" style="width: 100%;">
            </div>
            <div class="col-lg-6 col-md-6 regis px-5 py-4">
                <div class="container rounded flex-column kartu py-5 px-5">
                    <p class="text-left judul-form">Create Account</p>

                    <form action="{{ route('post.register') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Username</label> <br>
                            <input type="text" name="name" class="col-lg-10 rounded inp">
                            @error('name') <div class="text-danger">{{$message}}</div>@enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label> <br>
                            <input type="email" name="email" class="col-lg-10 rounded inp">
                            @error('email') <div class="text-danger">{{$message}}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="">Password</label><br>
                            <div class="pass">
                                <div class="input-group">
                                    <input type="password" name="pass" class="col-lg-4 rounded-left inp">
                                    <span class="input-group-append">
                                        <button class="btn hide" type="button">
                                            <i class="fas fa-eye-slash"></i>
                                        </button>
                                    </span>
                                </div>
                                @error('pass') <div class="text-danger">{{$message}}</div>@enderror
                            </div>
                        </div>
                        <div class="mid d-flex flex-column align-items-center justify-content-center mt-5" style="width: 100%;">
                            <button class="col-md-6 btn btn-primary mb-2">Create Account</button>
                            <p class="text-center mb-2 txt">Already have an account?<a href="{{ route('post.login') }}">Login</a></p>
                            <p class="text-center txt">Or Continue With</p>
                            <div class="text-center">
                                <div class="logoGroup">
                                    <div class="logo">
                                        <img src="image/google.png" alt="">
                                    </div>
                                    <div class="logo">
                                        <img src="image/facebook.png" alt="">
                                    </div>
                                    <div class="logo">
                                        <img src="image/apple.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Script Jquery, Pooper, Bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>