<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>Tambah Studio</title>
    @include('includes.css')
    @include('includes.js')
</head>
<body>
        <div class="flex flex-col min-h-screen bg-[url('/img/background.png')] bg-repeat">
            @include('includes.navbar')
            <div class=" w-full flex justfy-center p-8">
                <div class="w-full p-8 rounded bg-[#595959] text-white">
                    <h1  class=" text-center  text-[#CCB443] text-xl drop-shadow-xl font-extrabold uppercase ">Tambah Studio Baru</h1>
                    <form action="{{ URL::to('/add-new-studio/process') }}" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="font-bold">Theater</label>
                            <select class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" name="theaterId">
                                <option value="" selected>--Pilih Theater--</option>
                                @foreach($theaters as $theater)
                                    <option value="{{ $theater->id }}">{{$theater->name}} - ({{$theater->city->name}})</option>
                                @endforeach
                            </select>
                            @error('theater')
                            <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="font-bold">Nama Studio</label>
                            <input type="text" class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" name="name" placeholder="Nama Studio">
                            @error('name')
                            <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="font-bold">Kapasitas</label>
                            <input type="text" class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" name="capacity" placeholder="Kapasitas Studio">
                            @error('capacity')
                            <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <button class=" shadow-black drop-shadow-xl transition ease-in-out delay-150 w-full p-2 rounded-md uppercase text-center bg-[#CCB443] font-bold shadow-lg my-3 hover:-translate-y-0.5 hover:scale-105 hover:bg-[#FFC107] cli duration-300  text-black font-bold shadow-black drop-shadow-xl" type="submit">Tambah Studio Baru</button>
                    </form>
                    </div>
            </div>
        </div>
        @include('includes.footer')
    </div>

    @include('includes.js')
</body>
</html>


