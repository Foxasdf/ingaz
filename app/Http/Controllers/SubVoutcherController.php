<?php

namespace App\Http\Controllers;

use App\Models\Sub_voutcher;
use Illuminate\Http\Request;

class SubVoutcherController extends Controller
{
    public function index()
    {
        $subVoutchers = Sub_voutcher::with(['voutcher', 'costCoin', 'sellCoin', 'passport'])->get();
        return view('sub_voutchers.index', compact('subVoutchers'));
    }

    public function show(Sub_voutcher $subVoutcher)
    {
        $subVoutcher->load(['voutcher', 'costCoin', 'sellCoin', 'passport']);
        return view('sub_voutchers.show', compact('subVoutcher'));
    }
}
