@extends('layouts.admin')
@section('tartalom')
<section class="al-section">
    <br>
    <h1 style="text-align: center">{{ __('Dolgozók') }}</h1>
    <hr>
    <div class=" table-responsive">
    <table class="table table-hover">
    <thead>
      <tr>
        <th><strong>Id</strong></th>
        <th><strong>Név</strong></th>
        <th><strong>Email</strong></th>
        <th><strong>Jelszó</strong></th>
        <th><strong>Telefon</strong></th>
        <th><strong>Cégnév</strong></th>
        <th><strong>Cím</strong></th>
      </tr>
    </thead>
    @foreach($users as $user)
        @if ($user->name!=="admin" and $user->aktive===1)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->telefon}}</td>
            <td>{{$user->cegnev}}</td>
            <td>{{$user->cim}}</td>
            <td>
                @if ($user->sofore===1)
                        {{ __('Igen') }}
                @elseif ($user->sofore===0)
                        {{ __('Nem') }}
                @endif
            </td>
            <td class="gombTd">
                <a href="/account/adatok/passiv/{{ $user->id }}" onclick="return confirm('Biztos törli?')"><button class="btn btn-sm btn-danger">Fiók törlése</button></a></td>
            </tr>
        @endif
@endforeach
  </table>
    </div>
  </section>
@endsection
