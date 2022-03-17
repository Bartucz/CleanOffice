@extends('layouts.admin')
@section('tartalom')
<section class="al-section">
    <br>
    <h1 style="text-align: center">{{ __('Gépek') }}</h1>
    <hr>
    <div><a href="/kapu/gep/new"><button class="btn btn-sm btn-success">Új gép felvitele</button></a></div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th><strong>Id</strong></th>
        <th><strong>Gyáriszám</strong></th>
        <th><strong>Állapot</strong></th>
      </tr>
    </thead>
    @foreach($geps as $gep)
    <tr>
    @if ($gep->aktive===1)
        <td>{{$gep->id}}</td>
        <td>{{$gep->gyariszam}}</td>
        <td>{{$gep->allapot}}</td>
        <td class="gombTd">
            <a href="/kapu/gep/edit/{{ $gep->id }}"><button class="btn btn-sm btn-info">Szerkesztés</button></a>
        </td>
        <td class="gombTd">
            <a href="/kapu/gep/passiv/{{ $gep->id }}" onclick="return confirm('Biztos törli?')"><button class="btn btn-sm btn-danger">Törlés</button></a></td>
    @endif
    </tr>
@endforeach
  </table>
  </section>
@endsection
