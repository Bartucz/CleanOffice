@extends('layouts.admin')
@section('tartalom')
<section class="al-section">
    <br>
    <h1 style="text-align: center">{{ __('Autók') }}</h1>
    <hr>
    <div><a href="/kapu/auto/new"><button class="btn btn-sm btn-success">Új autó felvitele</button></a></div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th><strong>Id</strong></th>
        <th><strong>Rendszám</strong></th>
        <th><strong>Állapot</strong></th>
      </tr>
    </thead>
    @foreach($autos as $auto)
    <tr>
    @if ($auto->aktive===1)
        <td>{{$auto->id}}</td>
        <td>{{$auto->rendszam}}</td>
        <td>{{$auto->allapot}}</td>
        <td class="gombTd">
        <a href="/kapu/auto/edit/{{ $auto->id }}"><button class="btn btn-sm btn-info">Szerkesztés</button></a>
        </td>
        <td class="gombTd">
        <a href="/kapu/auto/passiv/{{ $auto->id }}" onclick="return confirm('Biztos törli?')"><button class="btn btn-sm btn-danger">Törlés</button></a></td>
    @endif
    </tr>
@endforeach
  </table>
  </section>
@endsection
