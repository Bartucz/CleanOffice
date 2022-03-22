@extends('layouts.app')
@section('tartalom')
<br>
<section class="al-section row" >
<div class="sidenav col-md-2">
    <a href="/account/adatok">Adatok</a>
  <a href="/account/korabbi">Korábbi rendelések</a>
  <a href="/account/aktiv">Aktív rendelések</a>

  <div>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Kijelentkezés') }}</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
      @csrf
    </form>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
      @csrf
    </form>
  </div>
</div>
<div class="col-md-10">
    @if (request()->is('account/adatok'))
        @auth
        <section class="al-section">
            <br>
            <h1 style="text-align: center">{{ __('Adatok') }}</h1>
                <hr>
            <div class="box" id="adatok">
                @foreach($users as $user)
                    <p><strong>Név: </strong>{{$user->name}}</p>
                    <hr>
                    <p><strong>E-mail: </strong>{{$user->email}}</p>
                    <hr>
                    <p><strong>Telefon: </strong>{{$user->telefon}}</p>
                    <hr>
                    <p><strong>Cégnév: </strong>{{$user->cegnev}}</p>
                    <hr>
                    <p><strong>Cím: </strong>{{$user->cim}}</p>

                    <a href="/account/adatok/JelszoEdit/{{ $user->id }}"><button class="btn btn-sm btn-info">Jelszó módosítása</button></a>

                    <a href="/account/adatok/edit/{{ $user->id }}"><button class="btn btn-sm btn-info">Adatok módosítása</button></a>

                    <a href="/account/adatok/passiv/{{ $user->id }}" onclick="return confirm('Biztos törli?')"><button class="btn btn-sm btn-danger">Fiók törlése</button></a>

                @endforeach
                </div>
            </section>
                @endauth
        @elseif (request()->is('account/korabbi'))
            @auth
            <section class="al-section">
                <br>
                <h1 style="text-align: center">{{ __('Megrendelések') }}</h1>
                <hr>
                <div class="box" id="adatok">
                    @foreach($megrendeles as $megrendeles)
                        @if ($megrendeles->allapot!=="Megrendelve" and $megrendeles->felhasznalo===Auth::user()->id)
                            <p><strong>Dátum: </strong>{{$megrendeles->datumtol}} - {{$megrendeles->datumig}}</p>
                            <p><strong>Állapot: </strong>{{$megrendeles->allapot}}</p>
                            <hr>
                        @endif
                    @endforeach
                    </div>
              </section>
            @endauth
        @elseif (request()->is('account/aktiv'))
            @auth
            <section class="al-section">
                <br>
                <h1 style="text-align: center">{{ __('Megrendelések') }}</h1>
                <hr>
                <div class="box" id="adatok">
                    @foreach($megrendeles as $megrendeles)
                        @if ($megrendeles->allapot==="Megrendelve" and $megrendeles->felhasznalo===Auth::user()->id)
                            <p><strong>Dátum: </strong>{{$megrendeles->datumtol}} - {{$megrendeles->datumig}}</p>
                            <p><strong>Állapot: </strong>{{ __('Megrendelve') }}</p>
                            <a href="/account/passiv/{{ $megrendeles->id }}" onclick="return confirm('Biztos törli?')"><button class="btn btn-sm btn-danger">Törlés</button></a></td>
                            <hr>
                        @endif
                    @endforeach
                    </div>
              </section>
            @endauth
    @endif

</div>

</section>
<a href="/account"  class="dmtop">&#8710;</a>
@endsection
