<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Megrendeles;
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
        $megrendeles->allapot="megrendelve";
        $megrendeles->felhasznalo=auth()->id();
        $megrendeles->csoport=1;
        $megrendeles->gep=1;
        $megrendeles->auto=1;
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
