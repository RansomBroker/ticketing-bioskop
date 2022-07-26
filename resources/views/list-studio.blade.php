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
                <h1  class="text-[#CCB443] text-xl font-extrabold uppercase ">List Studio di Database</h1>
                <div class="full-w flex justify-start my-2">
                    <a href="{{ URL::to('/add-new-studio') }}" class="py-2 px-4 text-black bg-[#CCB443] rounded hover:bg-[#FFC107]">Tambah Studio Baru</a>
                </div>
                <table class="uppercase w-full mt-4" id="myTableStudio">
                    <thead class="text-[#CCB443] font-extrabold">
                        <tr>
                            <th scope="col" class="py-3 px-6 dt-head-center">Studio</th>
                            <th scope="col" class="py-3 px-6 dt-head-center">Theater</th>
                            <th scope="col" class="py-3 px-6 dt-head-center">Kota</th>
                            <th scope="col" class="py-3 px-6 dt-head-center">Kapasitas</th>
                            <th scope="col" class="py-3 px-6 dt-head-center">Aksi</th>
                        </tr>
                    </thead>
                        <tbody>
                            @foreach($studios as $studio)
                                <tr>
                                    <td>{{$studio->name}}</td>
                                    <td>{{ $studio->theater->name }}</td>
                                    <td>{{$studio->theater->city->name}}</td>
                                    <td>{{$studio->capacity}}</td>
                                    <td>
                                        <a class="py-2 px-4 bg-green-400 rounded hover:bg-green-500" href="{{  URL::to('/edit-studio/'.$studio->id)}}">Edit</a>
                                        <a class="py-2 px-4 bg-red-400 rounded hover:bg-red-500" href="{{URL::to('/theater-studio/'.$studio->id)}}">Hapus</a>
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
