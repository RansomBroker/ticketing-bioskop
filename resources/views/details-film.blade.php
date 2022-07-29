<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>Now Playing</title>
    @include('includes.css')
    @include('includes.js')
</head>
<body>
    <div class="flex flex-col min-h-screen bg-[url('/img/background.png')] bg-repeat">
        @include('includes.navbar')
        <div class="w-full p-8">
            <div class="w-full md:w-1/4 uppercase p-1 ">
                <h5 class=" text-center bg-[#FFC107] opacity-90  text-xl font-[800] px-8 py-2 rounded-t-lg">{{ ($detail->upcoming == 1 ? "upcoming" : "Playing Now") }}</h5>
                <div class=" opacity-90
                    border-l-[5.25rem] border-l-transparent
                    border-t-[2rem] border-t-[#FFC107]
                    border-r-[5.25rem] border-r-transparent
                    rounded-xs
                    ">
                </div>
            </div>
            <div class="w-full p-8 grid grid-cols-1 md:grid-cols-4 md:gap-8 gap-y-8 ">
                <div class="flex flex-col bg-[#595959] bg-opacity-60 rounded self-center ">
                    <a href="{{ URL::to('/detail-film/'.$detail->id) }}">
                        <img class=" w-full h-96 rounded-t " src="{{ asset('img/'.$detail->img) }}" alt="" />
                    </a>
                    <a href="{{ $detail->url }}" class="w-full transition ease-in-out delay-150 w-full p-2 rounded-b uppercase text-center bg-[#CCB443] font-bold shadow-lg  hover:-translate-y-0.5 hover:scale-105 hover:bg-[#FFC107] cli duration-300 px-2  text-xl font-bold">
                        Watch Trailer
                    </a>
                    @if($detail->upcoming != 1 )
                        <a href="{{ URL::to('/buy-ticket/'.$detail->id) }}" class="w-full transition ease-in-out delay-150 w-full p-2 rounded-b uppercase text-center bg-[#CCB443] font-bold shadow-lg mt-1 hover:-translate-y-0.5 hover:scale-105 hover:bg-[#FFC107] cli duration-300 px-2 text-xl font-bold">
                            buy
                        </a>
                    @endif
                </div>
                <div class=" w-full grid self-center col-span-3  bg-[#595959] bg-opacity-50 rounded gap-3 text-white">
                    <div class="px-5">
                        <h1 class="mt-12 pt-3  text-xl text-center uppercase font-extrabold">{{ $detail->title }}</h1>
                        <h2 class="py-2 text-medium font-bold ">Genre    : <span class=" py-1 px-3 bg-[#CCB443] text-gray-900 font-bold rounded">{{ $detail->genre }}</span></h2>
                        <h2 class="py-2 text-medium font-bold ">Produser    : <span class=" py-1 px-3 bg-[#CCB443] text-gray-900 font-bold rounded">{{ $detail->producer }}</span></h2>
                        <h2 class="py-2 text-medium font-bold ">Produksi    : <span class=" py-1 px-3 bg-[#CCB443] text-gray-900 font-bold rounded">{{ $detail->production }}</span></h2>
                        <h2 class="py-2 text-medium font-bold ">Cast   : <span class=" py-1 px-3 bg-[#CCB443] text-gray-900 font-bold rounded">{{ $detail->cast }}</span></h2>
                        <h2 class="pb-3 text-medium font-bold "> Sinopsis </h2>
                        <p class="text-medium font-medium mb-3">{{ $detail->synopsis }}</p>
                    </div>
            </div>

        </div>
        @include('includes.footer')
    </div>

    @include('includes.js')
</body>
</html>
