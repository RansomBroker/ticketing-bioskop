<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>List Kota </title>
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
                    <a href="{{ URL::to('/add-new-city') }}" class="py-2 px-4 text-black bg-[#CCB443] rounded hover:bg-[#FFC107]">Tambah Kota Baru</a>
                </div>
                <table class="uppercase w-full mt-4" id="myTableCity">
                    <thead class="text-[#CCB443] font-extrabold">
                        <tr>
                            <th scope="col" class="py-3 px-6 dt-head-center">Kota</th>
                            <th scope="col" class="py-3 px-6 dt-head-center">Aksi</th>
                        </tr>
                    </thead>
                        <tbody>
                        @foreach($cities as $city)
                            <tr>
                                <td>{{ $city->name }}</td>
                                <td class="flex flex-col md:flex-row gap-x-3 justify-center">
                                    <a class="py-2 px-4 bg-green-400 rounded hover:bg-green-500" href="{{ URL::to('/edit-city/'.$city->id) }}">Edit</a>
                                    <a class="py-2 px-4 bg-red-400 rounded hover:bg-red-500" href="{{ URl::to('/delete-city/'.$city->id) }}">Hapus</a>
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
