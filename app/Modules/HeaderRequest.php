<?php
namespace App\Modules;

trait HeaderRequest{

    public function getCookie($request){
        return $request->header('cookie') ? $request->header('cookie') : '';
    }
}