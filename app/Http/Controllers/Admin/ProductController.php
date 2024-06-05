<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productList = Product::all();
        return view('admin.products.index',['productList' => $productList]) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::create($request->only([
            'name', 'email', 'password'
        ]));
        $message = "Success full create";
        if($product == null){
            $message = "Success full failed";
        }
        return redirect()->route('admin.prducts.index')->with('massage', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        $bool = $product->update($request->only([
            'name', 'email', 'password'
        ]));
        $message = "Success update";
        if( $bool){
            $message = "Update failed ";
        }
        return redirect()->route('admin.products.index')->with('massage', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $message = "Success delete";
        if(!Product::destroy($id)){
            $message = "Delete failed";
        }
        return redirect()->route('admin.products.index')->with('massage', $message);
    }
}
