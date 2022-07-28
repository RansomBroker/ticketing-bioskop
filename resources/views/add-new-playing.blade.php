<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>Tambah Daftar Putar</title>
    @include('includes.css')
    @include('includes.js')
</head>
<body>
        <div class="flex flex-col min-h-screen bg-[url('/img/background.png')] bg-repeat">
            @include('includes.navbar')
            <div class=" w-full flex justfy-center p-8">
                <div class="w-full p-8 rounded bg-[#595959] text-white">
                    <h1  class=" text-center  text-[#CCB443] text-xl drop-shadow-xl font-extrabold uppercase ">Tambah Putar Film Baru</h1>
                    @if(session('status'))
                        <p class="p-2 bg-opacity-90  bg-red-400 text-white rounded drop-shadow font-medium text-sm mb-3 ">
                            {{ session('status') }}
                        </p>
                    @endif
                    <form action="{{ URL::to('/add-new-playing/process') }}" method="POST">
                        <div class="mb-3">
                            <label class="font-bold">Film</label>
                            <select class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" name="film">
                                <option value="" selected>--Pilih Film--</option>
                                @foreach($films as $film)
                                    <option value="{{ $film->id }}">{{ $film->title }} </option>
                                @endforeach
                            </select>
                            @error('film')
                            <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3" id="theater-container">
                            <label class="font-bold">Theater</label>
                            <select class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" name="theater" id="theater-select">
                                <option value="" selected>--Pilih Theater--</option>
                                @foreach($theaters as $theater)
                                    <option value="{{ $theater->id }}">{{ $theater->name }} - ({{$theater->city->name}})</option>
                                @endforeach
                            </select>
                            @error('theater')
                            <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="hidden mb-3" id="studio-container">
                            <label class="font-bold">Studio</label>
                            <select class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" name="studio" id="studio-select">
                            </select>
                        </div>
                        <div class="mb-3 flex justify-start gap-3">
                            <div>
                                <label class="font-bold">Tanggal Tayang</label>
                                <input type="date" class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" name="date">
                                @error('date')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="font-bold">Jam Tayang</label>
                                <input type="input" class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" name="time" id="time" placeholder="select time">
                                @error('time')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="font-bold">Durasi Film</label>
                                <input type="text" class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" name="duration" placeholder="Ex: 180 (durasi dalam menit)">
                                @error('duration')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="font-bold">Harga</label>
                            <input type="text" class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" name="price" placeholder="Ex: 1000000 (Dalam Bentuk Rupiah tanpa tanda pisah)">
                            @error('price')
                            <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <button class="hidden shadow-black drop-shadow-xl transition ease-in-out delay-150 w-full p-2 rounded-md uppercase text-center bg-[#CCB443] font-bold shadow-lg my-3 hover:-translate-y-0.5 hover:scale-105 hover:bg-[#FFC107] cli duration-300  text-black font-bold shadow-black drop-shadow-xl" type="submit" id="add-new-playing-btn">Tambah Daftar Putar Film Baru</button>
                    </form>
                    </div>
            </div>
        </div>
        @include('includes.footer')
    </div>

    @include('includes.js')
    <script>
        $('#time').timepicker({
            timeFormat: 'HH:mm:ss ',
            interval: 10,
            minTime: '9',
            maxTime: '21:59pm',
            defaultTime: '06:00',
            startTime: '00:00',
            dynamic: false,
            dropdown: true,
            scrollbar: true
        });
    </script>
</body>
</html>


