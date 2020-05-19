<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $primaryKey = 'cart_id';


    const CREATED_AT = 'cart_created_at';
    const UPDATED_AT = 'cart_updated_at';
}
