<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\HttpClient;

class FileUploadController extends Controller
{
    use HttpClient;

    public function store(Request $request)
    {
        return $this->sendRequest('POST', 'http://localhost:8005/api/file', $request->all());

        // if ($request->hasFile('file')) {
        //     $file = $request->file('file');

        //     $client = new \GuzzleHttp\Client();
        //     $response = $client->request('POST', 'http://localhost:8005/api/file', [
        //         // data

        //         'multipart' => [
        //             [
        //                 'name' => 'file',
        //                 'contents' => fopen($file->getRealPath(), 'r'),
        //                 'filename' => $file->getClientOriginalName(),
        //             ],


        //         ],
        //     ]);

        //     return $response->getBody()->getContents();
        // }
    }
}
