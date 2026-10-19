<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Contract;

class ContractTableController extends Controller
{
    public function showContractsTable()
    {
        $contracts = Contract::latest()->paginate(10);

        return view('contractsTable', compact('contracts'));
    }

    public function destroy(Contract $contract)
    {
        $contract->delete();

        return redirect()->route('contractsTable')
            ->with('success', 'Contract message deleted successfully.');
    }
}
