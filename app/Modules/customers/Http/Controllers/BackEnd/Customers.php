<?php

namespace Customers\Http\Controllers\BackEnd;

use Customers\Models\Customer;
use App\Http\Controllers\Controller;
use Customers\Http\Requests\BackEnd\Store;


class Customers extends Controller 
{
    
    public function index(Store $request)
    {

        return view('customers::BackEnd.index',[
        
        ]);
    }
    
}