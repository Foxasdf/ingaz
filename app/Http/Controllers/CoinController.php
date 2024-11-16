<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use Illuminate\Http\Request;

class CoinController extends Controller
{
     // Display a listing of the coins
     public function index()
     {
         $coins = Coin::all();
         return view('coins.index', compact('coins'));
     }
 
     // Display the specified coin
     public function show($id)
     {
         $coin = Coin::find($id);
         return view('coins.show', compact('coin'));
     }
 
     // Show the form for creating a new coin
     public function create()
     {
         return view('coins.create');
     }
 
     // Store a newly created coin in storage
     public function store(Request $request)
     {
         $request->validate([
             'coin_name' => 'required|unique:coins,coin_name',
             'coin_price' => 'required|numeric|min:0',
         ]);
 
         $coin = new Coin();
         $coin->coin_name = $request->coin_name;
         $coin->coin_price = $request->coin_price;
         $coin->save();
 
         return redirect()->route('coins.index')->with('success', 'Coin created successfully');
     }
 
     // Show the form for editing the specified coin
     public function edit($id)
     {
         $coin = Coin::findOrFail($id);
         return view('coins.edit', compact('coin'));
     }
 
     // Update the specified coin in storage
     public function update(Request $request, $id)
     {
         $request->validate([
             'coin_name' => 'required|unique:coins,coin_name,' . $id . ',coin_id',
             'coin_price' => 'required|numeric|min:0',
         ]);
 
         $coin = Coin::findOrFail($id);
         $coin->coin_name = $request->coin_name;
         $coin->coin_price = $request->coin_price;
         $coin->save();
 
         return redirect()->route('coins.index')->with('success', 'Coin updated successfully');
     }
 
     // Delete the specified coin
     public function destroy($id)
     {
         $coin = Coin::findOrFail($id);
 
         if ($coin->hasRelations()) {
             return redirect()->route('coins.index')->with('error', 'Cannot delete coin with related records.');
         }
 
         $coin->delete();
         return redirect()->route('coins.index')->with('success', 'Coin deleted successfully');
     }
 
     // Update the price of a coin
     public function updatePrice(Request $request)
     {
         $request->validate([
             'coin_id' => 'required|exists:coins,coin_id',
             'new_price' => 'required|numeric|min:0',
         ]);
 
         $coin = Coin::findOrFail($request->coin_id);
         $coin->coin_price = $request->new_price;
         $coin->save();
 
         return response()->json(['message' => 'Coin price updated successfully'], 200);
     }
}