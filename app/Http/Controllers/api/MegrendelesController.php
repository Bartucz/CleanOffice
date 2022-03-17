<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Megrendeles;

class MegrendelesController extends Controller
{
    public function index()

    {

        $megrendeles=Megrendeles::all();

        return response()->json(megrendeles::all());

    }
}
