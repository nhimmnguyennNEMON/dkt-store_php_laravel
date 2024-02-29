<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use Illuminate\Http\Request;

class CartDetailController extends Controller
{

    protected CartService $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function cartDetail()
    {
        $cart = $this->cartService->viewCart();
        return view('user.cartDetail', compact('cart'));
    }

    public function addToCart(Request $request)
    {
        $check = $this->cartService->addToCart($request->all());
        $request->session()->regenerateToken();

        if ($check) {
            $cart = $this->cartService->viewCart();
            return view('user.cartDetail', compact('cart'));
        } else {
            return redirect()->back()->with('fail', 'Add product failed');
        }
    }

    public function removeFromCart($id)
    {
        $cart = $this->cartService->removeFromCart($id);
        return view('user.cartDetail', compact('cart'));
    }

    public function removeAllCart()
    {
        $this->cartService->removeAllCart();
        $cart = $this->cartService->viewCart();
        return view('user.cartDetail', compact('cart'));
    }
}