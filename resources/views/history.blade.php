<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>Buying History</title>
    @include('includes.css')
    @include('includes.js')
</head>
<body>
<div class="flex flex-col min-h-screen bg-[url('/img/background.png')] bg-repeat">
    @include('includes.navbar')
        <div class="w-full flex justify-center md:p-8">
            <div class="w-full rounded bg-[#595959] bg-opacity-70 p-3">
                <p class="text-white font-bold text-2xl uppercase text-center">Riwayat Pembelian Tiket</p>
                <p class="text-red-600">*Silahkan Scan Barcode untuk tiket</p>
                @foreach($histories as $history)
                    <div class="border-t border-white w-full flex justify-between p-4">
                        <div class="text-white">
                            <p class="uppercase font-bold">{{ $history->playing->theater->name }}</p>
                            <p class="font-bold">{{ $history->playing->film->title }}</p>
                            <p>{{ $history->playing->studio->name }}</p>
                            <p><span class="iconify-inline inline" data-icon="akar-icons:calendar"></span> {{ $history->playing->date }}</p>
                            <p><span class="iconify-inline inline" data-icon="el:time"></span> {{ $history->playing->start_time }}</p>
                            <p><span class="iconify-inline inline" data-icon="ic:baseline-event-seat"></span> {{ $history->seat }}</p>
                        </div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/1200px-QR_code_for_mobile_English_Wikipedia.svg.png" width="128" class="bg-white">
                    </div>
                @endforeach
            </div>
        </div>
    @include('includes.footer')
</div>

@include('includes.js')
</body>
</html>
