<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressRequest;
use App\Http\Requests\CEPRequest;
use Illuminate\Http\Request;

class APIController extends Controller
{

    public function show_form()
    {
        return view('request_form');
    }

    public function request(CEPRequest $request)
    {
        $cep = preg_replace('/[^0-9.]/', '', $request->cep);
        $url = "http://viacep.com.br/ws/{$cep}/json";
        $response = json_decode(file_get_contents($url));

        // dd($response);
        return view('request_response',compact('response'));
    }

    public function request_cep(AddressRequest $request)
    {
        // dd($request);
        $uf = $request->uf;
        $cidade = $request->cidade;
        $logradouro = $request->logradouro;

        $url = "http://viacep.com.br/ws/{$uf}/{$cidade}/{$logradouro}/json";
        $response = json_decode(file_get_contents($url));

        // dd($response);
        return view('request_response_cep', compact('response'));
    }
}
