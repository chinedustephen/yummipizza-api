<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $primaryKey = 'addr_id';


    const CREATED_AT = 'addr_created_at';
    const UPDATED_AT = 'addr_updated_at';
}
