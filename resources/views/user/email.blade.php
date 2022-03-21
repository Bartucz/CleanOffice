@extends('layouts.app')
@section('tartalom')
  <div class="container box">
    <br>
   <h2 align="center">Üzenet küldése</h2><br />
   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
   <div class="row">
    <div class="col-md-12">
      <div class="kapcsolat-form">
        <form method="post" action="{{url('/sendemail/send')}}">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-6">
              <div>
                <input
                  class="form-control"
                  id="nev"
                  name="nev"
                  type="text"
                  placeholder="Teljes név"
                  required="required"
                  data-validation-required-message="Kérem adja meg a nevét."
                />
                <p></p>
              </div>
            </div>
            <div class="col-md-6">
              <input
                class="form-control"
                id="email"
                name="email"
                type="email"
                placeholder="E-mail cím"
                required="required"
                data-validation-required-message="Kérem adja meg az E-mail címét."
              />
              <p></p>
            </div>
            <div class="col-md-12">
              <input
                class="form-control"
                id="telefon"
                name="telefon"
                type="tel"
                placeholder="Telefonszám"
                required="required"
                data-validation-required-message="Kérem adja meg a telefonszámát."
              />
              <p class="help-block text-danger"></p>
            </div>
            <div class="col-md-12">
              <textarea
                class="form-control"
                id="uzenet"
                name="uzenet"
                placeholder="Üzenet"
                required="required"
                data-validation-required-message="Kérem, írjon be egy üzenetet."
              ></textarea>
              <p class="help-block text-danger"></p>
            </div>
            <div class="col-lg-12 text-center">
              <button
                id="uzenetGomb"
                class="button button-out"
                data-text="Üzenet küldése"
                type="submit"
              >
              Üzenet küldése
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <br>
  </div>
@endsection
