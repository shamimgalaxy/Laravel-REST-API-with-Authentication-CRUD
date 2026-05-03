<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    
    public function index(){
        $products=Product::all();
        return response()->json($products,200);

    }
public function store(Request $request){
    $request->validate([
       'name'  => 'required|string',
       'price' => 'required|numeric',
       'stock' => 'required|integer',
    ]);

    $product = Product::create($request->all());

    return response()->json([
        'message' => 'Product created successfully',
        'product' => $product,
    ], 201);
}
    public function show($id){
        $product= Product::find($id);

        if(!$product){
            return response()->json([
            'message'=>'Product not found',
        ],404);
        }

        return response()->json($product,200);

    }

    public function update(Request $request, $id){
        $product=Product::find($id);
        if(!$product){
            return response()->json([
                'message'=>'product not found',
            ]);
        }
        $product->update($request->all());
        return response()->json([
            'message'=>'product updated successfully',
            'product'=>$product,
        ],200);
    }

    public function destroy($id){
      $product=Product::find($id);
      if(!$product){
        return response()->json([
            'message'=>'product not found',
        ]);
      }
      $product->delete();
       return response()->json([
        'message'=>'Product deleted successfully',
        
       ],200);

    }
    //end function
}
