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

    public function create()
    {
        return view('voutchers.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            // Add validation rules here
        ]);

        Voutcher::create($data);
        return redirect()->route('voutchers.index')->with('success', 'Voutcher created successfully.');
    }

    public function show(Voutcher $voutcher)
    {
        return view('voutchers.show', compact('voutcher'));
    }

    public function edit(Voutcher $voutcher)
    {
        return view('voutchers.edit', compact('voutcher'));
    }

    public function update(Request $request, Voutcher $voutcher)
    {
        $data = $request->validate([
            // Add validation rules here
        ]);

        $voutcher->update($data);
        return redirect()->route('voutchers.index')->with('success', 'Voutcher updated successfully.');
    }

    public function destroy(Voutcher $voutcher)
    {
        $voutcher->delete();
        return redirect()->route('voutchers.index')->with('success', 'Voutcher deleted successfully.');
    }
}
