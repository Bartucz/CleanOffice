@extends('layouts.admin')
@section('tartalom')
<section class="al-section">
    <br>
    <h1 style="text-align: center">{{ __('Megrendelések') }}</h1>
    <hr>
  <table class="table table-hover" id="szulo">
    <thead>
      <tr>
        <th><strong>Dátumtól</strong></th>
        <th><strong>Dátumig</strong></th>
        <th><strong>Felhasználó</strong></th>
        <th><strong>Csoport</strong></th>
        <th><strong>Gép</strong></th>
        <th><strong>Autó</strong></th>
        <th><strong>Állapot</strong></th>
      </tr>
    </thead>
    <tr class="sablon">
      <td class="datumtol"></td>
      <td class="datumig"></td>
      <td class="felhasznalo"></td>
      <td class="csoport"></td>
      <td class="gep"></td>
      <td class="auto"></td>
      <td class="allapot"></td>
      <td class="allapotValt"></td>
    </tr>
  </table>
  </section>
@endsection
