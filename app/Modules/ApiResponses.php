<?php

namespace App\Modules;

trait ApiResponses{

    public function successResponse($message, $data){
        return response()->json(['status'=>'success', 'message'=>$message, 'body'=>$data], 200);
    }

    public function errorResponse($message, $data){
        return response()->json(['status'=>'failed', 'message'=>$message, 'body'=>$data], 200);
    }

    public function notFoundResponse($message){
        return response()->json(['status'=>'failed', 'message'=>$message, 'body'=>false], 404);
    }

}