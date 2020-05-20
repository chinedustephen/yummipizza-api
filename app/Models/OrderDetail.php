<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $primaryKey = 'ordet_id';

    const CREATED_AT = 'ordet_created_at';
    const UPDATED_AT = 'ordet_updated_at';
}
