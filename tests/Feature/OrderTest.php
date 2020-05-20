<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Cart;

class OrderTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testStore()
    {

        $user_cookie = $this->faker()->regexify('[A-Za-z0-9]{20}');
        $cart = factory(Cart::class, 4)->create([
            'cart_user_cookie'=>$user_cookie
        ]);

        $response = $this->withHeaders([
            'cookie' => $user_cookie,
        ])->json('POST', route('api.order.store'),
            [
                'email'=>$this->faker()->unique()->email,
                'address'=>addslashes($this->faker()->address),
            ]);

        $response->assertStatus(200);
        $response->assertJson(['status'=>'success']);


    }
}
