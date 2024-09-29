<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ResponseController extends Controller
{
    public function response(): Response
    {
        return response("Hello World!");
    }

    public function headerResponse(): Response
    {
        $body = [
            "firstName" => "Hary",
            "lastName" => "Capri"
        ];


        // kita mencoba melakukan melakukan mengubah data body ke json,lalu kita set header dan menambahkan headers menggunakan response
        // pembuktian bisa cek di unit test ResponseTest
        return response(json_encode($body), 200)
        ->header("Content-Type", "application/json")
        ->withHeaders([
            "Author" => "Hary Capri",
            "App" => "App Laravel"
        ]);
    } 
}
