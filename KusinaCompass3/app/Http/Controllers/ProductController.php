<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index (){
        $products =Product::all();
        return view('product.index',compact('products'));
    }

    public function create (){

        return view('product.create')->with('success','Product Creates] Succesfully');
    }
    public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'price' => 'required|integer',
        'description' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Use 'image' instead of 'img'.
    ]);
    
    if ($request->hasFile('image')) 
    {
        $destination_path = '<public>
        <Storage>Uploads/ProductUploads';
        $image = $request->file('image');
        $image_name = $image->getClientOriginalName();
        $path = $request->file('image')->storeAs($destination_path, $image_name); // Fix this line.
        $input['image'] = $image_name;
    } else {
        $data['image'] = ''; // Set a default value for the image if it's not provided.
    }

    $newProduct = Product::create($data);

    return redirect(route('product.index'));
}

public function edit(Product $product){
    return view ('product.edit',['product' => $product]);
}

public function update(Product $product, Request $request){
    $data = $request->validate([
        'name' => 'required',
        'price' => 'required|integer',
        'description' => 'required',
        'img' => 'nullable',
    ]);

    $product->update($data);
    return redirect(route('product.index')) ->with('success','Product Updated Succesfully');
}

public function destroy (Product $product){
    $product->delete();
    return redirect(route('product.index')) ->with('success','Product Deleted Succesfully');
    
}

}