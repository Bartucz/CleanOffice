@extends('layouts.admin')
@section('tartalom')
<section class="al-section container-fluid text-center">
    <br>
    <h1>{{ __('Autó módosítása') }}</h1>
    <hr>
    <form action="/kapu/auto/update/{{ $autos->id }}" method="POST">
      @csrf
      @method('put')
      <div class="form-group row">
        <label for="rendszam" class="col-sm-2 col-form-label">Autó rendszáma</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="rendszam" name="rendszam" value="{{ $autos->rendszam }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="allapot" class="col-sm-2 col-form-label">Állapota</label>
        <div class="col-sm-10">
            <select class="form-control" id="allapot" name="allapot">
                <option value="aktív">Aktív</option>
                <option value="szervízben">Szervízben</option>
              </select>
        </div>
      </div>
      <button type="submit" class="button button-out" >Mentés</button>
      <a href="/kapu/autok" class="btn"  onclick="return confirm('A módosítások elvesznek.')">Mégsem</a>
    </form>
</section>
@endsection
