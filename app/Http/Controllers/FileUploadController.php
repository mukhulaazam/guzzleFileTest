<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function store(Request $request)
    {
        return $this->$request('POST', 'http://localhost:8000/api/upload', $request->all());
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
