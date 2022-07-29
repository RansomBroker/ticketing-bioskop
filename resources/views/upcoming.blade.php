<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>Upcoming</title>
    @include('includes.css')
    @include('includes.js')
</head>
<body>
<div class="flex flex-col min-h-screen bg-[url('/img/background.png')] bg-repeat">
    @include('includes.navbar')

    <div class="w-full p-8">
        <div class="w-full md:3/12 uppercase p-2 flex">
            <span class="bg-[#CCB443] text-xl font-[800] px-8 py-2">Upcoming</span>
        </div>
    </div>
    <div class="w-full p-8 grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-5 md:gap-8 gap-y-8">
        @foreach($upcomings as $upcoming)
            <div class=" bg-[#595959] bg-opacity-60 rounded relative ">
                @if($upcoming->rating == 1)
                    <span class="py-1 px-3 bg-green-500 rounded-md text-xs font-semibold absolute top-2 left-2">SU</span>
                @endif
                @if($upcoming->rating == 2)
                    <span class="py-1 px-2 bg-blue-500 rounded-md text-xs font-semibold absolute top-2 left-2">R+13</span>
                @endif
                @if($upcoming->rating == 3)
                    <span class="py-1 px-2 bg-red-500 rounded-md text-xs font-semibold absolute top-2 left-2">R+18</span>
                @endif
                <a href="{{ URL::to("/detail-film/".$upcoming->id) }}">
                    <img class=" w-full h-96 rounded-t " src="{{asset('img/'.$upcoming->img)}}" alt="" />
                </a>
                <div class="px-2">
                    <a href="{{ URL::to("/detail-film/".$upcoming->id) }}">
                        <p class=" text-center mb-2 text-xl py-2 font-bold tracking-tight text-white dark:text-white">{{ $upcoming->title }}</p>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    @include('includes.footer')
</div>

@include('includes.js')
</body>
</html>
