<?php
// config for JaimeNorato/ApiMercadolibre
return [
    "auth" => [
        "client_id" => env("MERCADOLIBRE_CLIENT_ID"),//8717137336768908
        "client_secret" => env("MERCADOLIBRE_CLIENT_SECRET"),//iS6OjZ8gqcSPrFA6MZEwT8Vi2iKc4xIK
        "redirect_uri" => route("api-mercadolibre.token"),
    ],
];
