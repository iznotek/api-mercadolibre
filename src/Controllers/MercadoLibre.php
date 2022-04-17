<?php

namespace JaimeNorato\ApiMercadolibre\Controllers;

//use App\Http\Controllers\Controller;
use JaimeNorato\ApiMercadolibre\Facades\ApiMercadolibre;

class MercadoLibre // extends Controller
{
    /**
     * regirige al usaurio a la pagina de mercado libre para obtener el token
    */
    public function login()
    {
        ApiMercadolibre::login();
    }

    /**
     * recibe el token de mercado libre
    */
    public function callback()
    {
        $code = request()->get('code');
        $url = 'https://api.mercadolibre.com/oauth/token?grant_type=authorization_code&client_id='.config('api-mercadolibre.auth.client_id').'&client_secret='.config('api-mercadolibre.auth.client_secret').'&code='.$code.'&redirect_uri='.config('api-mercadolibre.auth.redirect_uri');
        $response = json_decode(file_get_contents($url));
        $token = $response->access_token;
        $user = $response->user_id;
        $url = 'https://api.mercadolibre.com/users/'.$user;
        $response = json_decode(file_get_contents($url));
        $name = $response->nickname;
        $email = $response->email;
        $url = 'https://api.mercadolibre.com/users/'.$user.'/items/search?access_token='.$token;
        $response = json_decode(file_get_contents($url));
        $items = $response->results;

        return view('api-mercadolibre::callback', compact('token', 'name', 'email', 'items'));
    }
}
