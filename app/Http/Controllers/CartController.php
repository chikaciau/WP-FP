<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_user');
    }

    public function index()
    {
        $id = Auth::id();

        $data = Cart::with('product')->where('user_id', $id)->get();
        $total = Cart::where('user_id', $id)->sum('sub_total');

        return view('cart.index', ["data" => $data, "total" => $total]);
    }

    public function store(Request $request)
    {
        $id = Auth::id();
        
        $data = [
            'product_id' => $request->id,
            'user_id' => $id,
            'qty' => $request->qty,
            'sub_total' => $request->qty*$request->price,
        ];

        Cart::create($data);
        Session::flash('success-add');

        return redirect()->route('cart');
    }


    public function destroy($id)
    {
        Cart::destroy($id);

        Session::flash('success-delete');

        return redirect()->route('cart');
    }

    public function purchase()
    {
        $id = Auth::id();
        $total = Cart::where('user_id', $id)->sum('sub_total');

        $data = [
            'user_id' => $id,
            'total' => $total,
        ];

        $transaction = Transaction::create($data);

        $transaction_detail = [];
        
        $transaction_detail_data = Cart::where('user_id', $id)->get();

        foreach($transaction_detail_data as $dt){
            $detail_arr=[ 
                'transaction_id'=> $transaction->id,
                'product_id' => $dt->product_id,
                'qty' => $dt->qty,
                'sub_total' => $dt->sub_total
            ];

            array_push($transaction_detail, $detail_arr);
        }

        TransactionDetail::insert($transaction_detail);

        Cart::where('user_id', $id)->delete();

        Session::flash('success-purchase');

        return redirect()->route('transaction');
    }
}
