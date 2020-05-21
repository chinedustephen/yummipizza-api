<?php

namespace App\Http\Controllers;

use App\Actions\OrderDetailsAction;
use App\User;
use Illuminate\Http\Request;
use App\Modules\HeaderRequest;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    use HeaderRequest;

    public function store(Request $request){
        try{
            $validator = Validator::make($request->all(), ['email'=>'bail|required|email', 'address'=>'required']);
            if($validator->fails()){
                $errors = $validator->errors();
                return $this->errorResponse('Inputs are incorrect', $errors);
            }

            $user_cookie = $this->getCookie($request);
            $user = User::where('email', $request->email)->firstOrCreate([
                'email'=>$request->email
            ]);
            $address = $request->address;
            $reference_id = uniqid('order').rand(1, 999);

            $totalAmount = (new OrderDetailsAction())->saveOrderDetails($user_cookie, $reference_id, $address);

            $order = new Order();
            $order->order_user_id = $user->id;
            $order->order_reference_id = $reference_id;
            $order->order_total_amount = $totalAmount;
            $order->save();

            return $this->successResponse('Your order was placed successfully ', $order);

        }catch (\Throwable $e){
            report($e);
            return $this->errorResponse($e->getMessage(), false);
        }
    }
}
