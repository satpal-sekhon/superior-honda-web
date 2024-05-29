<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\VehicleBrand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('productImages')->latest()->get();
        $productCategories = ProductCategory::latest()->limit(8)->get();
        $brands = VehicleBrand::latest()->limit(8)->get();
        foreach($productCategories as $key=>$product)
        {
            $productCategories[$key]['items'] = Product::where('category_id', $product->id)->count();
        }
        return view('products.index', compact('products', 'productCategories','brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.view');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // return view('products.view', compact($product));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
