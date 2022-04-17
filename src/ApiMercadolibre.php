<?php

namespace JaimeNorato\ApiMercadolibre;

use JaimeNorato\ApiMercadolibre\Helpers\Connection;

class ApiMercadolibre
{
    /** Metodos principales de llamada*/
    public function get($link, $params = [])
    {
        return Connection::get($link, $params);
    }

    public function post($link, $params = [])
    {
        return Connection::post($link, $params);
    }

    public function put($link, $params = [])
    {
        return Connection::post($link, $params);
    }

    public function delete($link, $params = [])
    {
        return Connection::post($link, $params);
    }

    /**
     * carga el token de autenticacion almacenado
    */
    public function token($client_id, $client_secret)
    {
        return "Bearer ";
    }
    ////////////////////////////////////////////////////////////////////////////////

    /**
     * regirige al usaurio a la pagina de mercado libre para obtener el token
     */
    public function login()
    {
        $url = 'https://auth.mercadolibre.com.ar/authorization?response_type=code&client_id='.config('api-mercadolibre.auth.client_id').'&redirect_uri='.config('api-mercadolibre.auth.redirect_uri');

        return redirect($url);
    }

    /**
     * obtiene un token de autenticacion
    */
    public function getToken($client_id, $client_secret)
    {
        $params = [
            'grant_type' => 'client_credentials',
            'client_id' => $client_id,
            'client_secret' => $client_secret,
        ];

        return Connection::post('/oauth/token', $params);
    }
}
