<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>Edit Theater</title>
    @include('includes.css')
    @include('includes.js')
</head>
<body>
        <div class="flex flex-col min-h-screen bg-[url('/img/background.png')] bg-repeat">
            @include('includes.navbar')
            <div class=" w-full flex justfy-center p-8">
                <div class="w-full p-8 rounded bg-[#595959] text-white">
                    <h1  class=" text-center  text-[#CCB443] text-xl drop-shadow-xl font-extrabold uppercase ">Edit Theater </h1>
                    <form action="{{ URL::to('/edit-theater/process') }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{{$theater->id}}">
                        <div class="mb-3">
                            <label class="font-bold">Nama Theater</label>
                            <input type="text" class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" name="name" placeholder="Nama Theater" value="{{ $theater->name }}">
                        </div>
                        <div class="mb-3">
                            <label class="font-bold">Kota</label>
                            <select class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" name="city">
                                <option value="{{ $theater->city->id }}">{{$theater->city->name}}</option>
                                @foreach($cities as $city)
                                    @if($city->id != $theater->city->id)
                                        <option value="{{ $city->id }}">{{$city->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <a class=" shadow-black drop-shadow-xl transition ease-in-out delay-150 w-full p-2 rounded-md uppercase text-center bg-red-500 font-bold shadow-lg my-3 hover:-translate-y-0.5 hover:scale-105 hover:bg-red-600 cli duration-300  text-black font-bold shadow-black drop-shadow-xl" type="submit" href="{{URL::to('theater-list')}}">Cancel Edit</a>
                        <button class=" shadow-black drop-shadow-xl transition ease-in-out delay-150 w-full p-2 rounded-md uppercase text-center bg-[#CCB443] font-bold shadow-lg my-3 hover:-translate-y-0.5 hover:scale-105 hover:bg-[#FFC107] cli duration-300  text-black font-bold shadow-black drop-shadow-xl" type="submit">Edit Theater</button>
                    </form>
                    </div>
            </div>
        </div>
        @include('includes.footer')
    </div>

    @include('includes.js')
</body>
</html>


