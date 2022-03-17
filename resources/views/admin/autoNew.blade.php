@extends('layouts.admin')
@section('tartalom')
    <section class="al-section container-fluid text-center">
        <br>
    <h1>{{ __('Új autó') }}</h1>
    <hr>
    <form action="/kapu/auto/store" method="POST">
      @csrf
      <div class="form-group row">
        <label for="rendszam" class="col-sm-2 col-form-label">Rendszám</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="rendszam" name="rendszam" placeholder="Rendszám">
        </div>
      </div>
      <div class="form-group row">
        <label for="allapot" class="col-sm-2 col-form-label">Állapota</label>
        <div class="col-sm-10">
            <select class="form-control" id="allapot" name="allapot">
                <option value="aktív">Aktív</option>
                <option value="szervízben">Szervízben</option>
                <option value="selejt">Selejt</option>
              </select>
        </div>
      </div>
      <button type="submit" class="button button-out">Mentés</button>
    </form>
  </section>
@endsection
