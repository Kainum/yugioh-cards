<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $card['name'] }}</title>
</head>
<body>
    <main class="flex justify-center items-center h-screen">
        @if (in_array($card['type'], [
            "Effect Monster",
            "Flip Effect Monster",
            "Flip Tuner Effect Monster",
            "Gemini Monster",
            "Normal Monster",
            "Normal Tuner Monster",
        ]))
            <x-monster-card :info="$card"/>
        @elseif (in_array($card['type'], [
            "Trap Card",
            "Spell Card",
        ]))
            <x-backrow-card :info="$card"/>
        @endif
    </main>
</body>
</html>