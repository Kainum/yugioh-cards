<div class="card relative w-[600px] font-serif">
    {{-- FRAME --}}
    <img src='{{ Storage::url("frames/$info[frameType].png") }}' class="absolute -z-10 w-[600px]">
    {{-- INFO --}}
    <div class="flex flex-col items-center">
        <div class="flex justify-between items-center w-[531px] h-[68px] mt-[35px] px-2">
            <h2 class="font-bold text-3xl">{{ $info['name'] }}</h2>
            <img src='{{ Storage::url("attributes/" . strtolower($info['attribute']) . ".png") }}' alt="Attribute - {{ $info['attribute'] }}" class="h-[57px]">
        </div>
        <div class="w-[474px] h-[48px] flex justify-end items-center gap-x-[2px]">
            @for ($i = 0; $i < $info['level']; $i++)
                <img src="{{ Storage::url('stars/level.png') }}" alt="level star" class="h-[32px]">
            @endfor
        </div>
        <img src='{{ Storage::url("cards/$info[id]/image.png") }}' alt="{{ $info['name'] }}" class="h-[452px] mt-[10px]">
        <div class="mx-auto w-[519px] h-[168px] mt-[39px] px-2 relative">
            <span class="font-bold text-lg">
                {{ '[' . implode('/', $info['typeline']) . ']' }}
            </span>
            <p class="text-base text-justify leading-4 h-[105px]">{{ $info['desc'] }}</p>
            <div class="absolute bottom-0 right-0 left-0 px-2">
                <hr class="outline-1 outline border-black">
                <p class="font-bold text-lg text-right">
                    <span>ATK/ {{ $info['atk'] }}</span>
                    &nbsp;
                    <span>DEF/ {{ $info['def'] }}</span>
                </p>
            </div>
        </div>
    </div>
</div>