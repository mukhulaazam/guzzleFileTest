<?php

namespace App\Traits;


trait HttpClient
{
    public function request($method, $uri, $options = [])
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request($method, $uri, $options);

        return $response->getBody()->getContents();
    }
}
