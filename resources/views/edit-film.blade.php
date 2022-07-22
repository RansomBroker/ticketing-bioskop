<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>Tambah film</title>
    @include('includes.css')
    @include('includes.js')
</head>
<body>
<div class="flex flex-col min-h-screen bg-[url('/img/background.png')] bg-repeat">
    @include('includes.navbar')
    <div class=" w-full flex justfy-center p-8">
        <div class="w-full p-8 rounded bg-[#595959] text-white">
            <h1  class=" text-center  text-[#CCB443] text-xl drop-shadow-xl font-extrabold uppercase ">Edit film</h1>
            <form action="{{ URL::to('edit-film/process') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{$film->id}}">
                <div class="mb-3">
                    <label class="font-bold">Judul Film</label>
                    <input type="text" class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" id="Judul Film" name="title" placeholder="Judul Film " value="{{$film->title}}">
                </div>
                <div class="mb-3">
                    <label class="font-bold">Sinposis Film</label>
                    <textarea class=" text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" id="Sinopsis" name="synopsis" placeholder="Sinopsis ">{{$film->synopsis}}</textarea>
                </div>
                <div class="mb-3">
                    <label class="font-bold">Genre</label>
                    <select class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" name="genre" id="">
                        <option  value="Horor">Horor</option>
                        <option value="Thiler">Thiler</option>
                        <option value="Comedy">Comedy</option>
                        <option value="Action">Action</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="font-bold">Produser</label>
                    <input type="text" class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" id="Producer" name="producer" placeholder="Producer" value="{{$film->producer}}">
                </div>
                <div class="mb-3">
                    <label class="font-bold">Production</label>
                    <input type="text" class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" id="Production" name="production" placeholder="Production" value="{{$film->production}}">
                </div>
                <div class="mb-3">
                    <label class="font-bold">Cast</label>
                    <input type="text" class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" id="Production" name="cast" placeholder="Cast " value="{{ $film->cast }}">
                </div>
                <div class="mb-3">
                    <label class="font-bold">Rating Usia</label>
                    <select class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" name="rating" id="">
                        <option value="1">SU</option>
                        <option value="2">R+13</option>
                        <option value="3">D+18</option>
                    </select>
                </div>
                <div class="mb-3">
                    <p class="font-bold">Cover Film</p>
                    <label class="block">
                        <input type="file" class="block w-full text-sm text-white file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-[#CCB443] file:text-black hover:file:bg-[#FFC107]" name="cover"/>
                    </label>
                </div>
                {{--  <div class="mb-3">
                    <p class="mb-0 font-bold">Tanggal Penayangan</p>
                    <label class="font-bold">Dari</label>
                    <input type="date" class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2">
                    <label class="font-bold">Sampai</label>
                    <input type="date" class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2">
                </div>
                <p class="mb-3 fw-bold">Kota,Theater dan Studio</p>
                <div class="mb-3">
                    <select class="form-select">
                        <option selected>Pilih Kota</option>
                        <option class="1">Pontianak</option>
                        <option class="2">Singkawang</option>
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select">
                        <option selected>Pilih Theater</option>
                        <option class="1">Ayani</option>
                        <option class="2">Transmart</option>
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select">
                        <option selected>Pilih Studio</option>
                        <option class="1">Studio 1</option>
                        <option class="2">Studio 2</option>
                    </select>
                </div> --}}
                <a class=" shadow-black drop-shadow-xl transition ease-in-out delay-150 w-full p-2 rounded-md uppercase text-center bg-red-500 font-bold shadow-lg my-3 hover:-translate-y-0.5 hover:scale-105 hover:bg-red-600 cli duration-300  text-black font-bold shadow-black drop-shadow-xl" type="submit" href="{{URL::to('list-film')}}">Cancel Edit</a>
                <button class=" shadow-black drop-shadow-xl transition ease-in-out delay-150 w-full p-2 rounded-md uppercase text-center bg-[#CCB443] font-bold shadow-lg my-3 hover:-translate-y-0.5 hover:scale-105 hover:bg-[#FFC107] cli duration-300  text-black font-bold shadow-black drop-shadow-xl" type="submit">Edit Film Baru</button>
            </form>
        </div>
    </div>
</div>
@include('includes.footer')
</div>

@include('includes.js')
</body>
</html>


