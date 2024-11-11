<?php

namespace App\Http\Controllers;

use App\Models\Voutcher;
use Illuminate\Http\Request;

class VoutcherController extends Controller
{
    public function index()
    {
        $voutchers = Voutcher::all();
        return view('voutchers.index', compact('voutchers'));
    }

    public function show(Voutcher $voutcher)
    {
        return view('voutchers.show', compact('voutcher'));
    }
}