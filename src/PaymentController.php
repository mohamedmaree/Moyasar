<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PaymentController extends Controller
{

    public function callback_url_route_function(Request $request){
        //dd($request->all()) //to show all request params
        if($request->status == 'paid'){
            //payment success logic here
        }
        return 'an error occured';
    }


}
