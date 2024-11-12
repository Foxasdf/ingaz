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
