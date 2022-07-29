<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>Buy</title>
    @include('includes.css')
    @include('includes.js')
</head>
<body>
    <div class="flex flex-col min-h-screen bg-[url('/img/background.png')] bg-repeat">
        @include('includes.navbar')
        <input type="hidden" id="film-id" value="{{ $detail->film_id }}">
        <div class="w-full md:p-8 md:px-[12.5rem]">
            <div class="w-full  p-8 rounded bg-[#595959] bg-opacity-70 text-white drop-shadow-xl shadow-white">
                <div class="grid grid-cols-1  justify-center md:grid-cols-5 ">
                    <img class="" src="{{ asset("img/".$detail->film->img) }}" alt="">
                    <div class="md:col-span-2 md:px-6">
                        <h1 class="uppercase text-xl mt-3 md:mt-0 font-bold ">
                            {{ $detail->film->title }}
                        </h1>
                        <p class="align-middle py-3"><span class="iconify-inline inline" data-icon="bxs:time" style="color: #ccb443;" data-width="24"></span>{{ $detail->duration }} Menit</p>
                        @if($detail->film->rating == 1)
                            <span class="py-1 px-3 bg-green-500 rounded-md text-xs font-semibold ">SU</span>
                        @endif
                        @if($detail->film->rating == 2)
                            <span class="py-1 px-2 bg-blue-500 rounded-md text-xs font-semibold ">R+13</span>
                        @endif
                        @if($detail->film->rating == 3)
                            <span class="py-1 px-2 bg-red-500 rounded-md text-xs font-semibold">R+18</span>
                        @endif
                    </div>
                </div>

                <div class="w-full md:3/12 uppercase flex mt-6">
                    <span class="bg-[#CCB443] text-sm font-[800] px-8 py-2">Pilih Kota</span>
                    <select class="bg-[#191919] text-[#CCB443] text-sm font-[800] px-6 py-2" name="cities" id="select-cities">
                        <option value="" selected>--Pilih Kota--</option>
                        @foreach($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>

                <ul class="mt-2" id="list-theater">
                </ul>

            </div>
        </div>


        @include('includes.footer')
    </div>

    @include('includes.js')
</body>
</html>
