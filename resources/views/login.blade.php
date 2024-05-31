<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V2</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('css/font-awesome-pro.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" />
    <!--===============================================================================================-->
</head>
<body>
@if (Session::has('error'))
    <div class="alert alert-danger" style="text-align: center;background-color: red;color: white;">
        {{ Session::get('error') }}
    </div>
@endif
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <img src="{{ asset('img/logo/footer-logo.png') }}" alt="" srcset="" />
            <form class="login100-form validate-form"  method="post" action="{{route('login')}}">
                @csrf
                <span class="login100-form-title p-b-26"> Welcome </span>
                <span class="login100-form-title p-b-48">
              <i class="zmdi zmdi-font"></i>
            </span>
                <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                    <input class="input100" type="text" name="email" />
                    <span class="focus-input100" data-placeholder="Email"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
              <span class="btn-show-pass">
                <i class="zmdi zmdi-eye"></i>
              </span>
                    <input class="input100" type="password" name="password" />
                    <span class="focus-input100" data-placeholder="Password"></span>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="dropDownSelect1"></div>
</body>
</html>
