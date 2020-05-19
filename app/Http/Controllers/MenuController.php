<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        try{
            $menus = Menu::all();
            return $menus->isNotEmpty() ?
                $this->successResponse('All menu', $menus) :
                $this->errorResponse('No menu found', false);

        }catch(\Throwable $e){
            $this->errorResponse('Error fetching menu', false);
        }
    }
}
