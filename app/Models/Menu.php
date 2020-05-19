<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $primaryKey = 'menu_id';

    const CREATED_AT = 'menu_created_at';
    const UPDATED_AT = 'menu_updated_at';
}
