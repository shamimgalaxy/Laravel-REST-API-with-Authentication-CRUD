<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return response()->json($products, 200);
    }

    public function store(Request $request){
        if(!$request->user()->hasRole('admin')){
            return response()->json([
                'message' => 'Unauthorized. Admin only.',
            ], 403);
        }

        $request->validate([
            'name'  => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = null;
if($request->hasFile('image')){
    $imagePath = $request->file('image')->store('products', 'public');
}

$product = Product::create([
    'name'        => $request->name,
    'description' => $request->description,
    'price'       => $request->price,
    'stock'       => $request->stock,
    'image'       => $imagePath,  // ← এখানে image path save হচ্ছে
]);

        return response()->json([
            'message' => 'Product created successfully',
            'product' => $product,
        ], 201);
    }

    public function show($id){
        $product = Product::find($id);
        if(!$product){
            return response()->json([
                'message' => 'Product not found',
            ], 404);
        }
        return response()->json($product, 200);
    }

    public function update(Request $request, $id){
        if(!$request->user()->hasRole('admin')){
            return response()->json([
                'message' => 'Unauthorized. Admin only.',
            ], 403);
        }

        $product = Product::find($id);
        if(!$product){
            return response()->json([
                'message' => 'Product not found',
            ], 404);
        }

        $product->update($request->all());

        return response()->json([
            'message' => 'Product updated successfully',
            'product' => $product,
        ], 200);
    }

    public function destroy(Request $request, $id){
        if(!$request->user()->hasRole('admin')){
            return response()->json([
                'message' => 'Unauthorized. Admin only.',
            ], 403);
        }

        $product = Product::find($id);
        if(!$product){
            return response()->json([
                'message' => 'Product not found',
            ], 404);
        }

        $product->delete();

        return response()->json([
            'message' => 'Product deleted successfully',
        ], 200);
    }
}