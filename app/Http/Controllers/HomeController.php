<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Megrendeles;

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
}
