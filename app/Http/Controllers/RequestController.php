<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function request(Request $request): string{
        $name = $request->input('name');
        return "Hello $name!";
        
    }

}
