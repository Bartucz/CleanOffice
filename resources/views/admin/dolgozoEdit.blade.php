@extends('layouts.admin')
@section('tartalom')
<section class="al-section container-fluid text-center">
    <br>
    <h1>{{ __('Dolgozó módosítása') }}</h1>
    <hr>
    <form action="/kapu/dolgozo/update/{{ $dolgozos->id }}" method="POST">
      @csrf
      @method('put')
      <div class="form-group row">
        <label for="nev" class="col-sm-2 col-form-label">Dolgozó neve</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nev" name="nev" value="{{ $dolgozos->nev }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="telefon" class="col-sm-2 col-form-label">Telefonszám</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="telefon" name="telefon" value="{{ $dolgozos->telefon }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="allapot" class="col-sm-2 col-form-label">Állapota</label>
        <div class="col-sm-10">
            <select class="form-control" id="allapot" name="allapot">
                <option value="aktív">Aktív</option>
                <option value="beteg">Beteg</option>
                <option value="szabadságon">Szabadságon</option>
              </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="sofore" class="col-sm-2 col-form-label">Sofőr-e</label>
        <div class="col-sm-10">
            <select class="form-control" id="sofore" name="sofore">
                <option value="1">Igen</option>
                <option value="0">Nem</option>
              </select>
        </div>
      </div>
      <button type="submit" class="button button-out" >Mentés</button>
      <a href="/kapu/dolgozok" class="btn"  onclick="return confirm('A módosítások elvesznek.')">Mégsem</a>
    </form>
</section>
@endsection
