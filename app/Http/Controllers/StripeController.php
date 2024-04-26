<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductUser;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function session(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $product = Product::findOrFail($request->product_id);
        $price = $product->price;
        $quantity = $request->quantity;
        $unitAmount = $price * 100;
        $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'MAD',
                        'product_data' => [
                            'name' => $product->name,
                            'description' => $product->description,
                        ],
                        'unit_amount' => $unitAmount,
                    ],
                    'quantity' => $request->quantity,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('success', [
                'product_id' => $request->product_id,
                'user_id' => $request->user_id,
                'quantity' => $request->quantity,
                'total_amount' => $product->price * $request->quantity,
                'code_zip' => $request->code_zip,
                'address' => $request->address,
                'city' => $request->city,
            ]),
        ]);

        return redirect()->to($session->url);
    }

    public function success(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        ProductUser::create([
            'user_id' => $request->user_id,
            'product_id' => $product->id,
            'quantity' => $request->quantity,
            'total_amount' => $product->price * $request->quantity,
            'code_zip' => $request->code_zip,
            'address' => $request->address,
            'city' => $request->city,
        ]);

        $product->stock -= $request->quantity;
        $product->save();


        return redirect()->route('marketUser')->with('success', 'Payment has been successfully');


    }
}
