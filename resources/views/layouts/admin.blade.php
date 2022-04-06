<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CleanOffice</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="shortcut icon" href="/images/fav.png" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="/style.css" rel="stylesheet">
        <script src="/ajax.js"></script>
        <script src="/megrendeles.js"></script>
    </head>
    <body>
            @if(Auth::check())
                  @if ( Auth::User()->name  == "admin" )
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
                                    <a href="/kapu/dolgozok" class="nav-link button menupont" id="dolgozok">{{ __('Dolgozók') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/kapu/gepek" class="nav-link button menupont" id="gepek">{{ __('Gépek') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/kapu/autok" class="nav-link button menupont" id="autok">{{ __('Autók') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/kapu/rendelesek" class="nav-link button menupont" id="rendelesek">{{ __('Rendelések') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/kapu/felhasznalok" class="nav-link button menupont" id="felhasznalok">{{ __('Felhasználók') }}</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link button" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Kijelentkezés') }}</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        </form>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        </form>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </nav>
              @yield('tartalom')
                    @else
                                <section class="al-section text-center">
                                    <br>
                                    <h1>Ez az oldal csak az admin felhasználók számára elérhető!</h1>
                                    <img src="../images/denied.png" class="img-fluid shadow" alt="access denied" id="denied">
                                    <br>
                                    <br>
                                    <a class="button button-out" href="/home">Vissza a főoldalra!</a>
                            </section>
                    @endif
                @else
                        <section class="al-section container-fluid">
                            <br>
                            <h1 class="text-center">{{ __('Bejelentkezés') }}</h1>
                            <hr>
                            <div class="row" >
                                <form class="kapcsolat-form" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div>
                                        <label for="email" >{{ __('E-Mail cím') }}</label>
                                        <div>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div>
                                        <label for="password" >{{ __('Jelszó') }}</label>

                                        <div>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <div>
                                            <button id="bejelentkezes" type="submit" class="button button-out">
                                                {{ __('Bejelentkezés') }}
                                            </button>
                                            <hr>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>

          @endif
        <a href="" id="kezdolap" class="dmtop">&#8710;</a>
        <hr>
        <footer class="text-center">Bartucz CleanOffice</footer>
      </body>
    </html>
