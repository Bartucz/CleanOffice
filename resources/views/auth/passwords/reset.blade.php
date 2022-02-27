@extends('layouts.app')

@section('tartalom')
<section class="al-section container-fluid">
    <br>
        <h1 class="text-center">{{ __('Jelszó visszaállítása') }}</h1>
        <hr>

                <div class="row">
                    <form class="kapcsolat-form" method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div>
                            <label for="email">{{ __('Email cím') }}</label>

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
                            <label for="password-confirm">{{ __('Jelszó megerősítése') }}</label>

                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="text-center">
                            <div>
                                <button type="submit" class="button button-out">
                                    {{ __('Jelszó visszaállítása') }}
                                </button>
                            </div>
                        </div>
                    </form>
    </div>
</section>
@endsection
