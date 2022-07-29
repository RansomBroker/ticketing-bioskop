<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>Payment</title>
    @include('includes.css')
    @include('includes.js')
</head>
<body>
    <div class="flex flex-col min-h-screen bg-[url('/img/background.png')] bg-repeat">
        @include('includes.navbar')
        <div class="w-full flex justify-center md:p-8">
            <div class="w-full md:mx-24 p-8 rounded bg-[#595959] bg-opacity-70 text-white drop-shadow-xl shadow-white">
                <div class="grid grid-cols-1  justify-center md:grid-cols-5 ">
                    <img class="" src="{{ asset('img/'.$playing->film->img) }}" alt="">
                    <div class="md:col-span-2 md:px-6">
                        <h1 class="uppercase text-xl font-bold ">
                            {{ $playing->film->title }}
                        </h1>
                        <p class="align-middle py-3"><span class="iconify-inline inline" data-icon="bxs:time" style="color: #ccb443;" data-width="24"></span>{{ $playing->duration }} Menit</p>
                        @if($playing->film->rating == 1)
                            <span class="py-1 px-3 bg-green-500 rounded-md text-xs font-semibold ">SU</span>
                        @endif
                        @if($playing->film->rating == 2)
                            <span class="py-1 px-2 bg-blue-500 rounded-md text-xs font-semibold ">R+13</span>
                        @endif
                        @if($playing->film->rating == 3)
                            <span class="py-1 px-2 bg-red-500 rounded-md text-xs font-semibold">R+18</span>
                        @endif
                        <p class="uppercase mt-1 py-2 font-semibold" >{{ $playing->theater->name}}, {{ $playing->studio->name }}</p>
                        <p class="py-1">{{ $playing->date }}, {{$playing->start_time}}</p>
                    </div>
                    <div class="text-black px-2 md:col-span-2  bg-[#d3b946] rounded-lg uppercase">
                        <h5 class="font-medium opacity-90 border-b-2 py-2 my-2">nomor order: <span>{{ $orderId }}</span> </h5>
                        <h5 class="font-semibold normal-case">Details Transaksi</h5>
                        <div class="w-full mt-2 mb-6  grid grid-cols-2 ">
                            <div class="opacity-70 font-semibold item-center ">{{$ticket}} Tiket</div>
                            <div class="flex flex-wrap flex-row text-white">
                                @for($i = 0; $i < $ticket ; $i++)
                                    <div class="bg-[#34c218] mx-1 my-1 px-1 py-0 rounded">{{ $ticketItems[$i] }}</div>
                                @endfor
                            </div>
                        </div>
                        <div class="w-full mt-2 mb-6 font-semibold flex justify-between">
                            <div class="opacity-80  ">kursi reguler</div>
                            <div class="mr-1 normal-case ">Rp.{{ number_format($playing->price, 0, '.', '.') }} <span class="opacity-80">x {{ $ticket }}</span></div>
                        </div>
                        <div class="w-full mt-2 mb-6 font-semibold flex justify-between">
                            <div class="opacity-80  ">Total</div>
                            <div class="mr-1 normal-case ">Rp.{{ number_format(Cookie::get('subTotal'), 0, '.', '.') }}</div>
                        </div>
                        <a href="{{ URL::to('/create-order') }}" class="shadow-[#CCB443]  transition ease-in-out delay-150 w-full p-2 rounded-md uppercase text-center bg-[#151515]  shadow-lg my-3 hover:-translate-y-0.5 hover:scale-105 hover:bg-[#181717] cli duration-300  text-[#CCB443] font-bold drop-shadow-xl" type="submit">Bayar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        @include('includes.footer')
    </div>

    @include('includes.js')
</body>
</html>
