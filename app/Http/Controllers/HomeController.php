<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Megrendeles;
use App\Models\Gep;
use App\Models\Auto;
use App\Models\User_valtozas;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormSend;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.home');
    }

    /*Account */

    public function adatok()
    {
        $user = User::where('id', '=', auth()->id())->get();

        return view('user.account',['users'=>$user]);
    }
    public function megrendeles()
    {
        $megrendeles =  Megrendeles::all();
        $megrendeles->toJson();

        return view('user.account',['megrendeles'=>$megrendeles]);
    }
    public function megrendelesPassiv($id)
    {
        $megrendeles=megrendeles::find($id);
        $megrendeles->allapot="Törölve";
        $megrendeles->save();
        return redirect('/account/aktiv');
    }
    public function jelszoEdit($id)
    {
        $user = User::find($id);
        return view('user.accountAdatok', ['users' => $user]);
    }
        public function jelszoUpdate(Request $request, $id)
    {
        $user = user::find($id);
        $user->password = Hash::make($request->password) ;
        $user->save();

        return redirect('/account/adatok');
    }
    public function adatokEdit($id)
    {
        $user = User::find($id);
        return view('user.accountEdit', ['users' => $user]);
    }
    public function adatokUpdate(Request $request, $id)
    {
        $user = user::find($id);

        $uservalt = new User_valtozas();
        $uservalt->eredetiId= $user->id;
        $uservalt->name = $user->name;
        $uservalt->email = $user->email ;
        $uservalt->password=$user->password;
        $uservalt->telefon=$user->telefon;
        $uservalt->cegnev=$user->cegnev;
        $uservalt->cim=$user->cim;
        $uservalt->aktive=$user->aktive;
        $uservalt->save();

        $user->telefon=$request->telefon;
        $user->cegnev=$request->cegnev;
        $user->cim=$request->cim;
        $user->save();

        return redirect('/account/adatok');
    }
    public function userPassiv($id)
    {
        $user=user::find($id);

        $uservalt = new User_valtozas();
        $uservalt->eredetiId = $user->id;
        $uservalt->name = $user->name;
        $uservalt->email = $user->email;
        $uservalt->password = $user->password;
        $uservalt->telefon = $user->telefon;
        $uservalt->cegnev = $user->cegnev;
        $uservalt->cim = $user->cim;
        $uservalt->aktive = $user->aktive;
        $uservalt->save();

        $user->aktive=0;
        $user->save();
        return view('user.accountpassiv');
    }

    /*Rendelés */
    public function order()
    {
        $from = date('Y-m-d H:i:s',strtotime("next Week Monday"));
        $to = date('Y-m-d H:i:s',strtotime("next Week Sunday"));

        $megrendeles=Megrendeles::whereBetween('datumtol', [$from, $to])->get();
        return view('user.rendeles',  ['megrendeles' => $megrendeles]);
    }
    function foglalas($foglaltDatum){
        $datum=strtotime($foglaltDatum);
        $megrendeles=new Megrendeles();
        $megrendeles->datumtol=$foglaltDatum;
        $megrendeles->datumig=date('Y-m-d H:i:s',strtotime("+2 hours", $datum ));
        $megrendeles->allapot="Megrendelve";
        $megrendeles->felhasznalo=auth()->id();
        $megrendeles->csoport=1;
        $gep=Gep::where('allapot', '=', "Aktív")->get();
        $megrendeles->gep=$gep[0]->id;
        $auto=Auto::where('allapot', '=', "Aktív")->get();
        $megrendeles->auto=$auto[0]->id;
        $megrendeles->save();

        return redirect('/order');
    }

    /*Email*/
    function sendemail()
    {
     return view('user.email');
    }

    function send(Request $request)
    {
     $this->validate($request, [
      'nev'     =>  'required',
      'email'  =>  'required|email',
      'telefon'     =>  'required',
      'uzenet' =>  'required'
     ]);

        $data = array(
            'nev'      =>  $request->nev,
            'telefon'     =>  $request->telefon,
            'uzenet'   =>   $request->uzenet
        );

     Mail::to('bartucz.petra@gmail.com')->send(new FormSend($data));
     return back()->with('success', 'Köszönjük, sikeresen kapcsolatba lépett velünk!');

    }
}
