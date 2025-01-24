<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

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
            return 'Card não encontrado.';
        }
        
        $card = $response['data'][0];
        $card = compact('card')['card'];

        
        if ($card['type'] == "Trap Card") {
            $card['attribute'] = 'TRAP';
        } else if ($card['type'] == "Spell Card") {
            $card['attribute'] = 'SPELL';
        }
        
        $id = str($card['id']);
        if (!Storage::disk('public')->exists("cards/$id/image.png"))
        {
            // não existe a imagem. Fazer download
            $image_link = $card['card_images'][0]['image_url_cropped'];

            $response = Http::get($image_link);
            Storage::disk('public')->put("cards/$id/image.png", $response->body());
        }
        
        return view('card', ['card' => $card]);
    }
}
