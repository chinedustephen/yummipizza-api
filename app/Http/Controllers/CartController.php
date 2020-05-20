<?php

namespace App\Http\Controllers;

use App\Modules\HeaderRequest;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    use HeaderRequest;

    public function index(Request $request){
        try {
            $cart = Cart::where('cart_user_cookie', $this->getCookie($request))->get();

            return $cart->isNotEmpty() ?
                $this->successResponse('Cart items', $cart) :
                $this->errorResponse('No item found', false);
        }catch (\Throwable $e){
            report($e);
            return $this->errorResponse('Error fetching menu', false);
        }
    }

    public function store(Request $request){
        try {
            $cart = new Cart();
            $cart->cart_user_cookie = $this->getCookie($request);
            $cart->cart_menu_id = $request->menu_id;
            $cart->cart_quantity = $request->quantity;
            $cart->save();
            return $this->successResponse('Item added to Cart', $cart);
        }catch (\Throwable $e){
            report($e);
            return $this->errorResponse('Error adding item to cart', false);
        }
    }

    public function update(Request $request, $cart){
        try {
            $cart = Cart::where([['cart_id', $cart], ['cart_user_cookie', $this->getCookie($request)]])->firstOrFail();
            $cart->cart_quantity = $request->quantity;
            $cart->save();
            return $this->successResponse('Cart item updated', $cart);
        }catch (\Throwable $e){
            report($e);
            return $this->errorResponse('Error updating item to cart', false);
        }
    }

    public function delete(Request $request, $cart){
        try {
            $cart = Cart::where([['cart_id', $cart], ['cart_user_cookie', $this->getCookie($request)]])->firstOrFail();

            $cart->delete();
            return $this->successResponse('Cart deleted', $cart);
        }catch (\Throwable $e){
            report($e);
            return $this->errorResponse('Error deleting item from cart', false);
        }
    }
}
