@extends('layouts.app')
@section('tartalom')
<section class="al-section container-fluid text-center">
    <br>
    <h1>{{ __('Adatok módosítása') }}</h1>
    <hr>
    <form action="/account/adatok/adatokUpdate/{{ Auth::user()->id }}" method="POST">
      @csrf
      @method('put')
      <div class="form-group row">
        <label for="telefon" class="col-sm-2 col-form-label">Telefon</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="telefon" name="telefon" value="{{ Auth::user()->telefon }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="cegnev" class="col-sm-2 col-form-label">Cégnév</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="cegnev" name="cegnev" value="{{ Auth::user()->cegnev }}">
          </div>
      </div>
      <div class="form-group row">
        <label for="allapot" class="col-sm-2 col-form-label">Cím</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="cim" name="cim" value="{{ Auth::user()->cim }}">
          </div>
      </div>
      <button type="submit" class="button button-out"  onclick="return confirm('Biztos menti a módosításokat?')">Mentés</button>
      <a href="/account/adatok" class="btn"  onclick="return confirm('A módosítások elvesznek.')">Mégsem</a>
    </form>
</section>
@endsection
