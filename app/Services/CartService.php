<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartService
{
    public function addToCart($requestData)
    {
        $productId = $requestData['product_id'];
        $quantity = $requestData['quantity'];

        $product = Product::find($productId);

        if (!$product && $quantity <= $product->quantity) {
            return false;
        }

        $cart = Session::get('cart', []);
        if (array_key_exists($productId, $cart)) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'imageURL' => $product->imagePath(),
                'quantity' => $quantity
            ];
        }
        Session::put('cart', $cart);
        return true;
    }

    public function viewCart() {
        return Session::get('cart', []);
    }

    public function removeFromCart($id)
    {
        $cart = Session::get('cart', []);
        if (array_key_exists($id, $cart)) {
            unset($cart[$id]);
            Session::put('cart', $cart);
        }

        return $cart;
    }

    public function removeAllCart()
    {
        Session::forget('cart');
    }

}