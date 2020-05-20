<?php
namespace App\Modules;

trait HeaderRequest{

    public function getCookie($request){
        return $request->header('user-cookie') ? $request->header('user-cookie') : '';
    }
}