<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Card</title>
</head>
<body>
    <main class="flex justify-center items-center h-screen">
        <div class="card relative w-[600px] font-serif">
            {{-- FRAME --}}
            <img src="{{ Storage::url('frames/effect.png') }}" alt="" class="absolute -z-10 w-[600px]">
            {{-- INFO --}}
            <div class="flex flex-col items-center">
                <div class="flex justify-between items-center w-[531px] h-[68px] mt-[35px] px-2">
                    <h2 class="font-bold text-3xl">Cloudian - Turbulence</h2>
                    <img src="{{ Storage::url('attributes/water.png') }}" alt="Attribute - WATER" class="h-[57px]">
                </div>
                <div class="w-[474px] h-[48px] flex justify-end items-center gap-x-[2px]">
                    @for ($i = 0; $i < 4; $i++)
                        <img src="{{ Storage::url('stars/level.png') }}" alt="level star" class="h-[32px]">
                    @endfor
                </div>
                <img src="{{ Storage::url('cards/16197610/image.png') }}" alt="Cloudian - Turbulence" class="h-[452px] mt-[10px]">
                <div class="mx-auto w-[519px] h-[168px] mt-[39px] px-2 relative">
                    <span class="font-bold text-lg">[Fairy/Effect]</span>
                    <p class="text-base text-justify leading-4 h-[105px]">
                        This card cannot be destroyed by battle. If this card is in face-up Defense Position, destroy it. When you Normal Summon this card, place 1 Fog Counter on it for each "Cloudian" monster on the field. You can remove 1 Fog Counter from this card to Special Summon 1 "Cloudian - Smoke Ball" from your Deck or from either player's Graveyard.
                    </p>
                    <div class="absolute bottom-0 right-0 left-0 px-2">
                        <hr class="outline-1 outline border-black">
                        <p class="font-bold text-lg text-right">
                            <span>ATK/&nbsp;&nbsp;800</span>
                            &nbsp;
                            <span>DEF/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>