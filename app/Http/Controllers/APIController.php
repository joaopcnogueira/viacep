<?php

namespace App\Http\Controllers;

use App\Http\Requests\CEPRequest;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function request(CEPRequest $request)
    {
        $cep = preg_replace('/[^0-9.]/', '', $request->cep);
        $url = "http://viacep.com.br/ws/{$cep}/json";
        $response = json_decode(file_get_contents($url));
        // dd($response);

        return view('request_response',compact('response'));
    }

    public function show_form()
    {
        return view('request_form');
    }
}
