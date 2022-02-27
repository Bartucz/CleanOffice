@extends('layouts.app')

@section('tartalom')
<section class="al-section container-fluid">
    <br>
    <h1 class="text-center">{{ __('Regisztráció') }}</h1>
    <hr>
    <div class="row" >
        <form class="kapcsolat-form" method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label for="name">{{ __('Név') }}</label>

                <div>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div>
                <label for="email">{{ __('E-Mail cím') }}</label>

                <div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div>
                <label for="password">{{ __('Jelszó') }}</label>

                <div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div>
                <label for="password-confirm">{{ __('Jelszó újra') }}</label>

                <div>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div>
                <label for="telefon">{{ __('Telefon') }}</label>

                <div>
                    <input id="telefon" type="text" class="form-control" name="telefon"  >
                </div>
            </div>

            <div>
                <label for="cegnev">{{ __('Cégnév') }}</label>

                <div>
                    <input id="cegnev" type="text" class="form-control" name="cegnev" >
                </div>
            </div>

            <div>
                <label for="cim">{{ __('Cím') }}</label>

                <div>
                    <input id="cim" type="text" class="form-control" name="cim" >
                </div>
            </div>


            <div>
                <div class="text-center">
                    <button type="submit" class="button button-out">
                        {{ __('Regisztráció') }}
                    </button>
                </div>
            </div>

        </form>
    </div>
</section>
@endsection
