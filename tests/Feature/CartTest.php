<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Cart;

class CartTest extends TestCase
{
    use WithFaker;
//    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testStore(){
        $user_cookie = $this->faker()->regexify('[A-Za-z0-9]{20}');

        $response = $this->withHeaders([
            'user-cookie' => $user_cookie,
        ])->json('POST', route('api.cart.store'),
            [
                'menu_id'=>rand(1, 8),
            ]);


        $response->assertStatus(200);
        $response->assertJson(['status'=>'success']);
    }

    public function testIndex()
    {
        $user_cookie = $this->faker()->regexify('[A-Za-z0-9]{20}');
        $cart = factory(Cart::class, 4)->create([
            'cart_user_cookie'=>$user_cookie
        ]);

        $response = $this->withHeaders([
            'user-cookie' => $user_cookie,
        ])->json('GET', route('api.cart.index'));


        $response->assertStatus(200);
        $response->assertJson(['status'=>'success']);
    }



    public function testUpdate(){
        $cartFactory = factory(Cart::class)->create();
        $user_cookie  = $cartFactory->cart_user_cookie;
        $cart_id = $cartFactory->cart_id;

        $response = $this->withHeaders([
            'user-cookie' => $user_cookie,
        ])->json('PUT', route('api.cart.update', ['cart'=> $cart_id]),
            [
                'quantity'=>rand(1, 20),
            ]);


        $response->assertStatus(200);
        $response->assertJson(['status'=>'success']);
    }

    public function testDelete(){
        $cartFactory = factory(Cart::class)->create();
        $user_cookie  = $cartFactory->cart_user_cookie;
        $cart_id = $cartFactory->cart_id;

        $response = $this->withHeaders([
            'user-cookie' => $user_cookie,
        ])->json('DELETE', route('api.cart.delete', ['cart'=> $cart_id]));

        $response->assertStatus(200);
        $response->assertJson(['status'=>'success']);

    }
}
