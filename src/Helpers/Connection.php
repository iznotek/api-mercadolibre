<?php

namespace JaimeNorato\ApiMercadolibre\Helpers;

use GuzzleHttp\Client;

class Connection
{
    protected static $baseUri="https://api.mercadolibre.com";

    /*
     * desaroolo de stas uris
     * /api-mercadolibre/auth
     * /api-mercadolibre/notifications
     * */
    /**
     * sends the request and returns the entire raw response
     * @param string $method
     * @param string $link
     * @param array|null $data
     * @return \Exception|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function submit(string $method='POST', string $link = "", array $data = null)
    {
        try{
            $client = new Client(['base_uri' => self::$baseUri]);
            if($data != null) $response = $client->request($method,$link,$data);
            else $response = $client->request($method,$link);
            return $response;
        }catch (\Exception $exception){
            return $exception;
        }
    }

    /**
     * sends the request and returns only the body of the response, if the request generates an error, the response given by the server is returned
     * @param string $method
     * @param string $link
     * @param array|null $data
     * @return \Exception|\GuzzleHttp\Exception\GuzzleException|mixed|\Psr\Http\Message\ResponseInterface
     */
    public static function sendGetBody(string $method='POST', string $link = "", array $data = null){
        try {
            $response = self::submit($method, $link, $data);
            if(!method_exists($response,"getBody")) return $response;
            return json_decode($response->getBody()->getContents());
        } catch (\GuzzleHttp\Exception\GuzzleException $exception) {
            return $exception;
        }
    }
    /**
     * envia una peticion post y devuelve el body de la respuesta
    */
    public static function post(string $link, array $data = null){
        return self::sendGetBody('POST',$link,$data);
    }
    /**
     * envia una peticion get y devuelve el body de la respuesta
    */
    public static function get(string $link, array $data = null){
        return self::sendGetBody('GET',$link,$data);
    }

}
