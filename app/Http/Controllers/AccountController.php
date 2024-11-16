<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $accounts = Account::all();
        return view('accounts.index', compact('accounts'));
    }

    public function show(Account $account)
    {
        $account->load(['journalDepts', 'journalCredits']);
        return view('accounts.show', compact('account'));
    }

    public function edit($id)
    {
        $account = Account::find($id);
        return view('accounts.edit', compact('account'));
    }

    public function update(Request $request, $id)
    {
        $account = Account::find($id);
        $account->update($request->all());
        return redirect()->route('accounts.show', $account->account_id)->with('success', 'Account updated successfully.');
    }
    public function create()
    {
        return view('accounts.create');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'account_name' => 'required',
            'trading' => 'required|boolean', // Make trading required
            'visa_company' => 'required|boolean',
            'hotel_company' => 'required|boolean',
            'airline_company' => 'required|boolean',
            'transport_company' => 'required|boolean',
            'ship_company' => 'required|boolean',
            'insurance_company' => 'required|boolean',
            'customer' => 'required|boolean',
            'employee' => 'required|boolean',
            'woner' => 'required|boolean',
            'box' => 'required|boolean',
            'persantage' => 'nullable|integer|between:0,100', // Percentage nullable
        ]);


        $account = new Account();
        $account->account_name = $validatedData['account_name'];
        $account->trading = $validatedData['trading'];
        $account->visa_company = $validatedData['visa_company'];
        $account->hotel_company = $validatedData['hotel_company'];
        $account->airline_company = $validatedData['airline_company'];
        $account->transport_company = $validatedData['transport_company'];
        $account->ship_company = $validatedData['ship_company'];
        $account->insurance_company = $validatedData['insurance_company'];
        $account->customer = $validatedData['customer'];
        $account->employee = $validatedData['employee'];
        $account->woner = $validatedData['woner'];
        $account->box = $validatedData['box'];
        $account->persantage = $validatedData['persantage'] ?? 0; // Set to 0 if null



        $account->save();

        return redirect()->route('accounts.index')->with('success', 'Account created successfully.');
    }
    
    public function destroy($id)
    {
        $account = Account::find($id);

        if ($account->journalDepts()->exists() || $account->journalCredits()->exists()) {
            return redirect()->back()->with('error', 'Cannot delete account with related records.');
        }

        $account->delete();

        return redirect()->route('accounts.index')->with('success', 'Account deleted successfully.');
    }
}
