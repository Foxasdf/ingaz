<?php

namespace App\Http\Controllers;

use App\Models\Voutcher_type;
use Illuminate\Http\Request;

class VoutcherTypeController extends Controller
{
    public function index()
    {
        $voutcherTypes = Voutcher_type::all();
        return view('voutcher_types.index', compact('voutcherTypes'));
    }

    public function show(Voutcher_type $voutcherType)
    {
        return view('voutcher_types.show', compact('voutcherType'));
    }
}