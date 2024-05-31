<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function cart()
    {
        return view('cart');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id'=> 'required',
            'quantity'  => 'required', // Added integer validation and minimum quantity
        ]);

        $productDetail = Product::with('productImages')->findOrFail($request->product_id);
        $productImage = $productDetail->productImages->first();

        $cart = session()->get('cart', []);
        // Check if the product already exists in the cart
        $productExists = false;
        foreach ($cart['products'] ?? [] as $key => $product) {
            if ($product['id'] == $request->product_id) {
                $cart['products'][$key]['quantity'] += $request->quantity;
                $productExists = true;
                break;
            }
        }

        // If the product doesn't exist, add it to the cart
        if (!$productExists) {
            $cart['products'][] = [
                "id" => $request->product_id,
                "quantity" => $request->quantity,
                "product_code" => $productDetail->product_code,
                "name" => $productDetail->product_name,
                "price" => $productDetail->cost_price,
                "image" => $productImage ? $productImage->images : null
            ];
        }

        // Recalculate cart totals
        $cart_quantity = 0;
        $sub_total = 0;
        foreach ($cart['products'] as $product) {
            $cart_quantity += $product['quantity'];
            $sub_total += $product['quantity'] * $product['price'];
        }
        
        // Update cart totals
        $cart['quantity'] = $cart_quantity;
        $cart['sub_total'] = $sub_total;
        $cart['formatted_sub_total'] = '$'.(number_format($sub_total ,2));
        
        $applied_coupons = $cart['applied_coupons'] ?? [];
        $cart['applied_coupons'] = $applied_coupons;
        
        $cart['grand_total'] = $sub_total;
        $cart['formatted_grand_total'] = '$'.(number_format($sub_total ,2));
        $cart['count']  = count($cart['products']);
        session()->put('cart', $cart);     

        return redirect()->back()->with('success', 'Product added to cart successfully!');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if ($request->product_id && $request->qty) {
            $cart = session()->get('cart');

            // Validate product ID
            $productExists = false;
            foreach ($cart['products'] as &$product) {
                if ($product['id'] == $request->product_id) {
                    $productExists = true;
                    break;
                }
            }

            if (!$productExists) {
                return response()->json([
                    'success' => false,
                    'message' => 'Product not found in the cart.'
                ]);
            }
        
            // Update quantity of the specified product
            foreach ($cart['products'] ?? [] as $key => $product) {
                if ($product['id'] == $request->product_id) {
                    $cart['products'][$key]['quantity'] += $request->qty;
                    $productExists = true;
                    break;
                }
            }
            
            // Recalculate cart subtotal and total quantity
            $sub_total = 0;
            $cart_quantity = 0;
            foreach ($cart['products'] as $product) {
                // Assuming price is a property of product
                $sub_total += $product['price'] * $product['quantity'];
                $cart_quantity += $product['quantity'];
            }
        
            // Update cart object
            $cart['quantity'] = $cart_quantity;
            $cart['sub_total'] = $sub_total;
            $cart['formatted_sub_total'] = '$'.(number_format($sub_total ,2));
            
            $cart['grand_total'] = $sub_total;
            $cart['formatted_grand_total'] = '$'.(number_format($sub_total ,2));
            
            print_r($cart);
            die();
            session()->put('cart', $cart);
        
            return response()->json([
                'success' => true,
                'cart' => $cart,
                'message' => 'Cart updated successfully.'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Product ID and quantity are required.'
            ]);
        }        
    }



    /**
     * Remove the specified resource from storage.
     */
    public function remove(Request $request)
    {
        if($request->product_id) {
            $cart = session()->get('cart');

            if(isset($cart['products'][$request->product_id])) {
                // Remove the product from the cart
                unset($cart['products'][$request->product_id]);

                // Recalculate cart total quantity
                $cart_quantity = 0;
                foreach ($cart['products'] as $product) {
                    $cart_quantity += $product['quantity'];
                }
                $cart['quantity'] = $cart_quantity;

                // Recalculate cart total amount
                $amount = 0;
                foreach($cart['products'] as $product) {
                    // Assuming price is a property of product
                    $amount += $product['product']->price * $product['quantity'];
                }
            }

            // Update cart object
            $cart['sub_total'] = $amount;
            $cart['grand_total'] = $amount; // Assuming no discounts or taxes applied

            session()->put('cart', $cart);

            return response()->json([
                'success' => true,
                'cart'    => $cart,
                'message' => 'Product is successfully removed from cart.'
            ]);
        }
    }
}
