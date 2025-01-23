<div class="card relative w-[600px] font-serif">
    {{-- FRAME --}}
    <img src='{{ Storage::url("frames/$info[frameType].png") }}' class="absolute -z-10 w-[600px]">
    {{-- INFO --}}
    <div class="flex flex-col items-center">
        <div class="flex justify-between items-center w-[531px] h-[68px] mt-[35px] px-2">
            <h2 class="font-bold text-3xl">{{ $info['name'] }}</h2>
            <img src='{{ Storage::url("attributes/trap.png") }}' alt="Attribute - TRAP" class="h-[57px]">
        </div>
        <div class="w-[474px] h-[48px] flex justify-end items-center gap-x-[2px]">
            <span class="font-bold text-2xl">[Trap Card]</span>
        </div>
        <img src='{{ Storage::url("cards/$info[id]/image.png") }}' alt="{{ $info['name'] }}" class="h-[452px] mt-[10px]">
        <div class="mx-auto w-[519px] h-[168px] mt-[39px] p-2 relative">
            <p class="text-base text-justify leading-4 h-[168px]">{{ $info['desc'] }}</p>
        </div>
    </div>
</div>