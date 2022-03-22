<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CleanOffice</title>

    <link rel="shortcut icon" href="/images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="/rendeles.js"></script>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <nav class="navbar navbar-dark">
        <div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/home">Kezdőlap</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">

                    <li class="nav-item">
                        <a class="nav-link" href="/home#rolunk">{{ __('Rólunk') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/home#szolgaltatasok">{{ __('Szolgáltatások') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/home#gepeink">{{ __('Gépeink') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/home#csapat">{{ __('Csapat') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sendemail">{{ __('Kapcsolat') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/order">{{ __('Rendelés') }}</a>
                    </li>

                    <li class="nav-item ">
                        @if (Route::has('login'))
                            @auth
                                @if (Auth::user()->name==="admin")
                                <a class="nav-link" href="{{ url('/kapu') }}" >Admin felület</a>
                                @else
                                    <a class="nav-link" href="{{ url('/account/adatok') }}" >{{ Auth::user()->name }}</a>
                                @endif

                            @else
                                <a class="nav-link" href="{{ route('login') }}" >Bejelentkezés/Regisztráció</a>
                            @endauth
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('tartalom')

    <hr>
    <footer class="text-center">Bartucz CleanOffice</footer>
</body>

</html>
