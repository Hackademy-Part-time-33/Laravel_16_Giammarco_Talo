<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    public function homepage () {
        $response = Http::get('https://api.jikan.moe/v4/genres/anime');
        return view('homepage', ['data' => $response['data']] );
    }

    public function genre($id)
    {
        $response = Http::get('https://api.jikan.moe/v4/anime?genres={genre_id}'.$id);
        return view('list-genre', ['data' => $response['data']] );
    }

    public function detail($id)
    {
        $response = Http::get('https://api.jikan.moe/v4/anime/' . $id)->json();
        return view('detail', ['data' => $response['data']]);
    }
    
}
