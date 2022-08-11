<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function httptest(){
        return view('api');
    }


    public function userLogin(Request $request){
        $client = new Client();
        // $token = Http::acceptJson()->post('https://novecology.fr/api/login', [
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]);
            // dd($request->all());
        $token = Http::withToken('1867|lCkSoWr5nGaHhiYPZ4lFCYML1U3I9KOhEaoeNOPR')->get('https://novecology.fr/api/users');
        dd($token);
    }
}
