<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        //
        $products = Product::all();
        return view('frontend.product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        //
        $product = Product::create($request->all());
        return redirect()->route('product.index')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        $product = Product::find($id);
        return view('frontend.product', compact('product'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        $product = Product::find($id);
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        $product = Product::find($id);
        $product->update($request->all());
        return redirect()->route('product.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product deleted successfully');
    }
}
