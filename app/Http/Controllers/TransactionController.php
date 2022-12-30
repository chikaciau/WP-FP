<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_user');
    }

    public function index()
    {
        $id = Auth::id();
        $transaction = Transaction::with('detail.product')->where('user_id', $id)->get();
        $quantity =0;

        $data = [
            'transaction' => $transaction,
            'quantity' => $quantity,
        ];

        // dd($transaction);1

        return view('transaction.index', $data);
    }

}
