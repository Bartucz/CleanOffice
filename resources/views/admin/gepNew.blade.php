@extends('layouts.admin')
@section('tartalom')
    <section class="al-section container-fluid text-center">
        <br>
    <h1>{{ __('Új gép') }}</h1>
    <hr>
    <form action="/kapu/gep/store" method="POST">
      @csrf
      <div class="form-group row">
        <label for="gyariszam" class="col-sm-2 col-form-label">Gyáriszám</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="gyariszam" name="gyariszam" placeholder="Gyáriszám">
        </div>
      </div>
      <div class="form-group row">
        <label for="allapot" class="col-sm-2 col-form-label">Állapota</label>
        <div class="col-sm-10">
            <select class="form-control" id="allapot" name="allapot">
                <option value="aktív">Aktív</option>
                <option value="szervízben">Szerízben</option>
                <option value="selejt">Selejt</option>
              </select>
        </div>
      </div>
      <button type="submit" class="button button-out">Mentés</button>
    </form>
  </section>
@endsection
