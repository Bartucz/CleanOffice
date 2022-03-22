@extends('layouts.app')
@section('tartalom')
<section class="al-section container-fluid">
    <br>
    <h1 class="text-center">{{ __('Jelszó módosítása') }}</h1>
    <hr>
    <div class="row text-center" >
        <form class="kapcsolat-form" action="/account/adatok/update/{{ $users->id }}" method="POST">
            @csrf
            @method('put')
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
            <button type="submit" class="button button-out" >Mentés</button>
            <a href="/account/adatok" class="btn"  onclick="return confirm('A módosítások elvesznek.')">Mégsem</a>
          </form>
    </div>
</section>
@endsection
