<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PeliculaController extends Controller
{
    public function __construct() {

        $this->middleware("cors");

    }
    public function index()
    {
        $apiKey = '20b023f5a430ff21729528b7b6bf167f';
        $baseUrl = 'https://api.themoviedb.org/3/';

        $response = Http::get($baseUrl . 'movie/popular', [
            'api_key' => $apiKey,
        ]);

        $data = $response->json();

        return response()->json($data['results']);
    }
}
