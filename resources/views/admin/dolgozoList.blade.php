@extends('layouts.admin')
@section('tartalom')
<section class="al-section">
    <br>
    <h1 style="text-align: center">{{ __('Dolgozók') }}</h1>
    <hr>
    <div><a href="/kapu/dolgozo/new"><button class="btn btn-sm btn-success">Új dolgozó felvitele</button></a></div>
    <div class=" table-responsive">
  <table class="table table-hover">
    <thead>
      <tr>
        <th><strong>Id</strong></th>
        <th><strong>Név</strong></th>
        <th><strong>Telefon</strong></th>
        <th><strong>Állapot</strong></th>
        <th><strong>Sofőr-e</strong></th>
      </tr>
    </thead>
    @foreach($dolgozos as $dolgozo)
    <tr>
        @if ($dolgozo->aktive===1)
            <td>{{$dolgozo->id}}</td>
            <td>{{$dolgozo->nev}}</td>
            <td>{{$dolgozo->telefon}}</td>
            <td>{{$dolgozo->allapot}}</td>
            <td>
            @if ($dolgozo->sofore===1)
                    {{ __('Igen') }}
            @elseif ($dolgozo->sofore===0)
                    {{ __('Nem') }}
            @endif
            </td>
            <td class="gombTd">
            <a href="/kapu/dolgozo/edit/{{ $dolgozo->id }}"><button class="btn btn-sm btn-info">Szerkesztés</button></a>
            </td>
            <td class="gombTd">
            <a href="/kapu/dolgozo/passiv/{{ $dolgozo->id }}" onclick="return confirm('Biztos törli?')"><button class="btn btn-sm btn-danger">Törlés</button></a></td>
        @endif

    </tr>
@endforeach
  </table>
</div>
  </section>
@endsection
