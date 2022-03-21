@extends('layouts.app')

@section('tartalom')
<section class="kezdolap-section">
    <div>
      <div class="item">
        <div>
          <img class="img-fluid" src="uploads/slider-01.jpg" alt="" />
        </div>
        <div class="container">
          <div class="kezdolap-content text-white">
            <div class="in-box">
              <h2>CleanOffice</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <a class="button-out" href="/order">Takarítás rendelés</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br id="rolunk">
  <section class="rolunk-section">
    <div class="al-section">
      <div class="row">
        <div class="col-md-6">
          <h2>Üdvözlünk a CleanOffice oldalán!</h2>
          <p>
            Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis
            nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus
            molestie. Cum sociis natoque penatibus et magnis dis parturient
            montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat
            sit amet libero bibendum aliquam. Donec ac egestas libero, eu
            bibendum risus. Phasellus et congue justo.
          </p>
          <p>
            Sed vitae rutrum neque. Ut id erat sit amet libero bibendum
            aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et
            congue justo.
          </p>
          <p>
            Donec dictum erat eu nisi gravida efficitur. Nulla eu orci quis
            ante ullamcorper congue ac ac libero. Quisque varius lorem in urna
            dapibus, ut ullamcorper dolor aliquam. Nulla facilisi. Integer
            sagittis, tortor eu tempor convallis, tortor lacus interdum lacus,
            in pharetra orci sapien id ipsum. Donec ullamcorper, ligula sit
            amet mattis laoreet, dui tellus volutpat felis, id bibendum urna
            diam a justo.
          </p>
          <ul>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
            <li>Nullam ut massa id odio imperdiet consequat.</li>
            <li>Cras ullamcorper nisi eget condimentum aliquet.</li>
            <li>
              Cras id libero iaculis, sodales ligula vitae, egestas odio.
            </li>
            <li>Aenean congue ex et bibendum porta.</li>
          </ul>
          <a href="/home#kapcsolat" class="button button-out">Lépj kapcsolatba velünk!</a>
        </div>
        <div class="col-md-6">
          <img src="images/spray.jpg" alt="spray" class="img-fluid shadow"
          id="spray">
        </div>
      </div>
    </div>
  </section>
  <br>
  <section class="section cont-box">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="inner-cont-box">
            <h3>8000</h3>
            <h4>Takarítások</h4>
          </div>
        </div>
        <div class="col-md-3">
          <div class="inner-cont-box">
            <h3>3000</h3>
            <h4>Idő</h4>
          </div>
        </div>
        <div class="col-md-3">
          <div class="inner-cont-box">
            <h3>120</h3>
            <h4>Gépek</h4>
          </div>
        </div>
        <div class="col-md-3">
          <div class="inner-cont-box">
            <h3>5000</h3>
            <h4>Ügyfelek</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br id="szolgaltatasok" />
  <section class="al-section">
    <div>
      <div class="text-center">
        <h3>Szolgáltatások</h3>
        <p>
          Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis
          vehicula enim, non aliquam risus.
        </p>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="services-inner-box">
            <h2>Takarítás 1</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="services-inner-box">
            <h2>Takarítás 1</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="services-inner-box">
            <h2>Takarítás 1</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="services-inner-box">
            <h2>Takarítás 1</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="services-inner-box">
            <h2>Takarítás 1</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="services-inner-box">
            <h2>Takarítás 1</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr id="gepeink" />
  <section class="al-section">
    <div>
      <div class="text-center">
        <h3>Gép fajtáink</h3>
        <p>
          Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis
          vehicula enim, non aliquam risus.
        </p>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
            <img
              src="uploads/gallery_img-01.jpg"
              class="img-fluid shadow"
              alt="Image"
            />
            <h4>Gép 1</h4>
        </div>
        <div class="col-md-4">
          <div>
            <img
              src="uploads/gallery_img-01.jpg"
              class="img-fluid shadow"
              alt="Image"
            />
            <h4>Gép 2</h4>
          </div>
        </div>
        <div class="col-md-4">
          <div>
            <img
              src="uploads/gallery_img-01.jpg"
              class="img-fluid shadow"
              alt="Image"
            />
            <h4>Gép 3</h4>
          </div>
        </div>
        <div class="col-md-4">
          <div>
            <img
              src="uploads/gallery_img-01.jpg"
              class="img-fluid shadow"
              alt="Image"
            />
            <h4>Gép 4</h4>
          </div>
        </div>
        <div class="col-md-4">
          <div>
            <img
              src="uploads/gallery_img-01.jpg"
              class="img-fluid shadow"
              alt="Image"
            />
            <h4>Gép 5</h4>
          </div>
        </div>
        <div class="col-md-4">
          <div>
            <img
              src="uploads/gallery_img-01.jpg"
              class="img-fluid shadow"
              alt="Image"
            />
            <h4>Gép 6</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr id="csapat" />
  <section class="al-section">
    <div class="container-fluid">
      <div class="text-center">
        <h3>Csapatunk</h3>
        <p>
            Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis
            vehicula enim, non aliquam risus.
        </p>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="box">
            <img src="uploads/img-1.jpg" />
            <div class="box-content">
              <h3 class="title">Valaki</h3>
              <span class="post">Takarító</span>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6">
          <div class="box">
            <img src="uploads/img-1.jpg" />
            <div class="box-content">
                <h3 class="title">Valaki</h3>
                <span class="post">Takarító</span>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6">
          <div class="box">
            <img src="uploads/img-1.jpg" />
            <div class="box-content">
                <h3 class="title">Valaki</h3>
                <span class="post">Takarító</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <a href="/home" id="kezdolap" class="dmtop">&#8710;</a>
@endsection
