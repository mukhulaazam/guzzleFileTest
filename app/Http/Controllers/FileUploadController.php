<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', 'http://localhost:8005/api/file', [
                // data

                'multipart' => [
                    [
                        'name' => 'file',
                        'contents' => fopen($file->getRealPath(), 'r'),
                        'filename' => $file->getClientOriginalName(),
                    ],
                    [
                        'name' => 'data',
                        'contents' => json_encode($request->all()),
                    ]

                ],
            ]);

            return $response->getBody()->getContents();
        }
    }
}
