<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transactions;

class TransactionController extends Controller
{

    public function index($user_id = 1)
    {
        // Fetch transactions associated with the dealer_id
        $transactions = Transactions::where('user_id', $user_id)->get();
        // dd($transactions);
        return view('transactions', ['transactions' => $transactions]);
    }
}
