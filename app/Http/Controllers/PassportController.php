<?php

namespace App\Http\Controllers;

use App\Models\Passport;
use Illuminate\Http\Request;

class PassportController extends Controller
{
    public function index()
    {
        $passports = Passport::all();
        return view('passports.index', compact('passports'));
    }

    public function show(Passport $passport)
    {
        $passport->load('journals');
        return view('passports.show', compact('passport'));
    }
}