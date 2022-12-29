<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function index(Request $request)
    {
        $product = Product::Search($request->search)->paginate(5);

        $data = [
        'products' => $product
        ];

        return view('product.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = collect(['Food', 'Electronics', 'Beauty', 'Pet']);
        return view('product.add', ['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'category' => 'required',
            'detail' => 'required',
            'price' => 'required|integer',
            'photo' => 'required|mimes:jpg,jpeg,png'
        ]);

        if ($validator->fails()) {
            return redirect()
            ->route('product_add')
            ->withErrors($validator)
            ->withInput();
        }
        $validated = $validator->validated();

        $new_name = Storage::disk('public')->put('images' , $request->file('photo'));
        $explode = explode('/',$new_name);
        $validated['photo'] = $explode[1];

        Product::create($validated);

        Session::flash('success-store');

        return redirect()->route('product');

    }

    public function show($id)
    {
        $data = Product::find($id);

        return view('product.detail', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $data = Product::find($id);

        return view('product.detail', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
