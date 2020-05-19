<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'order_id';


    const CREATED_AT = 'order_created_at';
    const UPDATED_AT = 'order_updated_at';
}
