@extends('layouts.app')
@section('tartalom')
<section class="al-section text-center">
    <h1>Sikeresen törölte fiókját!</h1>
    <div>
    <a class="button button-out" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Vissza a főoldalra!') }}</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
      @csrf
    </form>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
      @csrf
    </form>
  </div>
</section>
@endsection
