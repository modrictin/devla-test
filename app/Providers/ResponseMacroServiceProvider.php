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
        Response::macro('jsonSuccess', function ($message) {
            $data = [
                'success' => true,
                'errors' =>false,
                'message'=> $message
            ] ;

            return response()->json($data);
        });

    }
}
