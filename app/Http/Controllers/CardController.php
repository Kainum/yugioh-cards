<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CardController extends Controller
{

    const TYPE = [
        "Trap"
    ];

    public static function show(Request $request, string $id)
    {
        $response = Http::get("https://db.ygoprodeck.com/api/v7/cardinfo.php?id=$id")->json();

        if (!isset($response['data']))
        {
            return 'deu erro';
        }

        $card = $response['data'][0];
        $card = compact('card');
        
        // dd($card);
        return view('card', $card);
    }
}
