<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Dolgozo;
use App\Models\Gep;
use App\Models\Auto;
use App\Models\Megrendeles;
use App\Models\User;
use App\Models\User_valtozas;
use App\Models\Gep_valtozas;
use App\Models\Auto_valtozas;
use App\Models\Dolgozo_valtozas;


class AdminController extends Controller
{
    /*Dolgozók kezelése */
    public function dolgozoList()
    {
        $dolgozo=Dolgozo::all();
        $dolgozo->toJson();
        return view('admin.dolgozoList',['dolgozos'=>$dolgozo]);
    }
    public function dolgozoCreate()
    {
        return view('admin.dolgozoNew');
    }
    public function dolgozoShow($id)
    {
        return dolgozo::find($id);
    }

    public function dolgozoStore(Request $request)
    {
        $dolgozo = new dolgozo();
        $dolgozo->nev = $request->nev;
        $dolgozo->telefon = $request->telefon;
        $dolgozo->allapot = $request->allapot ;
        $dolgozo->sofore = $request->sofore ;
        $dolgozo->aktive = 1;
        $dolgozo->kep = "uploads/".$request->kep;
        $dolgozo->save();

        return redirect('/kapu/dolgozok');
    }

    public function dolgozoEdit($id)
    {
        $dolgozo = dolgozo::find($id);
        return view('admin.dolgozoEdit', ['dolgozos' => $dolgozo]);
    }

    public function dolgozoUpdate(Request $request, $id)
    {
        $dolgozo = dolgozo::find($id);

        $dolgozovalt = new Dolgozo_valtozas();
        $dolgozovalt->eredetiId	= $dolgozo->id;
        $dolgozovalt->nev = $dolgozo->nev;
        $dolgozovalt->telefon = $dolgozo->telefon;
        $dolgozovalt->allapot = $dolgozo->allapot ;
        $dolgozovalt->sofore = $dolgozo->sofore ;
        $dolgozovalt->aktive = 1;
        $dolgozovalt->kep = $dolgozo->kep;
        $dolgozovalt->save();

        $dolgozo->nev = $request->nev;
        $dolgozo->telefon = $request->telefon;
        $dolgozo->allapot = $request->allapot ;
        $dolgozo->sofore = $request->sofore ;
        $dolgozo->aktive = 1;
        $dolgozo->kep = $dolgozo->kep;
        $dolgozo->save();

        return redirect('/kapu/dolgozok');
    }

    public function dolgozoPassiv($id)
    {
        $dolgozo=dolgozo::find($id);

        $dolgozovalt = new Dolgozo_valtozas();
        $dolgozovalt->eredetiId	= $dolgozo->id;
        $dolgozovalt->nev = $dolgozo->nev;
        $dolgozovalt->telefon = $dolgozo->telefon;
        $dolgozovalt->allapot = $dolgozo->allapot ;
        $dolgozovalt->sofore = $dolgozo->sofore ;
        $dolgozovalt->aktive = $dolgozo->aktive ;
        $dolgozovalt->kep = $dolgozo->kep;
        $dolgozovalt->save();

        $dolgozo->aktive = 0;
        $dolgozo->save();

        return redirect('/kapu/dolgozok');
    }

    /*Gépek kezelése */
    public function gepList()
    {
        $gep=Gep::all();
        $gep->toJson();
        return view('admin.gepList',['geps'=>$gep]);
    }
    public function gepCreate()
    {
        return view('admin.gepNew');
    }

    public function gepShow($id)
    {
        return gep::find($id);
    }

    public function gepStore(Request $request)
    {
        $gep = new gep();
        $gep->gyariszam = $request->gyariszam;
        $gep->allapot = $request->allapot ;
        $gep->aktive=1;
        $gep->save();

        return redirect('/kapu/gepek');
    }

    public function gepEdit($id)
    {
        $gep = gep::find($id);
        return view('admin.gepEdit', ['geps' => $gep]);
    }

    public function gepUpdate(Request $request, $id)
    {
        $gep = gep::find($id);

        $gepvalt = new Gep_valtozas();
        $gepvalt->eredetiId	= $gep->id;
        $gepvalt->gyariszam = $gep->gyariszam;
        $gepvalt->allapot = $gep->allapot ;
        $gepvalt->aktive =1;
        $gepvalt->save();

        $gep->gyariszam = $request->gyariszam;
        $gep->allapot = $request->allapot ;
        $gepvalt->aktive =1;
        $gep->save();

        return redirect('/kapu/gepek');
    }

    public function gepPassiv($id)
    {
        $gep = gep::find($id);

        $gepvalt = new Gep_valtozas();
        $gepvalt->eredetiId	= $gep->id;
        $gepvalt->gyariszam = $gep->gyariszam;
        $gepvalt->allapot = $gep->allapot ;
        $gepvalt->aktive =$gep->aktive ;
        $gepvalt->save();

        $gep->aktive = 0;
        $gep->save();

        return redirect('/kapu/gepek');
    }

    /*Autók kezelése */
    public function autoList()
    {
        $auto=Auto::all();
        $auto->toJson();
        return view('admin.autoList',['autos'=>$auto]);
    }
    public function autoCreate()
    {
        return view('admin.autoNew');
    }

    public function autoShow($id)
    {
        return auto::find($id);
    }

    public function autoStore(Request $request)
    {
        $auto = new auto();
        $auto->rendszam = $request->rendszam;
        $auto->allapot = $request->allapot ;
        $auto->aktive=1;
        $auto->save();

        return redirect('/kapu/autok');
    }

    public function autoEdit($id)
    {
        $auto = auto::find($id);
        return view('admin.autoEdit', ['autos' => $auto]);
    }

    public function autoUpdate(Request $request, $id)
    {
        $auto = auto::find($id);

        $autovalt = new Auto_valtozas();
        $autovalt->eredetiId= $auto->id;
        $autovalt->rendszam = $auto->rendszam;
        $autovalt->allapot = $auto->allapot ;
        $autovalt->aktive=1;
        $autovalt->save();

        $auto->rendszam = $request->rendszam;
        $auto->allapot = $request->allapot ;
        $auto->aktive=1;
        $auto->save();

        return redirect('/kapu/autok');
    }

    public function autoPassiv($id)
    {
        $auto = auto::find($id);

        $autovalt = new Auto_valtozas();
        $autovalt->eredetiId= $auto->id;
        $autovalt->rendszam = $auto->rendszam;
        $autovalt->allapot = $auto->allapot ;
        $autovalt->aktive=$auto->aktive;
        $autovalt->save();

        $auto->aktive=0;
        $auto->save();
        return redirect('/kapu/autok');
    }

    /*Felhasználók kezelése */


    public function felhasznaloList()
    {
        $user=User::all();
        $user->toJson();
        return view('admin.felhasznaloList',['users'=>$user]);
    }
    public function rendelesUpdate(){
        $keszmeg=Megrendeles::where('allapot', '=', "Megrendelve")->where("datumig","<",date('Y-m-d H:i:s'))->get();
        foreach ($keszmeg as $k) {
            $k->allapot="Teljesítve";
            $k->save();
        }

        return redirect('/kapu/rendelesek');
    }
}
