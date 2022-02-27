@extends('layouts.app')

@section('tartalom')
<section class="al-section container-fluid">
    <br>
        <h1 class="text-center">{{ __('Jelszó visszaállítása') }}</h1>
        <hr>
            <div class="row">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="kapcsolat-form" method="POST" action="{{ route('password.email') }}">
                        @csrf

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

                        <div class="text-center">
                            <div>
                                <button type="submit" class="button button-out">
                                    {{ __('Jelszó-visszaállítási hivatkozás küldése') }}
                                </button>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</section>
@endsection
