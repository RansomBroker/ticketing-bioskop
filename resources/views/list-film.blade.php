<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>List Film </title>
    @include('includes.css')
    @include('includes.js')
</head>
<body>
    <div class="flex flex-col min-h-screen bg-[url('/img/background.png')] bg-repeat">
        @include('includes.navbar')
        <div class="w-full flex justify-center p-8">
            <div class="  overflow-x-auto relative shadow-md sm:rounded-lg text-center w-full p-8 rounded bg-[#595959] text-white drop-shadow-xl shadow-white">
                <h1  class="text-[#CCB443] text-xl font-extrabold uppercase ">List Film di Database</h1>
                <div class="full-w flex justify-start my-2">
                    <a href="{{ URL::to('/add-new-film') }}" class="py-2 px-4 text-black bg-[#CCB443] rounded hover:bg-[#FFC107]">Tambah FIlm Baru</a>
                </div>
                <table class="uppercase w-full mt-4" id="myTable">
                    <thead class="text-[#CCB443] font-extrabold">
                        <tr>
                        <th scope="col" class="py-3 px-6 dt-head-center">Poster FIlm</th>
                        <th scope="col" class="py-3 px-6 dt-head-center">Judul Film</th>
                        <th scope="col" class="py-3 px-6 dt-head-center">Genre</th>
                        <th scope="col" class="py-3 px-6 dt-head-center">Rating Usia</th>
                        <th scope="col" class="py-3 px-6 dt-head-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($films as $film)
                            <tr>
                                <td class="py-4 px-6">
                                    <img src="{{ asset('/img/'.$film->img) }}" class="w-20 text-center">
                                </td>
                                <td>{{$film->title}}</td>
                                <td>{{ $film->genre  }}</td>
                                @if($film->rating == 1)
                                    <td><span class="py-1 px-2 bg-green-500 rounded-md text-xs font-semibold">SU</span></td>
                                @endif
                                @if($film->rating == 2)
                                    <td><span class="py-1 px-2 bg-blue-500 rounded-md text-xs font-semibold">R+13</span></td>
                                @endif
                                @if($film->rating == 3)
                                    <td>
                                        <span class="py-1 px-2 bg-red-500 rounded-md text-xs font-semibold">R+18</span>
                                    </td>
                                @endif
                                <td class="flex flex-col md:flex-row gap-x-3 align-middle justify-center">
                                    <a class="py-2 px-4 bg-emerald-600 rounded hover:bg-emerald-700" href="{{URL::to('premier-film/'.$film->id)}}">Premier</a>
                                    <a class="py-2 px-4 bg-[#CCB443] rounded hover:bg-[#ffc107]" href="{{URL::to('edit-film/'.$film->id)}}">Edit</a>
                                    <a class="py-2 px-4 bg-red-400 rounded hover:bg-red-500" href="{{ URL::to('/delete-film/'.$film->id) }}">Hapus</a>
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
