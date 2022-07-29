<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>List Film Playing </title>
    @include('includes.css')
    @include('includes.js')
</head>
<body>
    <div class="flex flex-col min-h-screen bg-[url('/img/background.png')] bg-repeat">
        @include('includes.navbar')
        <div class="w-full flex justify-center p-8">
            <div class="  overflow-x-auto relative shadow-md sm:rounded-lg text-center w-full p-8 rounded bg-[#595959] text-white drop-shadow-xl shadow-white">
                <h1  class="text-[#CCB443] text-xl font-extrabold uppercase ">List Film PLaying di Database</h1>
                <div class="full-w flex justify-start my-2">
                    <a href="{{ URL::to('/add-new-playing') }}" class="py-2 px-4 text-black bg-[#CCB443] rounded hover:bg-[#FFC107]">Tambah Putar Film Baru</a>
                </div>
                <table class="uppercase w-full mt-4" id="myTablePlaying">
                    <thead class="text-[#CCB443] font-extrabold">
                        <tr>
                            <th scope="col" class="py-3 px-6 dt-head-center">Poster FIlm</th>
                            <th scope="col" class="py-3 px-6 dt-head-center">Judul Film</th>
                            <th scope="col" class="py-3 px-6 dt-head-center">Durasi</th>
                            <th scope="col" class="py-3 px-6 dt-head-center">Harga</th>
                            <th scope="col" class="py-3 px-6 dt-head-center">Genre</th>
                            <th scope="col" class="py-3 px-6 dt-head-center">Rating Usia</th>
                            <th scope="col" class="py-3 px-6 dt-head-center">Tayang</th>
                            <th scope="col" class="py-3 px-6 dt-head-center">Theater</th>
                            <th scope="col" class="py-3 px-6 dt-head-center">Studio</th>
                            <th scope="col" class="py-3 px-6 dt-head-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($playings as $playing)
                            <tr>
                                <td class="py-4 px-6 flex justify-center">
                                    <img src="{{ asset('/img/'.$playing->film->img) }}" class="w-20">
                                </td>
                                <td>{{ $playing->film->title }}</td>
                                <td>{{ $playing->duration }}</td>
                                <td>Rp.{{ number_format($playing->price, 0, '.', '.') }}</td>
                                <td>{{ $playing->film->genre }}</td>
                                @if($playing->film->rating == 1)
                                    <td><p class="py-1 px-2 bg-green-500 rounded-md text-xs font-semibold">SU</p></td>
                                @endif
                                @if($playing->film->rating == 2)
                                    <td><p class="py-1 px-2 bg-blue-500 rounded-md text-xs font-semibold">R+13</p></td>
                                @endif
                                @if($playing->film->rating == 3)
                                    <td>
                                        <p class="py-1 px-2 bg-red-500 rounded-md text-xs font-semibold">R+18</p>
                                    </td>
                                @endif
                                <td>{{ $playing->theater->name }} - ({{$playing->theater->city->name}})</td>
                                <td>{{ $playing->studio->name }}</td>
                                <td>{{ $playing->start_time }}</td>
                                <td>
                                    <div class="flex flex-col gap-x-3 align-middle justify-center md:flex-row ">
                                        <a class="py-2 px-4 bg-red-400 rounded hover:bg-red-500" href="{{ URL::to('/delete-playing/'.$playing->id) }}">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </table>
            </div>
        </div>
        @include('includes.footer')
    </div>

    @include('includes.js')
</body>
</html>
