<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       $products = Product::all()->sortBy('updated_at')->reverse()->values();
       return view('product.index', compact('products'));

    } 
     


    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        // Logic to validate and store the new product
        // You'll need to replace this with your actual logic
        Product::create([
            'name' => $request->input('name'),
            'img' => $request->input('img'),
            'price' => $request->input('price'),
            'desc' => $request->input('desc'),
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }
}