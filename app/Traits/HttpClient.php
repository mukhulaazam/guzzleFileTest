<?php

namespace App\Traits;


trait HttpClient
{
    public function sendRequest($method, $uri, $body = [])
    {
        // return $body;
        $client = new \GuzzleHttp\Client();
        $response = $client->request($method, $uri, [
            'multipart' => [
                [
                    'name' => 'file',
                    'contents' => fopen($body['file']->getRealPath(), 'r'),
                    'filename' => $body['file']->getClientOriginalName(),
                ],
            ],
        ]);


        return $response->getBody()->getContents();
    }
}
