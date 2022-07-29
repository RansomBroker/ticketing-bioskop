<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>Profile </title>
    @include('includes.css')
    @include('includes.js')
</head>
<body>
    <div class="flex flex-col min-h-screen bg-[url('/img/background.png')] bg-repeat">
        @include('includes.navbar')
        <div class="w-full flex justify-center md:p-8">
            <div class="w-full md:mx-24 p-8 rounded bg-[#595959] bg-opacity-60 text-white drop-shadow-xl shadow-white">
                <div class="w-full flex flex-wrap flex-row  pb-2 mb-3 border-b-2">
                    <div class="flex mx-2"><div class="rounded bg-white w-5 h-5 mr-1"></div><span class="mx-1">Tidak Tersedia</span></div>
                    <div class="flex mx-2"><div class="rounded bg-[#34c218] w-5 h-5"></div><span class="mx-1">Tersedia</span></div>
                    <div class="flex mx-2"><div class="rounded bg-[#CCB443] w-5 h-5"></div><span class="mx-1">Pilhanmu</span></div>
                </div>
                <div class="w-full py-3 pb-3 border-b-2">
                    <h5 class="mx-2 uppercase text-lg font-semibold">{{ $seat->theater->name }}</h5>
                    <h5 class="mx-2">{{ $seat->studio->name }}</h5>
                    <h5 class="mx-2">{{ $seat->film->title }}</h5>
                    <h5 class="mx-2">{{ $seat->date }}<span class="mx-2">|</span><span >{{ $seat->start_time }} </span></h5>
                    <h5 class="mx-2">Rp.{{ number_format($seat->price, 0, '.', '.') }} </h5>
                </div>
                @error('seat')
                <p class="p-2 bg-opacity-90  bg-red-400 text-white rounded drop-shadow font-medium text-sm my-3 ">
                    {{ $message }}
                </p>
                @enderror
                <div class="w-full overflow-x-auto">
                    <div class="w-[1024px] bg-gray-400 flex flex-wrap text-black">
                        @for($i = 1; $i <= $seat->studio->capacity; $i++)
                            @if(in_array($i, $occupied))
                                <button type="button" class="seat toggle p-1 w-14 m-2 bg-white rounded-lg" id="{{$i}}">{{ $i }}</button>
                            @else
                                <button type="button" class="seat toggle p-1 w-14 m-2 bg-[#34c218] rounded-lg" id="{{$i}}">{{ $i }}</button>
                            @endif
                        @endfor
                    </div>
                </div>
                <div class="hidden w-full py-4  border-t mt-2" id="detail-order">
                    <p class="text-xl font-bold">Detail Order</p>
                    <div class="w-full flex justify-between">
                        <div>
                            <p class="text-center">Jumlah Order</p>
                            <p id="seat-total"></p>
                        </div>
                        <div>
                            <p class="text-center">Nomer Kursi</p>
                            <p id="seat-number"></p>
                        </div>
                        <div>
                            <p class="text-2xl">Sub Total</p>
                            <p class="text-2xl font-bold" id="sub-total"></p>
                        </div>
                    </div>
                </div>
                <form action="{{ URL::to("/seat-selection/process") }}" method="POST">
                    <input type="hidden" id="id" value="{{ $seat->id }}" name="id">
                    <input type="hidden" id="get-price" value="{{$seat->price}}">
                    <input type="hidden" id="set-price" name="sub">
                    <input type="hidden" id="seat-chose" name="seat">
                    <div class="w-full flex justify-center mt-2">
                        <button type="submit" class="transition ease-in-out delay-150 p-2 rounded-lg uppercase text-center bg-[#CCB443] font-bold shadow-lg mt-1 hover:-translate-y-0.5 hover:scale-105 hover:bg-[#FFC107]  duration-300 px-4 text-xl font-bold">
                            Order Now
                        </button>
                    </div>
                </form>
            </div>
        </div>
        @include('includes.footer')
    </div>

    @include('includes.js')
</body>
</html>
