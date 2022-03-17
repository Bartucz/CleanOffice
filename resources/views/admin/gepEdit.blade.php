@extends('layouts.admin')
@section('tartalom')
<section class="al-section container-fluid text-center">
    <br>
    <h1>{{ __('Gép módosítása') }}</h1>
    <hr>
    <form action="/kapu/gep/update/{{ $geps->id }}" method="POST">
      @csrf
      @method('put')
      <div class="form-group row">
        <label for="gyariszam" class="col-sm-2 col-form-label">Gép gyáriszáma</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="gyariszam" name="gyariszam" value="{{ $geps->gyariszam }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="allapot" class="col-sm-2 col-form-label">Állapota</label>
        <div class="col-sm-10">
            <select class="form-control" id="allapot" name="allapot">
                <option value="aktív">Aktív</option>
                <option value="szervízben">Szerízben</option>
              </select>
        </div>
      </div>
      <button type="submit" class="button button-out"  onclick="return confirm('Biztos menti a módosításokat?')">Mentés</button>
      <a href="/kapu/gepek" class="btn"  onclick="return confirm('A módosítások elvesznek.')">Mégsem</a>
    </form>
</section>
@endsection
