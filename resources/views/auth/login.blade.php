@extends('layouts.app')
@section('tartalom')
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


                <div>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Emlékezz Rám!') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <div>
                        <button type="submit" class="button button-out">
                            {{ __('Bejelentkezés') }}
                        </button>
                        <br>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Elfelejtette a jelszavát?') }}
                            </a>
                        @endif
                        <hr>
                        <h2 class="text-center">{{ __('Még nincs fiókja?') }}</h2>
                            @if (Route::has('register'))
                            <a class="button button-out" href="{{ route('register') }}">Regisztráció</a>
                            @endif
                    </div>
                </div>

            </form>
        </div>
    </section>
@endsection
