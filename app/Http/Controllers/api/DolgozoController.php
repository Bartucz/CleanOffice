<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dolgozo;

class DolgozoController extends Controller
{
    public function index()

    {

        $dolgozos=Dolgozo::all();

        return response()->json(dolgozo::all());

    }
}
