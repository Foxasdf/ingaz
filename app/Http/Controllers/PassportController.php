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

    public function create()
    {
        return view('passports.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            // Add validation rules here
        ]);

        Passport::create($data);
        return redirect()->route('passports.index')->with('success', 'Passport created successfully.');
    }

    public function show(Passport $passport)
    {
        return view('passports.show', compact('passport'));
    }

    public function edit(Passport $passport)
    {
        return view('passports.edit', compact('passport'));
    }

    public function update(Request $request, Passport $passport)
    {
        $data = $request->validate([
            // Add validation rules here
        ]);

        $passport->update($data);
        return redirect()->route('passports.index')->with('success', 'Passport updated successfully.');
    }

    public function destroy(Passport $passport)
    {
        $passport->delete();
        return redirect()->route('passports.index')->with('success', 'Passport deleted successfully.');
    }
    
}
