<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use App\Models\Account;
use App\Models\Coin;
use App\Models\Voutcher;
use App\Models\Passport;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function index()
    {
        $journals = Journal::with(['deptAccount', 'creditAccount', 'coinRelation', 'voutcher', 'passport'])->get();
        return view('journals.index', compact('journals'));
    }

    public function show(Journal $journal)
    {
        $journal->load(['deptAccount', 'creditAccount', 'coinRelation', 'voutcher', 'passport']);
        return view('journals.show', compact('journal'));
    }

    public function create()
    {
        $accounts = Account::all();
        $coins = Coin::all();
        $voutchers = Voutcher::all();
        $passports = Passport::all();
        return view('journals.create', compact('accounts', 'coins', 'voutchers', 'passports'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'acount_dept' => 'required|exists:accounts,account_id',
            'acount_cridit' => 'required|exists:accounts,account_id',
            'cridit' => 'required|numeric|min:0',
            'dept' => 'required|numeric|min:0',
            'coin' => 'required|exists:coins,coin_id',
            'coin_price' => 'required|numeric|min:0',
            'operation_date' => 'required|date',
            'memo' => 'required|string',
            'voutcher_id' => 'required|exists:voutchers,voutcher_id',
            'passport_id' => 'required|exists:passports,passport_id',
        ]);

        // The 'cridit' and 'dept' fields now contain the converted values
        Journal::create($validatedData);

        return redirect()->route('journals.index')->with('success', 'Journal created successfully.');
    }
}