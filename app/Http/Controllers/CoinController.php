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

    // Update the price of a coin
    public function updatePrice(Request $request)
    {
        $request->validate([
            'coin_id' => 'required|exists:coins,coin_id',
            'new_price' => 'required|numeric|min:0',
        ]);

        $coin = Coin::findOrFail($request->coin_id);
        $coin->coin_price = $request->new_price; // Changed from 'price' to 'coin_price'
        $coin->save();

        return response()->json(['message' => 'Coin price updated successfully'], 200);
    }
}