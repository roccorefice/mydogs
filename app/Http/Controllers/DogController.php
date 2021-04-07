<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class DogController extends Controller
{
    public function list()
    {
        return Http::get('https://dog.ceo/api/breeds/list/all')->body();
    }
}
