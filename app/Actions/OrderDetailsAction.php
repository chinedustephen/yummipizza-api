<?php

namespace App\Actions;

use App\Models\Cart;
use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class OrderDetailsAction{

    public function saveOrderDetails($user_cookie, $order_ref_id, $address){
        $cart = Cart::join('menus', 'cart_menu_id', 'menu_id')->where('cart_user_cookie', $user_cookie)->get();
        if($cart->isNotEmpty()){
            $totalAmount = 0;
            foreach ($cart as $data){
                $menu_total_amount = $data->menu_price * $data->cart_quantity;

                $orderDetails = new OrderDetail();
                $orderDetails->ordet_order_ref_id = $order_ref_id;
                $orderDetails->ordet_menu_name = $data->menu_name;
                $orderDetails->ordet_menu_description = $data->menu_description;
                $orderDetails->ordet_user_address = $address;
                $orderDetails->ordet_quantity = $data->cart_quantity;
                $orderDetails->ordet_unit_price = $data->menu_price;
                $orderDetails->ordet_total_price = $menu_total_amount;
                $orderDetails->save();
                $totalAmount += $menu_total_amount;
            }
            return $totalAmount;
        }else{
            throw new ModelNotFoundException('Cart is empty');
        }

    }

}