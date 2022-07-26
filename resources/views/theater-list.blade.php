<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>List Theater </title>
    @include('includes.css')
    @include('includes.js')
</head>
<body>
    <div class="flex flex-col min-h-screen bg-[url('/img/background.png')] bg-repeat">
        @include('includes.navbar')
        <div class="w-full flex justify-center p-8">
            <div class="  overflow-x-auto relative shadow-md sm:rounded-lg text-center w-full p-8 rounded bg-[#595959] text-white drop-shadow-xl shadow-white">
                <h1  class="text-[#CCB443] text-xl font-extrabold uppercase ">List Theater di Database</h1>
                <div class="full-w flex justify-start my-2">
                    <a href="{{ URL::to('/add-new-theater') }}" class="py-2 px-4 text-black bg-[#CCB443] rounded hover:bg-[#FFC107]">Tambah Theater Baru</a>
                </div>
                <table class="uppercase w-full mt-4" id="myTableTheater">
                    <thead class="text-[#CCB443] font-extrabold">
                        <tr>
                            <th scope="col" class="py-3 px-6 dt-head-center">Theater</th>
                            <th scope="col" class="py-3 px-6 dt-head-center">Kota</th>
                            <th scope="col" class="py-3 px-6 dt-head-center">Aksi</th>
                        </tr>
                    </thead>
                        <tbody>
                            @foreach($theaters as $theater)
                                <tr>
                                    <td>{{$theater->name}}</td>
                                    <td>{{ $theater->city->name }}</td>
                                    <td class="flex justify-center items-center flex-col md:flex-row gap-x-3">
                                        <a class="py-2 px-4 bg-green-400 rounded hover:bg-green-500" href="{{  URL::to('/edit-theater/'.$theater->id)}}">Edit</a>
                                        <a class="py-2 px-4 bg-red-400 rounded hover:bg-red-500" href="{{URL::to('/theater-remove/'.$theater->id)}}">Hapus</a>
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
