<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {   
        // dd($request->all());
        $category = collect(['Food', 'Electronics', 'Beauty', 'Pet']);
        $product = Product::search($request->search)->get();

        $data = [
            'categories' => $category,
            'products' => $product,
            'search' => $request->search
        ];

        return view('home', $data);
    }
}
