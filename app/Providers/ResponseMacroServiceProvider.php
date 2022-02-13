<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;


class ResponseMacroServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Response::macro('jsonSuccess', function ($message,$data = []) {
            $data = [
                'success' => true,
                'errors' =>false,
                'data'=>$data,
                'message'=> $message
            ] ;

            return response()->json($data);
        });

        Response::macro('jsonError', function ($message, $status = 400,$data = []) {
            return Response::json([
                'success' => false,
                'errors'  => true,
                'data'=>$data,
                'message' => $message,
            ], $status);
        });

    }
}
