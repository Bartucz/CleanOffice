@extends('layouts.app')

@section('tartalom')
<section class="kezdolap-section">
    <div>
      <div class="item">
        <div>
          <img class="img-fluid" id="sliderImg" src="uploads/slider-01.jpg" alt="" />
        </div>
        <div class="container">
          <div class="kezdolap-content text-white">
            <div class="in-box">
              <h2>CleanOffice</h2>
              <p>Gyors és alapos takarítás, a hét bármely napján.</p>
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
            <br>
          <h2>Üdvözlünk a CleanOffice oldalán!</h2>
          <p>
            Ütőképes kis csapatunk, proffesionális eszközökkel, maximális minőségben végzi munkáját. Tegyen próbára minket.
            Bizalmát 20% kedvezménnyel háláljuk meg. A kedvezmény az első takarítás munkadíjából vonódik le.
          </p>
          <p>
            Brigádunk 2 órás sávonként maximum 200 négyzetméteres irodák takarítását tudja elvállalni (Teljes takarítás esetén), a magunkkal szemben támasztott magas minőségi szinvonaln. Terészetesen ha nagyobb az iroda, akkor sincs gond. Ez esetben kérjük telefonos ügyfélszolgálatnk megkeresését.
            Visszatérő, avagy törzs ügyfeleinknek további kedvezményekkel háláljuk meg hűségét. Keressenek minket bizalommal!
          </p>
          <b>GY.I.K</b>
            <ul>
            <li>Mennyibe kerül egy négyzetméter takarítása?<br>- Egy alkalom kb. nettó 9000Ft/óra</li>
            <li>Mennyivel előtte kell időpontot foglalni a weboldalon?<br>- Egy héttel előtte. Egyéb esetben kérjük hívjon.</li>
            <li>Van- e a lemondásnak díja?<br>- Igen, 1 órányi átalánydíj.</li>
          </ul>
          <a href="/sendemail" class="button button-out">Lépj kapcsolatba velünk!</a>
        </div>
        <div class="col-md-6">
            <br>
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
            <h3>14620</h3>
            <h4>Takarítás</h4>
          </div>
        </div>
        <div class="col-md-3">
          <div class="inner-cont-box">
            <h3>7648</h3>
            <h4>Idő</h4>
          </div>
        </div>
        <div class="col-md-3">
          <div class="inner-cont-box">
            <h3>14</h3>
            <h4>Gép</h4>
          </div>
        </div>
        <div class="col-md-3">
          <div class="inner-cont-box">
            <h3>648</h3>
            <h4>Ügyfél</h4>
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
        <p>Online megrendelés esetén a következő csomagokból választhat. Egyedi igények esetén kérjük keresse ügyfélszolgálatunkat.
        </p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="services-inner-box">
            <h2>Mini csomag</h2>
            <p>
              Két óra alatt maximum 350 négyzetméteres iroda felporszívózása, az arra alkalmas felületek gépi felmosása.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="services-inner-box">
            <h2>Midi csomag</h2>
            <p>
              Két óra alatt maximum 300 négyzetméteres iroda esetén az Alapcsomag + a hulladéktárolók űrítése, betétzacskók cseréje. Plusz egy db vizesblokk kitakarítása.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="services-inner-box">
            <h2>Maxi csomag</h2>
            <p>Két óra alatt maximum 200 négyzetméteres iroda esetén az Kezdőcsomag + 1 db további vizesblokk + portörlés + egy közösségi konyha kitakarítása..
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
        <h3>Gépparkunk</h3>
        <p>
          Gépparkunk folyamatos karbantartása és megújítása a biztosítéka a minőségi munkavégzésnek.
        </p>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
            <img
              src="uploads/karchers.jpg"
              class="img-fluid shadow"
              alt="Image"
            />
            <h4>Karcher Economy Súroló-szívógép</h4>
        </div>
        <div class="col-md-4">
            <img
              src="uploads/karcher.jpg"
              class="img-fluid shadow"
              alt="Image"
            />
            <h4>Karcher Proffesional Súroló-szívógép</h4>
        </div>
        <div class="col-md-4">
            <img
              src="uploads/viper.jpg"
              class="img-fluid shadow"
              alt="Image"
            />
            <h4>Viper Jumbo Padlótisztító Gép</h4>
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
            Megbízható válogatott szakemberekből álló csapatunk.
        </p>
      </div>
      <div class="row" id="szulo">
        <div class="col-md-4 col-sm-6 sablon">
          <div class="box">
            <img src="" class="kep" />
            <div class="box-content">
              <h3 class="nev"></h3>
              <span class="post">Takarító</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <a href="/home" id="kezdolap" class="dmtop">&#8710;</a>
@endsection
