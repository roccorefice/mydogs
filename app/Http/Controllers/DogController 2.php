<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class DogController extends Controller
{
    public function list()
    {
        $data = file_get_contents('https://dog.ceo/api/breeds/list/all');
        $json = json_decode($data);
        $breeds = $json->message;
        return view('dogs', compact('breeds'));
    }
}
