<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class DogController extends Controller
{
    public function list()
    {
        $data = file_get_contents('https://dog.ceo/api/breeds/list/all');
        $array_breeds = json_decode($data);
        $breeds = $array_breeds->message;
        return view('dogs', compact('breeds'));
        
    }
}
